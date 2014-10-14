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

        $parts = $em->getRepository('CrawlerBundle:Part')->findByPartsGroup($partsGroupId);

        $partsGroupRelativeImagePath = $em->getRepository('CrawlerBundle:PartsGroup')->findOneById($partsGroupId)->getImagePath();

        $partsGroupAssetImagePath = 'assets/images/catalog/' . $partsGroupRelativeImagePath;
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates();        

        return $this->render('PageBundle:Pages/Catalog:partSelect.html.twig', array(
                    'parts' => $parts, 'partsGroupImage' => $partsGroupAssetImagePath, 'exchangeRates' => $exchangeRates
        ));
    }

    public function myCartAction() {
        $em = $this->getDoctrine()->getManager();
        
        $session = $this->getRequest()->getSession();
        $partIds = $session->get('cart', array());
        
        $cart = $em->getRepository('CrawlerBundle:Part')->findById($partIds);
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates(); 
        
        return $this->render('PageBundle:Layout:my_cart.html.twig', array('cart' => $cart, 'exchangeRates' => $exchangeRates));
    }
    
    public function ajaxAddPartToCartAction($partId, $quantity)
    {
        $em = $this->getDoctrine()->getManager();

        $part = $em->getRepository('CrawlerBundle:Part')->findOneById($partId);
        if ($part) {
            $session = $this->getRequest()->getSession();

            $cart = $session->get('cart', array());
            
            $cart[] = $part->getId();
            //$cart[]['quantity'] = $quantity;

            $session->set('cart', $cart);
            $session->save();

            return new JsonResponse(array('success' => true));
        } else {
            return new JsonResponse(array('success' => false));
        }
    }

}
