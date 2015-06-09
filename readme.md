# Roadweb - Readme

## Explication

Vous vous trouvez dans le projet Roadweb.
Ici, on va développer le site, en passant par le CMS.
Les fichiers qui afficheront le site web se trouvent dans le dossier `ressources/view/pages`.
Pour les intégrateurs, ne touchez pas au code PHP. S'il y a un problème que vous rencontrez, signalez le a un développeur, ou dans la partie issues de github.


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

Il faut modifier renommer le fichier `.envexample` et ensuite en fonction de vos configurations locales, il faut modifier le fichier `.env` dans la section base de donnée.
Ensuite lancer la commande de migration `php artisan migrate`.


## Tutorials

Si vous êtes nouveaux dans Laravel, Grafikart fait une formation gratuite et ultra complète pour vous aider !
http://www.grafikart.fr/formations/laravel

## Allez voir le Wiki du projet !

Voici le lien du Wiki pour avoir plus d'informations sur l'organisation du projet : https://github.com/emweb-project/Roadweb/wiki/Organisation-des-branches
