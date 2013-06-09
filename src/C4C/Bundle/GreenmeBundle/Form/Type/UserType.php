<?php

namespace C4C\Bundle\GreenmeBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add("username")
                ->add("name")
                ->add("last_name")
                ->add('gender')
                ->add('birthdate', 'birthday')
                ->add('picture_file', 'file')
                ->add('email', 'email')
                ->add('plainPassword', 'repeated', array(
                    'type' => 'password',
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
        ;
    }

    public function getName() {
        return 'form_user';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(            
            'csrf_protection' => false
        ));
    }

}