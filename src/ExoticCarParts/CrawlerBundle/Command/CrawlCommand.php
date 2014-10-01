<?php

namespace ExoticCarParts\CrawlerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CrawlCommand extends ContainerAwareCommand {

    protected function configure()
    {
        $this
                ->setName('Crawler:Crawl')
                ->setDescription('Start crawling')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $em = $this->getContainer()->get('doctrine')->getManager();

        $url_to_traverse = 'http://www.ricambiamerica.com/parts_catalogs.php';

        $crawler = $this->getContainer()->get('ricambia_crawler');

        //$crawler->generateBrands();
        $crawler->crawlCarsLinksList($url_to_traverse);
        $carLinkList = $crawler->getCarsLinksList();

        /* $carLinkList = array();
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=LA&V=model&I=88';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=83';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=87';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=19';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=20';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=MA&V=model&I=85';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=33';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=89';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=34';
          $carLinkList[] = 'http://www.ricambiamerica.com/parts_catalogs.php?M=FE&V=model&I=35';
         */

         foreach($carLinkList as $car){
          $start_time = MICROTIME(TRUE);
          $crawler->crawlModel($car);
          $em->flush();
          $stop_time = MICROTIME(TRUE);
          $time = $stop_time - $start_time;
          $output->writeln('Done for '.$car.'in '.$time.' seconds');
          } 

        $output->writeln('Done everything!');
    }

}
