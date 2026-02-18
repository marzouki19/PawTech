<?php

namespace App\Form;

use App\Entity\Donation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DonationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('montant', NumberType::class, [
                'label' => 'Amount (TND)',
                'required' => true,
                'scale' => 2,
                'html5' => true,
                'attr' => [
                    'placeholder' => '50.00',
                    'min' => '1',
                    'max' => '100000',
                    'step' => '0.01',
                    'inputmode' => 'decimal',
                ],
            ])
            ->add('date', DateType::class, [
                'label' => 'Date',
                'required' => true,
                'widget' => 'single_text',
                'html5' => true,
                'input' => 'datetime_immutable',
                'attr' => [
                    'max' => (new \DateTimeImmutable('today'))->format('Y-m-d'),
                ],
            ])
            ->add('donateur', TextType::class, [
                'label' => 'Donor',
                'required' => true,
                'attr' => [
                    'placeholder' => 'John Doe',
                    'maxlength' => 100,
                    'autocomplete' => 'name',
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
                'attr' => [
                    'placeholder' => 'donor@example.com',
                    'maxlength' => 255,
                    'autocomplete' => 'email',
                ],
            ])
            ->add('reference', TextType::class, [
                'label' => 'Reference',
                'required' => false,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'DON-2026-0001',
                    'maxlength' => 100,
                ],
            ])
            ->add('statut', CheckboxType::class, [
                'label' => 'Validated',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Donation::class,
        ]);
    }
}
