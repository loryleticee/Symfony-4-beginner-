<?php

namespace App\Form;

use App\Entity\Note;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class NoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('accord',EntityType::class, array(
                'class' => 'App\Entity\Accord',
                'choice_label' => 'type',
                'multiple' => true,
                'expanded' => true
              ))
            ->add('Enregistrer', SubmitType::class)
            //->add('saveAndAdd', 'submit');
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Note::class,
        ]);
    }
}
