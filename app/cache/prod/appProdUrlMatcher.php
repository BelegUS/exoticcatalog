<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // locale
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'locale');
            }

            return array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::localeAction',  '_route' => 'locale',);
        }

        // page_start
        if (preg_match('#^/(?P<_locale>[^/]++)/start$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_start')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::startAction',));
        }

        // page_o_nas
        if (preg_match('#^/(?P<_locale>[^/]++)/about$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_o_nas')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::o_nasAction',));
        }

        // page_oferta
        if (preg_match('#^/(?P<_locale>[^/]++)/offer$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_oferta')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::ofertaAction',));
        }

        // page_serwis
        if (preg_match('#^/(?P<_locale>[^/]++)/service$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_serwis')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::serwisAction',));
        }

        // page_opancerzenie
        if (preg_match('#^/(?P<_locale>[^/]++)/armoring$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_opancerzenie')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::opancerzenieAction',));
        }

        // page_faq
        if (preg_match('#^/(?P<_locale>[^/]++)/faq$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_faq')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::faqAction',));
        }

        // page_kontakt
        if (preg_match('#^/(?P<_locale>[^/]++)/contact$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_page_kontakt;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_kontakt')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::kontaktAction',));
        }
        not_page_kontakt:

        // page_kontakt_send
        if (preg_match('#^/(?P<_locale>[^/]++)/contact$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_page_kontakt_send;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page_kontakt_send')), array (  '_controller' => 'ExoticCarParts\\PageBundle\\Controller\\DefaultController::kontaktSendAction',));
        }
        not_page_kontakt_send:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
