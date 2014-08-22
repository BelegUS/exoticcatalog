<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RicambiaCrawler
 *
 * @author BelegUS
 */

namespace ExoticCarParts\CrawlerBundle\Service;

use Doctrine\ORM\EntityManager;
use Goutte\Client;

use ExoticCarParts\CrawlerBundle\Entity\Brand;
use ExoticCarParts\CrawlerBundle\Entity\Model;
use ExoticCarParts\CrawlerBundle\Entity\PartsGroup;
use ExoticCarParts\CrawlerBundle\Entity\Part;


class RicambiaCrawler {

    protected $client;
    protected $carsLinksList=array();
    
    protected $em;  //Entity Manager

    function __construct(EntityManager $entityManager)
    {
        $this->client = new Client();
        $this->em = $entityManager;
        
    }
    
    public function generateBrands()
    {
        $em = $this->getEm();   //Get Entity Manager
        
        $ferrari = new Brand();
        $ferrari->setName('Ferrari');
        $ferrari->setShortcut('FE');
        $em->persist($ferrari);
        
        $maserati = new Brand();
        $maserati->setName('Maserati');
        $maserati->setShortcut('MA');
        $em->persist($maserati);
        
        $lamborghini = new Brand();
        $lamborghini->setName('Lamborghini');
        $lamborghini->setShortcut('LA');
        $em->persist($lamborghini);
        
        $em->flush();
    }

    public function crawlCarsLinksList($carsListUrl)
    {
        $crawler=$this->getCrawlerInstance($carsListUrl);
        if ($crawler!==null) {
            $data=array();
            $crawler->filterXPath("//table[@id='catalogTable']//a[@href]")->each(function($node, $i) use(&$data) {
                        $link = $node->link()->getUri();
                        if(preg_match('/^.*(parts_catalogs.php?).*$/',$link))  //Get rid of unwanted links
                        {
                            $data[$i] = $link;
                        }
                    });
            $this->carsLinksList=$data;        
        } 
    }
    
    public function crawlModel($carUrl)
    {
        $em = $this->getEm();   //Get Entity Manager
        
        $crawler=$this->getCrawlerInstance($carUrl);
        if ($crawler!==null) {
            //We create new Model
            $model = new Model();
            
            //First we load Brand to set it - we get Shortcut from URL
            $brandShortcutTemp=array(); //Temp for Shortcut
            preg_match('/(M=..)/',$carUrl,$brandShortcutTemp); //We cut out everything but M=shortcut 
            $brandShortcut=substr($brandShortcutTemp[1],2); //We cut out M=, and leave only brand shortcut
            $brand = $em->getRepository('CrawlerBundle:Brand')->findOneByShortcut($brandShortcut);
            
            //Now we set Brand for our Model
            $model->setBrand($brand);
            
            //Then we crawl and set Name for our Model
            $modelName=$crawler->filterXPath("//td[@class='Head1']//div")->text();
            $model->setName($modelName);
            
            $em->persist($model);
            $em->flush();
            
            //Now we crawl all PartsGroups for this Model
            $data=array();
            $crawler->filterXPath("//td[@class='infoBoxContents']//a[@href]")->each(function($node, $i) use(&$data) {
                        $link = $node->link()->getUri();
                        if(preg_match('/^.*(parts_catalogs.php?).*$/',$link))  //Get rid of unwanted links
                        {
                            $data[$i] = $link;
                        }
                    });
            return $data;        
        } 
       else{
           return null;
       }
       
    }
    
    /**
     * Method to invoke new Crawler connected to url.
     * Returns Crawler instance if succes, NULL if fail.
     */
    private function getCrawlerInstance($url)
    {
        $crawler = $this->client->request('GET', $url);
        $status_code = $this->client->getResponse()->getStatus(); 
        if ($status_code == 200) {
            return $crawler;
        } else{
            return null;
        }
    }

    public function getCarsLinksList()
    {
        return $this->carsLinksList;
    }

    public function getEm()
    {
        return $this->em;
    }    

}

?>
