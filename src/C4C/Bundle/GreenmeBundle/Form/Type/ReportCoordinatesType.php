<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ReportCoordinatesType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {        
	    $builder->add('latitude')
                    ->add('longitude')
	            ;		
	}

	public function getName() {
	    return 'form_report_coordinates';
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
	    $resolver->setDefaults(array(
	        'data_class' => 'C4C\Bundle\GreenmeBundle\Document\ReportCoordinates',
	        'csrf_protection' => false
	    ));
	}

}