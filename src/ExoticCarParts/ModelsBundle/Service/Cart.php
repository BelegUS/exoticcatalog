<?php

namespace ExoticCarParts\ModelsBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;
use ExoticCarParts\ModelsBundle\Entity\Part;

class Cart {

    private $em;
    private $session;
    private $cart;

    function __construct(EntityManager $em, Session $session)
    {
        $this->em = $em;
        $this->session = $session;
        $this->cart = $session->get('cart', array());
    }

    public function addToCart($partId, $quantity)
    {
        $part = $this->em->getRepository('ModelsBundle:Part')->find($partId);
        if ($part) {
            $index = $this->recursive_array_search($partId, $this->cart);
            if ($index !== false) {
                $this->cart[$index]['quantity'] += (int)$quantity;
            } else {
                $partToSave['partId'] = $partId;
                $partToSave['quantity'] = (int)$quantity;
                $this->cart[] = $partToSave;
            }
            $this->session->set('cart', $this->cart);
            $this->session->save();
            return true;
        }
        return false;
    }
    
    public function getPartsFromCart()
    {
        $parts = array();
        $repository = $this->em->getRepository('ModelsBundle:Part');
        foreach($this->cart as $cartPart) {
            $parts[]= array(
                'quantity' => $cartPart['quantity'],
                'part'=> $repository->find($cartPart['partId'])
            );
        }
        
        return $parts;    
    }
    
    private function recursive_array_search($needle, $haystack)
    {
        foreach ($haystack as $key => $value) {
            $current_key = $key;
            if ($needle === $value OR ( is_array($value) && $this->recursive_array_search($needle, $value) !== false)) {
                return $current_key;
            }
        }
        return false;
    }

}
