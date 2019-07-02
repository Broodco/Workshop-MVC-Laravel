# Step-5 - Faire du MVC avec Laravel

## Récapitulatif

Nous avons vu à présent :
- comment utiliser le router et appeler un controller
- comment créer et afficher une view _blade_
- comment connecter Laravel à votre base de données
- comment créer une table via une migration
- comment créer un model relié à une table
- comment interagir avec cette table via Eloquent

## Utilisation plus intéressante du controller et de nos views

Maintenant, nous allons voir comment utiliser le controller pour récupérer des données depuis le model et les envoyer vers une view.

### Récupérer des données dans notre controller

Comme sur _tinker_, il suffit de faire une requête grace à notre ORM, par exemple :

> $projects = App\Project::all();

### Envoyer ces données vers la view

> return view('projects.index', ['projects' => $projects]);

ce qui est équivalent à 

> return view('projects.index', compact('projects));

Nous pouvons grâce à cela récupérer _$projects_ dans notre view et utiliser _blade_ pour effectuer de petites opérations dessus.

## Et maintenant

Nous allons synthétiser tout cela. Vous pouvez soit réutiliser les éléments que vous avez créé précédemment (_tasks_ & _Task_) soit recréer chaque chose.

### L'exercice (en solo ou ensemble)

Permettre d'afficher sur une page (_tasks_) toutes les tasks qui se situent dans votre base de données.

Pour cela, rappelez-vous :

- On peut créer une table grace à une migration
- On relie cette table à notre app via un modèle
- On utilise Eloquent pour interagir avec ce modèle
- On fait une requête Eloquent dans une fonction notre controller et on récupère les données
- On renvoie les données vers une vue via notre fonction du controller
- On assigne un url à une fonction de notre controller dans le router

## Next Step

Dans la prochaine et dernière partie nous verrons comment envoyer des données depuis la view vers la base de données.