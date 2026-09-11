<?php

namespace App\DataFixtures;

use App\Entity\Skill;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class SkillFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['skill'];
    }

    public function load(ObjectManager $manager): void
    {
        $skills = [

            /*
             * ============================================================
             * PROGRAMMATION / DÉVELOPPEMENT
             * ============================================================
             */

            'Programmation',
            'Développement logiciel',
            'Développement web',
            'Développement backend',
            'Développement frontend',
            'Développement full-stack',
            'Développement mobile',
            'Développement desktop',
            'Développement embarqué',
            'Développement système',
            'Développement d’applications',
            'Programmation orientée objet',
            'Programmation fonctionnelle',
            'Programmation procédurale',
            'Programmation événementielle',
            'Programmation concurrente',
            'Programmation parallèle',
            'Programmation asynchrone',
            'Programmation générique',
            'Métaprogrammation',
            'Algorithmique',
            'Structures de données',
            'Complexité algorithmique',
            'Optimisation algorithmique',
            'Résolution de problèmes',
            'Conception logicielle',
            'Architecture logicielle',
            'Modélisation logicielle',
            'Conception orientée objet',
            'Design Patterns',
            'Refactoring',
            'Clean Code',
            'Code Review',
            'Pair Programming',
            'Documentation technique',
            'Maintenance logicielle',
            'Debugging',
            'Analyse de bugs',
            'Profiling',
            'Optimisation des performances',

            /*
             * ============================================================
             * LANGAGES DE PROGRAMMATION
             * ============================================================
             */

            'PHP',
            'JavaScript',
            'TypeScript',
            'Python',
            'Java',
            'C',
            'C++',
            'C#',
            'Go',
            'Rust',
            'Ruby',
            'Kotlin',
            'Swift',
            'Dart',
            'Scala',
            'R',
            'Perl',
            'Lua',
            'Haskell',
            'Elixir',
            'Erlang',
            'F#',
            'Visual Basic',
            'Objective-C',
            'MATLAB',
            'Groovy',
            'Shell Scripting',
            'Bash',
            'PowerShell',
            'SQL',
            'PL/SQL',
            'T-SQL',
            'Assembly',
            'COBOL',
            'Fortran',

            /*
             * ============================================================
             * WEB
             * ============================================================
             */

            'HTML',
            'HTML5',
            'CSS',
            'CSS3',
            'Responsive Web Design',
            'Web Components',
            'DOM',
            'Web APIs',
            'HTTP',
            'HTTPS',
            'WebSockets',
            'Server-Sent Events',
            'Web Performance',
            'Progressive Web Apps',
            'PWA',
            'Accessibilité web',
            'SEO technique',
            'SEO',
            'Cross-Browser Development',
            'Browser DevTools',
            'CORS',
            'Content Security Policy',
            'CSP',
            'Web Security',

            /*
             * ============================================================
             * BACKEND
             * ============================================================
             */

            'Conception d’API',
            'Développement d’API',
            'API REST',
            'API GraphQL',
            'API Design',
            'API Security',
            'API Versioning',
            'Authentication',
            'Authorization',
            'Gestion des sessions',
            'Gestion des utilisateurs',
            'Gestion des rôles',
            'RBAC',
            'ABAC',
            'OAuth',
            'OAuth 2.0',
            'OpenID Connect',
            'JWT',
            'Webhooks',
            'Microservices',
            'Monolith Architecture',
            'Modular Monolith',
            'Event-Driven Architecture',
            'Message-Driven Architecture',
            'Serverless',
            'Backend as a Service',
            'BFF',
            'Backend For Frontend',

            /*
             * ============================================================
             * FRONTEND
             * ============================================================
             */

            'Développement frontend',
            'Architecture frontend',
            'State Management',
            'Gestion d’état',
            'Component-Based Development',
            'Responsive Design',
            'Mobile First',
            'Progressive Enhancement',
            'Web Accessibility',
            'A11y',
            'Internationalisation',
            'i18n',
            'Localisation',
            'l10n',
            'Frontend Testing',
            'Cross-Browser Testing',
            'Performance Frontend',
            'Optimisation du chargement',
            'Lazy Loading',
            'Code Splitting',

            /*
             * ============================================================
             * BASES DE DONNÉES
             * ============================================================
             */

            'Conception de bases de données',
            'Modélisation de données',
            'Modèle relationnel',
            'Modèle NoSQL',
            'Normalisation des données',
            'Dénormalisation',
            'SQL',
            'Requêtes SQL',
            'SQL avancé',
            'Jointures SQL',
            'Sous-requêtes SQL',
            'Transactions',
            'ACID',
            'Indexation',
            'Optimisation SQL',
            'Optimisation de requêtes',
            'Database Performance',
            'Database Administration',
            'Migration de bases de données',
            'Backup de bases de données',
            'Réplication de bases de données',
            'Sharding',
            'Partitionnement',
            'Caching',
            'Cache Invalidation',
            'ORM',
            'Data Modeling',
            'Data Migration',

            /*
             * ============================================================
             * DATA
             * ============================================================
             */

            'Data Analysis',
            'Analyse de données',
            'Data Engineering',
            'Data Science',
            'Data Visualization',
            'Data Mining',
            'Data Cleaning',
            'Data Preparation',
            'ETL',
            'ELT',
            'Data Pipeline',
            'Data Warehouse',
            'Data Lake',
            'Data Lakehouse',
            'Business Intelligence',
            'BI',
            'Reporting',
            'Data Governance',
            'Data Quality',
            'Data Integration',
            'Data Modeling',
            'Statistiques',
            'Statistiques descriptives',
            'Probabilités',
            'Analyse exploratoire des données',
            'EDA',

            /*
             * ============================================================
             * IA / MACHINE LEARNING
             * ============================================================
             */

            'Intelligence artificielle',
            'Machine Learning',
            'Deep Learning',
            'Supervised Learning',
            'Unsupervised Learning',
            'Reinforcement Learning',
            'Natural Language Processing',
            'NLP',
            'Computer Vision',
            'Speech Recognition',
            'Generative AI',
            'IA générative',
            'Large Language Models',
            'LLM',
            'Prompt Engineering',
            'RAG',
            'Retrieval Augmented Generation',
            'Fine-Tuning',
            'Embeddings',
            'Vector Search',
            'Vector Databases',
            'Model Evaluation',
            'MLOps',
            'Feature Engineering',
            'Model Deployment',
            'Model Monitoring',
            'Data Labeling',
            'AI Safety',
            'AI Ethics',
            'Explainable AI',
            'XAI',

            /*
             * ============================================================
             * DEVOPS
             * ============================================================
             */

            'DevOps',
            'DevSecOps',
            'CI/CD',
            'Continuous Integration',
            'Continuous Delivery',
            'Continuous Deployment',
            'Build Automation',
            'Release Automation',
            'Infrastructure as Code',
            'IaC',
            'Configuration Management',
            'Infrastructure Management',
            'Cloud Computing',
            'Cloud Architecture',
            'Cloud Deployment',
            'Cloud Migration',
            'Containerisation',
            'Containerization',
            'Container Management',
            'Orchestration',
            'Service Discovery',
            'Load Balancing',
            'Auto Scaling',
            'High Availability',
            'Disaster Recovery',
            'Backup Management',
            'Monitoring',
            'Logging',
            'Alerting',
            'Observability',
            'Distributed Tracing',
            'Incident Management',
            'Site Reliability Engineering',
            'SRE',
            'Platform Engineering',
            'GitOps',

            /*
             * ============================================================
             * CLOUD
             * ============================================================
             */

            'Cloud Architecture',
            'Cloud Security',
            'Cloud Networking',
            'Cloud Storage',
            'Cloud Databases',
            'Cloud Cost Optimization',
            'Cloud Governance',
            'Cloud Migration',
            'Multi-Cloud',
            'Hybrid Cloud',
            'Serverless Architecture',
            'FinOps',

            /*
             * ============================================================
             * CONTENEURS / INFRASTRUCTURE
             * ============================================================
             */

            'Docker',
            'Containers',
            'Containerisation',
            'Kubernetes',
            'Container Orchestration',
            'Infrastructure Management',
            'Linux Administration',
            'Windows Server Administration',
            'System Administration',
            'Network Administration',
            'DNS',
            'DHCP',
            'TCP/IP',
            'HTTP',
            'TLS',
            'SSL',
            'Reverse Proxy',
            'Load Balancing',
            'Virtualisation',
            'Virtual Machines',
            'Storage Management',

            /*
             * ============================================================
             * CYBERSÉCURITÉ
             * ============================================================
             */

            'Cybersécurité',
            'Sécurité informatique',
            'Application Security',
            'Web Application Security',
            'API Security',
            'Cloud Security',
            'Network Security',
            'Endpoint Security',
            'Identity and Access Management',
            'IAM',
            'Authentication Security',
            'Authorization Security',
            'Cryptographie',
            'Chiffrement',
            'Hashing',
            'Gestion des secrets',
            'Secrets Management',
            'Security Auditing',
            'Security Assessment',
            'Threat Modeling',
            'Threat Detection',
            'Vulnerability Management',
            'Vulnerability Assessment',
            'Penetration Testing',
            'Pentest',
            'Ethical Hacking',
            'Security Monitoring',
            'Incident Response',
            'Digital Forensics',
            'Security Incident Management',
            'Secure Coding',
            'Secure Software Development',
            'OWASP',
            'OWASP Top 10',
            'Zero Trust',
            'Security by Design',
            'Privacy by Design',
            'RGPD',
            'Protection des données',

            /*
             * ============================================================
             * TESTS
             * ============================================================
             */

            'Tests logiciels',
            'Software Testing',
            'Tests unitaires',
            'Unit Testing',
            'Tests d’intégration',
            'Integration Testing',
            'Tests fonctionnels',
            'Functional Testing',
            'Tests end-to-end',
            'E2E Testing',
            'Tests d’acceptation',
            'Acceptance Testing',
            'Tests de régression',
            'Regression Testing',
            'Tests de performance',
            'Performance Testing',
            'Tests de charge',
            'Load Testing',
            'Stress Testing',
            'Tests de sécurité',
            'Security Testing',
            'Tests exploratoires',
            'Exploratory Testing',
            'Tests manuels',
            'Tests automatisés',
            'Test Automation',
            'Test Driven Development',
            'TDD',
            'Behavior Driven Development',
            'BDD',
            'Acceptance Test Driven Development',
            'ATDD',
            'Mocking',
            'Test Doubles',
            'Mutation Testing',
            'Property-Based Testing',
            'Contract Testing',

            /*
             * ============================================================
             * ARCHITECTURE
             * ============================================================
             */

            'Architecture logicielle',
            'Architecture système',
            'Architecture applicative',
            'Architecture distribuée',
            'Architecture orientée services',
            'SOA',
            'Microservices Architecture',
            'Monolithic Architecture',
            'Modular Monolith',
            'Event-Driven Architecture',
            'Hexagonal Architecture',
            'Clean Architecture',
            'Onion Architecture',
            'Layered Architecture',
            'N-Tier Architecture',
            'CQRS',
            'Event Sourcing',
            'Domain Driven Design',
            'DDD',
            'Domain Modeling',
            'Bounded Context',
            'Strategic Design',
            'Tactical Design',
            'API-First Design',
            'Contract-First Design',
            'Evolutionary Architecture',
            'Scalable Architecture',
            'High Availability Architecture',
            'Fault Tolerance',
            'Resilience Engineering',

            /*
             * ============================================================
             * GIT / VERSIONING
             * ============================================================
             */

            'Git',
            'Gestion de versions',
            'Version Control',
            'Git Branching',
            'Git Merge',
            'Git Rebase',
            'Git Cherry-Pick',
            'Git Bisect',
            'Git Hooks',
            'Git Tagging',
            'Pull Requests',
            'Merge Requests',
            'Code Review',
            'Repository Management',
            'Semantic Versioning',
            'Conventional Commits',

            /*
             * ============================================================
             * DOCUMENTATION / QUALITÉ
             * ============================================================
             */

            'Documentation technique',
            'Documentation API',
            'Documentation logicielle',
            'Documentation utilisateur',
            'Architecture Decision Records',
            'ADR',
            'Technical Writing',
            'Knowledge Management',
            'Code Documentation',
            'Documentation as Code',
            'Docs as Code',
            'Standards de codage',
            'Code Quality',
            'Static Analysis',
            'Linting',
            'Technical Debt Management',
            'Code Maintainability',
            'Code Readability',

            /*
             * ============================================================
             * UX / UI / DESIGN
             * ============================================================
             */

            'UX Design',
            'UI Design',
            'User Experience',
            'User Interface Design',
            'User Research',
            'Design Thinking',
            'Human-Centered Design',
            'User-Centered Design',
            'Interaction Design',
            'Information Architecture',
            'Design System',
            'Design Systems',
            'Prototypage',
            'Wireframing',
            'Mockups',
            'User Flow',
            'User Journey',
            'Customer Journey',
            'Empathy Mapping',
            'Usability Testing',
            'A/B Testing',
            'Accessibility',
            'Web Accessibility',
            'Responsive Design',
            'Mobile First',
            'Visual Design',
            'Typography',
            'Color Theory',
            'Design Critique',
            'Service Design',

            /*
             * ============================================================
             * GESTION DE PROJET
             * ============================================================
             */

            'Gestion de projet',
            'IT Project Management',
            'Software Project Management',
            'Project Planning',
            'Project Estimation',
            'Project Scheduling',
            'Resource Planning',
            'Capacity Planning',
            'Risk Management',
            'Issue Management',
            'Change Management',
            'Scope Management',
            'Stakeholder Management',
            'Budget Management',
            'Cost Management',
            'Quality Management',
            'Dependency Management',
            'Requirements Management',
            'Release Management',
            'Project Reporting',
            'Project Monitoring',
            'Project Documentation',
            'Priorisation',
            'Estimation',
            'Planification',
            'Suivi de projet',
            'Gestion des délais',
            'Gestion des ressources',

            /*
             * ============================================================
             * AGILE / MÉTHODES
             * ============================================================
             */

            'Agile',
            'Scrum',
            'Kanban',
            'Lean',
            'Extreme Programming',
            'XP',
            'Scrumban',
            'SAFe',
            'Lean Software Development',
            'Agile Planning',
            'Backlog Management',
            'Backlog Refinement',
            'Sprint Planning',
            'Sprint Review',
            'Sprint Retrospective',
            'Daily Scrum',
            'User Stories',
            'Acceptance Criteria',
            'Definition of Done',
            'Definition of Ready',
            'Story Points',
            'Planning Poker',
            'Velocity Tracking',
            'Retrospective Facilitation',
            'Agile Coaching',
            'Facilitation',

            /*
             * ============================================================
             * PRODUIT
             * ============================================================
             */

            'Product Management',
            'Product Discovery',
            'Product Strategy',
            'Product Development',
            'Product Design',
            'Product Roadmapping',
            'Product Analytics',
            'Product Research',
            'Product Prioritization',
            'Feature Prioritization',
            'Backlog Prioritization',
            'Market Research',
            'Competitive Analysis',
            'Customer Discovery',
            'Customer Development',
            'User Interviews',
            'User Feedback Analysis',
            'Jobs To Be Done',
            'JTBD',
            'Value Proposition',
            'Product-Market Fit',
            'MVP Design',
            'Minimum Viable Product',
            'Experimentation',
            'A/B Testing',
            'Growth Hacking',
            'Product-Led Growth',

            /*
             * ============================================================
             * MANAGEMENT
             * ============================================================
             */

            'Management',
            'Leadership',
            'Team Management',
            'People Management',
            'Remote Management',
            'Management d’équipe',
            'Délégation',
            'Prise de décision',
            'Résolution de problèmes',
            'Gestion des conflits',
            'Gestion des priorités',
            'Gestion du temps',
            'Gestion du changement',
            'Coaching',
            'Mentorat',
            'Accompagnement',
            'Feedback',
            'Évaluation de performance',
            'Motivation d’équipe',
            'Animation d’équipe',
            'Coordination',
            'Organisation',
            'Planification stratégique',

            /*
             * ============================================================
             * COMMUNICATION
             * ============================================================
             */

            'Communication',
            'Communication orale',
            'Communication écrite',
            'Communication technique',
            'Communication interpersonnelle',
            'Communication professionnelle',
            'Présentation',
            'Prise de parole en public',
            'Public Speaking',
            'Storytelling',
            'Communication visuelle',
            'Vulgarisation technique',
            'Technical Communication',
            'Écoute active',
            'Questionnement',
            'Reformulation',
            'Négociation',
            'Médiation',
            'Animation de réunions',
            'Facilitation de réunions',
            'Compte rendu',
            'Rédaction professionnelle',

            /*
             * ============================================================
             * SOFT SKILLS
             * ============================================================
             */

            'Travail en équipe',
            'Teamwork',
            'Collaboration',
            'Autonomie',
            'Rigueur',
            'Organisation',
            'Adaptabilité',
            'Flexibilité',
            'Curiosité',
            'Créativité',
            'Esprit critique',
            'Pensée analytique',
            'Pensée logique',
            'Pensée systémique',
            'Résolution de problèmes',
            'Prise d’initiative',
            'Proactivité',
            'Persévérance',
            'Gestion du stress',
            'Gestion des priorités',
            'Gestion du temps',
            'Esprit de synthèse',
            'Attention aux détails',
            'Apprentissage autonome',
            'Capacité d’apprentissage',
            'Esprit collaboratif',
            'Empathie',
            'Intelligence émotionnelle',
            'Leadership',
            'Responsabilité',
            'Fiabilité',
            'Ponctualité',

            /*
             * ============================================================
             * ENTREPRENEURIAT
             * ============================================================
             */

            'Entrepreneuriat',
            'Entrepreneurship',
            'Business Development',
            'Business Strategy',
            'Business Analysis',
            'Business Model Design',
            'Business Planning',
            'Market Analysis',
            'Market Research',
            'Competitive Analysis',
            'Customer Development',
            'Customer Discovery',
            'Pitch',
            'Pitching',
            'Vente',
            'Sales',
            'Prospection',
            'Négociation commerciale',
            'Relation client',
            'Customer Success',
            'Account Management',
            'Partnership Management',

            /*
             * ============================================================
             * BUSINESS / ANALYSE
             * ============================================================
             */

            'Business Analysis',
            'Analyse fonctionnelle',
            'Analyse métier',
            'Analyse des besoins',
            'Recueil des besoins',
            'Expression des besoins',
            'Rédaction de spécifications',
            'Spécifications fonctionnelles',
            'Spécifications techniques',
            'Process Mapping',
            'Business Process Management',
            'BPM',
            'Modélisation des processus',
            'BPMN',
            'UML',
            'Use Case Analysis',
            'Gap Analysis',
            'SWOT Analysis',
            'KPI Definition',
            'Reporting',
            'Decision Making',

            /*
             * ============================================================
             * FINANCE / GESTION
             * ============================================================
             */

            'Gestion budgétaire',
            'Budgeting',
            'Financial Planning',
            'Cost Analysis',
            'Cost Estimation',
            'ROI Analysis',
            'Business Case',
            'Forecasting',
            'Financial Reporting',
            'Contrôle de gestion',

            /*
             * ============================================================
             * SUPPORT / IT
             * ============================================================
             */

            'IT Support',
            'Support informatique',
            'Help Desk',
            'Service Desk',
            'Troubleshooting',
            'Diagnostic informatique',
            'Maintenance informatique',
            'Gestion des incidents',
            'Gestion des problèmes',
            'Gestion des demandes',
            'IT Asset Management',
            'Gestion du parc informatique',
            'Déploiement logiciel',
            'Gestion des postes de travail',
            'Administration système',
            'Administration réseau',

            /*
             * ============================================================
             * RÉSEAUX
             * ============================================================
             */

            'Networking',
            'Réseaux informatiques',
            'TCP/IP',
            'IPv4',
            'IPv6',
            'Subnetting',
            'Routage',
            'Switching',
            'VLAN',
            'VPN',
            'DNS',
            'DHCP',
            'NAT',
            'Firewall',
            'Proxy',
            'Reverse Proxy',
            'Load Balancing',
            'Network Monitoring',
            'Network Security',
            'Wi-Fi',
            'LAN',
            'WAN',
            'SD-WAN',

            /*
             * ============================================================
             * SYSTÈMES
             * ============================================================
             */

            'Linux',
            'Administration Linux',
            'Administration Windows',
            'Windows Server',
            'Unix',
            'Scripting système',
            'Bash',
            'PowerShell',
            'Gestion des utilisateurs',
            'Gestion des permissions',
            'Gestion des processus',
            'Gestion des services',
            'Monitoring système',
            'Performance système',
            'Hardening système',
            'Virtualisation',
            'Storage Management',

            /*
             * ============================================================
             * COMMUNICATION / LANGUES
             * ============================================================
             */

            'Français',
            'Anglais',
            'Espagnol',
            'Allemand',
            'Italien',
            'Portugais',
            'Néerlandais',
            'Japonais',
            'Chinois',
            'Coréen',
            'Arabe',
            'Communication interculturelle',
            'Anglais technique',
            'Rédaction technique en anglais',

            /*
             * ============================================================
             * ÉDUCATION / TRANSMISSION
             * ============================================================
             */

            'Formation',
            'Pédagogie',
            'Transmission des connaissances',
            'Création de supports pédagogiques',
            'Formation technique',
            'Mentorat',
            'Tutorat',
            'Enseignement',
            'Vulgarisation',
            'Documentation pédagogique',
            'Animation d’ateliers',
            'Workshop Facilitation',

            /*
             * ============================================================
             * RECHERCHE / INNOVATION
             * ============================================================
             */

            'Recherche',
            'Recherche appliquée',
            'Veille technologique',
            'Veille concurrentielle',
            'Innovation',
            'Innovation Management',
            'Proof of Concept',
            'POC',
            'Expérimentation',
            'Prototypage',
            'Benchmarking',
            'Analyse comparative',
            'Recherche utilisateur',
            'Recherche documentaire',

            /*
             * ============================================================
             * MÉTHODES DE TRAVAIL
             * ============================================================
             */

            'Prise de notes',
            'Organisation personnelle',
            'Productivité',
            'Gestion des tâches',
            'Gestion du temps',
            'Planification personnelle',
            'Priorisation des tâches',
            'Documentation',
            'Veille',
            'Recherche d’information',
            'Analyse d’information',
            'Synthèse d’information',
            'Prise de décision',
            'Résolution de problèmes',
            'Amélioration continue',

            /*
             * ============================================================
             * QUALITÉ / PROCESS
             * ============================================================
             */

            'Quality Assurance',
            'Quality Control',
            'Process Improvement',
            'Continuous Improvement',
            'Process Optimization',
            'Process Documentation',
            'Process Analysis',
            'Root Cause Analysis',
            'Five Whys',
            'Ishikawa',
            'FMEA',
            'Six Sigma',
            'Lean Management',
            'Audit',
            'Conformité',
            'Compliance',
            'Risk Assessment',

            /*
             * ============================================================
             * NORMES / RÉGLEMENTATION
             * ============================================================
             */

            'RGPD',
            'Protection des données',
            'Privacy',
            'Data Protection',
            'Compliance',
            'ISO 27001',
            'ISO 9001',
            'ISO 14001',
            'ISO 22301',
            'SOC 2',
            'PCI DSS',
            'Accessibilité numérique',
            'WCAG',
            'Gouvernance IT',
            'IT Governance',

            /*
             * ============================================================
             * SKILLS PERSONNELS / CRÉATIFS
             * ============================================================
             */

            'Design graphique',
            'Création visuelle',
            'Montage vidéo',
            'Photographie',
            'Illustration',
            'Création de contenu',
            'Rédaction',
            'Copywriting',
            'Community Management',
            'Réseaux sociaux',
            'Personal Branding',
            'Création de présentations',
            'Storytelling',
            'Prise de parole',
        ];

        /*
         * Suppression des doublons.
         */
        $skills = array_values(array_unique($skills));

        /*
         * Création des entités.
         */
        foreach ($skills as $name) {
            $skill = new Skill();
            $skill->setName($name);

            $manager->persist($skill);
        }

        $manager->flush();
    }
}