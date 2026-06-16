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
