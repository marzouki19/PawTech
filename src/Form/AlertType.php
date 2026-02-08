<?php

namespace App\Form;

use App\Entity\Alert;
use App\Entity\ObservationStation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class AlertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'TECHNICAL' => 'TECHNICAL',
                    'SYSTEM' => 'SYSTEM',
                    'INFO' => 'INFO',
                ],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('message', TextareaType::class, [
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('prioritee', IntegerType::class, [
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'unread' => 'unread',
                    'read' => 'read',
                ],
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('userId', IntegerType::class, [
                'label' => 'User ID',
                'constraints' => [new Assert\NotBlank()],
            ])
            ->add('station', EntityType::class, [
                'class' => ObservationStation::class,
                'choice_label' => 'code',
                'placeholder' => 'Select a station',
                'constraints' => [new Assert\NotBlank()],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alert::class,
        ]);
    }
}
