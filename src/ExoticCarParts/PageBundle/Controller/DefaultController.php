<?php

namespace ExoticCarParts\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function localeAction($route = 'page_start', $parameters = array()) {
        $this->getRequest()->setLocale($this->getRequest()->getPreferredLanguage(array('en', 'de', 'pl', 'ch')));

        return $this->redirect($this->generateUrl($route, $parameters));
    }

    public function startAction() {
        return $this->render('PageBundle:Pages:start.html.twig');
    }

    public function o_nasAction() {
        return $this->render('PageBundle:Pages:o_nas.html.twig');
    }

    public function ofertaAction() {
        return $this->render('PageBundle:Pages:oferta.html.twig');
    }

    public function serwisAction() {
        return $this->render('PageBundle:Pages:serwis.html.twig');
    }

    public function opancerzenieAction() {
        return $this->render('PageBundle:Pages:opancerzenie.html.twig');
    }

    public function faqAction() {
        return $this->render('PageBundle:Pages:faq.html.twig');
    }

    public function kontaktAction() {
        return $this->render('PageBundle:Pages:kontakt.html.twig');
    }

    public function kontaktSendAction() {
        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('contact@exoticcarparts.de')
                ->setTo('contact@exoticcarparts.de')
                ->setBody('Hello');
        $this->get('mailer')->send($message);
    }

}
