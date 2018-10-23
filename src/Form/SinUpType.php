<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;


class SinUpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('username_first')
            ->add('email',EmailType::class)
            ->add('password',PasswordType::class)
            ->add('confirm_password',PasswordType::class)
            ->add('adress')
            ->add('country',CountryType::class)
            ->add('cp')
            ->add('civilite',ChoiceType::class ,array(
                    'choices' => array(
                        'M'=> 'M',
                        'F' => 'F' 
                    ) 
                ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
