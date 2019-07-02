# Workshop MVC-Laravel

## Partie 2 - Laravel

![Logo Laravel](https://www.ladybirdweb.com/wp-content/uploads/2016/03/laravel-1.png)

### Qu'est-ce que Laravel?

**Laravel** est un framework open-source écrit en PHP respectant le modèle _MVC_ et entièrement développé en _POO (programmation orientée object)_.

Laravel est un framework complet, qui utilise une grande gamme de composants qui gèrent chacun une fonctionalité. Le créateur de Laravel, _Taylor Otwel_, a par exemple utilisé le système de routage de _Symphony_, l'envoie de mails de _SwiftMailer_, etc. Bien entendu, tout ne vient de pas de frameworks externes. De nombreux composants sont également créés pour Laravel.

### L'objectif de ce workshop

Ce workshop fait office d'_introduction_ à Laravel et à ses concepts clés, notamment :
- La structure de Laravel
- Le routing
- Le MVC dans Laravel
- Bases de données et migrations
- Les ORM et Eloquent
- Les Middlewares

Le but ici n'est pas de voir de manière exhaustive le fonctionnement de Laravel (ce serait beaucoup trop compliqué, et surtout je ne suis pas capable de l'expliquer) mais de comprendre certains concepts et de les mettre en place.

### Installation

Dans le cadre de ce workshop, nous utiliserons la version 5.8 de Laravel. On peut soit installer Composer & Laravel séparément et créer notre projet nous-même, soit utiliser un script préexistant.

#### Méthode 1 - Composer global + Installer Laravel

##### Partie 1 - Installer Composer

Vous pouvez installer _Composer_ localement ou globablement.
Pour cela, rendez-vous sur [cette page](https://getcomposer.org/doc/00-intro.md) et suivez les instructions ou exécutez le script *install_composer* situé dans le dossier _install/bin_ (valable sur système Unix).

!! utiliser un script _example.sh_ :

> source example.sh

##### Partie 2 - Installer Laravel

La documentation de Laravel explique cela [très bien](https://laravel.com/docs/5.8/installation). Mais de manière générale, la partie la plus compliquée consiste à installer Composer. Vous pouvez utiliser le script *install_laravel* situé dans _install/bin_.

##### Partie 3 - Créer un projet Laravel 

> laravel new _nomduprojet_

#### Méthode 2 - Composer local + Créer projet Laravel

Je vous ai fourni un script venant de _Romain Vandevoorde_ (Lovelace 2). Utiliser le script *local_project* situé dans _install/bin_ crée un projet nommé *workshop_laravel* dans le répertoire courant.

[Source](https://github.com/RomainVandevoorde/Laravel-Workshop/blob/master/laravel-install.sh)