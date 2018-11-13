<?php

namespace App\Form;

use App\Entity\Accord;
use App\Entity\Genre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class AccordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', EntityType::class, array(
            'class' => Genre::class,
            'choice_label' => function ($genre) {
                return $genre->getNom();
            }
        ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Accord::class,
        ]);
        $resolver->setRequired(array(
            'typeParDefault'
      ));
    }
}
