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
use App\Repository\UserRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
final class AccountController extends AbstractController
{
    #[Route('/account', name: 'app_account')]
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('account/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    // Modification du profil utilisateur
    #[Route('/account/edit', name: 'app_account_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        // On mémorise les anciennes valeurs
        $oldEmail = $user->getEmail();
        $oldFirstname = $user->getFirstname();
        $oldLastname = $user->getLastname();
        $oldUsername = $user->getUsername();

        $form = $this->createForm(UserProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On enregistre le nouvel email : 
            $newEmail = $user->getEmail();

            // On verifie si le profil a changé
            $profileChanged = $oldFirstname !== $user->getFirstname()
            || $oldLastname !== $user->getLastname()
            || $oldUsername !== $user->getUsername();

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

                // Génération du lien de confirmation
                $confirmUrl = $this->generateUrl(
                    'app_account_confirm_email',
                    ['token' => $token],
                    UrlGeneratorInterface::ABSOLUTE_URL
                );


                // envoi mail (mailpit)
                $email = (new TemplatedEmail())
                    ->from('noreply@lifemap.test')
                    ->to($newEmail)
                    ->subject('Confirme ton nouvel email')
                    ->htmlTemplate('account/change_email.html.twig')
                    ->context([
                        'user' => $user,
                        'confirmUrl' => $confirmUrl,
                    ]);

                $mailer->send($email);

                $this->addFlash(
                    'info',
                    'Un email de confirmation a été envoyé à votre nouvelle adresse.'
                );

            }

            // Sauvegarde en BDD
            $entityManager->flush();

            // Si le profil a changé, on mets un message
            if ($profileChanged){
                $this->addFlash('success', 'Profil mis à jour.');
            }

            return $this->redirectToRoute('app_account');
        }

        return $this->render('account/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    
    // Modification du mail de l'utilisateur
    // Vérification de validation de changement de mail en cliquant sur le lien du mail 
    #[Route('/account/confirm-email/{token}', name: 'app_account_confirm_email')]
    public function confirmEmail(string $token, UserRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
        // On recupère l'utilisateur qui a le token en question 
        $user = $userRepository->findOneBy([
            'emailChangeToken' => $token,
        ]);

        // On verifie qu'on a bien un ustilisateur associé
        if (!$user) {
            throw $this->createNotFoundException('Lien invalide.');
        }

        // On lui injecte le nouveau mot de passe 
        $user->setEmail($user->getPendingEmail());

        // Et on supprime tout ce qui etait temporaire concernant le mot de passe pour sa modification
        $user->setPendingEmail(null);
        $user->setEmailChangeToken(null);
        $user->setEmailChangeRequestedAt(null);

        // On enregistre les modifications
        $entityManager->flush();

        // On met un message pour que l'utilisateur en soit bien informé
        $this->addFlash('success', 'Votre adresse email a bien été confirmée.');

        return $this->redirectToRoute('app_login');
    }


    // Suppression du profil utilisateur
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

    // Modification du mot de passe de l'utilisateur
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
