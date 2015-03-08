<?php

namespace ExoticCarParts\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PartSearchForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('partNumber', 'search')
            ->add('send', 'submit');
    }

    public function getName()
    {
        return 'partSearchForm';
    }
}