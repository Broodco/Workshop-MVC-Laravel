# Workshop MVC-Laravel

## Partie 1 - Structure MVC avec PHP

![Whoops! There's a problem loading the image](https://user.oc-static.com/files/382001_383000/382129.png "Schéma MVC")

### Qu'est-ce que le MVC?

Le **MVC** est un _design pattern_ qui permet de séparer la logique d'une code en trois parties distinctes :
- **Le Modèle**: Cette partie gère les données du site web. Elle récupère des informations dans la base de données, les organise, les assemble et les renvoie au *controlleur*.
- **La Vue**: Cette partie s'occupe de l'affichage. On n'y effectue que peu de calculs. Elle récupère des données depuis le *controlleur*.
- **Le Controlleur**: Il gère la logique du code et sert d'intermédiaire entre le _modèle_ et la _vue_. Suite à une requête de la part du client, le controlleur va appeler le _modèle_, récupérer des données, les traiter et ensuite les envoyer à la _vue_.

En plus de cela, on peut également retrouver une quatrième partie : le **routeur**. Lorsque l'utilisateur accède à un _url_, sa demande va être transmise par le _routeur_ vers le _controlleur_.

### L'objectif de cette partie

L'objectif de cette partie est de vous familiariser avec la structure MVC en général. A cette fin, nous allons créer un site web tout simple en suivant ce _design pattern_.

De plus, un paradigme de programmation très important en PHP est la _programmation orientée object_, ou _POO_. Nous tenterons donc de suivre la POO lors de la création de notre site, ou tout du moins certaines parties.

### En pratique

Après une petite introduction _pseudo-théorique_, nous nous lancerons dans la création d'un petit serveur web relativement simple en PHP.

Pour faciliter le développement de cette application, je vous invite à récupérer ce template de dossier utilisant _Docker_ pour avoir un environnement de développement similaire pour tout le monde. Les commandes à retenir lors de votre travail sont :
- Pour lancer le server, placez-vous au même niveau que le fichier _docker-compose_ dans le terminal et lancez :
> docker-compose up --build
- Pour fermer vos containers lancez la commande suivante :
> docker-compose down

Vous pourrez ensuite accéder à votre serveur sur le port 80 de votre ordinateur (il sera peut-être nécessaire de stopper Apache et mysql le temps du développement) et _phpmyadmin_ sera accessible sur le port 8080. Les identifiants utilisés sont _admin_ et _admin_.

Bien entendu, il est nécessaire d'avoir installé _docker_ et _docker-compose_ sur votre ordinateur.