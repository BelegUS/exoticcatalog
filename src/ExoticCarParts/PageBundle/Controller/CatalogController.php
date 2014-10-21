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
        
        $relativeImagePath = $parts[0]->getPartsGroup()->getImagePath();
        $partsGroupAssetImagePath = 'assets/images/catalog/' . $relativeImagePath;
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates();        

        return $this->render('PageBundle:Pages/Catalog:partSelect.html.twig', array(
            'parts' => $parts,
            'partsGroupImage' => $partsGroupAssetImagePath,
            'exchangeRates' => $exchangeRates
        ));
    }

    public function myCartAction() {
        
        $cart = $this->get('cart')->getPartsFromCart();
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates(); 
        
    $form = $this->createFormBuilder()
        ->add('name', 'text')
        ->add('email', 'email')
        ->add('phone', 'number')    
        ->add('message', 'textarea')
        ->add('send', 'submit')
        ->getForm();

    $form->handleRequest($this->getRequest());

    if ($form->isValid()) {
        // data is an array with "name", "email", and "message" keys
        $data = $form->getData();
    }        
        
        return $this->render('PageBundle:Layout:my_cart.html.twig', array('cart' => $cart, 'exchangeRates' => $exchangeRates, 'form' => $form->createView()));
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
    
    public function ajaxRemovePartFromCartAction($partId)
    {
        $success = $this->get('cart')->removeFromCart($partId); 

        if($success) {
            return new JsonResponse(array('success' => true));
        } else {
            return new JsonResponse(array('success' => false));
        }
    }    

}
