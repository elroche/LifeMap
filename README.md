Ajout des icons :
php bin/console importmap:require @fortawesome/fontawesome-free/css/all.min.css
Icons disponnibles a ce lien :
https://fontawesome.com/icons?utm_source=chatgpt.com

il faut mettre dans le fichier .html.twig les liens :

-   Pour fontawesome : <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
-   Pour bootstrap : <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

Creation de l'entité User

Creation dun systeme de fixture
Commande :
composer require --dev orm-fixtures

Email :

-   utilisation de mailpit
-   reception des mails à ce lien : http://localhost:8025/
-   Email de confirmation de creation de compte envoyé par support@LifeMap.fr, du nom de Support

Modification et suppression du compte :

-   commande : php bin/console make:form UserProfileType
-   creation des routes edit et delete dans UserProfileType
-   Creation de la vue edit.html.twig
-   Modification de la vue index.html.twig pour ajouter dedans le delete

Modification du mot de passe :

-   Creation du formulaire, commande : php bin/console make:form ChangePasswordType
-   A ne pas lié directement a User (car contient des champs différents que User)

Mot de passe oublié :

-   Installation du Bundle : ResetPasswordBundle :
    composer require symfonycasts/reset-password-bundle
-   Installation du générateur symfony :
    php bin/console make:reset-password
    Il va générer automatiquement :
-   le contrôleur
-   les formulaires
-   les templates Twig
-   le système de génération de token
-   l'entité pour stocker les demandes de réinitialisation (si nécessaire selon la configuration)
