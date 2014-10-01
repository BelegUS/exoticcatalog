<?php

namespace ExoticCarParts\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Helper\AssetsHelper;
use Symfony\Component\Templating\Asset\PathPackage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use ExoticCarParts\CrawlerBundle\Entity\Brand;
use ExoticCarParts\CrawlerBundle\Entity\Model;
use ExoticCarParts\CrawlerBundle\Entity\PartsGroup;
use ExoticCarParts\CrawlerBundle\Entity\Part;

class CatalogController extends Controller {

    public function brandSelectAction()
    {

        $em = $this->getDoctrine()->getManager();

        $brands = $em->getRepository('CrawlerBundle:Brand')->findAll();

        return $this->render('PageBundle:Pages/Catalog:brandSelect.html.twig', array(
                    'brands' => $brands
        ));
    }

    public function modelSelectAction($brandId)
    {

        $em = $this->getDoctrine()->getManager();

        $models = $em->getRepository('CrawlerBundle:Model')->findByBrand($brandId, ['name' => 'ASC']);

        $sortedModels = array_chunk($models, 4);

        return $this->render('PageBundle:Pages/Catalog:modelSelect.html.twig', array(
                    'models' => $sortedModels
        ));
    }

    public function partsGroupSelectAction($modelId)
    {

        $em = $this->getDoctrine()->getManager();

        $partsGroups = $em->getRepository('CrawlerBundle:PartsGroup')->findByModel($modelId);

        return $this->render('PageBundle:Pages/Catalog:partsGroupSelect.html.twig', array(
                    'partsGroups' => $partsGroups
        ));
    }

    public function partSelectAction($partsGroupId)
    {
        $em = $this->getDoctrine()->getManager();

        $exchangeRates = array();
        $currencyXml = simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
        foreach ($currencyXml->Cube->Cube->Cube as $rate) {
            if ($rate["currency"] == 'USD') {
                $exchangeRates['euro'] = (1 / floatval($rate["rate"]));
            } else if ($rate["currency"] == 'PLN') {
                $exchangeRates['zloty'] = $rate["rate"];
            }
        }

        $parts = $em->getRepository('CrawlerBundle:Part')->findByPartsGroup($partsGroupId);
        foreach ($parts as $part) {
            if (floatval($part->getPrice()) != 0) {
                $part->setPrice($this->calculatePrice($part->getPrice(), $exchangeRates));
            }
        }

        $partsGroupRelativeImagePath = $em->getRepository('CrawlerBundle:PartsGroup')->findOneById($partsGroupId)->getImagePath();

        $partsGroupAssetImagePath = 'assets/images/catalog/' . $partsGroupRelativeImagePath;

        return $this->render('PageBundle:Pages/Catalog:partSelect.html.twig', array(
                    'parts' => $parts, 'partsGroupImage' => $partsGroupAssetImagePath
        ));
    }

    private function calculatePrice($partPriceInUSD, $exchangeRates)
    {
        $partPriceInEuro = $exchangeRates['euro'] * $partPriceInUSD;
        $partPriceInZloty = $exchangeRates['zloty'] * $partPriceInEuro;
        return round($partPriceInEuro, 2) . '€ / ' . round($partPriceInUSD, 2) . '$ / ' . round($partPriceInZloty, 2) . 'zl';
    }

    
    public function myCartAction() {
        $session = $this->getRequest()->getSession();
        $cart = $session->get('cart', array());
        return $this->render('PageBundle:Layout:my_cart.html.twig', array('cart' => $cart));
    }
    
    public function ajaxAddPartToCartAction($partId)
    {
        $em = $this->getDoctrine()->getManager();

        $part = $em->getRepository('CrawlerBundle:Part')->findOneById($partId);
        if ($part) {
            $session = $this->getRequest()->getSession();

            $cart = $session->get('cart', array());
            
            $cart[] = $part;

            $session->set('cart', $cart);

            return new JsonResponse(array('success' => true));
        } else {
            return new JsonResponse(array('success' => false));
        }
    }

}
