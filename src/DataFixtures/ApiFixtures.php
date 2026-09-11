<?php

namespace App\DataFixtures;

use App\Entity\Api;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class ApiFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager): void
    {
        $apis = [

            /*
             * ============================================================
             * PAIEMENT / FINANCE
             * ============================================================
             */

            'Stripe API',
            'PayPal API',
            'Adyen API',
            'Mollie API',
            'Checkout.com API',
            'Square API',
            'Braintree API',
            'GoCardless API',
            'SumUp API',
            'Wise API',
            'Plaid API',
            'Tink API',
            'TrueLayer API',
            'GoPay API',

            /*
             * ============================================================
             * GOOGLE
             * ============================================================
             */

            'Google Maps API',
            'Google Maps Platform API',
            'Google Places API',
            'Google Geocoding API',
            'Google Directions API',
            'Google Distance Matrix API',
            'Google Routes API',
            'Google Street View API',
            'Google Calendar API',
            'Google Drive API',
            'Google Sheets API',
            'Google Docs API',
            'Google Gmail API',
            'Google Contacts API',
            'Google People API',
            'Google YouTube API',
            'Google Search Console API',
            'Google Analytics API',
            'Google Ads API',
            'Google Cloud Vision API',
            'Google Cloud Translation API',
            'Google Cloud Speech-to-Text API',
            'Google Cloud Text-to-Speech API',
            'Google Gemini API',

            /*
             * ============================================================
             * MICROSOFT
             * ============================================================
             */

            'Microsoft Graph API',
            'Microsoft Outlook API',
            'Microsoft Teams API',
            'Microsoft OneDrive API',
            'Microsoft SharePoint API',
            'Microsoft Calendar API',
            'Microsoft Excel API',
            'Microsoft Azure API',
            'Microsoft Azure OpenAI API',
            'Microsoft Bing Search API',
            'Microsoft Translator API',
            'Microsoft Cognitive Services API',

            /*
             * ============================================================
             * META
             * ============================================================
             */

            'Meta Graph API',
            'Facebook Graph API',
            'Instagram Graph API',
            'Instagram Basic Display API',
            'WhatsApp Business Platform API',
            'Messenger Platform API',
            'Threads API',

            /*
             * ============================================================
             * RÉSEAUX SOCIAUX
             * ============================================================
             */

            'LinkedIn API',
            'LinkedIn Marketing API',
            'LinkedIn Sign In API',
            'X API',
            'TikTok API',
            'TikTok for Developers API',
            'Reddit API',
            'Discord API',
            'Telegram Bot API',
            'Slack API',
            'Pinterest API',
            'Snapchat Marketing API',
            'Twitch API',

            /*
             * ============================================================
             * GITHUB / GITLAB / CODE
             * ============================================================
             */

            'GitHub REST API',
            'GitHub GraphQL API',
            'GitHub Apps API',
            'GitLab API',
            'Bitbucket API',
            'Azure DevOps API',
            'Jira REST API',
            'Confluence REST API',
            'Linear API',
            'YouTrack API',

            /*
             * ============================================================
             * CRM / ERP / ENTREPRISE
             * ============================================================
             */

            'Salesforce API',
            'HubSpot API',
            'Pipedrive API',
            'Zoho CRM API',
            'Freshsales API',
            'SAP API',
            'SAP Business One API',
            'Oracle Cloud API',
            'Oracle Fusion API',
            'Microsoft Dynamics 365 API',
            'ServiceNow API',
            'Monday.com API',
            'ClickUp API',
            'Asana API',
            'Trello API',
            'Notion API',
            'Airtable API',

            /*
             * ============================================================
             * COMMUNICATION / EMAIL / SMS
             * ============================================================
             */

            'Twilio API',
            'Twilio SMS API',
            'Twilio Voice API',
            'Twilio Video API',
            'SendGrid API',
            'Mailgun API',
            'Mailchimp API',
            'Brevo API',
            'Postmark API',
            'Amazon SES API',
            'Vonage API',
            'MessageBird API',
            'Sinch API',
            'Telnyx API',

            /*
             * ============================================================
             * STOCKAGE / FICHIERS / CLOUD
             * ============================================================
             */

            'Amazon S3 API',
            'Amazon EC2 API',
            'Amazon Lambda API',
            'Amazon CloudFront API',
            'Amazon SES API',
            'Amazon SQS API',
            'Amazon SNS API',
            'Amazon DynamoDB API',

            'Microsoft Azure Storage API',
            'Microsoft Azure Blob Storage API',
            'Microsoft Azure Functions API',
            'Microsoft Azure Service Bus API',

            'Google Cloud Storage API',
            'Google Cloud Functions API',
            'Google Cloud Run API',
            'Google Cloud Pub/Sub API',

            'Dropbox API',
            'Box API',
            'OneDrive API',

            /*
             * ============================================================
             * IA / MACHINE LEARNING
             * ============================================================
             */

            'OpenAI API',
            'OpenAI Responses API',
            'OpenAI Chat Completions API',
            'OpenAI Embeddings API',
            'OpenAI Images API',
            'OpenAI Audio API',
            'OpenAI Realtime API',

            'Anthropic API',
            'Claude API',
            'Google Gemini API',
            'Google Vertex AI API',
            'Mistral AI API',
            'Cohere API',
            'Hugging Face API',
            'Replicate API',
            'Groq API',
            'Cerebras API',
            'Together AI API',
            'Fireworks AI API',
            'Perplexity API',
            'xAI API',

            'Stability AI API',
            'ElevenLabs API',
            'AssemblyAI API',
            'Deepgram API',
            'Whisper API',

            /*
             * ============================================================
             * CARTOGRAPHIE / GÉOLOCALISATION
             * ============================================================
             */

            'OpenStreetMap API',
            'Nominatim API',
            'Mapbox API',
            'Mapbox Geocoding API',
            'Mapbox Directions API',
            'Mapbox Tiles API',
            'HERE Maps API',
            'HERE Geocoding API',
            'HERE Routing API',
            'TomTom Maps API',
            'OpenWeatherMap API',

            /*
             * ============================================================
             * MÉTÉO
             * ============================================================
             */

            'Open-Meteo API',
            'WeatherAPI',
            'Tomorrow.io API',
            'Weatherbit API',
            'Visual Crossing Weather API',

            /*
             * ============================================================
             * VOYAGE / TRANSPORT
             * ============================================================
             */

            'Amadeus API',
            'Skyscanner API',
            'Kiwi.com API',
            'FlightAware API',
            'AviationStack API',
            'OpenSky Network API',

            'Transport for London API',
            'SNCF API',
            'SNCF Open Data API',
            'Navitia API',
            'RATP API',
            'Île-de-France Mobilités API',
            'Deutsche Bahn API',
            'Transport API',

            /*
             * ============================================================
             * E-COMMERCE
             * ============================================================
             */

            'Shopify API',
            'Shopify Admin API',
            'Shopify Storefront API',
            'WooCommerce REST API',
            'PrestaShop Webservice API',
            'Magento REST API',
            'Adobe Commerce API',
            'BigCommerce API',
            'Etsy API',
            'eBay API',
            'Amazon Selling Partner API',

            /*
             * ============================================================
             * AUTHENTIFICATION / IDENTITÉ
             * ============================================================
             */

            'Auth0 API',
            'Okta API',
            'Keycloak Admin REST API',
            'Microsoft Entra ID API',
            'Amazon Cognito API',
            'Firebase Authentication API',
            'Clerk API',
            'WorkOS API',
            'OneLogin API',

            /*
             * ============================================================
             * CLOUD / INFRASTRUCTURE
             * ============================================================
             */

            'AWS API',
            'AWS EC2 API',
            'AWS IAM API',
            'AWS Lambda API',
            'AWS S3 API',
            'AWS CloudWatch API',
            'AWS CloudFormation API',
            'AWS ECS API',
            'AWS EKS API',

            'Azure Resource Manager API',
            'Azure DevOps API',
            'Azure Kubernetes Service API',

            'Google Cloud API',
            'Google Cloud Resource Manager API',
            'Google Kubernetes Engine API',

            /*
             * ============================================================
             * OBSERVABILITÉ / MONITORING
             * ============================================================
             */

            'Sentry API',
            'Datadog API',
            'New Relic API',
            'Grafana API',
            'Grafana Cloud API',
            'Prometheus HTTP API',
            'Elastic API',
            'Elasticsearch API',
            'Kibana API',
            'OpenTelemetry API',

            /*
             * ============================================================
             * CMS / CONTENU
             * ============================================================
             */

            'WordPress REST API',
            'WordPress GraphQL API',
            'Drupal JSON:API',
            'Drupal REST API',
            'Contentful API',
            'Contentstack API',
            'Sanity API',
            'Strapi REST API',
            'Strapi GraphQL API',
            'Directus API',
            'Ghost Content API',
            'Ghost Admin API',
            'Prismic API',
            'DatoCMS API',
            'Storyblok API',
            'Hygraph API',
            'Payload CMS API',

            /*
             * ============================================================
             * PRODUCTIVITÉ / DOCUMENTS
             * ============================================================
             */

            'Notion API',
            'Airtable API',
            'Coda API',
            'Miro API',
            'Figma API',
            'Canva API',
            'DocuSign API',
            'Adobe PDF Services API',
            'Dropbox Sign API',
            'Google Workspace API',

            /*
             * ============================================================
             * ANALYTICS / MARKETING
             * ============================================================
             */

            'Google Analytics Data API',
            'Google Analytics Admin API',
            'Google Ads API',
            'Meta Marketing API',
            'LinkedIn Marketing API',
            'Mailchimp Marketing API',
            'HubSpot Marketing API',
            'Mixpanel API',
            'Amplitude API',
            'Segment API',
            'Matomo API',
            'Plausible API',

            /*
             * ============================================================
             * VIDÉO / AUDIO / MÉDIA
             * ============================================================
             */

            'YouTube Data API',
            'YouTube Analytics API',
            'Vimeo API',
            'Spotify Web API',
            'Apple Music API',
            'Twitch API',
            'TMDB API',
            'The Movie Database API',
            'OMDb API',
            'GIPHY API',
            'Tenor API',

            /*
             * ============================================================
             * PAIEMENT / IDENTITÉ / SIGNATURE
             * ============================================================
             */

            'Stripe Identity API',
            'Stripe Connect API',
            'Stripe Billing API',
            'Stripe Tax API',
            'PayPal Checkout API',
            'PayPal Payments API',
            'DocuSign API',
            'Yousign API',
            'Universign API',

            /*
             * ============================================================
             * OPEN DATA / ADMINISTRATION
             * ============================================================
             */

            'data.gouv.fr API',
            'INSEE API',
            'INSEE Sirene API',
            'INSEE BDM API',
            'API Entreprise',
            'API Particulier',
            'API Adresse',
            'API Découpage Administratif',
            'API Geo',

            /*
             * ============================================================
             * SCIENCE / DONNÉES PUBLIQUES
             * ============================================================
             */

            'NASA API',
            'European Space Agency API',
            'European Central Bank API',
            'World Bank API',
            'OECD API',
            'Eurostat API',
            'Wikimedia API',
            'Wikipedia API',
            'OpenAlex API',
            'Crossref API',

            /*
             * ============================================================
             * SPORT
             * ============================================================
             */

            'Sportmonks API',
            'API-Football',
            'TheSportsDB API',
            'Strava API',
            'Fitbit Web API',
            'Garmin API',

            /*
             * ============================================================
             * BLOCKCHAIN / WEB3
             * ============================================================
             */

            'Etherscan API',
            'Alchemy API',
            'Infura API',
            'QuickNode API',
            'CoinGecko API',
            'CoinMarketCap API',
            'OpenSea API',
            'Chainlink API',

            /*
             * ============================================================
             * RECHERCHE / MOTEURS
             * ============================================================
             */

            'Algolia API',
            'Elasticsearch API',
            'Meilisearch API',
            'Typesense API',
            'OpenSearch API',
            'Google Custom Search API',
            'Bing Search API',
            'Brave Search API',
            'SerpAPI',

            /*
             * ============================================================
             * AUTOMATISATION / WORKFLOW
             * ============================================================
             */

            'Zapier API',
            'Make API',
            'n8n API',
            'Power Automate API',
            'IFTTT API',

            /*
             * ============================================================
             * SÉCURITÉ
             * ============================================================
             */

            'VirusTotal API',
            'Have I Been Pwned API',
            'Shodan API',
            'AbuseIPDB API',
            'Cloudflare API',
            'Cloudflare DNS API',
            'Cloudflare Workers API',
            'Let\'s Encrypt ACME API',

            /*
             * ============================================================
             * CRYPTO / FINANCE / MARCHÉS
             * ============================================================
             */

            'Alpha Vantage API',
            'Finnhub API',
            'Polygon.io API',
            'Twelve Data API',
            'Financial Modeling Prep API',
            'CoinGecko API',
            'CoinMarketCap API',

            /*
             * ============================================================
             * TRADUCTION / LANGUES
             * ============================================================
             */

            'DeepL API',
            'Google Cloud Translation API',
            'Microsoft Translator API',
            'Amazon Translate API',
            'LibreTranslate API',

            /*
             * ============================================================
             * OCR / DOCUMENTS
             * ============================================================
             */

            'Google Cloud Vision API',
            'Google Document AI API',
            'Amazon Textract API',
            'Azure AI Document Intelligence API',
            'OCR.space API',
            'Mindee API',

            /*
             * ============================================================
             * RECONNAISSANCE VOCALE
             * ============================================================
             */

            'OpenAI Speech API',
            'OpenAI Whisper API',
            'Google Speech-to-Text API',
            'Google Text-to-Speech API',
            'Amazon Transcribe API',
            'Amazon Polly API',
            'Azure Speech API',
            'Deepgram API',
            'AssemblyAI API',
            'ElevenLabs API',

            /*
             * ============================================================
             * IMAGES / GÉNÉRATION
             * ============================================================
             */

            'OpenAI Images API',
            'Stability AI API',
            'Replicate API',
            'Cloudinary API',
            'Imgix API',
            'Unsplash API',
            'Pexels API',
            'Pixabay API',

            /*
             * ============================================================
             * NOTIFICATIONS
             * ============================================================
             */

            'Firebase Cloud Messaging API',
            'Apple Push Notification Service',
            'APNs',
            'Amazon SNS API',
            'OneSignal API',
            'Pusher API',
            'Ably API',

            /*
             * ============================================================
             * DIVERS
             * ============================================================
             */

            'Firebase API',
            'Firebase Admin API',
            'Supabase API',
            'Appwrite API',
            'Nhost API',
            'Contentful API',
            'LaunchDarkly API',
            'Unleash API',
        ];

        $apis = array_unique($apis);

        foreach ($apis as $name) {
            $api = new Api();
            $api->setName($name);

            $manager->persist($api);
        }

        $manager->flush();
    }

    public static function getGroups(): array
    {
        return ['api'];
    }
}
