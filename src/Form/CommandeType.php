<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => [
                    'class' => 'date-picker',
                    'placeholder' => 'dd/mm/yyyy',
                    'pattern' => '\d{2}/\d{2}/\d{4}',
                    'title' => 'Format: dd/mm/yyyy'
                ]
            ])
            ->add('total', NumberType::class, [
                'label' => 'Total (TND)',
                'attr' => [
                    'step' => '0.01'
                ],
                'scale' => 2,
                'html5' => true,
            ])
            ->add('statut', CheckboxType::class, [
                'label' => 'Order delivered / completed',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
