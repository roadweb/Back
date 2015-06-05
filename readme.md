# CMS-API

## Explication

Vous êtes dans la section "Back Office".
On développe ici tout le systyème de gestion de contenu, édition, création, gestion etc...

Le Back Office est découpé en deux parties.

Une partie CMS, dans laquelle on devra se logger pour pouvoir gérer les contenus sur le site.
Une partie API qui se chargera d'envoyer une réponse en fonction d'une requête.

## Starter & Downloads

### Installez composer 
https://getcomposer.org/doc/00-intro.md

Pour les utilisateur de WAMP il est impératif de se rendre dans le fichier php.ini (..\wamp\bin\php\php5.4.12\php.ini)
et de "décommenter" la ligne ;extension=php_openssl.dll en supprimant le point virgule (;).
 Ensuite, enregistrer, quitter et installer composer.
 
Si vous vous rendez compte que vous ne pouvez pas afficher les pages php (message d'erreur suivant : Internal Server Error  The server encountered an internal error or misconfiguration and was unable to complete your request. etc.), il suffit d'activer le module rewrite_module dans WAMP - APACHE - MODULES APACHE.
 
### Installer les dépendences
```
# Vous allez dans la racine du projet et vous executez cette ligne de code
composer install
```

### Modifier le fichier .env

En fonction de vos configurations locales, il faut modifier le fichier `.env` dans la section base de donnée.

## Tutorials

Si vous êtes nouveaux dans Laravel, Grafikart fait une formation gratuite et ultra complète pour vous aider !
http://www.grafikart.fr/formations/laravel

## Allez voir le Wiki du projet !

Voici le lien du Wiki pour avoir plus d'informations sur l'organisation du projet : https://github.com/emweb-project/Roadweb/wiki/Organisation-des-branches
