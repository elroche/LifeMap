<?php

namespace App\DataFixtures;

use App\Entity\Api;
use App\Entity\Database;
use App\Entity\Event;
use App\Entity\EventType;
use App\Entity\Framework;
use App\Entity\Library;
use App\Entity\ProjectManagement;
use App\Entity\Skill;
use App\Entity\Technology;
use App\Entity\Tool;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class EventFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['event'];
    }

    public function load(ObjectManager $manager): void
    {
        $userRepository = $manager->getRepository(User::class);
        $eventTypeRepository = $manager->getRepository(EventType::class);
        $technologyRepository = $manager->getRepository(Technology::class);
        $frameworkRepository = $manager->getRepository(Framework::class);
        $libraryRepository = $manager->getRepository(Library::class);
        $toolRepository = $manager->getRepository(Tool::class);
        $databaseRepository = $manager->getRepository(Database::class);
        $apiRepository = $manager->getRepository(Api::class);
        $skillRepository = $manager->getRepository(Skill::class);
        $projectManagementRepository = $manager->getRepository(ProjectManagement::class);

        /*
         * ============================================================
         * UTILISATEURS
         * ============================================================
         */

        $users = [];

        $users['ADMIN'] = $this->findUser(
            $userRepository,
            'elearoche3@gmail.fr'
        );

        for ($i = 1; $i <= 10; $i++) {
            $users['USER' . $i] = $this->findUser(
                $userRepository,
                "user{$i}@doe.fr"
            );
        }

        /*
         * ============================================================
         * ÉVÉNEMENTS
         * ============================================================
         */

        $events = [

            // ========================================================
            // ADMIN
            // ========================================================

            [
                'users' => ['ADMIN'],
                'title' => 'CDI - Développeuse Symfony',
                'description' => 'Développement d applications web métier dans une équipe backend.',
                'details' => 'Développement de nouvelles fonctionnalités, maintenance corrective, conception de nouvelles API, participation aux revues de code et aux choix d architecture.',
                'start' => '2023-01-09',
                'end' => null,
                'precision' => 'month',
                'effectif' => 8,
                'favorite' => true,
                'type' => 'CDI',

                'technologies' => [
                    'PHP',
                    'SQL',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                    'Vue.js',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'Monolog',
                    'PHPUnit',
                    'Symfony Validator',
                    'Symfony Serializer',
                    'Symfony Security',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitHub',
                    'Docker',
                    'Postman',
                    'Figma',
                    'Jira',
                ],

                'databases' => [
                    'MariaDB',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'SQL',
                    'API',
                    'Backend',
                    'Git',
                    'Tests',
                    'Code Review',
                    'Architecture logicielle',
                    'Travail en équipe',
                ],

                'management' => [
                    'Agile',
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['ADMIN'],
                'title' => 'Projet personnel - Portfolio professionnel',
                'description' => 'Création d un portfolio personnel pour présenter les expériences et compétences.',
                'details' => 'Conception de l interface, développement du backend Symfony, gestion des utilisateurs, gestion des expériences et mise en place des fixtures.',
                'start' => '2025-01-10',
                'end' => '2025-03-15',
                'precision' => 'month',
                'effectif' => 1,
                'favorite' => true,
                'type' => 'Projet perso',

                'technologies' => [
                    'PHP',
                    'SQL',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'Symfony Forms',
                    'Symfony Validator',
                    'Symfony Security',
                    'PHPUnit',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitHub',
                    'Docker',
                    'Figma',
                ],

                'databases' => [
                    'MariaDB',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'SQL',
                    'UI/UX',
                    'Architecture logicielle',
                    'Git',
                    'Autonomie',
                ],

                'management' => [
                    'Kanban',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['ADMIN'],
                'title' => 'Formation - Docker et environnement de développement',
                'description' => 'Formation consacrée à Docker et à la conteneurisation.',
                'details' => 'Création d images Docker, utilisation de Docker Compose, gestion des volumes, réseaux et environnements de développement reproductibles.',
                'start' => '2025-04-12',
                'end' => '2025-04-13',
                'precision' => 'day',
                'effectif' => 18,
                'favorite' => false,
                'type' => 'Formation',

                'technologies' => [
                    'PHP',
                    'Bash',
                    'YAML',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                ],

                'tools' => [
                    'Docker',
                    'Docker Desktop',
                    'Git',
                    'Visual Studio Code',
                ],

                'databases' => [
                    'MariaDB',
                    'Redis',
                ],

                'apis' => [],

                'skills' => [
                    'Docker',
                    'DevOps',
                    'Linux',
                    'Git',
                    'Déploiement',
                ],

                'management' => [
                    'Agile',
                ],
            ],

            // ========================================================
            // USER 1
            // ========================================================

            [
                'users' => ['USER1'],
                'title' => 'Alternance - Développeur web PHP',
                'description' => 'Alternance au sein d une équipe de développement web.',
                'details' => 'Participation à la maintenance et au développement d une application métier. Développement backend, correction de bugs et participation aux réunions Scrum.',
                'start' => '2024-09-02',
                'end' => '2025-08-31',
                'precision' => 'month',
                'effectif' => 10,
                'favorite' => true,
                'type' => 'Alternance',

                'technologies' => [
                    'PHP',
                    'SQL',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'PHPUnit',
                    'Symfony Validator',
                    'Monolog',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitLab',
                    'Docker',
                    'Postman',
                    'Jira',
                ],

                'databases' => [
                    'MariaDB',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'SQL',
                    'Git',
                    'Debugging',
                    'Tests',
                    'Travail en équipe',
                ],

                'management' => [
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER1'],
                'title' => 'Projet scolaire - Application de réservation',
                'description' => 'Développement en équipe d une application web de réservation.',
                'details' => 'Gestion des utilisateurs, calendrier, réservations, administration et notifications.',
                'start' => '2024-10-01',
                'end' => '2024-12-20',
                'precision' => 'month',
                'effectif' => 4,
                'favorite' => true,
                'type' => 'Projet scolaire',

                'technologies' => [
                    'PHP',
                    'JavaScript',
                    'SQL',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'Symfony Forms',
                    'Symfony Validator',
                    'Symfony Mailer',
                    'PHPUnit',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'GitHub',
                    'Git',
                    'Postman',
                    'Figma',
                    'Trello',
                ],

                'databases' => [
                    'MariaDB',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'PHP',
                    'SQL',
                    'Frontend',
                    'Backend',
                    'Git',
                    'Travail en équipe',
                    'Gestion de projet',
                ],

                'management' => [
                    'Kanban',
                ],
            ],

            [
                'users' => ['USER1', 'USER2', 'USER3'],
                'title' => 'Séminaire - Les métiers du numérique',
                'description' => 'Séminaire consacré aux métiers du développement et de la cybersécurité.',
                'details' => 'Présentation des métiers du développement logiciel, du cloud, de la cybersécurité, de la data et de la gestion de projet.',
                'start' => '2025-02-15',
                'end' => '2025-02-15',
                'precision' => 'day',
                'effectif' => 150,
                'favorite' => false,
                'type' => 'Séminaire',

                'technologies' => [
                    'PHP',
                    'Java',
                    'Python',
                    'C#',
                    'JavaScript',
                ],

                'frameworks' => [
                    'Symfony',
                    'Spring Boot',
                    '.NET',
                    'React',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'JUnit',
                    'React Router',
                ],

                'tools' => [
                    'Git',
                    'Docker',
                    'Visual Studio Code',
                    'GitHub',
                    'GitLab',
                    'Jira',
                ],

                'databases' => [
                    'PostgreSQL',
                    'MariaDB',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'GraphQL',
                ],

                'skills' => [
                    'Communication',
                    'Réseau professionnel',
                    'Travail en équipe',
                ],

                'management' => [
                    'Agile',
                    'Scrum',
                ],
            ],

            // ========================================================
            // USER 2
            // ========================================================

            [
                'users' => ['USER2'],
                'title' => 'CDD - Développeur C# .NET',
                'description' => 'Développement d une application métier avec l écosystème .NET.',
                'details' => 'Développement de fonctionnalités backend et frontend, maintenance de l application et participation aux tests automatisés.',
                'start' => '2023-03-01',
                'end' => '2023-08-31',
                'precision' => 'month',
                'effectif' => 12,
                'favorite' => true,
                'type' => 'CDD',

                'technologies' => [
                    'C#',
                    'SQL',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    '.NET',
                    'ASP.NET Core',
                ],

                'libraries' => [
                    'Entity Framework',
                    'Newtonsoft.Json',
                    'Serilog',
                    'AutoMapper',
                    'xUnit',
                    'Moq',
                ],

                'tools' => [
                    'Visual Studio',
                    'Git',
                    'Azure DevOps',
                    'Postman',
                    'Docker',
                ],

                'databases' => [
                    'SQL Server',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'C#',
                    '.NET',
                    'SQL',
                    'API',
                    'Tests',
                    'Debugging',
                    'Code Review',
                ],

                'management' => [
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER2', 'USER3', 'USER4'],
                'title' => 'Projet scolaire - Plateforme collaborative',
                'description' => 'Création d une plateforme collaborative pour un projet universitaire.',
                'details' => 'Gestion des comptes, projets, commentaires, notifications et permissions.',
                'start' => '2024-01-15',
                'end' => '2024-05-30',
                'precision' => 'month',
                'effectif' => 5,
                'favorite' => true,
                'type' => 'Projet scolaire',

                'technologies' => [
                    'Java',
                    'SQL',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Spring Boot',
                    'React',
                ],

                'libraries' => [
                    'Hibernate',
                    'Jackson',
                    'Lombok',
                    'JUnit',
                    'Mockito',
                    'React Router',
                    'Axios',
                ],

                'tools' => [
                    'IntelliJ IDEA',
                    'Visual Studio Code',
                    'Git',
                    'GitHub',
                    'Docker',
                    'Postman',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'Java',
                    'Spring',
                    'React',
                    'API',
                    'Git',
                    'Travail en équipe',
                ],

                'management' => [
                    'Agile',
                    'Scrum',
                ],
            ],

            // ========================================================
            // USER 3
            // ========================================================

            [
                'users' => ['USER3'],
                'title' => 'Stage - Développeur full-stack',
                'description' => 'Stage de développement d une application web complète.',
                'details' => 'Participation à la conception, au développement frontend et backend, aux tests et à la documentation technique.',
                'start' => '2023-04-03',
                'end' => '2023-06-30',
                'precision' => 'month',
                'effectif' => 7,
                'favorite' => true,
                'type' => 'Stage',

                'technologies' => [
                    'PHP',
                    'JavaScript',
                    'TypeScript',
                    'SQL',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                    'React',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'React Router',
                    'Axios',
                    'PHPUnit',
                    'Jest',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitLab',
                    'Docker',
                    'Postman',
                    'Figma',
                ],

                'databases' => [
                    'PostgreSQL',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'PHP',
                    'JavaScript',
                    'TypeScript',
                    'React',
                    'Symfony',
                    'API',
                    'UI/UX',
                ],

                'management' => [
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER3'],
                'title' => 'Compétition régionale de football',
                'description' => 'Participation à une compétition régionale de football.',
                'details' => 'Participation à plusieurs matchs avec préparation physique, entraînements collectifs et compétition.',
                'start' => '2025-05-17',
                'end' => '2025-05-18',
                'precision' => 'day',
                'effectif' => 16,
                'favorite' => true,
                'type' => 'Compétition',

                'technologies' => [],
                'frameworks' => [],
                'libraries' => [],
                'tools' => [],

                'databases' => [],
                'apis' => [],

                'skills' => [
                    'Travail en équipe',
                    'Communication',
                    'Gestion du stress',
                    'Discipline',
                    'Leadership',
                ],

                'management' => [],
            ],

            // ========================================================
            // USER 4
            // ========================================================

            [
                'users' => ['USER4'],
                'title' => 'CDI - Ingénieur logiciel .NET',
                'description' => 'Développement d applications métier dans un environnement Microsoft.',
                'details' => 'Conception de services backend, développement d API, maintenance et amélioration des performances.',
                'start' => '2022-10-03',
                'end' => null,
                'precision' => 'month',
                'effectif' => 20,
                'favorite' => true,
                'type' => 'CDI',

                'technologies' => [
                    'C#',
                    'SQL',
                    'JavaScript',
                    'TypeScript',
                ],

                'frameworks' => [
                    '.NET',
                    'ASP.NET Core',
                    'Angular',
                ],

                'libraries' => [
                    'Entity Framework',
                    'Serilog',
                    'AutoMapper',
                    'MediatR',
                    'FluentValidation',
                    'xUnit',
                    'Moq',
                ],

                'tools' => [
                    'Visual Studio',
                    'Rider',
                    'Git',
                    'Azure DevOps',
                    'Docker',
                    'Postman',
                ],

                'databases' => [
                    'SQL Server',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'C#',
                    '.NET',
                    'Architecture logicielle',
                    'API',
                    'Tests',
                    'DevOps',
                    'Code Review',
                ],

                'management' => [
                    'Scrum',
                    'Agile',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER4', 'USER5'],
                'title' => 'Hackathon - Application de mobilité',
                'description' => 'Création d un prototype d application de mobilité en 48 heures.',
                'details' => 'Conception du produit, développement du prototype, intégration d une API cartographique et présentation devant un jury.',
                'start' => '2025-03-21',
                'end' => '2025-03-23',
                'precision' => 'day',
                'effectif' => 5,
                'favorite' => true,
                'type' => 'Concours',

                'technologies' => [
                    'TypeScript',
                    'JavaScript',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'React',
                    'Node.js',
                ],

                'libraries' => [
                    'React Router',
                    'Axios',
                    'Zod',
                    'React Hook Form',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'GitHub',
                    'Docker',
                    'Figma',
                    'Postman',
                ],

                'databases' => [
                    'PostgreSQL',
                ],

                'apis' => [
                    'REST',
                    'OpenStreetMap',
                ],

                'skills' => [
                    'JavaScript',
                    'TypeScript',
                    'UI/UX',
                    'API',
                    'Travail en équipe',
                    'Présentation',
                    'Gestion du temps',
                ],

                'management' => [
                    'Kanban',
                ],
            ],

            // ========================================================
            // USER 5
            // ========================================================

            [
                'users' => ['USER5'],
                'title' => 'Projet personnel - Application mobile',
                'description' => 'Développement d une application mobile de suivi sportif.',
                'details' => 'Application permettant d enregistrer les entraînements, les performances et l évolution des objectifs sportifs.',
                'start' => '2024-06-01',
                'end' => '2024-11-30',
                'precision' => 'month',
                'effectif' => 1,
                'favorite' => true,
                'type' => 'Projet perso',

                'technologies' => [
                    'TypeScript',
                    'JavaScript',
                ],

                'frameworks' => [
                    'React Native',
                    'Expo',
                ],

                'libraries' => [
                    'React Navigation',
                    'Axios',
                    'Zod',
                    'React Hook Form',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'GitHub',
                    'Android Studio',
                    'Figma',
                    'Expo CLI',
                ],

                'databases' => [
                    'Firebase',
                ],

                'apis' => [
                    'REST',
                    'Firebase API',
                ],

                'skills' => [
                    'TypeScript',
                    'Mobile',
                    'UI/UX',
                    'API',
                    'Autonomie',
                ],

                'management' => [
                    'Kanban',
                ],
            ],

            [
                'users' => ['USER5'],
                'title' => 'Séminaire - Cybersécurité web',
                'description' => 'Séminaire consacré aux vulnérabilités des applications web.',
                'details' => 'Présentation des principales attaques web, de la sécurité des API, de l authentification et des bonnes pratiques OWASP.',
                'start' => '2025-04-12',
                'end' => '2025-04-12',
                'precision' => 'day',
                'effectif' => 100,
                'favorite' => true,
                'type' => 'Séminaire',

                'technologies' => [
                    'PHP',
                    'JavaScript',
                    'SQL',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Symfony Security',
                    'Symfony Validator',
                ],

                'tools' => [
                    'Burp Suite',
                    'OWASP ZAP',
                    'Postman',
                    'Wireshark',
                ],

                'databases' => [
                    'MariaDB',
                    'PostgreSQL',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'Cybersécurité',
                    'Sécurité web',
                    'API Security',
                    'SQL',
                ],

                'management' => [],
            ],

            // ========================================================
            // USER 6
            // ========================================================

            [
                'users' => ['USER6'],
                'title' => 'Contrat de professionnalisation - Développeur backend',
                'description' => 'Contrat de professionnalisation dans une équipe backend.',
                'details' => 'Développement d API, accès aux bases de données, tests automatisés et participation aux déploiements.',
                'start' => '2024-09-01',
                'end' => '2026-08-31',
                'precision' => 'year',
                'effectif' => 15,
                'favorite' => true,
                'type' => 'Contrat pro',

                'technologies' => [
                    'PHP',
                    'SQL',
                    'JavaScript',
                    'Bash',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Symfony Messenger',
                    'Symfony Serializer',
                    'Symfony Validator',
                    'Monolog',
                    'PHPUnit',
                    'Guzzle',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitLab',
                    'Docker',
                    'Jira',
                    'Postman',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'API',
                    'SQL',
                    'Docker',
                    'Git',
                    'Tests',
                ],

                'management' => [
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER6', 'USER7'],
                'title' => 'Projet informatique - API de gestion financière',
                'description' => 'Création d une API pour gérer des comptes et transactions financières.',
                'details' => 'Développement d une API sécurisée avec authentification JWT, gestion des transactions et documentation OpenAPI.',
                'start' => '2025-01-05',
                'end' => '2025-03-15',
                'precision' => 'month',
                'effectif' => 2,
                'favorite' => true,
                'type' => 'Projet informatique',

                'technologies' => [
                    'PHP',
                    'SQL',
                    'JavaScript',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'API Platform',
                    'Lexik JWT Authentication',
                    'Symfony Serializer',
                    'Symfony Validator',
                    'PHPUnit',
                    'Guzzle',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'GitHub',
                    'Docker',
                    'Postman',
                    'Swagger UI',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                ],

                'skills' => [
                    'PHP',
                    'API',
                    'REST',
                    'JWT',
                    'SQL',
                    'Tests',
                    'Sécurité web',
                ],

                'management' => [
                    'Kanban',
                    'GitFlow',
                ],
            ],

            // ========================================================
            // USER 7
            // ========================================================

            [
                'users' => ['USER7'],
                'title' => 'Formation - Kubernetes et DevOps',
                'description' => 'Formation pratique à Kubernetes et aux pratiques DevOps.',
                'details' => 'Déploiement d applications conteneurisées, gestion des pods, services, ingress et pipelines CI/CD.',
                'start' => '2025-06-03',
                'end' => '2025-06-05',
                'precision' => 'day',
                'effectif' => 16,
                'favorite' => true,
                'type' => 'Formation',

                'technologies' => [
                    'Bash',
                    'YAML',
                    'Python',
                ],

                'frameworks' => [],

                'libraries' => [],

                'tools' => [
                    'Docker',
                    'Kubernetes',
                    'kubectl',
                    'Helm',
                    'GitLab',
                    'Jenkins',
                    'Terraform',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'DevOps',
                    'Docker',
                    'Kubernetes',
                    'Linux',
                    'CI/CD',
                    'Cloud',
                    'Automatisation',
                ],

                'management' => [
                    'Agile',
                ],
            ],

            [
                'users' => ['USER7'],
                'title' => 'Compétition régionale de natation',
                'description' => 'Participation à une compétition régionale de natation.',
                'details' => 'Participation à plusieurs épreuves individuelles avec préparation physique et suivi des performances.',
                'start' => '2025-07-12',
                'end' => '2025-07-13',
                'precision' => 'day',
                'effectif' => 120,
                'favorite' => true,
                'type' => 'Compétition',

                'technologies' => [],
                'frameworks' => [],
                'libraries' => [],
                'tools' => [],
                'databases' => [],
                'apis' => [],

                'skills' => [
                    'Discipline',
                    'Gestion du stress',
                    'Gestion du temps',
                    'Dépassement de soi',
                    'Concentration',
                ],

                'management' => [],
            ],

            // ========================================================
            // USER 8
            // ========================================================

            [
                'users' => ['USER8'],
                'title' => 'Stage - Administration système et réseau',
                'description' => 'Stage orienté systèmes, réseaux et infrastructure.',
                'details' => 'Administration de serveurs Linux, configuration réseau, virtualisation, supervision et sauvegardes.',
                'start' => '2023-05-01',
                'end' => '2023-07-31',
                'precision' => 'month',
                'effectif' => 6,
                'favorite' => true,
                'type' => 'Stage',

                'technologies' => [
                    'Bash',
                    'Python',
                    'YAML',
                ],

                'frameworks' => [],

                'libraries' => [],

                'tools' => [
                    'Linux',
                    'VirtualBox',
                    'Docker',
                    'Wireshark',
                    'PuTTY',
                    'Git',
                    'Ansible',
                ],

                'databases' => [],

                'apis' => [],

                'skills' => [
                    'Linux',
                    'Réseau',
                    'DevOps',
                    'Cybersécurité',
                    'Automatisation',
                    'Administration système',
                ],

                'management' => [
                    'Kanban',
                ],
            ],

            [
                'users' => ['USER8'],
                'title' => 'Projet scolaire - Data analyse',
                'description' => 'Analyse d un jeu de données dans le cadre d un projet scolaire.',
                'details' => 'Nettoyage des données, analyse statistique, visualisation et création d un modèle de prédiction.',
                'start' => '2025-02-03',
                'end' => '2025-04-25',
                'precision' => 'month',
                'effectif' => 3,
                'favorite' => true,
                'type' => 'Projet scolaire',

                'technologies' => [
                    'Python',
                    'SQL',
                ],

                'frameworks' => [
                    'FastAPI',
                ],

                'libraries' => [
                    'Pandas',
                    'NumPy',
                    'Matplotlib',
                    'Seaborn',
                    'Scikit-learn',
                    'Jupyter',
                    'Pydantic',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Jupyter Notebook',
                    'Git',
                    'GitHub',
                    'Postman',
                ],

                'databases' => [
                    'PostgreSQL',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'Python',
                    'Data',
                    'Statistiques',
                    'Machine Learning',
                    'SQL',
                    'Visualisation de données',
                ],

                'management' => [
                    'Kanban',
                ],
            ],

            // ========================================================
            // USER 9
            // ========================================================

            [
                'users' => ['USER9'],
                'title' => 'CDI - Ingénieur Java backend',
                'description' => 'Développement de services backend Java dans une architecture distribuée.',
                'details' => 'Développement de microservices, conception d API REST, traitement asynchrone et optimisation des performances.',
                'start' => '2022-10-03',
                'end' => null,
                'precision' => 'month',
                'effectif' => 25,
                'favorite' => true,
                'type' => 'CDI',

                'technologies' => [
                    'Java',
                    'SQL',
                    'JavaScript',
                    'TypeScript',
                ],

                'frameworks' => [
                    'Spring Boot',
                    'React',
                ],

                'libraries' => [
                    'Hibernate',
                    'Jackson',
                    'Lombok',
                    'JUnit',
                    'Mockito',
                    'MapStruct',
                    'Resilience4j',
                ],

                'tools' => [
                    'IntelliJ IDEA',
                    'Git',
                    'GitLab',
                    'Docker',
                    'Jenkins',
                    'SonarQube',
                    'Postman',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                    'MongoDB',
                ],

                'apis' => [
                    'REST',
                    'GraphQL',
                    'OpenAPI',
                ],

                'skills' => [
                    'Java',
                    'Spring Boot',
                    'Microservices',
                    'API',
                    'Architecture logicielle',
                    'DevOps',
                    'Tests',
                ],

                'management' => [
                    'Scrum',
                    'Agile',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER9', 'USER10'],
                'title' => 'Conférence - Intelligence artificielle',
                'description' => 'Conférence consacrée à l intelligence artificielle et aux modèles génératifs.',
                'details' => 'Présentation du machine learning, des grands modèles de langage, des modèles de vision et des enjeux éthiques.',
                'start' => '2025-09-20',
                'end' => '2025-09-20',
                'precision' => 'day',
                'effectif' => 300,
                'favorite' => true,
                'type' => 'Séminaire',

                'technologies' => [
                    'Python',
                ],

                'frameworks' => [
                    'FastAPI',
                ],

                'libraries' => [
                    'PyTorch',
                    'Transformers',
                    'Pandas',
                    'NumPy',
                    'Scikit-learn',
                ],

                'tools' => [
                    'Jupyter Notebook',
                    'Google Colab',
                    'Hugging Face',
                    'Git',
                ],

                'databases' => [],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'Intelligence artificielle',
                    'Machine Learning',
                    'Data',
                    'Python',
                    'Prompt Engineering',
                ],

                'management' => [],
            ],

            // ========================================================
            // USER 10
            // ========================================================

            [
                'users' => ['USER10'],
                'title' => 'Projet personnel - Boutique e-commerce',
                'description' => 'Développement d une boutique en ligne complète.',
                'details' => 'Gestion du catalogue, comptes clients, panier, commandes, paiements, administration et système de recherche.',
                'start' => '2024-11-01',
                'end' => '2025-02-28',
                'precision' => 'month',
                'effectif' => 1,
                'favorite' => true,
                'type' => 'Projet perso',

                'technologies' => [
                    'PHP',
                    'JavaScript',
                    'TypeScript',
                    'SQL',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                    'React',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Twig',
                    'Symfony Security',
                    'Symfony Validator',
                    'Symfony Mailer',
                    'Stripe PHP SDK',
                    'PHPUnit',
                    'React Router',
                    'Axios',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                    'GitHub',
                    'Docker',
                    'Figma',
                    'Postman',
                ],

                'databases' => [
                    'MariaDB',
                    'Redis',
                    'Elasticsearch',
                ],

                'apis' => [
                    'REST',
                    'Stripe API',
                    'OpenAPI',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'E-commerce',
                    'API',
                    'SQL',
                    'UI/UX',
                    'Sécurité',
                ],

                'management' => [
                    'Kanban',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER10'],
                'title' => 'Concours de programmation algorithmique',
                'description' => 'Participation à un concours de programmation.',
                'details' => 'Résolution de problèmes algorithmiques et optimisation des solutions sous contrainte de temps.',
                'start' => '2025-10-11',
                'end' => '2025-10-11',
                'precision' => 'day',
                'effectif' => 60,
                'favorite' => true,
                'type' => 'Concours',

                'technologies' => [
                    'Python',
                    'C++',
                ],

                'frameworks' => [],
                'libraries' => [],

                'tools' => [
                    'Visual Studio Code',
                    'Git',
                ],

                'databases' => [],
                'apis' => [],

                'skills' => [
                    'Algorithmique',
                    'Résolution de problèmes',
                    'C++',
                    'Python',
                    'Gestion du temps',
                    'Concentration',
                ],

                'management' => [],
            ],

            // ========================================================
            // PROJETS COMMUNS
            // ========================================================

            [
                'users' => ['USER1', 'USER2', 'USER3', 'USER4'],
                'title' => 'Projet collectif - Plateforme SaaS',
                'description' => 'Conception d une plateforme SaaS de gestion de projets.',
                'details' => 'Application multi-utilisateurs avec gestion des organisations, projets, tâches, permissions, notifications et tableaux de bord.',
                'start' => '2025-01-10',
                'end' => '2025-05-30',
                'precision' => 'month',
                'effectif' => 6,
                'favorite' => true,
                'type' => 'Projet informatique',

                'technologies' => [
                    'PHP',
                    'TypeScript',
                    'JavaScript',
                    'SQL',
                    'HTML',
                    'CSS',
                ],

                'frameworks' => [
                    'Symfony',
                    'React',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'API Platform',
                    'Symfony Messenger',
                    'Symfony Serializer',
                    'Symfony Validator',
                    'PHPUnit',
                    'React Router',
                    'Axios',
                    'Zod',
                ],

                'tools' => [
                    'Visual Studio Code',
                    'GitHub',
                    'Docker',
                    'Postman',
                    'Figma',
                    'Jira',
                    'SonarQube',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                    'OpenAPI',
                    'GraphQL',
                ],

                'skills' => [
                    'PHP',
                    'Symfony',
                    'React',
                    'TypeScript',
                    'API',
                    'Architecture logicielle',
                    'Travail en équipe',
                    'Code Review',
                    'Tests',
                ],

                'management' => [
                    'Agile',
                    'Scrum',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER5', 'USER6', 'USER7', 'USER8'],
                'title' => 'Projet DevOps - Pipeline CI/CD',
                'description' => 'Mise en place d une chaîne complète d intégration et de déploiement continu.',
                'details' => 'Création des pipelines, tests automatisés, construction des images Docker, analyse du code et déploiement automatique.',
                'start' => '2025-07-01',
                'end' => '2025-09-15',
                'precision' => 'month',
                'effectif' => 4,
                'favorite' => true,
                'type' => 'Projet informatique',

                'technologies' => [
                    'Bash',
                    'YAML',
                    'Python',
                    'PHP',
                ],

                'frameworks' => [
                    'Symfony',
                ],

                'libraries' => [
                    'PHPUnit',
                ],

                'tools' => [
                    'Docker',
                    'GitLab',
                    'GitLab CI',
                    'Kubernetes',
                    'Terraform',
                    'Jenkins',
                    'SonarQube',
                    'Prometheus',
                    'Grafana',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'DevOps',
                    'CI/CD',
                    'Docker',
                    'Kubernetes',
                    'Linux',
                    'Cloud',
                    'Automatisation',
                    'Monitoring',
                ],

                'management' => [
                    'Agile',
                ],
            ],

            [
                'users' => ['ADMIN', 'USER5', 'USER9', 'USER10'],
                'title' => 'Forum professionnel des technologies web',
                'description' => 'Participation à un forum professionnel consacré aux technologies web.',
                'details' => 'Rencontres avec des entreprises, conférences techniques et découverte de nouvelles pratiques de développement.',
                'start' => '2025-11-15',
                'end' => '2025-11-15',
                'precision' => 'day',
                'effectif' => 500,
                'favorite' => false,
                'type' => 'Séminaire',

                'technologies' => [
                    'PHP',
                    'Java',
                    'Python',
                    'C#',
                    'JavaScript',
                    'TypeScript',
                ],

                'frameworks' => [
                    'Symfony',
                    'Spring Boot',
                    '.NET',
                    'React',
                    'Vue.js',
                ],

                'libraries' => [
                    'Doctrine ORM',
                    'Hibernate',
                    'React Router',
                    'Axios',
                ],

                'tools' => [
                    'Git',
                    'GitHub',
                    'GitLab',
                    'Docker',
                    'Kubernetes',
                    'Jira',
                    'Figma',
                ],

                'databases' => [
                    'PostgreSQL',
                    'MariaDB',
                    'Redis',
                    'MongoDB',
                ],

                'apis' => [
                    'REST',
                    'GraphQL',
                    'OpenAPI',
                ],

                'skills' => [
                    'Communication',
                    'Réseau professionnel',
                    'Veille technologique',
                    'Travail en équipe',
                ],

                'management' => [
                    'Agile',
                    'Scrum',
                    'Kanban',
                ],
            ],

            [
                'users' => ['USER2', 'USER6', 'USER8', 'USER10'],
                'title' => 'Formation - Git et bonnes pratiques de collaboration',
                'description' => 'Formation pratique sur Git et les workflows collaboratifs.',
                'details' => 'Branches, merge, rebase, résolution de conflits, pull requests, code review et GitFlow.',
                'start' => '2025-12-01',
                'end' => '2025-12-02',
                'precision' => 'day',
                'effectif' => 20,
                'favorite' => true,
                'type' => 'Formation',

                'technologies' => [
                    'PHP',
                    'JavaScript',
                    'Python',
                    'C#',
                ],

                'frameworks' => [],

                'libraries' => [],

                'tools' => [
                    'Git',
                    'GitHub',
                    'GitLab',
                    'GitHub Desktop',
                    'Visual Studio Code',
                ],

                'databases' => [],
                'apis' => [],

                'skills' => [
                    'Git',
                    'Code Review',
                    'Travail en équipe',
                    'Gestion de versions',
                    'Collaboration',
                ],

                'management' => [
                    'Agile',
                    'GitFlow',
                ],
            ],

            [
                'users' => ['USER3', 'USER7', 'USER9'],
                'title' => 'Séminaire - Intelligence artificielle générative',
                'description' => 'Découverte des usages professionnels de l intelligence artificielle générative.',
                'details' => 'Présentation des modèles de langage, de la génération de code, du RAG, des agents et des problématiques de sécurité et de confidentialité.',
                'start' => '2026-02-14',
                'end' => '2026-02-14',
                'precision' => 'day',
                'effectif' => 250,
                'favorite' => true,
                'type' => 'Séminaire',

                'technologies' => [
                    'Python',
                    'JavaScript',
                ],

                'frameworks' => [
                    'FastAPI',
                ],

                'libraries' => [
                    'PyTorch',
                    'Transformers',
                    'LangChain',
                    'Pandas',
                    'NumPy',
                ],

                'tools' => [
                    'Jupyter Notebook',
                    'Google Colab',
                    'Hugging Face',
                    'Git',
                    'Visual Studio Code',
                ],

                'databases' => [
                    'PostgreSQL',
                    'Redis',
                ],

                'apis' => [
                    'REST',
                ],

                'skills' => [
                    'Intelligence artificielle',
                    'Machine Learning',
                    'Python',
                    'Prompt Engineering',
                    'Veille technologique',
                    'Data',
                ],

                'management' => [],
            ],

            [
                'users' => ['USER4', 'USER8'],
                'title' => 'Compétition de course à pied',
                'description' => 'Participation à une compétition sportive de course à pied.',
                'details' => 'Préparation sportive et participation à une course régionale.',
                'start' => '2026-04-19',
                'end' => '2026-04-19',
                'precision' => 'day',
                'effectif' => 800,
                'favorite' => true,
                'type' => 'Compétition',

                'technologies' => [],
                'frameworks' => [],
                'libraries' => [],
                'tools' => [],
                'databases' => [],
                'apis' => [],

                'skills' => [
                    'Discipline',
                    'Dépassement de soi',
                    'Gestion du stress',
                    'Gestion du temps',
                    'Persévérance',
                ],

                'management' => [],
            ],
        ];

        /*
         * ============================================================
         * CRÉATION DES EVENTS
         * ============================================================
         */

        foreach ($events as $data) {
            $event = new Event();

            $event
                ->setTitle($data['title'])
                ->setDescription($data['description'])
                ->setDetails($data['details'])
                ->setStartDate(new \DateTimeImmutable($data['start']))
                ->setEndDate(
                    $data['end'] !== null
                        ? new \DateTimeImmutable($data['end'])
                        : null
                )
                ->setDatePrecision($data['precision'])
                ->setEffectif($data['effectif'])
                ->setIsFavorite($data['favorite']);

            /*
             * EventType
             */
            $eventType = $eventTypeRepository->findOneBy([
                'name' => $data['type'],
            ]);

            if ($eventType !== null) {
                $event->setEventType($eventType);
            }

            /*
             * Users
             */
            foreach ($data['users'] as $userKey) {
                if (isset($users[$userKey])) {
                    $event->addUser($users[$userKey]);
                }
            }

            /*
             * Technologies
             */
            foreach ($data['technologies'] as $name) {
                $technology = $technologyRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($technology !== null) {
                    $event->addTechnology($technology);
                }
            }

            /*
             * Frameworks
             */
            foreach ($data['frameworks'] as $name) {
                $framework = $frameworkRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($framework !== null) {
                    $event->addFramework($framework);
                }
            }

            /*
             * Libraries
             */
            foreach ($data['libraries'] as $name) {
                $library = $libraryRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($library !== null) {
                    $event->addLibrary($library);
                }
            }

            /*
             * Tools
             */
            foreach ($data['tools'] as $name) {
                $tool = $toolRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($tool !== null) {
                    $event->addTool($tool);
                }
            }

            /*
             * Databases
             */
            foreach ($data['databases'] as $name) {
                $database = $databaseRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($database !== null) {
                    $event->addDatabaseList($database);
                }
            }

            /*
             * APIs
             */
            foreach ($data['apis'] as $name) {
                $api = $apiRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($api !== null) {
                    $event->addApi($api);
                }
            }

            /*
             * Skills
             */
            foreach ($data['skills'] as $name) {
                $skill = $skillRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($skill !== null) {
                    $event->addSkill($skill);
                }
            }

            /*
             * Project Management
             */
            foreach ($data['management'] as $name) {
                $projectManagement = $projectManagementRepository->findOneBy([
                    'name' => $name,
                ]);

                if ($projectManagement !== null) {
                    $event->addProjectManagement($projectManagement);
                }
            }

            $manager->persist($event);
        }

        $manager->flush();
    }

    private function findUser($repository, string $email): User
    {
        $user = $repository->findOneBy([
            'email' => $email,
        ]);

        if (!$user instanceof User) {
            throw new \RuntimeException(
                sprintf(
                    'Utilisateur introuvable : %s',
                    $email
                )
            );
        }

        return $user;
    }
}
