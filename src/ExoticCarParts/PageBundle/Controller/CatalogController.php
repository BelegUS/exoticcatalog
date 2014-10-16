<?php

namespace ExoticCarParts\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Helper\AssetsHelper;
use Symfony\Component\Templating\Asset\PathPackage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use ExoticCarParts\ModelsBundle\Entity\Brand;
use ExoticCarParts\ModelsBundle\Entity\Model;
use ExoticCarParts\ModelsBundle\Entity\PartsGroup;
use ExoticCarParts\ModelsBundle\Entity\Part;

class CatalogController extends Controller {

    public function brandSelectAction()
    {

        $em = $this->getDoctrine()->getManager();

        $brands = $em->getRepository('ModelsBundle:Brand')->findAll();

        return $this->render('PageBundle:Pages/Catalog:brandSelect.html.twig', array(
                    'brands' => $brands
        ));
    }

    public function modelSelectAction($brandId)
    {

        $em = $this->getDoctrine()->getManager();

        $models = $em->getRepository('ModelsBundle:Model')->findByBrand($brandId, ['name' => 'ASC']);

        $sortedModels = array_chunk($models, 4);

        return $this->render('PageBundle:Pages/Catalog:modelSelect.html.twig', array(
                    'models' => $sortedModels
        ));
    }

    public function partsGroupSelectAction($modelId)
    {

        $em = $this->getDoctrine()->getManager();

        $partsGroups = $em->getRepository('ModelsBundle:PartsGroup')->findByModel($modelId);

        return $this->render('PageBundle:Pages/Catalog:partsGroupSelect.html.twig', array(
                    'partsGroups' => $partsGroups
        ));
    }

    public function partSelectAction($partsGroupId)
    {
        $em = $this->getDoctrine()->getManager();

        $parts = $em->getRepository('ModelsBundle:Part')->findByPartsGroup($partsGroupId);

        $partsGroupRelativeImagePath = $em->getRepository('ModelsBundle:PartsGroup')->findOneById($partsGroupId)->getImagePath();

        $partsGroupAssetImagePath = 'assets/images/catalog/' . $partsGroupRelativeImagePath;
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates();        

        $cart = $this->get('cart')->getPartsFromCart();
        var_dump($cart[0]);
        exit();
        
        return $this->render('PageBundle:Pages/Catalog:partSelect.html.twig', array(
                    'parts' => $parts, 'partsGroupImage' => $partsGroupAssetImagePath, 'exchangeRates' => $exchangeRates
        ));
    }

    public function myCartAction() {
        
        $cart = $this->get('cart')->getPartsFromCart();
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates(); 
        
        return $this->render('PageBundle:Layout:my_cart.html.twig', array('cart' => $cart, 'exchangeRates' => $exchangeRates));
    }
    
    public function ajaxAddPartToCartAction($partId, $quantity)
    {
        $success = $this->get('cart')->addToCart($partId, $quantity); 

        if($success) {
            return new JsonResponse(array('success' => true));
        } else {
            return new JsonResponse(array('success' => false));
        }
    }

}
