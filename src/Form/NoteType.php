<?php

namespace App\Form;

use App\Entity\Note;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class NoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',EntityType::class, array(
                'class' => Note::class,
                'choice_label' => function($note){
                    return $note->getNom();
                },
                'multiple' => true,
                'expanded' => true,
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Note::class,
            
        ]);
        /*
        $resolver->setRequired(array(
              'typeParDefault'
        ));
        */
        
    }
}
