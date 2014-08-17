<?php

namespace ExoticCarParts\CrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Goutte\Client;


class DefaultController extends Controller {

    public function indexAction() {

    $url_to_traverse = 'http://www.ricambiamerica.com/parts_catalogs.php';

    $client = new Client();
    $crawler = $client->request('GET', $url_to_traverse);

    $status_code = $client->getResponse()->getStatus();
    if($status_code==200){
        $data = array();
        $crawler->filterXPath("//table[@id='catalogTable']//a[@href]")->each(function($node, $i) use($data) {
                $data[$i] = $node->text();
        });
    }
    else{
        $data='No Kitten :(';
    }
        return $this->render('CrawlerBundle:Default:index.html.twig', array('data' => $data));
    }

}
