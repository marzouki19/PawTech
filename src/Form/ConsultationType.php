<?php

namespace App\Form;

use App\Entity\Consultation;
use App\Entity\User;
use App\Entity\Dogs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConsultationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateTimeType::class, [
                'label' => 'Date et heure',
                'widget' => 'single_text',
                'html5' => true,
                'attr' => [
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'required' => true,
                'choices' => [
                    'Urgent' => 'Urgent',
                    'Alert' => 'Alert',
                    'Normal' => 'Normal'
                ],
                'placeholder' => 'Select a type',
                'attr' => [
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('diagnostic', TextareaType::class, [
                'label' => 'Diagnostic',
                'attr' => [
                    'rows' => 5,
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('traitement', TextareaType::class, [
                'label' => 'Treatment',
                'required' => false,
                'attr' => [
                    'rows' => 5,
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('user', EntityType::class, [  // CHANGÉ: 'veterinaire' → 'user'
                'label' => 'User',
                'class' => User::class,
                'choice_label' => 'nom',
                'placeholder' => 'Select a user',
                'attr' => [
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('dog', EntityType::class, [
                'label' => 'Dog',
                'class' => Dogs::class,
                'choice_label' => 'name',
                'placeholder' => 'Select a dog',
                'attr' => [
                    'class' => 'w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-paw-orange focus:border-paw-orange'
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Save',
                'attr' => [
                    'class' => 'px-4 py-2 bg-paw-orange text-white rounded-md hover:bg-paw-orange-hover'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Consultation::class,
            'empty_data' => function () {
                return new Consultation();
            },
        ]);
    }
}