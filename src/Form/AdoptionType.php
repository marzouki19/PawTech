<?php

namespace App\Form;

use App\Entity\Adoption;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdoptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('applicantAge', IntegerType::class, [
                'label' => 'Applicant Age',
                'required' => true,
                'attr' => [
                    'min' => 18,
                    'max' => 120,
                    'placeholder' => 'e.g. 28',
                ],
            ])
            ->add('income', NumberType::class, [
                'label' => 'Income',
                'scale' => 2,
                'required' => true,
                'attr' => [
                    'min' => 0,
                    'step' => '0.01',
                    'placeholder' => 'e.g. 2500',
                ],
            ])
            ->add('housingType', ChoiceType::class, [
                'label' => 'Housing Type',
                'required' => true,
                'placeholder' => 'Select one',
                'choices' => [
                    'Apartment' => 'apartment',
                    'House' => 'house',
                    'Farm' => 'farm',
                    'Other' => 'other',
                ],
            ])
            ->add('hasYard', CheckboxType::class, [
                'label' => 'Has Yard',
                'required' => false,
            ])
            ->add('familySize', IntegerType::class, [
                'label' => 'Family Size',
                'required' => true,
                'attr' => [
                    'min' => 0,
                    'placeholder' => 'e.g. 3',
                ],
            ])
            ->add('hoursAwayPerDay', IntegerType::class, [
                'label' => 'Hours Away Per Day',
                'required' => true,
                'attr' => [
                    'min' => 0,
                    'max' => 24,
                    'placeholder' => 'e.g. 6',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adoption::class,
        ]);
    }
}
