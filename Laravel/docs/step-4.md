# Step-4 - Modèles & Eloquent

Notre base de données a été créée. Nous pouvons y accéder. Nous pouvons créer des tables, les retirer, les mettre à jour.

Mais...Comment y ajoute-t-on des données? 

## Eloquent, c'est quoi?

Eloquent est un _object-relational mapping_, c'est-à-dire un programme qui fait office de traducteur entre le paradigme objet de Laravel et votre base de données.

En pratique, il vous permet d'intéragir avec votre base de données en utilisant une syntaxe php, et non SQL. Chaque élément de votre table sera représenté en tant qu'objet, et chaque propriété de l'élément de la table sera une propriété de l'objet.

Cela facilite énormément l'ajout et la récupération de données dans vos tables. Voyons ensemble pourquoi.

## Créer un Model

> php artisan make:model _Modelname_

Par convention, Laravel va relier un modèle écrit au singulier uppercase avec une table au pluriel lowercase :

Le Model _Project_ sera donc relié à la table _projects_.

Lorsque nous utiliserons Eloquent pour récupérer les élément de la table projects, nous pourrons simplement utiliser le modèle Projet. Plus rien à configurer !

Amusons-nous maintenant à créer et récupérer des projets grâce à Eloquent.

## Tinker

Tinker est en quelque sorte l'interface de commandes de Laravel. De la même manière qu'avec mysql, vous pouvez y écrire des requêtes et même du php simple.

On y accède avec :

> php artisan tinker

Maintenant, effectuons des requêtes Eloquent dans Tinker !

## Utiliser Eloquent

### Créer un nouvel élement

1. Assignez le nouvel élément à une variable
> $project = new App\Project;
2. Remplissez les propriétés requises spécifiées dans votre migration
> $project->title = 'First Project'

> $project->description = 'Lorem Ipsum'
3. Enregistrons ce nouvel élément dans la base de donnés
> $project->save();

### Récupérer un projet

1. Récupérer tous les projets de la table 
> App\Project::all();
2. Récupérer le premier projet de la table
> App\Project::first();

_ou_

> App\Project::all()[0];
3. Récupérer le titre du deuxième projet
> App\Project::all()[1]->title;
4. Récupérer les titres de tous les projets
> App\Project::all()->map->title;

Et ça, c'est dingue !

## Petit exercice pratique

Créez un modèle Task qui permettra d'interagir avec votre table _tasks_ créée précédemment.

Ensuite, à l'aide de _tinker_ et _Eloquent_, ajoutez 2 ou 3 éléments à cette table.

Enfin, essayez de récupérer ces éléments, ou des parties de chaque Task, en bref amusez-vous avez Eloquent.

## Next step !

Dans la prochaine partie, nous allons mettre en pratique tout ce que nous avons vu jusqu'ici, et nous allons enfin envoyer des données depuis notre DB jusque nos vues !