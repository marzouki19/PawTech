<?php

namespace App\Form;

use App\Entity\ObservationStation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObservationStationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code')
            ->add('zone')
            ->add('localisation')
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'active' => 'active',
                    'inactive' => 'inactive',
                    'maintenance' => 'maintenance',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ObservationStation::class,
        ]);
    }
}
