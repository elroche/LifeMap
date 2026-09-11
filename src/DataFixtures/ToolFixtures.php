<?php

namespace App\DataFixtures;

use App\Entity\Tool;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ToolFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['tool'];
    }

    public function load(ObjectManager $manager): void
    {
        $tools = [

            /*
             * ============================================================
             * IDE / ÉDITEURS DE CODE
             * ============================================================
             */

            'Visual Studio',
            'Visual Studio Code',
            'VS Code',
            'Cursor',
            'Windsurf',
            'JetBrains PhpStorm',
            'JetBrains IntelliJ IDEA',
            'JetBrains WebStorm',
            'JetBrains PyCharm',
            'JetBrains Rider',
            'JetBrains CLion',
            'JetBrains GoLand',
            'JetBrains RubyMine',
            'JetBrains DataGrip',
            'JetBrains AppCode',
            'JetBrains RustRover',
            'JetBrains Fleet',
            'JetBrains Aqua',
            'Eclipse',
            'Eclipse IDE',
            'Eclipse Che',
            'NetBeans',
            'Android Studio',
            'Xcode',
            'Xcode Cloud',
            'Sublime Text',
            'Notepad++',
            'Vim',
            'Neovim',
            'Emacs',
            'GNU Nano',
            'TextMate',
            'BBEdit',
            'Brackets',
            'Nova',
            'Zed',
            'Geany',
            'Kate',
            'KDevelop',
            'Code::Blocks',
            'Dev-C++',
            'Lite XL',
            'Helix',

            /*
             * ============================================================
             * ENVIRONNEMENTS DE DÉVELOPPEMENT LOCAL
             * ============================================================
             */

            'XAMPP',
            'WAMP',
            'WampServer',
            'MAMP',
            'MAMP Pro',
            'Laragon',
            'DDEV',
            'Lando',
            'Devilbox',
            'Local',
            'Laravel Herd',
            'Laravel Valet',
            'Symfony CLI',
            'Docksal',
            'AMPPS',
            'Bitnami',
            'EasyPHP',
            'UwAmp',
            'Uniform Server',

            /*
             * ============================================================
             * TERMINAUX / SHELL
             * ============================================================
             */

            'Windows Terminal',
            'PowerShell',
            'PowerShell ISE',
            'Command Prompt',
            'Git Bash',
            'WSL',
            'Windows Subsystem for Linux',
            'iTerm2',
            'GNOME Terminal',
            'Konsole',
            'Alacritty',
            'Kitty',
            'WezTerm',
            'Warp',
            'Terminator',
            'Tilix',
            'Hyper',
            'Tabby',
            'Termux',
            'Termius',
            'MobaXterm',
            'PuTTY',
            'SecureCRT',
            'Royal TS',
            'Terminator',

            /*
             * ============================================================
             * GIT / VERSION CONTROL
             * ============================================================
             */

            'Git',
            'GitHub',
            'GitLab',
            'Bitbucket',
            'Azure Repos',
            'Gitea',
            'Forgejo',
            'SourceForge',
            'Codeberg',
            'AWS CodeCommit',
            'Beanstalk',
            'Phabricator',
            'Gerrit',
            'GitKraken',
            'GitHub Desktop',
            'GitLab Desktop',
            'Sourcetree',
            'Fork',
            'Tower',
            'SmartGit',
            'Git Cola',
            'Git Extensions',
            'TortoiseGit',
            'TortoiseSVN',
            'GitAhead',
            'Git Tower',

            /*
             * ============================================================
             * GIT / RELEASE / CHANGELOG
             * ============================================================
             */

            'GitHub Releases',
            'GitLab Releases',
            'Release Please',
            'Changesets',
            'semantic-release',
            'Conventional Changelog',
            'Commitizen',
            'Commitlint',
            'Husky',
            'Lefthook',
            'pre-commit',

            /*
             * ============================================================
             * API / HTTP CLIENT
             * ============================================================
             */

            'Postman',
            'Insomnia',
            'Bruno',
            'Hoppscotch',
            'HTTPie',
            'cURL',
            'SoapUI',
            'ReadyAPI',
            'Paw',
            'RapidAPI',
            'Kreya',
            'Yaak',
            'Thunder Client',
            'REST Client',
            'Advanced REST Client',
            'Requestly',

            /*
             * ============================================================
             * API DOCUMENTATION
             * ============================================================
             */

            'Swagger UI',
            'Swagger Editor',
            'SwaggerHub',
            'Redoc',
            'Redocly',
            'Stoplight',
            'ReadMe',
            'Postman API Documentation',
            'GitBook',
            'Apiary',
            'Slate',

            /*
             * ============================================================
             * PROJECT MANAGEMENT / TASK MANAGEMENT
             * ============================================================
             */

            'Jira',
            'Jira Software',
            'Jira Product Discovery',
            'Trello',
            'Asana',
            'Monday.com',
            'ClickUp',
            'Linear',
            'Notion',
            'Basecamp',
            'Wrike',
            'YouTrack',
            'Redmine',
            'OpenProject',
            'Taiga',
            'Plane',
            'Shortcut',
            'Pivotal Tracker',
            'Azure Boards',
            'GitHub Projects',
            'GitLab Issues',
            'GitLab Boards',
            'Bitbucket Issues',
            'Zoho Projects',
            'Teamwork',
            'Smartsheet',
            'Airtable',
            'Height',
            'Productboard',
            'Aha!',
            'Roadmunk',
            'Craft.io',
            'ProductPlan',
            'Targetprocess',

            /*
             * ============================================================
             * COLLABORATION / COMMUNICATION
             * ============================================================
             */

            'Slack',
            'Microsoft Teams',
            'Discord',
            'Mattermost',
            'Rocket.Chat',
            'Google Chat',
            'Zoom',
            'Google Meet',
            'Jitsi Meet',
            'Cisco Webex',
            'Whereby',
            'Around',
            'Loom',
            'Butter',
            'Gather',
            'Pumble',
            'Chanty',
            'Flock',
            'Chime',
            'RingCentral',

            /*
             * ============================================================
             * DOCUMENTATION / KNOWLEDGE
             * ============================================================
             */

            'Confluence',
            'Notion',
            'GitBook',
            'Docusaurus',
            'MkDocs',
            'Read the Docs',
            'Sphinx',
            'Jekyll',
            'Hugo',
            'VitePress',
            'VuePress',
            'Nextra',
            'Mintlify',
            'Outline',
            'BookStack',
            'MediaWiki',
            'Wiki.js',
            'Slab',
            'Nuclino',
            'Guru',
            'Tettra',
            'Obsidian',
            'Microsoft OneNote',
            'Evernote',
            'Google Keep',
            'Dropbox Paper',

            /*
             * ============================================================
             * DIAGRAMMES / ARCHITECTURE
             * ============================================================
             */

            'draw.io',
            'diagrams.net',
            'Lucidchart',
            'Microsoft Visio',
            'Miro',
            'Mural',
            'FigJam',
            'Whimsical',
            'Excalidraw',
            'PlantUML',
            'Mermaid',
            'Structurizr',
            'StarUML',
            'Visual Paradigm',
            'Enterprise Architect',
            'Sparx Enterprise Architect',
            'Archi',
            'ArchiMate',
            'Cacoo',
            'Gliffy',
            'Creately',
            'SmartDraw',
            'OmniGraffle',

            /*
             * ============================================================
             * CI/CD
             * ============================================================
             */

            'Jenkins',
            'GitHub Actions',
            'GitLab CI/CD',
            'Bitbucket Pipelines',
            'CircleCI',
            'Travis CI',
            'Buildkite',
            'TeamCity',
            'Bamboo',
            'Azure Pipelines',
            'AWS CodeBuild',
            'AWS CodePipeline',
            'AWS CodeDeploy',
            'Google Cloud Build',
            'Google Cloud Deploy',
            'Drone CI',
            'Woodpecker CI',
            'Tekton',
            'Concourse CI',
            'Semaphore CI',
            'Buddy',
            'Harness',
            'Spinnaker',
            'Argo CD',
            'Flux CD',
            'Octopus Deploy',

            /*
             * ============================================================
             * CONTAINERS
             * ============================================================
             */

            'Docker',
            'Docker Desktop',
            'Docker Compose',
            'Docker Buildx',
            'Podman',
            'Podman Desktop',
            'Buildah',
            'Skopeo',
            'containerd',
            'CRI-O',
            'Lazydocker',
            'Portainer',

            /*
             * ============================================================
             * KUBERNETES / ORCHESTRATION
             * ============================================================
             */

            'Kubernetes',
            'kubectl',
            'Minikube',
            'Kind',
            'K3s',
            'K3d',
            'MicroK8s',
            'Rancher',
            'OpenShift',
            'Helm',
            'Kustomize',
            'Lens',
            'OpenLens',
            'Argo CD',
            'Argo Rollouts',
            'Flux CD',
            'Skaffold',
            'Telepresence',
            'K9s',
            'Kubernetes Dashboard',

            /*
             * ============================================================
             * INFRASTRUCTURE AS CODE
             * ============================================================
             */

            'Terraform',
            'OpenTofu',
            'Pulumi',
            'AWS CloudFormation',
            'AWS CDK',
            'Azure Bicep',
            'Azure ARM Templates',
            'Google Cloud Deployment Manager',
            'Ansible',
            'Ansible AWX',
            'Chef',
            'Puppet',
            'Salt',
            'SaltStack',
            'Crossplane',
            'Packer',
            'Vagrant',
            'Terragrunt',
            'Atlantis',

            /*
             * ============================================================
             * CLOUD / HOSTING
             * ============================================================
             */

            'AWS Management Console',
            'AWS CLI',
            'AWS CloudShell',
            'Azure Portal',
            'Azure CLI',
            'Azure Cloud Shell',
            'Google Cloud Console',
            'Google Cloud CLI',
            'Google Cloud Shell',
            'Cloudflare Dashboard',
            'Cloudflare Wrangler',
            'DigitalOcean Control Panel',
            'DigitalOcean CLI',
            'Heroku',
            'Heroku CLI',
            'Vercel',
            'Vercel CLI',
            'Netlify',
            'Netlify CLI',
            'Render',
            'Railway',
            'Fly.io',
            'Fly CLI',
            'Platform.sh',
            'OVHcloud Manager',
            'Scaleway Console',
            'Scaleway CLI',
            'Linode Cloud Manager',
            'Vultr',
            'Hetzner Cloud Console',
            'Hetzner Cloud CLI',
            'Oracle Cloud Console',
            'IBM Cloud',
            'Alibaba Cloud',

            /*
             * ============================================================
             * MONITORING / OBSERVABILITY
             * ============================================================
             */

            'Grafana',
            'Prometheus',
            'Grafana Loki',
            'Grafana Tempo',
            'Grafana Mimir',
            'Jaeger',
            'Zipkin',
            'OpenTelemetry',
            'OpenTelemetry Collector',
            'Zabbix',
            'Nagios',
            'Nagios XI',
            'Icinga',
            'Datadog',
            'New Relic',
            'Dynatrace',
            'Sentry',
            'Elastic Observability',
            'Kibana',
            'Splunk',
            'Graylog',
            'AppDynamics',
            'SolarWinds',
            'PRTG',
            'UptimeRobot',
            'Uptime Kuma',
            'Better Uptime',
            'Pingdom',
            'StatusCake',
            'PagerDuty',
            'Opsgenie',

            /*
             * ============================================================
             * LOGGING
             * ============================================================
             */

            'Elastic Stack',
            'ELK Stack',
            'Elasticsearch',
            'Logstash',
            'Kibana',
            'Filebeat',
            'Metricbeat',
            'Heartbeat',
            'Fluentd',
            'Fluent Bit',
            'Vector',
            'Graylog',
            'Loki',
            'Splunk',
            'Papertrail',
            'Logtail',
            'Better Stack',

            /*
             * ============================================================
             * DATABASE MANAGEMENT / CLIENTS
             * ============================================================
             */

            'DBeaver',
            'JetBrains DataGrip',
            'Adminer',
            'phpMyAdmin',
            'MySQL Workbench',
            'pgAdmin',
            'SQL Server Management Studio',
            'SSMS',
            'Azure Data Studio',
            'Oracle SQL Developer',
            'MongoDB Compass',
            'Robo 3T',
            'RedisInsight',
            'TablePlus',
            'Beekeeper Studio',
            'HeidiSQL',
            'Sequel Ace',
            'Sequel Pro',
            'Navicat',
            'DbVisualizer',
            'Toad',
            'Toad for Oracle',
            'Toad for SQL Server',
            'SQuirreL SQL',
            'DbGate',
            'DataGrip',
            'Studio 3T',

            /*
             * ============================================================
             * BUILD / AUTOMATION
             * ============================================================
             */

            'Make',
            'GNU Make',
            'CMake',
            'Ninja',
            'Gradle',
            'Apache Maven',
            'MSBuild',
            'Bazel',
            'Buck2',
            'Apache Ant',
            'SCons',
            'Meson',

            /*
             * ============================================================
             * PACKAGE MANAGEMENT
             * ============================================================
             */

            'Composer',
            'npm',
            'Yarn',
            'pnpm',
            'Bun',
            'pip',
            'Poetry',
            'Pipenv',
            'Conda',
            'Miniconda',
            'Anaconda',
            'Cargo',
            'NuGet',
            'Chocolatey',
            'Scoop',
            'Homebrew',
            'MacPorts',
            'APT',
            'Snap',
            'Flatpak',

            /*
             * ============================================================
             * CODE QUALITY / LINTING
             * ============================================================
             */

            'SonarQube',
            'SonarCloud',
            'Code Climate',
            'Codacy',
            'Semgrep',
            'ESLint',
            'Prettier',
            'Stylelint',
            'PHP CS Fixer',
            'PHP_CodeSniffer',
            'PHPStan',
            'Psalm',
            'Rector',
            'Ruff',
            'Black',
            'Flake8',
            'Pylint',
            'mypy',
            'isort',
            'Clippy',
            'rustfmt',
            'Checkstyle',
            'SpotBugs',
            'PMD',
            'StyleCop',
            'ReSharper',
            'ReSharper C++',
            'EditorConfig',

            /*
             * ============================================================
             * SECURITY
             * ============================================================
             */

            'OWASP ZAP',
            'Burp Suite',
            'Burp Suite Professional',
            'Nmap',
            'Wireshark',
            'Metasploit',
            'Nessus',
            'OpenVAS',
            'Greenbone',
            'Nikto',
            'sqlmap',
            'Gobuster',
            'ffuf',
            'Hydra',
            'John the Ripper',
            'Hashcat',
            'Aircrack-ng',
            'Bettercap',
            'Responder',
            'Impacket',
            'BloodHound',
            'Mimikatz',
            'Ghidra',
            'Radare2',
            'IDA',
            'IDA Pro',
            'Binary Ninja',
            'Cutter',
            'Trivy',
            'Grype',
            'Clair',
            'Snyk',
            'Dependabot',
            'Renovate',
            'Gitleaks',
            'TruffleHog',
            'HashiCorp Vault',
            '1Password',
            'Bitwarden',
            'KeePass',
            'KeePassXC',

            /*
             * ============================================================
             * TESTING
             * ============================================================
             */

            'Selenium',
            'Selenium IDE',
            'Playwright',
            'Cypress',
            'Puppeteer',
            'WebdriverIO',
            'TestCafe',
            'Cucumber',
            'JMeter',
            'Gatling',
            'k6',
            'Locust',
            'Artillery',
            'Postman',
            'SoapUI',
            'TestRail',
            'Zephyr',
            'qTest',
            'PractiTest',
            'BrowserStack',
            'Sauce Labs',
            'LambdaTest',
            'Percy',
            'Applitools',
            'Browserling',

            /*
             * ============================================================
             * DESIGN / UX / UI
             * ============================================================
             */

            'Figma',
            'Figma FigJam',
            'Adobe XD',
            'Sketch',
            'Adobe Photoshop',
            'Adobe Illustrator',
            'Adobe InDesign',
            'Adobe After Effects',
            'Adobe Premiere Pro',
            'Canva',
            'Penpot',
            'Framer',
            'Axure RP',
            'Balsamiq',
            'InVision',
            'Zeplin',
            'Marvel',
            'ProtoPie',
            'Principle',
            'Origami Studio',
            'Spline',
            'Blender',
            'GIMP',
            'Inkscape',
            'Affinity Designer',
            'Affinity Photo',

            /*
             * ============================================================
             * PRODUCT / ANALYTICS
             * ============================================================
             */

            'Google Analytics',
            'Google Tag Manager',
            'Google Search Console',
            'Matomo',
            'Plausible',
            'Fathom Analytics',
            'Mixpanel',
            'Amplitude',
            'Heap',
            'Hotjar',
            'FullStory',
            'Microsoft Clarity',
            'PostHog',
            'Pendo',
            'Contentsquare',
            'Segment',
            'Optimizely',
            'VWO',

            /*
             * ============================================================
             * DATA / BI
             * ============================================================
             */

            'Microsoft Power BI',
            'Tableau',
            'Looker',
            'Looker Studio',
            'Qlik Sense',
            'QlikView',
            'Metabase',
            'Apache Superset',
            'Redash',
            'Domo',
            'Sisense',
            'MicroStrategy',
            'Jupyter Notebook',
            'JupyterLab',
            'Google Colab',
            'Apache Airflow',
            'Prefect',
            'Dagster',
            'dbt',
            'Apache NiFi',
            'Talend',
            'Pentaho',
            'Alteryx',
            'KNIME',

            /*
             * ============================================================
             * IA / MACHINE LEARNING
             * ============================================================
             */

            'Jupyter',
            'Jupyter Notebook',
            'JupyterLab',
            'Google Colab',
            'MLflow',
            'Kubeflow',
            'Weights & Biases',
            'W&B',
            'TensorBoard',
            'Hugging Face',
            'Hugging Face Hub',
            'OpenAI Platform',
            'OpenAI Playground',
            'Anthropic Console',
            'Google AI Studio',
            'Azure AI Studio',
            'AWS SageMaker',
            'Google Vertex AI',
            'Ollama',
            'LM Studio',
            'Jan',
            'GPT4All',
            'ComfyUI',
            'Automatic1111',
            'Fooocus',
            'LangSmith',
            'LangGraph Studio',

            /*
             * ============================================================
             * REMOTE ACCESS / SUPPORT
             * ============================================================
             */

            'TeamViewer',
            'AnyDesk',
            'RustDesk',
            'Chrome Remote Desktop',
            'Microsoft Remote Desktop',
            'Remote Desktop Connection',
            'VNC',
            'TightVNC',
            'RealVNC',
            'UltraVNC',
            'NoMachine',
            'Remmina',
            'Splashtop',
            'ConnectWise Control',
            'DWService',

            /*
             * ============================================================
             * SSH / FTP / TRANSFERT
             * ============================================================
             */

            'OpenSSH',
            'PuTTY',
            'WinSCP',
            'FileZilla',
            'Cyberduck',
            'Transmit',
            'ForkLift',
            'Termius',
            'MobaXterm',
            'Rclone',
            'rsync',
            'lftp',

            /*
             * ============================================================
             * RÉSEAU
             * ============================================================
             */

            'Wireshark',
            'Nmap',
            'Netcat',
            'Tcpdump',
            'Ettercap',
            'SolarWinds Network Performance Monitor',
            'PRTG Network Monitor',
            'Zabbix',
            'Nagios',
            'Cacti',
            'Angry IP Scanner',
            'Advanced IP Scanner',
            'Fing',
            'PuTTY',
            'MobaXterm',
            'Termius',

            /*
             * ============================================================
             * VIRTUALISATION
             * ============================================================
             */

            'VirtualBox',
            'VMware Workstation',
            'VMware Fusion',
            'VMware ESXi',
            'VMware vSphere',
            'VMware vCenter',
            'Proxmox VE',
            'Hyper-V',
            'QEMU',
            'KVM',
            'Parallels Desktop',
            'UTM',
            'Multipass',

            /*
             * ============================================================
             * BACKUP / RECOVERY
             * ============================================================
             */

            'Veeam',
            'Veeam Backup & Replication',
            'Acronis',
            'Bacula',
            'Restic',
            'BorgBackup',
            'Duplicati',
            'UrBackup',
            'Rclone',
            'rsync',
            'Clonezilla',
            'Macrium Reflect',
            'EaseUS Todo Backup',
            'Carbon Copy Cloner',
            'Time Machine',

            /*
             * ============================================================
             * MOBILE
             * ============================================================
             */

            'Android Studio',
            'Xcode',
            'Firebase Console',
            'App Store Connect',
            'Google Play Console',
            'TestFlight',
            'Flipper',
            'Charles Proxy',
            'Proxyman',

            /*
             * ============================================================
             * PERFORMANCE / PROFILING
             * ============================================================
             */

            'Apache JMeter',
            'Gatling',
            'k6',
            'Locust',
            'Artillery',
            'Apache Benchmark',
            'ab',
            'wrk',
            'wrk2',
            'Siege',
            'Blackfire',
            'Xdebug',
            'New Relic',
            'Datadog',
            'YourKit',
            'VisualVM',
            'JProfiler',
            'dotTrace',
            'dotMemory',
            'Chrome DevTools',
            'Firefox Developer Tools',

            /*
             * ============================================================
             * DEBUGGING / PROFILING
             * ============================================================
             */

            'Xdebug',
            'PHPStorm Debugger',
            'Chrome DevTools',
            'Firefox Developer Tools',
            'Microsoft Edge DevTools',
            'Visual Studio Debugger',
            'WinDbg',
            'GDB',
            'LLDB',
            'Valgrind',
            'strace',
            'ltrace',
            'Perf',
            'DTrace',

            /*
             * ============================================================
             * AUTOMATION / WORKFLOW
             * ============================================================
             */

            'Zapier',
            'Make',
            'n8n',
            'IFTTT',
            'Microsoft Power Automate',
            'UiPath',
            'Automation Anywhere',
            'Blue Prism',
            'Temporal',
            'Apache Airflow',
            'Prefect',
            'Dagster',

            /*
             * ============================================================
             * CRM / BUSINESS
             * ============================================================
             */

            'Salesforce',
            'HubSpot',
            'HubSpot CRM',
            'Microsoft Dynamics 365',
            'Pipedrive',
            'Zoho CRM',
            'Freshsales',
            'Monday Sales CRM',
            'SAP',
            'Oracle NetSuite',
            'Odoo',
            'Dolibarr',
            'Sage',
            'Pennylane',
            'QuickBooks',

            /*
             * ============================================================
             * CMS / E-COMMERCE / NO-CODE
             * ============================================================
             */

            'WordPress',
            'Drupal',
            'Joomla',
            'Shopify',
            'PrestaShop',
            'Magento',
            'WooCommerce',
            'Webflow',
            'Wix',
            'Squarespace',
            'Framer',
            'Bubble',
            'Webstudio',
            'Contentful',
            'Strapi',
            'Directus',
            'Sanity',
            'Ghost',

            /*
             * ============================================================
             * EMAIL / MARKETING
             * ============================================================
             */

            'Mailchimp',
            'Brevo',
            'SendGrid',
            'Mailgun',
            'Amazon SES',
            'HubSpot Marketing Hub',
            'ActiveCampaign',
            'Campaign Monitor',
            'Klaviyo',
            'ConvertKit',
            'MailerLite',
            'Omnisend',

            /*
             * ============================================================
             * OFFICE / PRODUCTIVITÉ
             * ============================================================
             */

            'Microsoft Word',
            'Microsoft Excel',
            'Microsoft PowerPoint',
            'Microsoft Outlook',
            'Microsoft 365',
            'Microsoft OneDrive',
            'Google Docs',
            'Google Sheets',
            'Google Slides',
            'Google Drive',
            'Google Workspace',
            'LibreOffice',
            'OnlyOffice',
            'WPS Office',
            'Dropbox',
            'Dropbox Paper',
            'Box',

            /*
             * ============================================================
             * NOTES / ORGANISATION PERSONNELLE
             * ============================================================
             */

            'Notion',
            'Obsidian',
            'Evernote',
            'Microsoft OneNote',
            'Google Keep',
            'Todoist',
            'Microsoft To Do',
            'TickTick',
            'Things',
            'OmniFocus',
            'Any.do',

            /*
             * ============================================================
             * GESTION DES MOTS DE PASSE / SECRETS
             * ============================================================
             */

            '1Password',
            'Bitwarden',
            'KeePass',
            'KeePassXC',
            'Dashlane',
            'LastPass',
            'NordPass',
            'Proton Pass',
            'HashiCorp Vault',
            'AWS Secrets Manager',
            'Azure Key Vault',
            'Google Secret Manager',

            /*
             * ============================================================
             * CONTENT / AUDIO / VIDÉO
             * ============================================================
             */

            'OBS Studio',
            'Streamlabs',
            'VLC',
            'DaVinci Resolve',
            'Adobe Premiere Pro',
            'Adobe After Effects',
            'Adobe Audition',
            'Audacity',
            'GIMP',
            'Inkscape',
            'Blender',
            'HandBrake',
            'FFmpeg',
            'Kdenlive',
            'Shotcut',
            'OpenShot',
            'CapCut',

            /*
             * ============================================================
             * PDF / DOCUMENTS
             * ============================================================
             */

            'Adobe Acrobat',
            'Adobe Acrobat Reader',
            'Foxit PDF',
            'PDF24',
            'Okular',
            'Preview',
            'Calibre',

            /*
             * ============================================================
             * NAVIGATEURS / DEVTOOLS
             * ============================================================
             */

            'Google Chrome',
            'Mozilla Firefox',
            'Microsoft Edge',
            'Safari',
            'Opera',
            'Brave',
            'Vivaldi',
            'Arc',
            'Chromium',
            'Chrome DevTools',
            'Firefox Developer Tools',
            'Microsoft Edge DevTools',
            'Safari Web Inspector',

            /*
             * ============================================================
             * SEARCH / RECHERCHE TECHNIQUE
             * ============================================================
             */

            'Google Search',
            'Bing',
            'DuckDuckGo',
            'Stack Overflow',
            'GitHub',
            'GitLab',
            'DevDocs',
            'MDN Web Docs',
            'Can I Use',
            'npm',
            'Packagist',
            'PyPI',
            'NuGet',
            'crates.io',

            /*
             * ============================================================
             * SEO
             * ============================================================
             */

            'Google Search Console',
            'Google Analytics',
            'Google Tag Manager',
            'Ahrefs',
            'Semrush',
            'Moz',
            'Screaming Frog SEO Spider',
            'Majestic',
            'Ubersuggest',
            'Sitebulb',
            'Surfer SEO',

            /*
             * ============================================================
             * ACCESSIBILITÉ / AUDIT WEB
             * ============================================================
             */

            'Lighthouse',
            'Google Lighthouse',
            'axe DevTools',
            'WAVE',
            'Pa11y',
            'Accessibility Insights',
            'WebAIM',
            'Color Contrast Checker',

            /*
             * ============================================================
             * IA / ASSISTANTS DE CODE
             * ============================================================
             */

            'GitHub Copilot',
            'Amazon Q Developer',
            'Google Gemini Code Assist',
            'JetBrains AI Assistant',
            'Cursor',
            'Windsurf',
            'Tabnine',
            'Codeium',
            'Continue',
            'Aider',
            'Cody',
            'Sourcegraph Cody',

            /*
             * ============================================================
             * GESTION DES PACKAGES / REGISTRY
             * ============================================================
             */

            'Docker Hub',
            'GitHub Container Registry',
            'GitLab Container Registry',
            'Amazon ECR',
            'Google Artifact Registry',
            'Azure Container Registry',
            'npm Registry',
            'GitHub Packages',
            'GitLab Package Registry',
            'JFrog Artifactory',
            'Sonatype Nexus Repository',

            /*
             * ============================================================
             * ARTIFACTS / REPOSITORIES
             * ============================================================
             */

            'JFrog Artifactory',
            'Sonatype Nexus Repository',
            'Harbor',
            'AWS CodeArtifact',
            'Azure Artifacts',
            'GitHub Packages',
            'GitLab Package Registry',

            /*
             * ============================================================
             * RELEASE / FEATURE FLAGS
             * ============================================================
             */

            'LaunchDarkly',
            'Flagsmith',
            'Unleash',
            'Split',
            'Optimizely',
            'Statsig',

            /*
             * ============================================================
             * INCIDENT / ON-CALL
             * ============================================================
             */

            'PagerDuty',
            'Opsgenie',
            'Rootly',
            'Incident.io',
            'FireHydrant',
            'Better Uptime',
            'Statuspage',

            /*
             * ============================================================
             * FINOPS / CLOUD COST
             * ============================================================
             */

            'AWS Cost Explorer',
            'AWS Budgets',
            'Azure Cost Management',
            'Google Cloud Billing',
            'CloudHealth',
            'Kubecost',
            'Infracost',

            /*
             * ============================================================
             * DNS / DOMAIN / INFRASTRUCTURE
             * ============================================================
             */

            'Cloudflare',
            'Route 53',
            'Google Cloud DNS',
            'Azure DNS',
            'Namecheap',
            'OVHcloud Manager',
            'Gandi',
            'GoDaddy',
            'Porkbun',

            /*
             * ============================================================
             * FILE STORAGE / SYNCHRONISATION
             * ============================================================
             */

            'Google Drive',
            'Microsoft OneDrive',
            'Dropbox',
            'Box',
            'Nextcloud',
            'ownCloud',
            'Syncthing',
            'Resilio Sync',

            /*
             * ============================================================
             * REMOTE COLLABORATION / WHITEBOARD
             * ============================================================
             */

            'Miro',
            'Mural',
            'FigJam',
            'Whimsical',
            'Excalidraw',
            'Lucidspark',
            'Stormboard',
            'Conceptboard',

            /*
             * ============================================================
             * PRESENTATION
             * ============================================================
             */

            'Microsoft PowerPoint',
            'Google Slides',
            'Apple Keynote',
            'Canva',
            'Prezi',
            'Pitch',
            'Beautiful.ai',
            'Gamma',

            /*
             * ============================================================
             * TIME TRACKING
             * ============================================================
             */

            'Toggl Track',
            'Clockify',
            'Harvest',
            'Everhour',
            'RescueTime',
            'Timely',
            'Tempo Timesheets',
            'Hubstaff',
            'TimeCamp',

            /*
             * ============================================================
             * CHAT / COMMUNITY
             * ============================================================
             */

            'Slack',
            'Discord',
            'Microsoft Teams',
            'Mattermost',
            'Rocket.Chat',
            'Zulip',
            'Matrix',
            'Element',
            'Telegram',
            'WhatsApp',
            'Signal',

            /*
             * ============================================================
             * DESIGN SYSTEM / COMPONENTS
             * ============================================================
             */

            'Storybook',
            'Chromatic',
            'Zeroheight',
            'Supernova',
            'Knapsack',
            'Specify',
            'Tokens Studio',
            'Figma Tokens',

            /*
             * ============================================================
             * LOCAL / DEVELOPMENT DATABASE ENVIRONMENT
             * ============================================================
             */

            'Laravel Sail',
            'DDEV',
            'Lando',
            'Docker Desktop',
            'OrbStack',
            'Colima',
            'Rancher Desktop',
            'Podman Desktop',

            /*
             * ============================================================
             * PHP / SYMFONY / WEB DEVELOPMENT TOOLS
             * ============================================================
             */

            'Symfony CLI',
            'Symfony Profiler',
            'Symfony Web Debug Toolbar',
            'Blackfire',
            'Xdebug',
            'Composer',
            'PHP CS Fixer',
            'PHP_CodeSniffer',
            'PHPStan',
            'Psalm',
            'Rector',
            'Laravel Sail',
            'Laravel Herd',
            'Laravel Valet',

            /*
             * ============================================================
             * JAVASCRIPT / FRONTEND TOOLING
             * ============================================================
             */

            'Vite',
            'Webpack',
            'Rollup',
            'Parcel',
            'esbuild',
            'Turbopack',
            'Rspack',
            'Babel',
            'SWC',
            'ESLint',
            'Prettier',
            'Stylelint',
            'Storybook',

            /*
             * ============================================================
             * MOBILE / DEVICE TESTING
             * ============================================================
             */

            'Android Studio',
            'Xcode',
            'Firebase Test Lab',
            'BrowserStack',
            'Sauce Labs',
            'LambdaTest',
            'Appium',
            'Detox',
            'Maestro',
            'Charles Proxy',
            'Proxyman',

            /*
             * ============================================================
             * GENERAL SOFTWARE / UTILITIES
             * ============================================================
             */

            '7-Zip',
            'WinRAR',
            'PeaZip',
            'The Unarchiver',
            'Raycast',
            'Alfred',
            'PowerToys',
            'Everything',
            'ShareX',
            'Greenshot',
            'Snagit',
            'Postman',
            'Insomnia',
            'Ferdium',
            'Rambox',
            'Station',
        ];

        /*
         * Suppression des doublons.
         */
        $tools = array_values(array_unique($tools));

        /*
         * Création des entités.
         */
        foreach ($tools as $name) {
            $tool = new Tool();
            $tool->setName($name);

            $manager->persist($tool);
        }

        $manager->flush();
    }
}
