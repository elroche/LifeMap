<?php

namespace App\DataFixtures;

use App\Entity\Library;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class LibraryFixtures extends Fixture implements FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['library'];
    }

    public function load(ObjectManager $manager): void
    {
        $libraries = [

            /*
             * ============================================================
             * PHP — HTTP / NETWORK / API
             * ============================================================
             */

            'Guzzle',
            'Guzzle HTTP Client',
            'Symfony HttpClient',
            'HTTPlug',
            'PHP HTTP Discovery',
            'Nyholm PSR-7',
            'Nyholm PSR-17',
            'Guzzle PSR-7',
            'Guzzle PSR-18',
            'Laminas Diactoros',
            'Slim PSR-7',
            'Buzz',
            'ReactPHP HTTP',
            'ReactPHP Socket',
            'ReactPHP Promise',
            'Amp',
            'Amp HTTP Client',
            'Amp HTTP Server',
            'HTTPlug Discovery',
            'PHP-HTTP Promise',
            'php-http/client-common',

            /*
             * ============================================================
             * PHP — PSR
             * ============================================================
             */

            'PSR Container',
            'PSR HTTP Message',
            'PSR HTTP Client',
            'PSR HTTP Factory',
            'PSR Log',
            'PSR Cache',
            'PSR Simple Cache',
            'PSR Event Dispatcher',
            'PSR Clock',
            'PSR Link',
            'PSR Simple Cache',
            'PSR Auth',

            /*
             * ============================================================
             * PHP — UTILITIES
             * ============================================================
             */

            'Carbon',
            'Ramsey UUID',
            'Ramsey Collection',
            'Brick Math',
            'Brick DateTime',
            'Symfony String',
            'Symfony Finder',
            'Symfony Process',
            'Symfony Filesystem',
            'Symfony OptionsResolver',
            'Symfony PropertyAccess',
            'Symfony PropertyInfo',
            'Symfony ExpressionLanguage',
            'Symfony VarDumper',
            'Symfony Inflector',
            'Symfony UID',
            'Symfony Clock',
            'Symfony Polyfill',
            'Symfony Translation',
            'Symfony Serializer',
            'Symfony Validator',
            'Symfony Cache',
            'Symfony Lock',
            'Symfony EventDispatcher',
            'Symfony DependencyInjection',
            'Symfony Config',
            'Symfony Console',
            'Symfony Mime',
            'Symfony Mailer',

            /*
             * ============================================================
             * PHP — ORM / DATABASE
             * ============================================================
             */

            'Doctrine ORM',
            'Doctrine DBAL',
            'Doctrine Collections',
            'Doctrine Common',
            'Doctrine Inflector',
            'Doctrine Lexer',
            'Doctrine Cache',
            'Doctrine Migrations',
            'Doctrine Persistence',
            'Doctrine EventManager',
            'Eloquent ORM',
            'Illuminate Database',
            'RedBeanPHP',
            'Propel',
            'Cycle ORM',
            'Atlas ORM',
            'Spot ORM',
            'Paris ORM',
            'Idiorm',
            'Medoo',
            'Pixie',
            'NotORM',
            'Jade ORM',

            /*
             * ============================================================
             * PHP — DATABASE DRIVERS / CLIENTS
             * ============================================================
             */

            'PDO',
            'PDO MySQL',
            'PDO PostgreSQL',
            'PDO SQLite',
            'PDO SQL Server',
            'PDO Oracle',
            'MongoDB PHP Library',
            'MongoDB PHP Driver',
            'Predis',
            'PHPRedis',
            'Relay',
            'Cassandra PHP Driver',
            'Elasticsearch PHP Client',
            'OpenSearch PHP Client',
            'Neo4j PHP Client',

            /*
             * ============================================================
             * PHP — CACHE / QUEUES / MESSAGING
             * ============================================================
             */

            'Predis',
            'PHPRedis',
            'Relay',
            'Enqueue',
            'php-amqplib',
            'Bernard',
            'Symfony Messenger',
            'Intervention Queue',
            'Broadway',
            'ReactPHP EventLoop',
            'ReactPHP Child Process',
            'Swoole',
            'OpenSwoole',

            /*
             * ============================================================
             * PHP — SERIALIZATION
             * ============================================================
             */

            'JMS Serializer',
            'Symfony Serializer',
            'League Fractal',
            'Opis JSON Schema',
            'Swaggest JSON Schema',
            'Spatie Data',
            'MessagePack PHP',
            'CBOR PHP',
            'BSON PHP',

            /*
             * ============================================================
             * PHP — SECURITY / CRYPTOGRAPHY
             * ============================================================
             */

            'phpseclib',
            'Defuse PHP Encryption',
            'ParagonIE Halite',
            'ParagonIE Sodium Compat',
            'libsodium',
            'Password Compat',
            'Webauthn Framework',
            'League OAuth2 Server',
            'OAuth2 Client',
            'JWT Framework',
            'Firebase JWT',
            'Lcobucci JWT',
            'RobThree TwoFactorAuth',

            /*
             * ============================================================
             * PHP — FILES / STORAGE
             * ============================================================
             */

            'Flysystem',
            'League Flysystem AWS S3 Adapter',
            'League Flysystem Azure Blob Adapter',
            'League Flysystem Google Cloud Storage Adapter',
            'League Flysystem FTP Adapter',
            'League Flysystem SFTP Adapter',
            'League Flysystem WebDAV Adapter',
            'Gaufrette',
            'OneupFlysystemBundle',

            /*
             * ============================================================
             * PHP — IMAGE
             * ============================================================
             */

            'Intervention Image',
            'Imagine',
            'Liip Imagine',
            'Imagine Bundle',
            'Spatie Image',
            'Glide',
            'PHP Image',
            'ColorThief PHP',
            'ImageHash',

            /*
             * ============================================================
             * PHP — PDF / DOCUMENTS
             * ============================================================
             */

            'Dompdf',
            'mPDF',
            'TCPDF',
            'FPDF',
            'FPDI',
            'Snappy',
            'Knp Snappy',
            'PhpSpreadsheet',
            'PhpWord',
            'PHPOffice',
            'ZipStream',
            'PDFParser',
            'Smalot PDF Parser',

            /*
             * ============================================================
             * PHP — HTML / XML
             * ============================================================
             */

            'Symfony DomCrawler',
            'Symfony CssSelector',
            'Masterminds HTML5',
            'DiDOM',
            'Simple HTML DOM',
            'PHP Simple HTML DOM Parser',
            'Sabberworm CSS Parser',
            'XMLReader',
            'XMLWriter',

            /*
             * ============================================================
             * PHP — EMAIL
             * ============================================================
             */

            'Symfony Mailer',
            'Symfony Mime',
            'PHPMailer',
            'SwiftMailer',
            'Laminas Mail',
            'ZBateson MailMimeParser',
            'Email Reply Parser',

            /*
             * ============================================================
             * PHP — LOGGING
             * ============================================================
             */

            'Monolog',
            'KLogger',
            'Analog',
            'SeasLog',

            /*
             * ============================================================
             * PHP — TESTING
             * ============================================================
             */

            'PHPUnit',
            'Pest',
            'Codeception',
            'Behat',
            'Mockery',
            'Prophecy',
            'FakerPHP',
            'Infection',
            'ParaTest',
            'Atoum',
            'Phake',
            'AspectMock',

            /*
             * ============================================================
             * PHP — CODE QUALITY
             * ============================================================
             */

            'PHPStan',
            'Psalm',
            'PHP-CS-Fixer',
            'PHP_CodeSniffer',
            'Rector',
            'PHPMD',
            'Deptrac',
            'PHP Insights',
            'PHP Parallel Lint',

            /*
             * ============================================================
             * JAVASCRIPT / TYPESCRIPT — CORE
             * ============================================================
             */

            'Lodash',
            'Underscore.js',
            'Ramda',
            'RxJS',
            'Immutable.js',
            'Immer',
            'Mori',
            'Lazy.js',
            'Sugar.js',
            'Day.js',
            'Moment.js',
            'date-fns',
            'Luxon',
            'Dinero.js',
            'Numeral.js',
            'Big.js',
            'Decimal.js',
            'Math.js',

            /*
             * ============================================================
             * JAVASCRIPT — HTTP
             * ============================================================
             */

            'Axios',
            'Ky',
            'Got',
            'SuperAgent',
            'Node-fetch',
            'Undici',
            'Needle',
            'Request',
            'Fetch API',
            'Cross-fetch',
            'Isomorphic Fetch',

            /*
             * ============================================================
             * JAVASCRIPT — VALIDATION / TYPES
             * ============================================================
             */

            'Zod',
            'Yup',
            'Joi',
            'Ajv',
            'Superstruct',
            'Valibot',
            'io-ts',
            'Runtypes',
            'TypeBox',
            'Typia',
            'Class Validator',
            'Class Transformer',
            'Valibot',

            /*
             * ============================================================
             * JAVASCRIPT — STATE MANAGEMENT
             * ============================================================
             */

            'Redux',
            'Redux Toolkit',
            'Zustand',
            'MobX',
            'MobX State Tree',
            'Recoil',
            'Jotai',
            'Valtio',
            'XState',
            'Akita',
            'Effector',
            'Easy Peasy',
            'Pinia',
            'Vuex',

            /*
             * ============================================================
             * JAVASCRIPT — REACT ECOSYSTEM
             * ============================================================
             */

            'React Router',
            'React Hook Form',
            'TanStack Query',
            'TanStack Table',
            'TanStack Router',
            'TanStack Virtual',
            'React Aria',
            'React DnD',
            'React Beautiful DnD',
            'React Spring',
            'Framer Motion',
            'React Transition Group',
            'React Testing Library',
            'React Helmet',
            'React Intl',
            'React Day Picker',
            'React Select',
            'React Datepicker',
            'React Dropzone',
            'React Markdown',
            'React PDF',
            'React Toastify',

            /*
             * ============================================================
             * JAVASCRIPT — VUE
             * ============================================================
             */

            'Vue Router',
            'VueUse',
            'VeeValidate',
            'Vuelidate',
            'Vue I18n',
            'Vue Test Utils',
            'Vue Draggable',
            'Vue Virtual Scroller',
            'Vue Query',
            'Vue Apollo',
            'Vue Markdown',
            'Vue Datepicker',
            'Vue Toastification',

            /*
             * ============================================================
             * JAVASCRIPT — ANGULAR
             * ============================================================
             */

            'RxJS',
            'NgRx',
            'Angular Material',
            'Angular CDK',
            'NGXS',
            'Akita',
            'Apollo Angular',
            'AngularFire',
            'ngx-translate',
            'ngx-bootstrap',

            /*
             * ============================================================
             * JAVASCRIPT — UI / COMPONENTS
             * ============================================================
             */

            'jQuery',
            'Alpine.js',
            'HTMX',
            'Stimulus',
            'Popper.js',
            'Floating UI',
            'Tippy.js',
            'Headless UI',
            'Radix UI',
            'shadcn/ui',
            'Chakra UI',
            'Material UI',
            'Ant Design',
            'Mantine',
            'Semantic UI',
            'Blueprint.js',
            'PrimeReact',
            'PrimeVue',
            'Element Plus',

            /*
             * ============================================================
             * JAVASCRIPT — ANIMATION
             * ============================================================
             */

            'GSAP',
            'Anime.js',
            'Framer Motion',
            'React Spring',
            'Motion One',
            'Popmotion',
            'Velocity.js',
            'Lottie',
            'Lottie Web',

            /*
             * ============================================================
             * JAVASCRIPT — GRAPHICS / DATA VISUALIZATION
             * ============================================================
             */

            'D3.js',
            'Chart.js',
            'ECharts',
            'Highcharts',
            'Plotly.js',
            'ApexCharts',
            'Vega',
            'Vega-Lite',
            'Three.js',
            'Babylon.js',
            'PixiJS',
            'Fabric.js',
            'Konva.js',
            'Paper.js',
            'p5.js',
            'Cytoscape.js',
            'Sigma.js',
            'Leaflet',
            'OpenLayers',
            'MapLibre GL JS',
            'Mapbox GL JS',
            'Turf.js',

            /*
             * ============================================================
             * JAVASCRIPT — NODE.JS
             * ============================================================
             */

            'Commander.js',
            'Yargs',
            'Inquirer.js',
            'Enquirer',
            'Prompts',
            'Chalk',
            'Ora',
            'Pino',
            'Winston',
            'Bunyan',
            'Morgan',
            'Nodemailer',
            'Passport.js',
            'jsonwebtoken',
            'bcrypt',
            'bcryptjs',
            'Argon2',
            'Sharp',
            'Jimp',
            'Multer',
            'Busboy',
            'Formidable',
            'Socket.IO',
            'ws',
            'uWebSockets.js',
            'Bull',
            'BullMQ',
            'Agenda',
            'node-cron',
            'Bree',
            'Nodemailer',
            'OpenTelemetry JavaScript',

            /*
             * ============================================================
             * JAVASCRIPT — DATABASE
             * ============================================================
             */

            'Prisma Client',
            'Drizzle ORM',
            'MikroORM',
            'TypeORM',
            'Sequelize',
            'Knex.js',
            'Objection.js',
            'Mongoose',
            'MongoDB Node.js Driver',
            'Redis Node.js Client',
            'ioredis',
            'pg',
            'mysql2',
            'better-sqlite3',
            'sqlite3',
            'Couchbase SDK',
            'Elasticsearch JavaScript Client',
            'OpenSearch JavaScript Client',
            'Neo4j JavaScript Driver',

            /*
             * ============================================================
             * JAVASCRIPT — TESTING
             * ============================================================
             */

            'Jest',
            'Vitest',
            'Mocha',
            'Chai',
            'Sinon',
            'Testing Library',
            'Cypress',
            'Playwright',
            'Puppeteer',
            'WebdriverIO',
            'Nightwatch',
            'AVA',
            'Tape',
            'Supertest',
            'Nock',
            'MSW',
            'Testcontainers Node.js',

            /*
             * ============================================================
             * JAVASCRIPT — SERIALIZATION
             * ============================================================
             */

            'protobufjs',
            'MessagePack',
            'msgpackr',
            'CBOR',
            'BSON',
            'yaml',
            'js-yaml',
            'xml2js',
            'fast-xml-parser',
            'Papa Parse',
            'csv-parse',
            'csv-stringify',

            /*
             * ============================================================
             * JAVASCRIPT — FILES / PDF
             * ============================================================
             */

            'PDF.js',
            'pdf-lib',
            'PDFKit',
            'Puppeteer PDF',
            'Sharp',
            'JSZip',
            'Archiver',
            'ExcelJS',
            'SheetJS',
            'docx',
            'PptxGenJS',

            /*
             * ============================================================
             * PYTHON — HTTP / WEB
             * ============================================================
             */

            'Requests',
            'HTTPX',
            'urllib3',
            'aiohttp',
            'httpcore',
            'httpx-ws',
            'Beautiful Soup',
            'lxml',
            'Scrapy',
            'Parsel',
            'Selectolax',
            'MechanicalSoup',

            /*
             * ============================================================
             * PYTHON — GENERAL
             * ============================================================
             */

            'Pydantic',
            'attrs',
            'dataclasses-json',
            'Marshmallow',
            'Click',
            'Typer',
            'Rich',
            'Loguru',
            'structlog',
            'Tenacity',
            'Toolz',
            'More Itertools',
            'Boltons',
            'Humanize',
            'Arrow',
            'Pendulum',

            /*
             * ============================================================
             * PYTHON — DATA
             * ============================================================
             */

            'NumPy',
            'Pandas',
            'Polars',
            'SciPy',
            'Matplotlib',
            'Seaborn',
            'Plotly',
            'Statsmodels',
            'SymPy',
            'Dask',
            'Xarray',
            'Vaex',
            'PyArrow',
            'Fastparquet',
            'OpenPyXL',
            'XlsxWriter',

            /*
             * ============================================================
             * PYTHON — MACHINE LEARNING
             * ============================================================
             */

            'scikit-learn',
            'XGBoost',
            'LightGBM',
            'CatBoost',
            'Optuna',
            'MLflow',
            'TensorBoard',
            'SHAP',
            'LIME',
            'Imbalanced-learn',

            /*
             * ============================================================
             * PYTHON — AI / NLP
             * ============================================================
             */

            'Transformers',
            'Datasets',
            'Tokenizers',
            'Accelerate',
            'LangChain',
            'LlamaIndex',
            'spaCy',
            'NLTK',
            'Gensim',
            'Sentence Transformers',
            'Haystack',
            'Semantic Kernel Python',
            'OpenAI Python SDK',
            'Anthropic Python SDK',

            /*
             * ============================================================
             * PYTHON — COMPUTER VISION
             * ============================================================
             */

            'Pillow',
            'OpenCV',
            'scikit-image',
            'ImageIO',
            'PyMuPDF',
            'EasyOCR',
            'Tesseract Python',
            'Albumentations',

            /*
             * ============================================================
             * PYTHON — DATABASE
             * ============================================================
             */

            'SQLAlchemy',
            'Alembic',
            'Psycopg',
            'Psycopg2',
            'PyMySQL',
            'mysqlclient',
            'asyncpg',
            'PyMongo',
            'Motor',
            'redis-py',
            'cassandra-driver',
            'neo4j-driver',
            'elasticsearch-py',
            'opensearch-py',
            'influxdb-client',
            'clickhouse-connect',

            /*
             * ============================================================
             * PYTHON — ASYNC / CONCURRENCY
             * ============================================================
             */

            'asyncio',
            'Trio',
            'AnyIO',
            'Curio',
            'gevent',
            'greenlet',

            /*
             * ============================================================
             * PYTHON — TESTING
             * ============================================================
             */

            'pytest',
            'Hypothesis',
            'unittest-mock',
            'Factory Boy',
            'Faker',
            'Coverage.py',
            'pytest-asyncio',
            'pytest-cov',
            'responses',
            'respx',
            'VCR.py',

            /*
             * ============================================================
             * JAVA — GENERAL
             * ============================================================
             */

            'Google Guava',
            'Apache Commons',
            'Apache Commons Lang',
            'Apache Commons IO',
            'Apache Commons Collections',
            'Apache Commons Codec',
            'Apache Commons Math',
            'Apache Commons Text',
            'Apache Commons Configuration',
            'Apache Commons CSV',
            'Apache Commons Compress',
            'Apache Commons Email',

            /*
             * ============================================================
             * JAVA — JSON / SERIALIZATION
             * ============================================================
             */

            'Jackson',
            'Jackson Databind',
            'Jackson XML',
            'Gson',
            'Moshi',
            'JSON-B',
            'JSON-P',
            'FastJSON',
            'Kryo',
            'Protocol Buffers Java',
            'Apache Avro Java',
            'MessagePack Java',

            /*
             * ============================================================
             * JAVA — HTTP
             * ============================================================
             */

            'OkHttp',
            'Retrofit',
            'Apache HttpClient',
            'Apache HttpCore',
            'Jetty HTTP Client',
            'AsyncHttpClient',
            'Unirest Java',

            /*
             * ============================================================
             * JAVA — DATABASE
             * ============================================================
             */

            'Hibernate ORM',
            'jOOQ',
            'MyBatis',
            'MyBatis Plus',
            'JDBI',
            'Apache DBCP',
            'HikariCP',
            'MongoDB Java Driver',
            'Jedis',
            'Lettuce',
            'Elasticsearch Java Client',
            'OpenSearch Java Client',
            'Neo4j Java Driver',
            'Cassandra Java Driver',

            /*
             * ============================================================
             * JAVA — LOGGING
             * ============================================================
             */

            'SLF4J',
            'Logback',
            'Log4j',
            'Log4j 2',
            'TinyLog',

            /*
             * ============================================================
             * JAVA — MAPPING / VALIDATION
             * ============================================================
             */

            'MapStruct',
            'ModelMapper',
            'Hibernate Validator',
            'Jakarta Validation',
            'Apache BVal',

            /*
             * ============================================================
             * JAVA — TESTING
             * ============================================================
             */

            'JUnit',
            'JUnit 5',
            'Mockito',
            'AssertJ',
            'Hamcrest',
            'TestNG',
            'WireMock',
            'REST Assured',
            'Awaitility',
            'ArchUnit',
            'JavaFaker',

            /*
             * ============================================================
             * JAVA — REACTIVE
             * ============================================================
             */

            'Project Reactor',
            'RxJava',
            'Mutiny',
            'Reactive Streams',

            /*
             * ============================================================
             * C# / .NET — HTTP / API
             * ============================================================
             */

            'RestSharp',
            'Refit',
            'Flurl',
            'Flurl.Http',
            'IdentityModel',
            'Yarp',
            'Polly',
            'Microsoft.Extensions.Http.Resilience',

            /*
             * ============================================================
             * C# / .NET — JSON / SERIALIZATION
             * ============================================================
             */

            'Newtonsoft.Json',
            'System.Text.Json',
            'MessagePack-CSharp',
            'protobuf-net',
            'YamlDotNet',
            'CsvHelper',
            'ServiceStack.Text',
            'MemoryPack',
            'ZeroFormatter',
            'Utf8Json',
            'Jil',
            'NetJSON',

            /*
             * ============================================================
             * C# / .NET — DATABASE / ORM
             * ============================================================
             */

            'Entity Framework Core',
            'Dapper',
            'NHibernate',
            'RepoDb',
            'linq2db',
            'ServiceStack.OrmLite',
            'MongoDB .NET Driver',
            'StackExchange.Redis',
            'Redis.OM',
            'LiteDB',
            'RavenDB Client',
            'Neo4j .NET Driver',
            'Npgsql',
            'MySqlConnector',
            'Microsoft.Data.SqlClient',
            'Oracle.ManagedDataAccess',
            'FirebirdSql.Data.FirebirdClient',
            'CassandraCSharpDriver',
            'Elasticsearch .NET Client',
            'OpenSearch .NET Client',
            'InfluxDB.Client',
            'ClickHouse.Client',

            /*
             * ============================================================
             * C# / .NET — DEPENDENCY INJECTION
             * ============================================================
             */

            'Microsoft.Extensions.DependencyInjection',
            'Autofac',
            'Castle Windsor',
            'Simple Injector',
            'DryIoc',
            'LightInject',
            'Grace',
            'Scrutor',

            /*
             * ============================================================
             * C# / .NET — CONFIGURATION
             * ============================================================
             */

            'Microsoft.Extensions.Configuration',
            'Microsoft.Extensions.Options',
            'Microsoft.Extensions.Configuration.Json',
            'Microsoft.Extensions.Configuration.EnvironmentVariables',
            'Microsoft.Extensions.Configuration.UserSecrets',
            'DotNetEnv',
            'dotenv.net',
            'Config.Net',

            /*
             * ============================================================
             * C# / .NET — VALIDATION
             * ============================================================
             */

            'FluentValidation',
            'Valit',
            'GuardClauses',
            'Ardalis.GuardClauses',
            'Throw',
            'ErrorOr',
            'FluentResults',

            /*
             * ============================================================
             * C# / .NET — MAPPING
             * ============================================================
             */

            'AutoMapper',
            'Mapster',
            'Mapperly',
            'ExpressMapper',
            'AgileMapper',

            /*
             * ============================================================
             * C# / .NET — LOGGING
             * ============================================================
             */

            'Serilog',
            'Serilog.Extensions.Logging',
            'Serilog.Sinks.Console',
            'Serilog.Sinks.File',
            'Serilog.Sinks.Seq',
            'NLog',
            'log4net',
            'Elmah',
            'Microsoft.Extensions.Logging',
            'ZLogger',

            /*
             * ============================================================
             * C# / .NET — SECURITY
             * ============================================================
             */

            'BCrypt.Net',
            'BCrypt.Net-Next',
            'Isopoh.Cryptography.Argon2',
            'Argon2.NET',
            'BouncyCastle',
            'Portable.BouncyCastle',
            'NaCl.Core',
            'NSec',
            'libsodium-net',
            'Microsoft.IdentityModel.Tokens',
            'System.IdentityModel.Tokens.Jwt',
            'Microsoft.Identity.Client',
            'OpenIddict',
            'Duende IdentityServer',

            /*
             * ============================================================
             * C# / .NET — DATE / TIME
             * ============================================================
             */

            'NodaTime',
            'Humanizer',
            'TimeZoneConverter',
            'Cronos',
            'DateTimeExtensions',

            /*
             * ============================================================
             * C# / .NET — UTILITIES
             * ============================================================
             */

            'MoreLINQ',
            'Humanizer',
            'OneOf',
            'LanguageExt',
            'Optional',
            'UnitsNet',
            'Enums.NET',
            'SmartEnum',
            'FastEnum',
            'NetEscapades.EnumGenerators',

            /*
             * ============================================================
             * C# / .NET — CQRS / MEDIATOR
             * ============================================================
             */

            'MediatR',
            'Wolverine',
            'Brighter',
            'Paramore.Brighter',

            /*
             * ============================================================
             * C# / .NET — MESSAGING
             * ============================================================
             */

            'MassTransit',
            'RabbitMQ.Client',
            'Confluent.Kafka',
            'KafkaFlow',
            'EasyNetQ',
            'RawRabbit',
            'Azure.Messaging.ServiceBus',
            'Azure.Messaging.EventHubs',
            'Google.Cloud.PubSub.V1',
            'Apache.NMS',
            'NATS.Client',

            /*
             * ============================================================
             * C# / .NET — CACHE
             * ============================================================
             */

            'Microsoft.Extensions.Caching.Memory',
            'Microsoft.Extensions.Caching.StackExchangeRedis',
            'StackExchange.Redis',
            'EasyCaching',
            'FusionCache',
            'CacheManager',
            'LazyCache',

            /*
             * ============================================================
             * C# / .NET — BACKGROUND JOBS
             * ============================================================
             */

            'Hangfire',
            'Quartz.NET',
            'Coravel',
            'FluentScheduler',
            'Cronos',

            /*
             * ============================================================
             * C# / .NET — FILES / STORAGE
             * ============================================================
             */

            'Azure.Storage.Blobs',
            'Azure.Storage.Queues',
            'Azure.Storage.Files.Shares',
            'AWSSDK.S3',
            'Google.Cloud.Storage.V1',
            'Minio',
            'SharpCompress',
            'SharpZipLib',
            'System.IO.Abstractions',

            /*
             * ============================================================
             * C# / .NET — IMAGES
             * ============================================================
             */

            'ImageSharp',
            'ImageSharp.Drawing',
            'SkiaSharp',
            'Magick.NET',
            'OpenCvSharp',
            'Emgu CV',
            'MetadataExtractor',

            /*
             * ============================================================
             * C# / .NET — PDF / DOCUMENTS
             * ============================================================
             */

            'QuestPDF',
            'iText',
            'PdfSharpCore',
            'PDFsharp',
            'IronPDF',
            'Syncfusion PDF',
            'SelectPdf',
            'UglyToad.PdfPig',
            'DocumentFormat.OpenXml',
            'ClosedXML',
            'EPPlus',
            'NPOI',
            'ExcelDataReader',
            'MiniExcel',
            'FastExcel',

            /*
             * ============================================================
             * C# / .NET — HTML / PARSING
             * ============================================================
             */

            'AngleSharp',
            'HtmlAgilityPack',
            'CsQuery',
            'Fizzler',
            'ReverseMarkdown',
            'Markdig',
            'CommonMark.NET',

            /*
             * ============================================================
             * C# / .NET — GRAPHQL
             * ============================================================
             */

            'GraphQL.NET',
            'GraphQL.Client',
            'Hot Chocolate',
            'Strawberry Shake',
            'GraphQLinq',

            /*
             * ============================================================
             * C# / .NET — GRPC / RPC
             * ============================================================
             */

            'Grpc.Net.Client',
            'Grpc.Tools',
            'MagicOnion',
            'protobuf-net.Grpc',

            /*
             * ============================================================
             * C# / .NET — REAL TIME
             * ============================================================
             */

            'SignalR Client',
            'Websocket.Client',
            'WebSocketSharp',
            'WatsonWebsocket',
            'SuperSocket',

            /*
             * ============================================================
             * C# / .NET — TESTING
             * ============================================================
             */

            'xUnit',
            'NUnit',
            'MSTest',
            'Moq',
            'NSubstitute',
            'FakeItEasy',
            'FluentAssertions',
            'Shouldly',
            'Bogus',
            'AutoFixture',
            'Respawn',
            'WireMock.Net',
            'RichardSzalay.MockHttp',
            'Testcontainers for .NET',
            'Verify',
            'FsCheck',
            'SpecFlow',

            /*
             * ============================================================
             * C# / .NET — PERFORMANCE
             * ============================================================
             */

            'BenchmarkDotNet',
            'NBomber',
            'Pipelines.Sockets.Unofficial',
            'System.IO.Pipelines',
            'Microsoft.IO.RecyclableMemoryStream',

            /*
             * ============================================================
             * C# / .NET — CODE ANALYSIS
             * ============================================================
             */

            'StyleCop.Analyzers',
            'SonarAnalyzer.CSharp',
            'Roslynator',
            'Meziantou.Analyzer',
            'ErrorProne.NET',
            'NetArchTest',
            'ArchUnitNET',

            /*
             * ============================================================
             * C# / .NET — CLI
             * ============================================================
             */

            'System.CommandLine',
            'CommandLineParser',
            'McMaster.Extensions.CommandLineUtils',
            'Spectre.Console',
            'Spectre.Console.Cli',
            'CliFx',
            'FluentCommandLineParser',

            /*
             * ============================================================
             * C# / .NET — AI / MACHINE LEARNING
             * ============================================================
             */

            'ML.NET',
            'Microsoft.ML',
            'Microsoft.ML.OnnxRuntime',
            'ONNX Runtime',
            'TorchSharp',
            'TensorFlow.NET',
            'Semantic Kernel',
            'LangChain.NET',
            'LLamaSharp',
            'Kernel Memory',
            'Microsoft.Extensions.AI',
            'Microsoft.ML.Tokenizers',

            /*
             * ============================================================
             * C# / .NET — VECTOR / AI
             * ============================================================
             */

            'Qdrant.Client',
            'Pinecone .NET',
            'Weaviate.Client',
            'Milvus.Client',
            'Azure.Search.Documents',

            /*
             * ============================================================
             * C# / .NET — CLOUD AWS
             * ============================================================
             */

            'AWSSDK.Core',
            'AWSSDK.S3',
            'AWSSDK.DynamoDBv2',
            'AWSSDK.Lambda',
            'AWSSDK.SQS',
            'AWSSDK.SNS',
            'AWSSDK.SecretsManager',
            'AWSSDK.CloudWatch',
            'AWSSDK.EC2',
            'AWSSDK.ECS',
            'AWSSDK.EKS',

            /*
             * ============================================================
             * C# / .NET — CLOUD AZURE
             * ============================================================
             */

            'Azure.Core',
            'Azure.Identity',
            'Azure.Storage.Blobs',
            'Azure.Storage.Queues',
            'Azure.Storage.Files.Shares',
            'Azure.Messaging.ServiceBus',
            'Azure.Messaging.EventHubs',
            'Azure.Security.KeyVault.Secrets',
            'Azure.AI.OpenAI',
            'Azure.Search.Documents',
            'Azure.Monitor.OpenTelemetry.Exporter',

            /*
             * ============================================================
             * C# / .NET — CLOUD GOOGLE
             * ============================================================
             */

            'Google.Cloud.Storage.V1',
            'Google.Cloud.PubSub.V1',
            'Google.Cloud.Firestore',
            'Google.Cloud.BigQuery.V2',
            'Google.Cloud.Vision.V1',
            'Google.Apis',

            /*
             * ============================================================
             * C / C++ — GENERAL
             * ============================================================
             */

            'Boost',
            'Boost.Asio',
            'Boost.Beast',
            'Boost.JSON',
            'Boost.Filesystem',
            'Boost.Thread',
            'Boost.Program_options',
            'POCO C++ Libraries',
            'OpenSSL',
            'libcurl',
            'fmt',
            'spdlog',
            'Abseil',
            'Folly',
            'Qt Core',
            'Qt Network',
            'Qt SQL',
            'Qt XML',
            'Qt Concurrent',

            /*
             * ============================================================
             * C / C++ — DATABASE
             * ============================================================
             */

            'libpq',
            'MySQL Connector/C++',
            'SQLite C API',
            'MongoDB C Driver',
            'MongoDB C++ Driver',
            'Redis Plus Plus',
            'hiredis',
            'libpqxx',
            'SOCI',
            'ODB',

            /*
             * ============================================================
             * C / C++ — SERIALIZATION
             * ============================================================
             */

            'Protocol Buffers C++',
            'Apache Avro C++',
            'MessagePack C++',
            'FlatBuffers',
            'Cap’n Proto',
            'RapidJSON',
            'nlohmann/json',
            'simdjson',
            'yaml-cpp',
            'TinyXML2',
            'pugixml',

            /*
             * ============================================================
             * C / C++ — IMAGE / VIDEO
             * ============================================================
             */

            'OpenCV',
            'OpenImageIO',
            'ImageMagick',
            'libvips',
            'FFmpeg',
            'GStreamer',
            'SDL',
            'SDL2',
            'OpenAL',
            'PortAudio',

            /*
             * ============================================================
             * C / C++ — TESTING
             * ============================================================
             */

            'GoogleTest',
            'GoogleMock',
            'Catch2',
            'Doctest',
            'Boost.Test',
            'CppUnit',
            'Trompeloeil',

            /*
             * ============================================================
             * RUST
             * ============================================================
             */

            'Serde',
            'Serde JSON',
            'Tokio',
            'Reqwest',
            'Hyper',
            'Tower',
            'Tracing',
            'Anyhow',
            'Thiserror',
            'Clap',
            'Rayon',
            'Diesel',
            'SQLx',
            'SeaORM',
            'Redis-rs',
            'Rustls',
            'Chrono',
            'Uuid',
            'Prost',
            'Tonic',
            'Axum',
            'Actix Web',
            'Warp',
            'Rocket',
            'Polars Rust',
            'DataFusion',
            'Ratatui',
            'Crossterm',
            'Bevy',
            'WGPU',
            'Winit',

            /*
             * ============================================================
             * GO
             * ============================================================
             */

            'Gorilla Toolkit',
            'Cobra',
            'Viper',
            'Zap',
            'Logrus',
            'Zerolog',
            'Go-Redis',
            'GORM',
            'Ent',
            'sqlx',
            'pgx',
            'Testify',
            'GoMock',
            'Resty',
            'Colly',
            'Fiber',
            'Chi',
            'Gorilla WebSocket',
            'Sarama',
            'Confluent Kafka Go',
            'NATS Go',
            'MongoDB Go Driver',
            'Elasticsearch Go Client',
            'OpenTelemetry Go',

            /*
             * ============================================================
             * RUBY
             * ============================================================
             */

            'RSpec',
            'Minitest',
            'Capybara',
            'Nokogiri',
            'Faraday',
            'HTTParty',
            'RestClient',
            'Devise',
            'Pundit',
            'CanCanCan',
            'Sidekiq',
            'Resque',
            'Redis Ruby',
            'Sequel',
            'ROM-rb',
            'Dry-rb',
            'ActiveModelSerializers',
            'Oj',
            'Prawn',
            'RMagick',

            /*
             * ============================================================
             * KOTLIN
             * ============================================================
             */

            'Kotlin Coroutines',
            'Kotlin Serialization',
            'Ktor Client',
            'OkHttp',
            'Retrofit',
            'Koin',
            'Dagger',
            'Hilt',
            'Exposed',
            'Arrow',
            'Kotlinx DateTime',
            'Kotlinx Collections Immutable',
            'Kotlinx Coroutines',
            'Moshi',
            'Kotest',
            'MockK',

            /*
             * ============================================================
             * SWIFT / IOS
             * ============================================================
             */

            'Alamofire',
            'Kingfisher',
            'SDWebImage',
            'SnapKit',
            'RxSwift',
            'Combine',
            'Realm Swift',
            'Moya',
            'SwiftyJSON',
            'Quick',
            'Nimble',
            'PromiseKit',
            'Swinject',
            'GRDB',
            'SQLite.swift',
            'Starscream',
            'Lottie iOS',
            'Charts',
            'MapKit',
            'Apollo iOS',

            /*
             * ============================================================
             * DART / FLUTTER
             * ============================================================
             */

            'Dio',
            'http package',
            'Provider',
            'Riverpod',
            'Bloc',
            'flutter_bloc',
            'GetX',
            'Freezed',
            'Json Serializable',
            'GoRouter',
            'Hive',
            'Drift',
            'Isar',
            'SharedPreferences',
            'GetIt',
            'AutoRoute',
            'Equatable',
            'Dartz',
            'RxDart',
            'Firebase Flutter',
            'Cached Network Image',
            'Flutter Secure Storage',

            /*
             * ============================================================
             * ELIXIR
             * ============================================================
             */

            'Ecto',
            'Plug',
            'Tesla',
            'Finch',
            'Req',
            'Jason',
            'NimbleParsec',
            'Oban',
            'Broadway',
            'ExUnit',
            'GenStage',
            'Benchee',
            'Mox',

            /*
             * ============================================================
             * SCALA
             * ============================================================
             */

            'Cats',
            'Cats Effect',
            'ZIO',
            'Circe',
            'Doobie',
            'FS2',
            'Slick',
            'Scalatest',
            'ScalaCheck',
            'Akka HTTP',
            'Pekko HTTP',
            'Sttp',
            'Tapir',
            'Monix',

            /*
             * ============================================================
             * R
             * ============================================================
             */

            'tidyverse',
            'dplyr',
            'ggplot2',
            'data.table',
            'tidyr',
            'readr',
            'stringr',
            'purrr',
            'lubridate',
            'httr2',
            'jsonlite',
            'DBI',
            'RSQLite',
            'RPostgres',
            'RMariaDB',
            'data.table',
            'Shiny',
            'Plotly R',
            'Leaflet R',

            /*
             * ============================================================
             * BLOCKCHAIN / WEB3
             * ============================================================
             */

            'Web3.js',
            'Ethers.js',
            'Viem',
            'Wagmi',
            'WalletConnect',
            'web3.py',
            'ethers-rs',
            'Solana Web3.js',
            'Anchor',
            'Nethereum',
            'Solnet',

            /*
             * ============================================================
             * GEO / CARTOGRAPHIE
             * ============================================================
             */

            'Leaflet',
            'OpenLayers',
            'MapLibre GL JS',
            'Mapbox GL JS',
            'Turf.js',
            'GeoPandas',
            'Shapely',
            'GDAL',
            'PROJ',
            'GEOS',
            'PostGIS Client Libraries',

            /*
             * ============================================================
             * OBSERVABILITY
             * ============================================================
             */

            'OpenTelemetry',
            'Sentry SDK',
            'Datadog SDK',
            'Prometheus Client',
            'OpenTelemetry PHP',
            'OpenTelemetry Java',
            'OpenTelemetry Python',
            'OpenTelemetry JavaScript',
            'OpenTelemetry .NET',

            /*
             * ============================================================
             * SERIALIZATION / DATA FORMATS
             * ============================================================
             */

            'Protocol Buffers',
            'Apache Avro',
            'Apache Thrift',
            'MessagePack',
            'CBOR',
            'BSON',
            'FlatBuffers',
            'Cap’n Proto',
            'Apache Arrow',
            'Apache Parquet',

            /*
             * ============================================================
             * OCR / DOCUMENT PROCESSING
             * ============================================================
             */

            'Tesseract OCR',
            'OCRmyPDF',
            'Apache PDFBox',
            'iText',
            'PDF.js',
            'PyMuPDF',
            'PdfPig',

            /*
             * ============================================================
             * AUDIO / VIDEO
             * ============================================================
             */

            'FFmpeg',
            'FFmpeg.wasm',
            'GStreamer',
            'LibVLC',
            'LibVLCSharp',
            'NAudio',
            'CSCore',
            'PortAudio',
            'OpenAL',
            'SDL_mixer',

            /*
             * ============================================================
             * EMAIL / COMMUNICATION
             * ============================================================
             */

            'MailKit',
            'MimeKit',
            'PHPMailer',
            'Nodemailer',
            'JavaMail',
            'Jakarta Mail',
            'FluentEmail',
            'SendGrid SDK',
            'Twilio SDK',

            /*
             * ============================================================
             * CLOUD SDK — GENERAL
             * ============================================================
             */

            'AWS SDK',
            'Azure SDK',
            'Google Cloud Client Libraries',
            'Firebase SDK',

            /*
             * ============================================================
             * API / SDK CLIENTS
             * ============================================================
             */

            'Stripe SDK',
            'PayPal SDK',
            'Twilio SDK',
            'SendGrid SDK',
            'OpenAI SDK',
            'Anthropic SDK',
            'GitHub SDK',
            'GitLab SDK',
            'Sentry SDK',
            'Datadog SDK',
            'Algolia SDK',
            'Cloudflare SDK',

            /*
             * ============================================================
             * MESSAGING / STREAMING
             * ============================================================
             */

            'Kafka Client',
            'KafkaJS',
            'librdkafka',
            'RabbitMQ Client',
            'php-amqplib',
            'MassTransit',
            'NATS Client',
            'NATS.js',
            'ZeroMQ',
            'MQTT.js',
            'Paho MQTT',
            'Eclipse Paho',
            'Apache Pulsar Client',

            /*
             * ============================================================
             * SEARCH
             * ============================================================
             */

            'Elasticsearch Client',
            'OpenSearch Client',
            'Meilisearch Client',
            'Typesense Client',
            'Algolia Search Client',
            'Solr Client',
            'Sphinx Client',

            /*
             * ============================================================
             * VECTOR / AI DATABASE CLIENTS
             * ============================================================
             */

            'Pinecone SDK',
            'Weaviate Client',
            'Milvus Client',
            'Qdrant Client',
            'Chroma Client',
            'LanceDB',
            'FAISS',
            'pgvector',
            'Vespa Client',

            /*
             * ============================================================
             * BROWSER AUTOMATION
             * ============================================================
             */

            'Selenium WebDriver',
            'Playwright',
            'Puppeteer',
            'PuppeteerSharp',
            'Selenium .NET',
            'Selenium Java',
            'Selenium Python',

            /*
             * ============================================================
             * QR / BARCODE
             * ============================================================
             */

            'ZXing',
            'ZXing.Net',
            'QRCoder',
            'BarcodeLib',
            'IronBarcode',
            'libqrencode',

            /*
             * ============================================================
             * MARKDOWN / TEXT
             * ============================================================
             */

            'Marked',
            'Markdown-it',
            'Remark',
            'Rehype',
            'Unified',
            'Micromark',
            'Showdown',
            'Turndown',
            'Markdig',
            'CommonMark',

            /*
             * ============================================================
             * INTERNATIONALIZATION
             * ============================================================
             */

            'ICU',
            'CLDR',
            'FormatJS',
            'i18next',
            'Polyglot.js',
            'gettext',
            'Babel Python',

            /*
             * ============================================================
             * CRYPTOGRAPHY — GENERAL
             * ============================================================
             */

            'OpenSSL',
            'libsodium',
            'Bouncy Castle',
            'NaCl',
            'Argon2',
            'bcrypt',
            'scrypt',
            'JOSE',
            'JJWT',
            'Nimbus JOSE JWT',

            /*
             * ============================================================
             * GRAPH / COMPUTATION
             * ============================================================
             */

            'NetworkX',
            'Apache TinkerPop',
            'JGraphT',
            'GraphFrames',
            'igraph',
            'Cytoscape.js',

            /*
             * ============================================================
             * MISCELLANEOUS
             * ============================================================
             */

            'Apache Arrow',
            'Apache Parquet',
            'ORC',
            'LZ4',
            'Zstandard',
            'Snappy Compression',
            'Brotli',
            'zlib',
            'libarchive',
        ];

        /*
         * Supprime les doublons.
         */
        $libraries = array_unique($libraries);

        /*
         * Création des entités.
         */
        foreach ($libraries as $name) {
            $library = new Library();
            $library->setName($name);

            $manager->persist($library);
        }

        $manager->flush();
    }
}
