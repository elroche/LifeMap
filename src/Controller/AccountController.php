<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\UserProfileType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;
use App\DTO\ChangePasswordDTO;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

final class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        return $this->render('account/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/account/edit', name: 'app_account_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        // On mémmorise l'ancien email
        $oldEmail = $user->getEmail();

        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre le nouvel email : 
            $newEmail = $user->getEmail();

            // Si l'email a bien changé
            if ($newEmail !== $oldEmail) {

                // Génération tokens
                $token = bin2hex(random_bytes(32));

                // On bloque le changement direct
                $user->setEmail($oldEmail);

                // on stocke la demande
                $user->setPendingEmail($newEmail);
                $user->setEmailChangeToken($token);
                $user->setEmailChangeRequestedAt(new \DateTimeImmutable());

                // envoi mail (mailpit)
                $email = (new TemplatedEmail())
                    ->from('noreply@lifemap.test')
                    ->to($newEmail)
                    ->subject('Confirme ton nouvel email')
                    ->htmlTemplate('account/change_email.html.twig')
                    ->context([
                        'user' => $user,
                        'token' => $token,
                    ]);

                $mailer->send($email);

                $this->addFlash(
                    'info',
                    'Un email de confirmation a été envoyé à votre nouvelle adresse.'
                );

            }

            // Sauvegarde en BDD
            $entityManager->flush();

            $this->addFlash('success', 'Profil mis à jour.');

            return $this->redirectToRoute('app_account');
        }

        return $this->render('account/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/account/delete', name: 'app_account_delete', methods: ['POST'])]
    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if ($this->isCsrfTokenValid('delete-user', $request->request->get('_token'))) 
        {
            // Déconnection de l'utilisateur
            $this->container->get('security.token_storage')->setToken(null);
            $this->container->get('request_stack')->getSession()->invalidate();
            
            // Suppression de l'utilisateur
            $entityManager->remove($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_logout');
        }

        return $this->redirectToRoute('app_account');
    }

    #[Route('/account/password', name:'app_account_password')]
    public function changePassword(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher) : Response
    {
        // On crée le formulaire
        $form =$this->createForm(ChangePasswordType::class, new ChangePasswordDTO());
        $form->handleRequest($request);

        // On  verifie que le formulaire est valide et est envoyé
        if($form->isSubmitted()) {
            if ($form->isValid())
            {
                /** @var ChangePasswordDTO $data */
                $data = $form->getData();

                // On recupère le nouveau mot de passe
                $newPassword = $data->plainPassword;

                // On recup l'utilisateur
                /** @var User $user */
                $user = $this->getUser();
        
                // On injecte a l'utilisateur le nouveau mot de apsse hashé
                $user->setPassword($passwordHasher->hashPassword($user, $newPassword));

                // On envoie les modifications
                $entityManager->flush();

                // On envoi un flash pour dire que ça a bien été fait
                $this->addFlash('success', 'Votre mot de passe a été modifié.');

                // On renvoie à la page account
                return $this->redirectToRoute('app_account');
            }

            return $this->render('account/password.html.twig', [
                'form' => $form->createView(),
            ], new Response(status: Response::HTTP_UNPROCESSABLE_ENTITY));
        }

        return $this->render('account/password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
