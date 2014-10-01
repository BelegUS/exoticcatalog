<?php
namespace ExoticCarParts\CrawlerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('Crawler:Test')
            ->setDescription('Start crawling')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        
       
    $url_to_traverse = 'http://www.ricambiamerica.com/parts_catalogs.php';

    $crawler = $this->getContainer()->get('ricambia_crawler');
    
    $testImageName=$crawler->prepareImageName('Table 14A - EXHAUST SYSTEM - VALID FOR CATALYTIC VEHICLES-NOT FOR USA SPYDER');
    
    $testFolderPathToSave = $crawler->prepareFolderPath('Ferrari', '348 (1989-1992)');
    
    $crawler->downloadImage('http://www.ricambiamerica.com/images/diagrams/full/348-93_014A.jpg', $testFolderPathToSave, $testImageName);
    
    $output->writeln('Done everything!');
        

    }
}