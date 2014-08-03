<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'locale' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::localeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'page_start' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::startAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/start',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_o_nas' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::o_nasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_oferta' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::ofertaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/offer',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_serwis' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::serwisAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/service',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_opancerzenie' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::opancerzenieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/armoring',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_faq' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::faqAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/faq',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_kontakt' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::kontaktAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
        'page_kontakt_send' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::kontaktSendAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => '_locale',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
