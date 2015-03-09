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
 
### Installer les dépendences
```
# Vous allez dans la racine du projet et vous executez cette ligne de code
composer install
```

## Architecture

- Le dossier **app** regroupe les controllers, les vues, les models, les configurations et les routes
- Le dossier **core** contiendra toutes les classes personnalisées qu'on pourra utilisé
- Le dossier **public** contiendra le JS et le CSS mais également le fichier index.php
- Le dossier **vendor** regroupe toutes les dépendances, et particulièrement Slim

## Classes personnalisées

Il existe la classe **Router** qui permet d'appeler un Controller en fonction d'une route.
```php
$route = new Router($app); //On injecte la dépendence $app pour qu'on puisse l'utiliser dans la classe

$route->get('/home', 'HomeController@index'); // On appel le HomeController et on execute la methode index
```
