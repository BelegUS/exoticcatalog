<?php

namespace ExoticCarParts\ModelsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ModelsBundle:Default:index.html.twig', array('name' => $name));
    }
}
