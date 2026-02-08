<?php
// src/Form/ProduitType.php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du produit',
                'attr' => [
                    'placeholder' => 'Entrez le nom du produit'
                ]
            ])
            ->add('prix', NumberType::class, [
                'label' => 'Prix',
                'attr' => [
                    'placeholder' => '0.00',
                    'step' => '0.01'
                ]
            ])
            ->add('categorie', EntityType::class, [
                'label' => 'Catégorie',
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'placeholder' => 'Sélectionnez une catégorie'
            ])
            ->add('image', FileType::class, [
    'label' => 'Image du produit',
    'required' => false, 
    'mapped' => false, 
    'constraints' => [
        new File([
            'maxSize' => '5M',
            'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
            'mimeTypesMessage' => 'Veuillez télécharger une image valide',
        ])
    ],
    // Ces attributs rendent le champ plus user-friendly
    'attr' => [
        'accept' => 'image/*',
        'class' => 'file-input'
    ]
])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantité',
                'attr' => [
                    'placeholder' => '0',
                    'min' => 0
                ]
            ])
            ->add('seuilAlert', IntegerType::class, [
                'label' => 'Seuil d\'alerte',
                'attr' => [
                    'placeholder' => '0',
                    'min' => 0
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}