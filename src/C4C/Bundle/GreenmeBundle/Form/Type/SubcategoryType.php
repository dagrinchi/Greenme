<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SubcategoryType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('category')
                ->add('name')
                ->add('messurement')
                ->add('is_positive')
                ->add('icon')
        ;
    }

    public function getName() {
        return 'form_subcategory';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'C4C\Bundle\GreenmeBundle\Document\Subcategory',
            'csrf_protection' => false
        ));
    }
    
}