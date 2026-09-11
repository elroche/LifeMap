<?php

namespace App\DataFixtures;

use App\Entity\EventType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class EventTypeFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['event_type'];
    }

    public function load(ObjectManager $manager): void
    {
        $eventTypes = [

            /*
             * ============================================================
             * EMPLOI / CONTRAT
             * ============================================================
             */

            'CDI',
            'CDD',
            'Stage',
            'Alternance',
            'Contrat de professionnalisation',
            'Contrat d’apprentissage',
            'Intérim',
            'Freelance',
            'Mission freelance',
            'Mission',
            'Emploi saisonnier',
            'Job étudiant',
            'Temps partiel',
            'Temps plein',
            'VIE',
            'Volontariat',
            'Bénévolat',

            /*
             * ============================================================
             * PROJET PROFESSIONNEL
             * ============================================================
             */

            'Projet professionnel',
            'Projet informatique',
            'Projet individuel',
            'Projet d’équipe',
            'Projet client',
            'Projet interne',
            'Projet personnel',
            'Projet entrepreneurial',
            'Mission professionnelle',
            'Mission technique',
            'Mission de conseil',
            'Prestation',
            'Consulting',
            'POC',
            'Prototype',
            'MVP',
            'Proof of Concept',
            'Hackathon',

            /*
             * ============================================================
             * INFORMATIQUE / DÉVELOPPEMENT
             * ============================================================
             */

            'Développement logiciel',
            'Développement web',
            'Développement backend',
            'Développement frontend',
            'Développement full-stack',
            'Développement mobile',
            'Développement desktop',
            'Développement embarqué',
            'Développement IoT',
            'Développement API',
            'Développement de microservices',
            'Architecture logicielle',
            'Architecture système',
            'Architecture cloud',
            'DevOps',
            'DevSecOps',
            'SRE',
            'Data',
            'Data Engineering',
            'Data Science',
            'Machine Learning',
            'Intelligence artificielle',
            'Cybersécurité',
            'Sécurité informatique',
            'Administration système',
            'Administration réseau',
            'Cloud',
            'Infrastructure',
            'Base de données',
            'QA / Tests',
            'Automatisation',
            'R&D informatique',
            'Veille technologique',
            'Support informatique',

            /*
             * ============================================================
             * FORMATION / APPRENTISSAGE
             * ============================================================
             */

            'Formation',
            'Formation professionnelle',
            'Formation technique',
            'Formation informatique',
            'Formation en ligne',
            'Formation interne',
            'Formation externe',
            'Autoformation',
            'Cours',
            'Atelier',
            'Workshop',
            'Bootcamp',
            'Tutoriel',
            'Certification',
            'Préparation à une certification',
            'Apprentissage',
            'Mentorat',
            'Coaching',
            'Conférence technique',

            /*
             * ============================================================
             * ÉTUDES / ÉCOLE
             * ============================================================
             */

            'École',
            'Université',
            'Études',
            'Projet scolaire',
            'Projet universitaire',
            'Projet étudiant',
            'Travail pratique',
            'TP',
            'TD',
            'Cours scolaire',
            'Cours universitaire',
            'Examen',
            'Évaluation',
            'Devoir',
            'Mémoire',
            'Thèse',
            'Soutenance',
            'Rapport de stage',
            'Projet de fin d’études',
            'PFE',
            'Projet de diplôme',

            /*
             * ============================================================
             * ÉVÉNEMENTS PROFESSIONNELS
             * ============================================================
             */

            'Séminaire',
            'Séminaire professionnel',
            'Séminaire technique',
            'Conférence',
            'Conférence informatique',
            'Conférence professionnelle',
            'Meetup',
            'Table ronde',
            'Webinaire',
            'Salon professionnel',
            'Salon informatique',
            'Forum',
            'Journée professionnelle',
            'Journée technique',
            'Networking',
            'Événement professionnel',
            'Afterwork',
            'Team Building',
            'Réunion',
            'Réunion technique',
            'Réunion client',
            'Présentation',
            'Démonstration',
            'Kick-off',
            'Rétrospective',
            'Workshop d’équipe',

            /*
             * ============================================================
             * COMPÉTITIONS / CONCOURS
             * ============================================================
             */

            'Concours',
            'Compétition',
            'Compétition informatique',
            'Compétition sportive',
            'Concours de programmation',
            'Challenge technique',
            'Challenge informatique',
            'Hackathon',
            'Game Jam',
            'CTF',
            'Capture The Flag',
            'Olympiade',
            'Tournoi',
            'Challenge étudiant',

            /*
             * ============================================================
             * SPORT
             * ============================================================
             */

            'Sport',
            'Entraînement sportif',
            'Compétition sportive',
            'Tournoi sportif',
            'Match',
            'Course',
            'Randonnée',
            'Cyclisme',
            'Natation',
            'Fitness',
            'Musculation',
            'Football',
            'Basketball',
            'Tennis',
            'Athlétisme',
            'Arts martiaux',
            'Sports collectifs',
            'Sports individuels',

            /*
             * ============================================================
             * CRÉATIF / PERSONNEL
             * ============================================================
             */

            'Projet personnel',
            'Projet créatif',
            'Projet artistique',
            'Projet hobby',
            'Loisir',
            'Activité personnelle',
            'Création',
            'Écriture',
            'Photographie',
            'Musique',
            'Dessin',
            'Vidéo',
            'Design',

            /*
             * ============================================================
             * ENTREPRENEURIAT
             * ============================================================
             */

            'Entrepreneuriat',
            'Création d’entreprise',
            'Startup',
            'Projet entrepreneurial',
            'Business',
            'Business Plan',
            'Incubation',
            'Accélération',
            'Pitch',
            'Présentation investisseurs',
            'Levée de fonds',
            'Networking entrepreneurial',

            /*
             * ============================================================
             * ASSOCIATIF / COMMUNAUTÉ
             * ============================================================
             */

            'Association',
            'Projet associatif',
            'Bénévolat',
            'Événement associatif',
            'Action collective',
            'Engagement communautaire',
            'Communauté',
            'Groupe de travail',
            'Projet collaboratif',

            /*
             * ============================================================
             * RECHERCHE / INNOVATION
             * ============================================================
             */

            'Recherche',
            'Recherche scientifique',
            'Recherche appliquée',
            'Innovation',
            'R&D',
            'Expérimentation',
            'Étude',
            'Étude technique',
            'Étude de faisabilité',
            'Prototype',
            'POC',
            'Expérience',
            'Projet de recherche',

            /*
             * ============================================================
             * PERSONNEL / ORGANISATION
             * ============================================================
             */

            'Rendez-vous',
            'Événement personnel',
            'Voyage',
            'Déplacement',
            'Vacances',
            'Organisation personnelle',
            'Objectif personnel',
            'Projet personnel',
            'Activité',
            'Sortie',

            /*
             * ============================================================
             * AUTRES
             * ============================================================
             */

            'Événement',
            'Autre',
        ];

        // Supprime les doublons éventuels.
        $eventTypes = array_unique($eventTypes);

        foreach ($eventTypes as $name) {
            $eventType = new EventType();
            $eventType->setName($name);

            $manager->persist($eventType);
        }

        $manager->flush();
    }
}
