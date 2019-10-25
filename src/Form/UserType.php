<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('email')
                ->add('plainPassword', RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'first_options' => array('label' => 'Mot de passe'),
                    'second_options' => array('label' => 'Confirmation du mot de passe'),
                ))
                ->add('roles', ChoiceType::class, array(
                    'attr'  =>  array('class' => 'form-control',
                    'style' => 'margin:5px 0;'),
                    'choices' => 
                    array
                    (
                        'ROLE_ADMIN' => array
                        (
                            'Oui' => 'ROLE_ADMIN',
                        ),
                        'ROLE_USER' => array
                        (
                            'Oui' => 'ROLE_USER'
                        ),
                    ) 
                    ,
                    'multiple' => true,
                    'required' => true,
                    )
                    
                )
                //->add('submit', SubmitType::class, ['label'=>'Envoyer', 'attr'=>['class'=>'btn-primary btn-block']])
        ;
    }
}


