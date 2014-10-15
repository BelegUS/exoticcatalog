<?php

/**
 * Description of ExchangeRates
 *
 * @author BelegUS
 */

namespace ExoticCarParts\ModelsBundle\Service;

class ExchangeRates {

    protected $exchangeRates = array();

    function __construct()
    {
        $currencyXml = simplexml_load_file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml");
        foreach ($currencyXml->Cube->Cube->Cube as $rate) {
            if ($rate["currency"] == 'USD') {
                $this->exchangeRates['euro'] = (1 / floatval($rate["rate"]));
            } else if ($rate["currency"] == 'PLN') {
                $this->exchangeRates['zloty'] = $rate["rate"];
            }
        }
    }
    
    public function getExchangeRates()
    {
        return $this->exchangeRates;
    }


}

?>
