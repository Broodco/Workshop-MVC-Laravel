# Step-3 - Bases de données, migrations

Dans cette partie, nous nous attaquerons à la partie **M** de MVC : le modèle.

Et qui dit _model_ (dans la langue de _Tolkien_), dit base de données !

## Configurer son projet : .env

Dans le fichier _.env_ situé à la racine du projet, vous pouvez définir les variables d'environnement qui seront utilisées par Laravel.

Celles qui nous intéressent notamment sont :
- DB_DATABASE
- DB_USERNAME
- DB_PASSWORD

Vous pouvez, grâce à ces variables définir les identifiants pour vous connecter à votre base de données.

Si vous le désirez, creez maintenant une base de données _mysql_ à l'aide du terminal ou phpmyadmin ou autre.

Rappel : vous pouvez utiliser les commandes suivantes pour créer un _user_ et une _bdd_ :

> sudo mysql

> GRANT ALL PRIVILEGES ON laravelDB.* TO 'laravelUSER'@'localhost' IDENTIFIED BY 'laravelPASSWORD';

> CREATE DATABASE laravelDB;

> quit;

Après cela, vous ne devriez pas avoir de problème pour vous connecter à votre bdd sur phpmyadmin. 

Plus qu'à remplacer les valeurs par défaut de _.env_ par celles qui vous avez créées (ici : laravelDB, laravelUSER, laravelPASSWORD).

## Les migrations

### C'est quoi?

Les migrations sont une sorte de "version control" de votre base de données.

Elles vous permettent, à l'aide de Schemas que nous allons voir juste après, de facilement modifier et partager la structure de votre base de données.

Si je veux partager mon projet avec mes collègues ou un ami, il va devoir, en plus d'importer mon projet, recréer la base de données lui-même ou de l'importer via des commandes SQL. Peu efficace et assez redondant si on commence à faire ça à chaque version que je lui envoie.

Et bien les migrations sont un moyen automatique pour traiter ce problème.

2 migrations existent par défaut lorsque vous creez un projet Laravel, vous pouvez les retrouver dans :

> database/migrations

### Comment les utiliser?

Il existe quelques commandes pour utiliser les migrations, et si vous ne voyez toujours pas à quoi ça sert, démontrons par l'exemple !

Lorsque vous avez créé votre bdd il y a quelques minutes, celle-ci était bien entendu vide. Vous pouvez au cas où vérifier sur phpmyadmin.

Maintenant, executez la commande suivante :

> php artisan migrate

Vérifiez maintenant votre base de données. Elle contient désormais 3 nouvelles tables.

Une pour chaque migration effectuée (et bien oui, il y avait deux fichiers dans le dossier migrations : users et password_resets), ainsi qu'une table _migrations_ qui est en quelque sorte un _log_ des migrations effectuées jusqu'ici.

Il existe également des commandes pour revenir en arrière ou actualiser les migrations :

#### annuler la migration
> php artisan migrate:rollback
#### annule toutes vos migrations
> php artisan migrate:reset
#### supprime vos tables et les recrée (! perte de données)
> php artisan migrate:fresh

### Créer une migration

Vous pouvez créer une migration à l'aide de cette commande :

> php artisan make:migration create_projects_table

Dans votre dossier de migrations, tout est préconfigué pour que vous puissiez créer un nouveau Schéma !

### Petit exercice pratique 

Créez une migration qui vous permettra d'ajouter une table _tasks_ dans votre base de données.

Cette table contiendra 4 colonnes :
- id
- timestamp
- todo
- status

Ensuite, effectuez la migration et admirez votre nouvelle table sur phpmyadmin !

Dans la prochaine partie, nous verrons comment ajouter et récupérer des données dans nos bases de données, ainsi que ce qu'est un ORM _(spoiler : c'est génial)_.