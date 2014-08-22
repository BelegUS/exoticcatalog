<?php

namespace ExoticCarParts\CrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Goutte\Client;


class DefaultController extends Controller {

    public function indexAction() {

    $url_to_traverse = 'http://www.ricambiamerica.com/parts_catalogs.php';

    $crawler = $this->get('ricambia_crawler');
    
    //$crawler->generateBrands();
    
    $crawler->crawlCarsLinksList($url_to_traverse);
    
    $carLinkList=$crawler->getCarsLinksList();
    
    $carPartsGroupList=$crawler->crawlModel($carLinkList[1]);
    
    return $this->render('CrawlerBundle:Default:index.html.twig', array('data' => $carPartsGroupList));
    
    }

}
