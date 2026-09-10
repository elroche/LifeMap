<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Framework;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class FrameworkFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $frameworks = [

            /*
             * ============================================================
             * PHP
             * ============================================================
             */

            'Symfony',
            'Laravel',
            'CodeIgniter',
            'CakePHP',
            'Yii',
            'Zend Framework',
            'Laminas',
            'Slim',
            'Phalcon',
            'Nette',
            'FuelPHP',
            'Fat-Free Framework',
            'Flight',
            'Mezzio',
            'Spiral Framework',
            'Hyperf',
            'Leaf PHP',
            'Bramus Router',

            /*
             * ============================================================
             * JAVASCRIPT / TYPESCRIPT — FRONTEND
             * ============================================================
             */

            'Angular',
            'AngularJS',
            'React',
            'Vue.js',
            'Svelte',
            'SolidJS',
            'Preact',
            'Ember.js',
            'Backbone.js',
            'Alpine.js',
            'Lit',
            'Mithril.js',
            'Inferno',
            'Stencil',
            'Marko',
            'Aurelia',
            'Dojo Toolkit',
            'Ext JS',

            /*
             * ============================================================
             * JAVASCRIPT / TYPESCRIPT — FULL STACK / SSR
             * ============================================================
             */

            'Next.js',
            'Nuxt',
            'SvelteKit',
            'Remix',
            'Astro',
            'Gatsby',
            'Qwik',
            'RedwoodJS',
            'Analog',
            'Fresh',
            'SolidStart',
            'TanStack Start',
            'Meteor',

            /*
             * ============================================================
             * NODE.JS — BACKEND
             * ============================================================
             */

            'Express.js',
            'NestJS',
            'Fastify',
            'Koa',
            'Hapi',
            'Sails.js',
            'AdonisJS',
            'Feathers',
            'LoopBack',
            'Moleculer',
            'Restify',
            'Total.js',
            'FoalTS',
            'Ts.ED',
            'Midway',
            'Egg.js',
            'DerbyJS',
            'ActionHero',

            /*
             * ============================================================
             * DENO
             * ============================================================
             */

            'Fresh',
            'Oak',
            'Hono',
            'Aleph.js',

            /*
             * ============================================================
             * PYTHON
             * ============================================================
             */

            'Django',
            'Flask',
            'FastAPI',
            'Pyramid',
            'Tornado',
            'Bottle',
            'CherryPy',
            'Falcon',
            'Sanic',
            'Starlette',
            'Litestar',
            'Masonite',
            'TurboGears',
            'Web2py',
            'Dash',
            'Streamlit',
            'Gradio',
            'Quart',
            'Aiohttp',
            'Hug',
            'Responder',
            'BlackSheep',
            'Robyn',

            /*
             * ============================================================
             * RUBY
             * ============================================================
             */

            'Ruby on Rails',
            'Sinatra',
            'Hanami',
            'Roda',
            'Padrino',
            'Grape',
            'Camping',
            'Ramaze',
            'Volt',

            /*
             * ============================================================
             * JAVA
             * ============================================================
             */

            'Spring',
            'Spring Boot',
            'Spring MVC',
            'Spring WebFlux',
            'Jakarta EE',
            'Java EE',
            'Quarkus',
            'Micronaut',
            'Vert.x',
            'Play Framework',
            'Dropwizard',
            'Javalin',
            'Spark Java',
            'Grails',
            'Apache Struts',
            'Apache Wicket',
            'Vaadin',
            'Jersey',
            'RestEasy',
            'Helidon',
            'Jooby',
            'Blade',
            'Ninja Framework',

            /*
             * ============================================================
             * KOTLIN
             * ============================================================
             */

            'Ktor',
            'http4k',
            'Javalin',
            'Koin',
            'Vaadin',

            /*
             * ============================================================
             * C#
             * ============================================================
             */

            'ASP.NET',
            'ASP.NET Core',
            'Blazor',
            'Nancy',
            'ServiceStack',
            'Orleans',
            'DotVVM',
            'Umbraco',
            'Orchard Core',
            'ABP Framework',

            /*
             * ============================================================
             * C / C++
             * ============================================================
             */

            'Wt',
            'Crow',
            'Drogon',
            'Oat++',
            'Pistache',
            'CppCMS',
            'TreeFrog Framework',
            'Drogon',

            /*
             * ============================================================
             * GO
             * ============================================================
             */

            'Gin',
            'Echo',
            'Fiber',
            'Chi',
            'Beego',
            'Buffalo',
            'Revel',
            'Iris',
            'Martini',
            'Gorilla',
            'Goa',
            'Kit',
            'Hertz',
            'Kratos',

            /*
             * ============================================================
             * RUST
             * ============================================================
             */

            'Actix Web',
            'Axum',
            'Rocket',
            'Warp',
            'Poem',
            'Tide',
            'Salvo',
            'Gotham',
            'Nickel',
            'Thruster',
            'Loco',
            'Pavex',

            /*
             * ============================================================
             * ELIXIR / ERLANG
             * ============================================================
             */

            'Phoenix',
            'Plug',
            'Bandit',
            'Nerves',
            'LiveView',
            'Ash Framework',
            'Absinthe',
            'Cowboy',
            'Nitrogen',
            'ChicagoBoss',

            /*
             * ============================================================
             * SCALA
             * ============================================================
             */

            'Play Framework',
            'Akka HTTP',
            'http4s',
            'Lift',
            'ZIO HTTP',
            'Finatra',
            'Scalatra',
            'Pekko HTTP',

            /*
             * ============================================================
             * SWIFT
             * ============================================================
             */

            'Vapor',
            'Hummingbird',
            'Perfect',
            'Kitura',

            /*
             * ============================================================
             * DART
             * ============================================================
             */

            'Flutter',
            'Shelf',
            'Serverpod',
            'Angel',

            /*
             * ============================================================
             * LUA
             * ============================================================
             */

            'Lapis',
            'OpenResty',
            'Orbit',
            'Sailor',

            /*
             * ============================================================
             * HASKELL
             * ============================================================
             */

            'Yesod',
            'Servant',
            'Scotty',
            'Snap',
            'Happstack',
            'Spock',

            /*
             * ============================================================
             * F#
             * ============================================================
             */

            'Giraffe',
            'Saturn',
            'Falco',
            'Bolero',
            'Suave',

            /*
             * ============================================================
             * CLOJURE
             * ============================================================
             */

            'Ring',
            'Compojure',
            'Luminus',
            'Pedestal',
            'Reitit',

            /*
             * ============================================================
             * R
             * ============================================================
             */

            'Shiny',
            'Plumber',
            'RestRserve',
            'Ambiorix',

            /*
             * ============================================================
             * JULIA
             * ============================================================
             */

            'Genie',
            'Oxygen',
            'HTTP.jl',
            'Mux.jl',

            /*
             * ============================================================
             * CRYSTAL
             * ============================================================
             */

            'Kemal',
            'Lucky',
            'Amber',
            'Athena Framework',

            /*
             * ============================================================
             * NIM
             * ============================================================
             */

            'Jester',
            'Prologue',
            'HappyX',

            /*
             * ============================================================
             * D
             * ============================================================
             */

            'Vibe.d',
            'Hunt Framework',
            'Ocean',

            /*
             * ============================================================
             * PERL
             * ============================================================
             */

            'Mojolicious',
            'Dancer',
            'Catalyst',
            'Mason',
            'Amon2',
            'Web::Simple',

            /*
             * ============================================================
             * MOBILE — CROSS PLATFORM
             * ============================================================
             */

            'React Native',
            'Ionic',
            'NativeScript',
            'Framework7',
            'Quasar',
            'Onsen UI',
            'Apache Cordova',
            'Capacitor',
            'Uno Platform',
            'Xamarin',

            /*
             * ============================================================
             * MOBILE — ANDROID
             * ============================================================
             */

            'Jetpack Compose',
            'Android Jetpack',

            /*
             * ============================================================
             * MOBILE — IOS
             * ============================================================
             */

            'SwiftUI',
            'UIKit',

            /*
             * ============================================================
             * DESKTOP
             * ============================================================
             */

            'Electron',
            'Tauri',
            'Neutralinojs',
            'Qt',
            'GTK',
            'wxWidgets',
            'JUCE',
            'Avalonia',
            'WPF',
            'Windows Forms',
            '.NET MAUI',
            'JavaFX',
            'Swing',
            'SWT',

            /*
             * ============================================================
             * CMS / E-COMMERCE / WEB PLATFORMS
             *
             * À conserver uniquement si ton entité Framework représente
             * aussi les plateformes de développement.
             * ============================================================
             */

            'WordPress',
            'Drupal',
            'Joomla',
            'TYPO3',
            'PrestaShop',
            'Magento',
            'Shopware',
            'Strapi',
            'Directus',
            'Payload CMS',
            'KeystoneJS',
            'Ghost',
            'Craft CMS',
            'Statamic',

            /*
             * ============================================================
             * GAME DEVELOPMENT
             * ============================================================
             */

            'Unity',
            'Unreal Engine',
            'Godot',
            'CryEngine',
            'GameMaker',
            'Defold',
            'Cocos2d-x',
            'Cocos Creator',
            'Phaser',
            'Panda3D',
            'MonoGame',
            'Bevy',

            /*
             * ============================================================
             * IA / MACHINE LEARNING
             *
             * On ne met ici que les frameworks.
             * Les concepts IA restent dans Technology.
             * ============================================================
             */

            'TensorFlow',
            'PyTorch',
            'Keras',
            'JAX',
            'scikit-learn',
            'Hugging Face Transformers',
            'MXNet',
            'PaddlePaddle',
            'Caffe',
            'CNTK',
            'Apache MXNet',
            'ONNX Runtime',

            /*
             * ============================================================
             * DATA / BIG DATA
             * ============================================================
             */

            'Apache Spark',
            'Apache Hadoop',
            'Apache Flink',
            'Apache Beam',
            'Apache Storm',
            'Apache Samza',
            'Apache Kafka Streams',

            /*
             * ============================================================
             * CSS / UI FRAMEWORKS
             * ============================================================
             */

            'Bootstrap',
            'Tailwind CSS',
            'Foundation',
            'Bulma',
            'Semantic UI',
            'UIkit',
            'Materialize',
            'Pure.css',
            'Milligram',
            'Primer',
            'Pico.css',
            'Chakra UI',
            'Material UI',
            'Ant Design',
            'Mantine',
            'Vuetify',
            'Quasar Framework',
            'PrimeNG',
            'PrimeReact',
            'PrimeVue',

            /*
             * ============================================================
             * API / INTEGRATION FRAMEWORKS
             * ============================================================
             */

            'Apache Camel',
            'Spring Integration',
            'Mule Runtime',
            'WSO2',
            'Apache CXF',
            'Apache ServiceMix',

            /*
             * ============================================================
             * EDGE / IOT
             * ============================================================
             */

            'EdgeX Foundry',
            'Eclipse Kura',
            'Eclipse IoT',
            'ThingsBoard',
            'Mbed',
            'Zephyr',
            'RIOT OS',
            'Apache Mynewt',

            /*
             * ============================================================
             * ROBOTIQUE
             * ============================================================
             */

            'ROS',
            'ROS 2',
            'YARP',
            'Orocos',
            'Webots',

            /*
             * ============================================================
             * BLOCKCHAIN / WEB3
             * ============================================================
             */

            'Ethereum',
            'Hyperledger Fabric',
            'Hyperledger Besu',
            'Substrate',
            'Polkadot SDK',
            'Cosmos SDK',
            'Solana',
            'Hardhat',
            'Foundry',

            /*
             * ============================================================
             * DIVERS
             * ============================================================
             */

            'Apache Cordova',
            'OpenUI5',
            'SAPUI5',
            'Vaadin',
            'ZK Framework',
            'Play Framework',
        ];

        foreach ($frameworks as $name) {
            $framework = new Framework();
            $framework->setName($name);

            $manager->persist($framework);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['framework'];
    }
}
