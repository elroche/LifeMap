<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\{CheckboxType, PasswordType, EmailType, SubmitType, TextType, RepeatedType};

class RegistrationFormType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('firstname', TextType::class, [
            'label' => 'Prénom',
        ])
        ->add('lastname', TextType::class, [
            'label' => 'Nom',
        ])
        ->add('username', TextType::class, [
            'label' => 'Nom d\'utilisateur',
        ])
        ->add('email', EmailType::class)
        ->add('plainPassword', RepeatedType::class, [
            'type' => PasswordType::class,
                            // instead of being set onto the object directly,
            // this is read and encoded in the controller
            'invalid_message' => 'Les mots de passe ne correspondent pas.',
            'mapped' => false,
            'first_options'  => [
                'label' => 'Mot de passe',
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                ],
            'attr' => ['autocomplete' => 'new-password'],
            'constraints' => [
                new NotBlank(
                    message: 'Please enter a password',
                ),
                new Length(
                    min: 6,
                    minMessage: 'Your password should be at least {{ limit }} characters',
                    // max length allowed by Symfony for security reasons
                    max: 4096,
                ),
            ],
        ])
        ->add('agreeTerms', CheckboxType::class, [
            'label' => 'Conditions générales d\'utilisation',
            'mapped' => false,
            'constraints' => [
                new IsTrue(
                    message: 'You should agree to our terms.',
                ),
            ],
            ])
    ;
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => User::class,
    ]);
}
}
