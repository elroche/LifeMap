<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppAuthentificatorAuthenticator;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, EntityManagerInterface $entityManager): Response
    {
        // Crée un utilisateur
        $user = new User();
        // Crée un formulaire
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        // Si le formulaire est envoyé et est validé
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var string $plainPassword */
            $plainPassword = $form->get('plainPassword')->getData();

            // encode the plain password
            $user->setPassword($userPasswordHasher->hashPassword($user, $plainPassword));

            if (empty($user->getUsername())) {
                $user->setUsername($user->getfirstname());
            }

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            // Envoie l'email de confirmation
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('support@LifeMap.fr', 'Support'))
                    ->to((string) $user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );

            // do anything else you need here, like send an email

            // Utilise la class pour authentifier un utilisateur directement, en lui passan l'utilisateur en parametre
            //return $security->login($user, AppAuthentificatiorAuthenticator::class, 'main');

            $this->addFlash('success', 'Un email de confirmation vous a été envoyé.');

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    // Permet de valider que l'email fonctionne bien
    #[Route('/verify/email{id}', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, User $user, TranslatorInterface $translator): Response
    {
        try {    
            $this->emailVerifier->handleEmailConfirmation($request, $user);
    
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash(
                'verify_email_error',
                $translator->trans($exception->getReason(), [], 'VerifyEmailBundle')
            );
    
            return $this->redirectToRoute('app_register');
        }
    
        $this->addFlash(
            'success',
            'Votre adresse e-mail a bien été confirmée.'
        );
    
        return $this->redirectToRoute('app_login');    
    }

    #[Route('/account/email/confirm/{token}', name: 'app_account_confirm_email')]
    public function confirmEmail(string $token, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)
        ->findOneBy(['emailChangeToken' => $token]);
        
        if (!$user) {
            throw $this->createNotFoundException('Token invalide');
        }

        // On verifie qu on a une demande de changement de mail
        if (!$user->getPendingEmail()) {
            throw $this->createNotFoundException('Aucune demande active');
        }

        // On vérifie l'expiration AVANT toute modification
        if ($user->getEmailChangeRequestedAt() < new \DateTimeImmutable('-1 day')) {
            $this->addFlash('danger', 'Lien expiré.');
            return $this->redirectToRoute('app_account');
        }

        // On change l'email
        $user->setEmail($user->getPendingEmail());

        $user->setPendingEmail(null);
        $user->setEmailChangeToken(null);
        $user->setEmailChangeRequestedAt(null);
    
        // On enregistre
        $entityManager->flush();
    
        $this->addFlash('success', 'Votre modification d\'adresse mail a été confirmé. Veuillez vous connecter.');

        return $this->redirectToRoute('app_account');
    }
}
