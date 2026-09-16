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
             * EMPLOI / CONTRATS
             * ============================================================
             */

            'Emploi' => '#2563EB',
            'CDI' => '#1D4ED8',
            'CDD' => '#3B82F6',
            'Stage' => '#60A5FA',
            'Alternance' => '#93C5FD',
            'Contrat de professionnalisation' => '#2563EB',
            'Contrat d’apprentissage' => '#1E40AF',
            'Intérim' => '#38BDF8',
            'Freelance' => '#0EA5E9',
            'Mission freelance' => '#0284C7',
            'Mission professionnelle' => '#0369A1',
            'Emploi saisonnier' => '#7DD3FC',
            'Job étudiant' => '#BAE6FD',
            'Temps partiel' => '#60A5FA',
            'Temps plein' => '#1D4ED8',
            'VIE' => '#075985',
            'Volontariat' => '#0C4A6E',
            'Bénévolat' => '#164E63',

            /*
             * ============================================================
             * PROJETS
             * ============================================================
             */

            'Projet' => '#7C3AED',
            'Projet personnel' => '#8B5CF6',
            'Projet professionnel' => '#6D28D9',
            'Projet scolaire' => '#A78BFA',
            'Projet universitaire' => '#C4B5FD',
            'Projet étudiant' => '#DDD6FE',
            'Projet informatique' => '#7C3AED',
            'Projet d’équipe' => '#9333EA',
            'Projet collaboratif' => '#A855F7',
            'Projet associatif' => '#C026D3',
            'Projet entrepreneurial' => '#DB2777',
            'Projet de recherche' => '#6D28D9',
            'Projet de fin d’études' => '#5B21B6',

            /*
             * ============================================================
             * FORMATION / APPRENTISSAGE
             * ============================================================
             */

            'Formation' => '#16A34A',
            'Formation professionnelle' => '#15803D',
            'Formation technique' => '#22C55E',
            'Formation en ligne' => '#4ADE80',
            'Formation interne' => '#86EFAC',
            'Formation externe' => '#10B981',
            'Cours' => '#059669',
            'Atelier' => '#047857',
            'Workshop' => '#065F46',
            'Bootcamp' => '#166534',
            'Autoformation' => '#34D399',
            'Apprentissage' => '#6EE7B7',
            'Certification' => '#14B8A6',
            'Préparation à une certification' => '#0D9488',
            'Mentorat' => '#0F766E',
            'Coaching' => '#115E59',

            /*
             * ============================================================
             * ÉTUDES
             * ============================================================
             */

            'Études' => '#0891B2',
            'École' => '#0E7490',
            'Université' => '#155E75',
            'Cours universitaire' => '#06B6D4',
            'Cours scolaire' => '#22D3EE',
            'Travail pratique' => '#67E8F9',
            'TP' => '#A5F3FC',
            'TD' => '#CFFAFE',
            'Devoir' => '#164E63',
            'Examen' => '#0E7490',
            'Évaluation' => '#0891B2',
            'Mémoire' => '#155E75',
            'Thèse' => '#164E63',
            'Soutenance' => '#083344',
            'Rapport de stage' => '#0E7490',
            'PFE' => '#155E75',
            'Projet de diplôme' => '#164E63',

            /*
             * ============================================================
             * ÉVÉNEMENTS PROFESSIONNELS
             * ============================================================
             */

            'Conférence' => '#EA580C',
            'Conférence technique' => '#C2410C',
            'Conférence professionnelle' => '#9A3412',
            'Séminaire' => '#F97316',
            'Séminaire technique' => '#EA580C',
            'Séminaire professionnel' => '#C2410C',
            'Meetup' => '#FB923C',
            'Webinaire' => '#FDBA74',
            'Salon professionnel' => '#F59E0B',
            'Salon étudiant' => '#D97706',
            'Salon informatique' => '#B45309',
            'Forum' => '#F97316',
            'Forum professionnel' => '#EA580C',
            'Networking' => '#D97706',
            'Afterwork' => '#B45309',
            'Journée professionnelle' => '#C2410C',
            'Journée technique' => '#9A3412',
            'Table ronde' => '#FB923C',
            'Présentation' => '#F59E0B',
            'Démonstration' => '#D97706',
            'Réunion' => '#EA580C',
            'Réunion technique' => '#C2410C',
            'Réunion client' => '#9A3412',
            'Team Building' => '#F97316',
            'Workshop d’équipe' => '#FB923C',

            /*
             * ============================================================
             * COMPÉTITIONS / CONCOURS
             * ============================================================
             */

            'Concours' => '#DC2626',
            'Compétition' => '#B91C1C',
            'Challenge' => '#EF4444',
            'Challenge technique' => '#DC2626',
            'Challenge étudiant' => '#F87171',
            'Concours de programmation' => '#991B1B',
            'Compétition informatique' => '#B91C1C',
            'Hackathon' => '#E11D48',
            'Game Jam' => '#BE123C',
            'CTF' => '#9F1239',
            'Tournoi' => '#EF4444',
            'Compétition sportive' => '#DC2626',
            'Tournoi sportif' => '#B91C1C',

            /*
             * ============================================================
             * ENTREPRENEURIAT
             * ============================================================
             */

            'Entrepreneuriat' => '#DB2777',
            'Création d’entreprise' => '#BE185D',
            'Startup' => '#EC4899',
            'Business' => '#F472B6',
            'Business Plan' => '#DB2777',
            'Incubation' => '#BE185D',
            'Accélération' => '#9D174D',
            'Pitch' => '#F43F5E',
            'Levée de fonds' => '#E11D48',

            /*
             * ============================================================
             * RECHERCHE / INNOVATION
             * ============================================================
             */

            'Recherche' => '#4F46E5',
            'Recherche scientifique' => '#4338CA',
            'Recherche appliquée' => '#3730A3',
            'Innovation' => '#6366F1',
            'R&D' => '#4F46E5',
            'Expérimentation' => '#818CF8',
            'Étude' => '#A5B4FC',
            'Étude technique' => '#6366F1',
            'Étude de faisabilité' => '#4F46E5',
            'Prototype' => '#7C3AED',
            'POC' => '#6D28D9',
            'MVP' => '#5B21B6',

            /*
             * ============================================================
             * PERSONNEL
             * ============================================================
             */

            'Activité personnelle' => '#CA8A04',
            'Projet personnel' => '#EAB308',
            'Loisir' => '#FACC15',
            'Voyage' => '#F59E0B',
            'Déplacement' => '#D97706',
            'Vacances' => '#FBBF24',
            'Sortie' => '#FDE047',
            'Événement personnel' => '#EAB308',
            'Rendez-vous' => '#CA8A04',
            'Objectif personnel' => '#A16207',

            /*
             * ============================================================
             * ASSOCIATIF
             * ============================================================
             */

            'Association' => '#0891B2',
            'Événement associatif' => '#06B6D4',
            'Action collective' => '#22D3EE',
            'Engagement associatif' => '#0E7490',
            'Engagement communautaire' => '#155E75',
            'Projet communautaire' => '#164E63',

            /*
             * ============================================================
             * AUTRES
             * ============================================================
             */

            'Événement' => '#64748B',
            'Autre' => '#94A3B8',
        ];

        /*
         * Création des EventType
         */
        foreach ($eventTypes as $name => $color) {
            $eventType = new EventType();

            $eventType
                ->setName($name)
                ->setColor($color);

            $manager->persist($eventType);
        }

        $manager->flush();
    }
}
