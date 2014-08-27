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
    protected $carsLinksList = array();
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
        $crawler = $this->getCrawlerInstance($carsListUrl);
        if ($crawler !== null) {
            $data = array();
            $crawler->filterXPath("//table[@id='catalogTable']//a[@href]")->each(function($node, $i) use(&$data) {
                        $link = $node->link()->getUri();
                        if (preg_match('/^.*(parts_catalogs.php?).*$/', $link)) {  //Get rid of unwanted links
                            $data[$i] = $link;
                        }
                    });
            $this->carsLinksList = $data;
        }
    }

    public function crawlModel($carUrl)
    {
        $em = $this->getEm();   //Get Entity Manager

        $crawler = $this->getCrawlerInstance($carUrl);
        if ($crawler !== null) {
            //First we load Brand - we get Shortcut from URL
            $brandShortcutTemp = array(); //Temp for Shortcut
            preg_match('/(M=..)/', $carUrl, $brandShortcutTemp); //We cut out everything but M=shortcut. It will be stored in $brandShortcutTemp[1] 
            $brandShortcut = substr($brandShortcutTemp[1], 2); //We cut out M=, and leave only brand shortcut
            $brand = $em->getRepository('CrawlerBundle:Brand')->findOneByShortcut($brandShortcut);

            //Then we crawl and get Name for our Model
            $modelName = $crawler->filterXPath("//td[@class='Head1']//div")->text();

            //If that model isn't in base, we can insert it
            if (!$em->getRepository('CrawlerBundle:Model')->checkIfExistByBrandIdAndModelName($brand->getId(), $modelName)) {
                //Now we can create new Model
                $model = new Model();

                //We set Brand for our Model
                $model->setBrand($brand);

                //We set Name for our Model
                $model->setName($modelName);

                $em->persist($model);
                $em->flush();


                //Now we crawl all links to PartsGroups for this Model
                $partsGroupsLinks = array();
                $crawler->filterXPath("//td[@class='infoBoxContents']//a[@href]")->each(function($node, $i) use(&$partsGroupsLinks) {
                            $link = $node->link()->getUri();
                            if (preg_match('/^.*(parts_catalogs.php?).*$/', $link)) {  //Get rid of unwanted links
                                $partsGroupsLinks[$i] = $link;
                            }
                        });
                //foreach ($partsGroupsLinks as $partsGroupLink) {
                $this->crawlPartsGroup($partsGroupsLinks[1], $model);
                //}
            }
        }
    }

    public function crawlPartsGroup($partsGroupLink, $carModel)
    {
        $em = $this->getEm();   //Get Entity Manager

        $crawler = $this->getCrawlerInstance($partsGroupLink);
        if ($crawler !== null) {
            //We crawl and get Name for our PartsGroup
            $partsGroupNameTemp = $crawler->filterXPath("//td[@class='Head1']//strong")->text();
            $partsGroupName = array(); //Shortcut will be stored there
            preg_match('/(Table.*)/', $partsGroupNameTemp, $partsGroupName); //We cut out everything to Table, and store it in $partsGroupName[1] 
            $partsGroupName = $partsGroupName[1]; //For clarity of code, we extract only interesting result
            
            //If that parts group isn't in base, we can insert it
            if (!$em->getRepository('CrawlerBundle:PartsGroup')->checkIfExistByModelIdAndPartsGroupName($carModel->getId(), $partsGroupName)) {
                //Now we can create new Parts Group
                $partsGroup = new PartsGroup();

                //We set Model for that Parts Group
                $partsGroup->setModel($carModel);

                //We set name of that Parts Group
                $partsGroup->setName($partsGroupName);

                //We download image of that PartsGroup
                $imageUrl=$crawler->filterXPath("//a[@class='highslide']")->link()->getUri();

                //$path = strtolower(str_replace(' ', '', $carModel->getBrand()->getName().'/'.$carModel->getName().'/'.$partsGroupName));
                //var_dump($path);
                //var_dump(__DIR__);
                $path='C:/image.jpg';
                $this->downloadImage($imageUrl, $path);
                $partsGroup->setImagePath($path);
                    
                $em->persist($partsGroup);
                $em->flush();
            }
        }
    }
 
    private function downloadImage($imageUrl, $imageSavePath){

        $imageUrl=str_replace( ' ' , '%20' , $imageUrl );   //Change spaces to right URL path
        $fp = fopen ($imageSavePath, 'w+');              // open file handle
        $ch = curl_init($imageUrl);

        curl_setopt($ch, CURLOPT_FILE, $fp);          // output to file
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 6000);      // some large value to allow curl to run for a long time
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
        // curl_setopt($ch, CURLOPT_VERBOSE, true);   // Enable this line to see debug prints
        curl_exec($ch);

        curl_close($ch);                              // closing curl handle
        fclose($fp);                                  // closing file handle
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
        } else {
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
