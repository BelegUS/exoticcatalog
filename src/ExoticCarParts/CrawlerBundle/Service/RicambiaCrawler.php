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


                //Now we crawl all links to PartsGroups for this Model
                $partsGroupsLinks = array();
                $crawler->filterXPath("//td[@class='infoBoxContents']//a[@href]")->each(function($node, $i) use(&$partsGroupsLinks) {
                    $link = $node->link()->getUri();
                    if (preg_match('/^.*(parts_catalogs.php?).*$/', $link)) {  //Get rid of unwanted links
                        $partsGroupsLinks[$i] = $link;
                    }
                });
                
                //Finally, we run PartsGroup crawler for each partsGroupLink
                foreach ($partsGroupsLinks as $partsGroupLink) {
                    $this->crawlPartsGroup($partsGroupLink, $model);
                }
            }
        }
    }

    /*public function crawlModelsFullName($carsListUrl)
    {
        $em = $this->getEm();   //Get Entity Manager
        
        $crawler = $this->getCrawlerInstance($carsListUrl);
        if ($crawler !== null) {
            $data = array();
            $crawler->filterXPath("//table[@id='catalogTable']//a[@href]")->each(function($node, $i) use(&$data) {
                $link = $node->link()->getUri();
                $fullName = $node->text();
                if (preg_match('/^.*(parts_catalogs.php?).*$/', $link)) {  //Get rid of unwanted links
                    $data[$i]['link'] = $link;
                    $data[$i]['fullName'] = $fullName;
                }
            });
            foreach($data as $dataRow)
            {
               $crawler = $this->getCrawlerInstance($dataRow['link']);
               $modelName = $crawler->filterXPath("//td[@class='Head1']//div")->text();
               $model = $em->getRepository('CrawlerBundle:Model')->findOneByName($modelName);
               if($model){
                   $model->setFullName($dataRow['fullName']);
                   $em->persist($model);
               }
               
            }
        }
    }*/
    
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
                //We prepare right URL to image
                $imageUrl = $crawler->filterXPath("//a[@class='highslide']")->link()->getUri();
                $imageUrl = str_replace(' ', '%20', $imageUrl);   //Change spaces to right URL path
                //We prepare right directory for image
                $folderPathToSave = $this->prepareFolderPath($carModel->getBrand()->getName(), $carModel->getName());

                //We prepare right filename for image
                $fileNameToSave = $this->prepareImageName($partsGroupName);
                
                //We download image
                $this->downloadImage($imageUrl, $folderPathToSave, $fileNameToSave);

                //We save final path to image in DB
                $partsGroup->setImagePath($folderPathToSave . $fileNameToSave);

                $em->persist($partsGroup);
                
                //Now we can run crawling Parts from that PartsGroup
                $this->crawlPartsFromPartsGroup($partsGroupLink, $partsGroup);
            }
        }
    }

    public function crawlPartsFromPartsGroup($partsGroupLink, $partsGroup)
    {
        $em = $this->getEm();   //Get Entity Manager

        $crawler = $this->getCrawlerInstance($partsGroupLink);
        if ($crawler !== null) {
            //We crawl all cells (TD) in each row (TR) except legend in second Table3 (this with actual data)
            $parts = array();
            $crawler->filterXPath("//table[@id='table3'][2]//tr//td")->each(function($node, $i) use(&$parts) {
                    $parts[$i] = $node->text();
            });
            
            //We divide array to set of 5-element rows. 
            //First row - Location 
            //Second row - Part number
            //Third row - Quantity (how much of that part is needed)
            //Fourth row - Description
            //Fift row - Price for each
            $parts = array_chunk($parts,5);
            
            //We go through each collected value, counting to 5 (next row starts after each 5) and save.
            foreach($parts as $row)
            {
                //We create new Part
                $part = new Part();
                
                //We set right PartsGroup for that Part
                $part->setPartsGroup($partsGroup);
                
                //We set onImageNumber (aka Location)
                $part->setOnImageNumber($row[0]);
                
                //We set Part Number
                $part->setPartNumber($row[1]);
                
                //We set quantity
                $part->setQuantity($row[2]);
                
                //We set partName (Description)
                $part->setName($row[3]);
                
                //We set price
                $part->setPrice($row[4]);
                
                $em->persist($part);
            }

        }

    }
    
    public function prepareFolderPath($brandName, $modelName)
    {
        $forbiddenCharacters = array(' ', '\\', '/', ':', '*', '?', '"', '<', '>', '|', '(', ')');
       
        $safeBrandName = strtolower(str_replace($forbiddenCharacters, '', $brandName));
        
        $safeModelName = strtolower(str_replace($forbiddenCharacters, '', $modelName));
        
        $folderPath = $safeBrandName.'/'.$safeModelName;
        
        return $folderPath;
    }    
    
    public function prepareImageName($partsGroupName)
    {
        $forbiddenCharacters = array(' ', '\\', '/', ':', '*', '?', '"', '<', '>', '|', '(', ')');
                        
        $fileName = strtolower(str_replace($forbiddenCharacters, '', $partsGroupName)); //We remove Forbidden Chars, and make everything lowercase
        $fileName = substr($fileName, 0, strpos($fileName, '-'));   //Fix: we cut out everything besides tableNNC
        $fileName = '/' . $fileName . '.jpg';    //We add necessary backslash and extension. 
        
        return $fileName;
    }
    
    public function downloadImage($imageUrl, $folderPathToSave, $fileNameToSave)
    {
        $localDisc = 'E:/xampp/htdocs/exoticcatalog/web/assets/images/catalog/partsgroup/';
        @mkdir($localDisc . $folderPathToSave, 0777, true);
        $fp = fopen($localDisc . $folderPathToSave . $fileNameToSave, 'w+');              // open file handle
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
        sleep(1);   //Slow down, boy! Or it will all go down!
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
