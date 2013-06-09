<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\GroupFormType as BaseType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupType extends BaseType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
    }

    public function getName() {
        return 'form_group';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'csrf_protection' => false
        ));
    }
}