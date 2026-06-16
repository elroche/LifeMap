<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

// Cette classe permet de charger les données
class UserFixtures extends Fixture
{
    // Fixe donc on crée une constante public
    public const ADMIN = 'ADMIN_USER';

    public function __construct(private readonly UserPasswordHasherInterface $hasher)
    {
        
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        
        // Ajout d'un utilisateur admin
        $user -> setRoles(['ROLE_ADMIN'])
            -> setEmail("elearoche3@gmail.fr")
            -> setUsername('elear')
            ->setFirstname('Eléa')
            ->setLastname('Roche')
            -> setIsVerified(true)
            -> setPassword($this -> hasher ->hashPassword($user, 'admin'));
            //-> setApiToken('admin_token');

        $this -> addReference(self::ADMIN, $user);

        $manager -> persist($user);

        // AJout d'une dizaine d'utilisateur avec une boucle for
        for($i=1; $i<=10; $i++){
            $user = new User();
            $user -> setRoles([])
                -> setEmail("user{$i}@doe.fr")
                -> setUsername("user{$i}")
                -> setFirstname("userFirstName{$i}")
                -> setLastname("userLastName{$i}")
                -> setIsVerified(true)
                -> setPassword($this -> hasher ->hashPassword($user, '0000'));
                //-> setApiToken("user{$i}");

            // A chaque utilisateur crée, on lui ajoute une référence qu'on appelle USER
            // Suivi du numéro d'utilisateur (donc de 1 à 10), et après on lui passe l'utilisateur
            // ICI d'est dynamique car plusieurs $users, mais si c'est fixe comme pour l'admin, 
            // on crée une constante public
            $this -> addReference('USER' . $i, $user);

            $manager -> persist($user);
        }

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
