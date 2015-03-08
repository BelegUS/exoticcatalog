<?php

namespace ExoticCarParts\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\Helper\AssetsHelper;
use Symfony\Component\Templating\Asset\PathPackage;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use ExoticCarParts\ModelsBundle\Entity\Brand;
use ExoticCarParts\ModelsBundle\Entity\Model;
use ExoticCarParts\ModelsBundle\Entity\PartsGroup;
use ExoticCarParts\ModelsBundle\Entity\Part;
use ExoticCarParts\PageBundle\Form\PartSearchForm;

class CatalogController extends Controller {

    public function brandSelectAction()
    {

        $em = $this->getDoctrine()->getManager();

        $brands = $em->getRepository('ModelsBundle:Brand')->findAll();

        $searchPartForm = $this->createForm(new PartSearchForm(), null, array(
            'action' => $this->generateUrl('catalog_part_search')));

        return $this->render('PageBundle:Pages/Catalog:brandSelect.html.twig', array(
                    'brands' => $brands, 'searchPartForm' => $searchPartForm->createView()
        ));
    }

    public function modelSelectAction($brandId)
    {

        $em = $this->getDoctrine()->getManager();

        $models = $em->getRepository('ModelsBundle:Model')->findByBrand($brandId, ['name' => 'ASC']);

        //$sortedModels = array_chunk($models, 4);

        return $this->render('PageBundle:Pages/Catalog:modelSelect.html.twig', array(
                    'models' => $models
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

    public function partSelectAction($partsGroupId, $highlightedPartNumber = null)
    {
        $em = $this->getDoctrine()->getManager();

        $parts = $em->getRepository('ModelsBundle:Part')->findByPartsGroup($partsGroupId);
        
        $relativeImagePath = $parts[0]->getPartsGroup()->getImagePath();
        $partsGroupAssetImagePath = 'assets/images/catalog/' . $relativeImagePath;
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates();        

        return $this->render('PageBundle:Pages/Catalog:partSelect.html.twig', array(
            'parts' => $parts,
            'partsGroupImage' => $partsGroupAssetImagePath,
            'exchangeRates' => $exchangeRates,
            'highlightedPartNumber' => $highlightedPartNumber
        ));
    }

    public function myCartAction() {
        
        $cart = $this->get('cart')->getPartsFromCart();
        
        $exchangeRates = $this->get('exchange_rates')->getExchangeRates(); 
        
                $form = $this->createFormBuilder()
                ->setAction($this->generateUrl('catalog_cart_send'))
                ->add('name', 'text')
                ->add('email', 'email')
                ->add('phone', 'number')
                ->add('message', 'textarea')
                ->add('send', 'submit')
                ->getForm();

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
    
    public function ajaxCartSendAction(Request $request)
    {
        $params = $request->get('form');

        $cart = $this->get('cart')->getPartsFromCart();
        
        $message = \Swift_Message::newInstance()
                ->setSubject('ECP - new mail from ' . $params['email'])
                ->setFrom('contact@exoticcarparts.de')
                ->setTo('contact@exoticcarparts.de')
                ->setReplyTo($params['email'])
                ->setBody(
                $this->renderView(
                        'PageBundle:Pages:cart_mail.txt.twig', array('params' => $params, 'cart' => $cart)
                )
        );
        $this->get('mailer')->send($message);

        $return = array("responseCode" => 200, "success" => true);

        $return = json_encode($return); //jscon encode the array
        return new Response($return, 200, array('Content-Type' => 'application/json'));        
    }

    public function partSearchAction(Request $request)
    {
        $searchPartForm = $this->createForm(new PartSearchForm());

        if ($request->getMethod() == 'POST') {
            $searchPartForm->handleRequest($request);
            $data = $searchPartForm->getData();

            $em = $this->getDoctrine()->getManager();
            $part = $em->getRepository('ModelsBundle:Part')->findOneByPartNumber($data['partNumber']);
            if(!empty($part)) {
                return $this->redirect($this->generateUrl('catalog_part_select', array('partsGroupId'=>$part->getPartsGroup()->getId(), 'highlightedPartNumber'=>$part->getPartNumber())));
            }
        }
        return $this->render('PageBundle:Pages/Catalog:partSearch.html.twig', array('searchPartForm' => $searchPartForm->createView(), 'notFound'=> true));
    }

}
