<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FootprintType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {        
	    $builder->add('sub_category')
	    		->add('value')	    			    		
	    		->add('coordinates', new FootprintCoordinatesType())	    			    		
	    		->add('location_type')
	            ;		
	}

	public function getName() {
	    return 'form_footprint';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => 'C4C\Bundle\GreenmeBundle\Document\Footprint',
	        'csrf_protection' => false
	    ));
	}

}