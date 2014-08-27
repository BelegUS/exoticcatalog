<?php

namespace ExoticCarParts\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

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
        $params = $this->getRequest()->request->all();
        
        $message = \Swift_Message::newInstance()
                ->setSubject('ECP - new mail from ' . $params['mail'])
                ->setFrom('contact@exoticcarparts.de')
                ->setTo('contact@exoticcarparts.de')
                ->setReplyTo($params['mail'])
                ->setBody(
                $this->renderView(
                        'PageBundle:Pages:mail.txt.twig', array('params' => $params)
                )
        );
        $this->get('mailer')->send($message);

        $return = array("responseCode" => 200, "success" => true);

        $return = json_encode($return); //jscon encode the array
        return new Response($return, 200, array('Content-Type' => 'application/json'));
    }

}
