<?php
// src/Form/SignupType.php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;

class SignupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('prenom', TextType::class, [
                'label' => 'First Name',
                'attr' => [
                    'placeholder' => 'First Name',
                    'class' => 'form-input'
                
                ],
            ])
            ->add('nom', TextType::class, [
                'label' => 'Last Name',
                'attr' => [
                    'placeholder' => 'Last Name',
                    'class' => 'form-input'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email Address',
                'attr' => [
                    'placeholder' => 'you@example.com',
                    'class' => 'form-input',
                ]
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Phone Number',
                'attr' => [
                    'placeholder' => '12345678',
                    'class' => 'form-input'
                ]
                
            ])
=======
            ->add('nom', null, [
                'required' => false,
            ])

            ->add('prenom', null, [
                'required' => false,
            ])

            ->add('email', null, [
                'required' => false,
            ])

            ->add('telephone', null, [
                'required' => false,
            ])
            // Add unmapped face_image field for hidden input
            ->add('user_face', \Symfony\Component\Form\Extension\Core\Type\HiddenType::class, [
                'mapped' => false,
                'required' => false,
            ])
            
>>>>>>> origin/amine/user
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The password fields must match.',
                'options' => ['attr' => ['class' => 'form-input']],
<<<<<<< HEAD
                'required' => true,
=======
                'required' => false,
>>>>>>> origin/amine/user
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => [
                        'placeholder' => '••••••••',
                        'class' => 'form-input',
                        'id' => 'password'
                    ],
                ],
                'second_options' => [
                    'label' => 'Confirm Password',
                    'attr' => [
                        'placeholder' => '••••••••',
                        'class' => 'form-input',
                        'id' => 'confirm-password'
                    ],
                ]
                
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'I agree to the Terms of Service and Privacy Policy',
<<<<<<< HEAD
                'mapped' => false
=======
                'mapped' => false,
                'required' => false
>>>>>>> origin/amine/user
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id'   => 'signup_item',
        ]);
    }
}