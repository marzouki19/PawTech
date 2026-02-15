<?php

namespace App\Form;

use App\Entity\Adoption;
use App\Entity\Dogs;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdoptionAdminType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => static function (User $user): string {
                    return sprintf('%s (%s)', $user->getFullName(), $user->getEmail());
                },
            ])
            ->add('dog', EntityType::class, [
                'class' => Dogs::class,
                'choice_label' => static function (Dogs $dog): string {
                    return sprintf('%s (#%d)', $dog->getName(), $dog->getId());
                },
            ])
            ->add('createdAt', DateTimeType::class, [
                'widget' => 'single_text',
            ])
            ->add('applicantAge', IntegerType::class, [
                'required' => true,
            ])
            ->add('income', NumberType::class, [
                'scale' => 2,
                'required' => true,
            ])
            ->add('housingType', ChoiceType::class, [
                'choices' => [
                    'Apartment' => 'apartment',
                    'House' => 'house',
                    'Farm' => 'farm',
                    'Other' => 'other',
                ],
                'required' => true,
            ])
            ->add('hasYard', CheckboxType::class, [
                'required' => false,
            ])
            ->add('familySize', IntegerType::class, [
                'required' => true,
            ])
            ->add('hoursAwayPerDay', IntegerType::class, [
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adoption::class,
        ]);
    }
}

