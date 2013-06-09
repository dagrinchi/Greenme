<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FootprintCoordinatesType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {        
	    $builder->add('latitude')
                    ->add('longitude')
	            ;		
	}

	public function getName() {
	    return 'form_footprint_coordinates';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => 'C4C\Bundle\GreenmeBundle\Document\FootprintCoordinates',
	        'csrf_protection' => false
	    ));
	}

}