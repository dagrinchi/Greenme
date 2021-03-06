<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReportType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {        
	    $builder->add('title')
	    		->add('coordinates', new ReportCoordinatesType())	    			    		
	    		->add('location_type')	    		
	    		->add('picture_file', 'file')	    		
	    		//->add('sub_categories')
	            ;		
	}

	public function getName() {
	    return 'form_report';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => 'C4C\Bundle\GreenmeBundle\Document\Report',
	        'csrf_protection' => false
	    ));
	}

}