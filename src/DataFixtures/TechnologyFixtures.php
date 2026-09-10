<?php

namespace App\DataFixtures;

use App\Entity\Technology;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class TechnologyFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $technologies = [

            /*
             * ============================================================
             * LANGAGES DE PROGRAMMATION
             * ============================================================
             */

            // Langages généralistes
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
            'Groovy',
            'Objective-C',
            'Visual Basic',
            'F#',
            'Haskell',
            'Erlang',
            'Elixir',
            'Clojure',
            'ClojureScript',
            'D',
            'Nim',
            'Crystal',
            'Julia',
            'Zig',
            'V',
            'Ada',
            'Fortran',
            'COBOL',
            'Pascal',
            'Delphi',
            'Assembly',

            // Langages fonctionnels
            'OCaml',
            'Racket',
            'Scheme',
            'Common Lisp',
            'Lisp',
            'Fantom',

            // Scripting
            'Bash',
            'Zsh',
            'Fish',
            'PowerShell',
            'Perl',
            'Lua',
            'Tcl',

            // Systèmes / embarqué
            'Embedded C',
            'Embedded C++',
            'VHDL',
            'Verilog',
            'SystemVerilog',

            /*
             * ============================================================
             * LANGAGES WEB / MARKUP / STYLES
             * ============================================================
             */

            'HTML',
            'HTML5',
            'CSS',
            'CSS3',
            'Sass',
            'SCSS',
            'Less',
            'Stylus',
            'XML',
            'XHTML',
            'SVG',
            'Markdown',
            'AsciiDoc',
            'LaTeX',

            /*
             * ============================================================
             * LANGAGES ET TECHNOLOGIES DE DONNÉES
             * ============================================================
             */

            'SQL',
            'PL/SQL',
            'PL/pgSQL',
            'T-SQL',
            'Transact-SQL',
            'Cypher',
            'SPARQL',
            'Gremlin',
            'DAX',
            'MDX',

            /*
             * ============================================================
             * API / ÉCHANGE DE DONNÉES / PROTOCOLES
             *
             * On garde ici les standards et protocoles.
             * Les outils/API concrètes restent dans tes autres entités.
             * ============================================================
             */

            'REST',
            'RESTful',
            'GraphQL',
            'SOAP',
            'gRPC',
            'XML-RPC',
            'JSON-RPC',
            'WebSocket',
            'WebRTC',
            'Server-Sent Events',
            'SSE',
            'Webhooks',

            'JSON',
            'XML',
            'YAML',
            'TOML',
            'CSV',
            'Protocol Buffers',
            'MessagePack',
            'Apache Avro',

            'OpenAPI',
            'AsyncAPI',
            'JSON Schema',

            /*
             * ============================================================
             * PROTOCOLES WEB / RÉSEAU
             * ============================================================
             */

            'HTTP',
            'HTTP/1.0',
            'HTTP/1.1',
            'HTTP/2',
            'HTTP/3',
            'HTTPS',

            'TCP/IP',
            'TCP',
            'UDP',
            'QUIC',
            'IPv4',
            'IPv6',

            'DNS',
            'DHCP',
            'ARP',
            'ICMP',
            'FTP',
            'FTPS',
            'SFTP',
            'SSH',

            'SMTP',
            'IMAP',
            'POP3',

            'LDAP',
            'LDAPS',
            'NTP',
            'SNMP',
            'Telnet',
            'RDP',

            'MQTT',
            'AMQP',
            'CoAP',
            'XMPP',
            'IRC',

            'Bluetooth',
            'Bluetooth Low Energy',
            'Wi-Fi',
            'NFC',
            'Zigbee',
            'Z-Wave',
            'LoRaWAN',

            /*
             * ============================================================
             * AUTHENTIFICATION / IDENTITÉ
             * ============================================================
             */

            'OAuth',
            'OAuth 2.0',
            'OAuth 2.1',
            'OpenID',
            'OpenID Connect',
            'SAML',
            'JWT',
            'JSON Web Token',
            'WebAuthn',
            'FIDO',
            'FIDO2',
            'Passkeys',
            'LDAP',
            'Kerberos',

            /*
             * ============================================================
             * CRYPTOGRAPHIE / SÉCURITÉ
             * ============================================================
             */

            'Cryptographie',
            'Chiffrement',
            'Cryptographie asymétrique',
            'Cryptographie symétrique',
            'Hashing',
            'Hachage',
            'PKI',
            'Public Key Infrastructure',
            'TLS',
            'SSL',
            'HTTPS',

            'AES',
            'RSA',
            'ECC',
            'ECDSA',
            'EdDSA',
            'Diffie-Hellman',
            'SHA-256',
            'SHA-3',
            'HMAC',

            'Zero Trust',
            'Identity and Access Management',
            'IAM',
            'Privileged Access Management',
            'PAM',
            'Single Sign-On',
            'SSO',

            /*
             * ============================================================
             * ARCHITECTURE LOGICIELLE
             * ============================================================
             */

            'Architecture logicielle',
            'Architecture système',
            'Architecture distribuée',
            'Architecture client-serveur',
            'Architecture 3-tiers',
            'Architecture N-tiers',

            'Monolithe',
            'Architecture monolithique',
            'Microservices',
            'Serverless',
            'Event-Driven Architecture',
            'Architecture événementielle',
            'Distributed Systems',
            'Systèmes distribués',

            'Service-Oriented Architecture',
            'SOA',
            'Microkernel Architecture',
            'Pipe and Filter',
            'Hexagonal Architecture',
            'Architecture hexagonale',
            'Clean Architecture',
            'Onion Architecture',
            'Layered Architecture',
            'Architecture en couches',

            'API Gateway',
            'Backend for Frontend',
            'BFF',
            'Service Mesh',

            /*
             * ============================================================
             * CONCEPTION LOGICIELLE
             * ============================================================
             */

            'Domain-Driven Design',
            'DDD',
            'Event Sourcing',
            'CQRS',
            'Command Query Separation',
            'SOLID',
            'Design Patterns',
            'Design Patterns GoF',
            'Dependency Injection',
            'Inversion of Control',
            'IoC',
            'Separation of Concerns',
            'SoC',
            'DRY',
            'KISS',
            'YAGNI',

            'Object-Oriented Programming',
            'Programmation orientée objet',
            'OOP',
            'Programmation fonctionnelle',
            'Functional Programming',
            'Programmation procédurale',
            'Programmation concurrente',
            'Programmation parallèle',
            'Reactive Programming',
            'Programmation réactive',

            /*
             * ============================================================
             * WEB / NAVIGATEURS
             * ============================================================
             */

            'DOM',
            'Virtual DOM',
            'Web Components',
            'Shadow DOM',
            'Custom Elements',
            'WebAssembly',
            'Web Workers',
            'Service Workers',
            'IndexedDB',
            'Web Storage',
            'LocalStorage',
            'SessionStorage',

            'Progressive Web Apps',
            'PWA',
            'Responsive Web Design',
            'Mobile First',
            'Server-Side Rendering',
            'SSR',
            'Static Site Generation',
            'SSG',
            'Incremental Static Regeneration',
            'ISR',
            'Hydration',
            'Server Components',

            /*
             * ============================================================
             * MOBILE
             * ============================================================
             */

            'Développement mobile',
            'Mobile Development',
            'Android',
            'iOS',
            'Android SDK',
            'iOS SDK',

            'Native Mobile',
            'Cross-Platform Mobile',
            'Mobile First',

            /*
             * ============================================================
             * DESKTOP / SYSTÈMES
             * ============================================================
             */

            'Windows',
            'Linux',
            'macOS',
            'Unix',
            'BSD',
            'POSIX',
            'GNU/Linux',

            'GUI',
            'Graphical User Interface',
            'Interface graphique',

            /*
             * ============================================================
             * CLOUD / DISTRIBUTED COMPUTING
             *
             * On garde les concepts ici.
             * AWS, Azure, OVH, etc. peuvent rester dans ton entité dédiée.
             * ============================================================
             */

            'Cloud Computing',
            'Cloud Native',
            'Hybrid Cloud',
            'Multi-Cloud',
            'Edge Computing',
            'Fog Computing',
            'Distributed Computing',
            'High Performance Computing',
            'HPC',
            'Serverless Computing',

            'Infrastructure as Code',
            'IaC',
            'Configuration as Code',
            'Policy as Code',

            /*
             * ============================================================
             * CONTENEURISATION / ORCHESTRATION
             * ============================================================
             */

            'Containerisation',
            'Containerization',
            'Virtualisation',
            'Virtualization',
            'Container Orchestration',

            /*
             * ============================================================
             * DEVOPS / CI-CD
             * ============================================================
             */

            'DevOps',
            'DevSecOps',
            'CI/CD',
            'Continuous Integration',
            'Continuous Delivery',
            'Continuous Deployment',
            'Continuous Testing',
            'GitOps',
            'Infrastructure as Code',
            'Immutable Infrastructure',

            /*
             * ============================================================
             * OBSERVABILITÉ
             * ============================================================
             */

            'Observability',
            'Observabilité',
            'Monitoring',
            'Supervision',
            'Logging',
            'Centralized Logging',
            'Distributed Tracing',
            'Tracing',
            'Metrics',
            'Application Performance Monitoring',
            'APM',
            'Telemetry',
            'OpenTelemetry',

            /*
             * ============================================================
             * DATA
             * ============================================================
             */

            'Data Science',
            'Data Engineering',
            'Data Analytics',
            'Data Analysis',
            'Data Visualization',
            'Big Data',

            'Data Warehouse',
            'Data Lake',
            'Data Lakehouse',
            'Data Mesh',
            'Data Fabric',

            'ETL',
            'ELT',
            'Data Pipeline',
            'Data Integration',
            'Data Governance',
            'Data Quality',
            'Master Data Management',
            'MDM',

            /*
             * ============================================================
             * INTELLIGENCE ARTIFICIELLE
             * ============================================================
             */

            'Artificial Intelligence',
            'Intelligence artificielle',
            'Machine Learning',
            'Apprentissage automatique',
            'Deep Learning',
            'Apprentissage profond',

            'Neural Networks',
            'Réseaux de neurones',
            'Natural Language Processing',
            'NLP',
            'Traitement automatique du langage',
            'Computer Vision',
            'Vision par ordinateur',

            'Generative AI',
            'IA générative',
            'Large Language Models',
            'LLM',
            'Foundation Models',
            'Multimodal AI',
            'AI Agents',
            'Agents IA',

            'Reinforcement Learning',
            'Apprentissage par renforcement',
            'Supervised Learning',
            'Unsupervised Learning',
            'Federated Learning',

            'MLOps',
            'LLMOps',
            'RAG',
            'Retrieval-Augmented Generation',
            'Fine-Tuning',
            'Prompt Engineering',
            'Embeddings',
            'Vector Search',

            /*
             * ============================================================
             * ROBOTIQUE / EMBARQUÉ / IOT
             * ============================================================
             */

            'Internet of Things',
            'IoT',
            'IIoT',
            'Industrial IoT',
            'Embedded Systems',
            'Systèmes embarqués',
            'Real-Time Systems',
            'Systèmes temps réel',
            'Edge AI',
            'Robotique',
            'Robotics',
            'Automatisation industrielle',

            /*
             * ============================================================
             * BLOCKCHAIN / WEB3
             * ============================================================
             */

            'Blockchain',
            'Distributed Ledger Technology',
            'DLT',
            'Web3',
            'Smart Contracts',
            'Cryptomonnaies',
            'Tokenisation',
            'NFT',

            /*
             * ============================================================
             * TEST / QUALITÉ LOGICIELLE
             * ============================================================
             */

            'Software Testing',
            'Tests logiciels',
            'Unit Testing',
            'Tests unitaires',
            'Integration Testing',
            'Tests d’intégration',
            'Functional Testing',
            'Tests fonctionnels',
            'End-to-End Testing',
            'Tests End-to-End',
            'Acceptance Testing',
            'Tests d’acceptation',
            'Regression Testing',
            'Tests de régression',
            'Performance Testing',
            'Tests de performance',
            'Load Testing',
            'Tests de charge',
            'Stress Testing',
            'Tests de stress',
            'Security Testing',
            'Tests de sécurité',
            'Test Automation',
            'Automatisation des tests',

            'Test-Driven Development',
            'TDD',
            'Behavior-Driven Development',
            'BDD',
            'Mutation Testing',
            'Property-Based Testing',

            /*
             * ============================================================
             * MÉTHODOLOGIES / PRATIQUES D'INGÉNIERIE
             * ============================================================
             */

            'Agile',
            'Scrum',
            'Kanban',
            'Lean',
            'Extreme Programming',
            'XP',
            'SAFe',
            'LeSS',

            'Pair Programming',
            'Mob Programming',
            'Code Review',
            'Refactoring',
            'Clean Code',
            'Technical Debt',
            'Dette technique',
            'Continuous Refactoring',

            /*
             * ============================================================
             * UX / IHM / FACTEUR HUMAIN
             * ============================================================
             */

            'UX',
            'UI',
            'User Experience',
            'User Interface',
            'UX Design',
            'UI Design',

            'User Research',
            'Recherche utilisateur',
            'User Testing',
            'Tests utilisateurs',
            'Usability Testing',
            'Tests d’utilisabilité',
            'Usability',
            'Utilisabilité',

            'Human Factors',
            'Facteur humain',
            'Human-Computer Interaction',
            'HCI',
            'Interaction Homme-Machine',
            'IHM',

            'Ergonomie',
            'Ergonomie cognitive',
            'Ergonomie logicielle',
            'Cognitive Science',
            'Sciences cognitives',
            'Psychologie cognitive',

            'Design Thinking',
            'Service Design',
            'Product Design',
            'Design Sprint',

            'Information Architecture',
            'Architecture de l’information',
            'User Journey',
            'Parcours utilisateur',
            'Customer Journey',
            'Customer Experience',
            'CX',

            'Wireframing',
            'Prototyping',
            'Prototypage',
            'Design System',
            'Design Systems',

            'Accessibility',
            'Accessibilité numérique',
            'Web Accessibility',
            'Inclusive Design',
            'Universal Design',
            'WCAG',

            /*
             * ============================================================
             * PRODUIT / CONCEPTION
             * ============================================================
             */

            'Product Management',
            'Gestion de produit',
            'Product Discovery',
            'Product Strategy',
            'Product Design',
            'Product-Market Fit',

            'Business Analysis',
            'Analyse fonctionnelle',
            'Analyse des besoins',
            'Requirements Engineering',
            'Ingénierie des exigences',
            'Gestion des exigences',

            'Functional Specifications',
            'Spécifications fonctionnelles',
            'Technical Specifications',
            'Spécifications techniques',

            'Business Intelligence',
            'BI',
            'Decision Support Systems',

            /*
             * ============================================================
             * SÉCURITÉ APPLICATIVE
             * ============================================================
             */

            'Cybersecurity',
            'Cybersécurité',
            'Application Security',
            'Sécurité applicative',
            'Network Security',
            'Sécurité réseau',
            'Cloud Security',
            'DevSecOps',

            'Secure Coding',
            'Secure by Design',
            'Security by Design',
            'Privacy by Design',

            'Vulnerability Management',
            'Gestion des vulnérabilités',
            'Penetration Testing',
            'Tests d’intrusion',
            'Ethical Hacking',

            'OWASP',
            'OWASP Top 10',
            'Threat Modeling',
            'Modélisation des menaces',

            'Security Information and Event Management',
            'SIEM',
            'Security Operations',
            'SOC',

            /*
             * ============================================================
             * GREEN IT / SOBRIÉTÉ NUMÉRIQUE
             * ============================================================
             */

            'Green IT',
            'IT for Green',
            'Numérique responsable',
            'Sobriété numérique',
            'Éco-conception numérique',
            'Eco-design',
            'Green Software',
            'Sustainable Software',
            'Digital Sustainability',

            /*
             * ============================================================
             * ARCHITECTURE D'ENTREPRISE / SI
             * ============================================================
             */

            'Enterprise Architecture',
            'Architecture d’entreprise',
            'Information System Architecture',
            'Architecture des systèmes d’information',
            'Urbanisation du SI',
            'Enterprise Integration',
            'System Integration',
            'Interoperability',
            'Interopérabilité',

            /*
             * ============================================================
             * AUTRES DOMAINES TECHNOLOGIQUES
             * ============================================================
             */

            'Real-Time Computing',
            'Calcul haute performance',
            'High Availability',
            'Haute disponibilité',
            'Fault Tolerance',
            'Tolérance aux pannes',
            'Disaster Recovery',
            'Reprise après sinistre',
            'Backup and Recovery',
            'Scalability',
            'Scalabilité',
            'Horizontal Scaling',
            'Vertical Scaling',

            'Digital Twin',
            'Jumeau numérique',
            'Augmented Reality',
            'Réalité augmentée',
            'Virtual Reality',
            'Réalité virtuelle',
            'Mixed Reality',
            'Réalité mixte',
            'Extended Reality',
            'XR',
        ];

        // Évite les doublons éventuels dans la liste.
        $technologies = array_unique($technologies);

        foreach ($technologies as $name) {
            $technology = new Technology();
            $technology->setName($name);

            $manager->persist($technology);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['technology'];
    }
}
