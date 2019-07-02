# Step-2 - Le MVC dans Laravel

Nous avons vu lors de la première partie de ce workshop que dans le modèle _MVC_, la route va généralement faire appel à un **controller**.

Mais du coup, où se situent les *controller* dans Laravel, et comment les créer?

----

## Où vivent les _Controllers_?

> app/Http/Controllers

## Comment en créer un?

Laravel possède un outil de ligne de commande juste génial : **artisan**

Vous vous souvenez? Lorsque que je vous ai demandé de lancer le serveur pour la première fois, vous avez du utiliser la commande suivante :

> php artisan serve

Et bien artisan peut faire bien plus que ça ! Dans la console, entrez la commande suivante : 

> php artisan

et admirez le résultat ! Une belle liste ordonnée de choses que l'outil peut faire. Dans notre cas, nous nous intéresserons à _make:controller_.

Et ne vous inquietez pas si vous vous sentez un peu dépassés par le nombre d'options, il est loin d'être nécessaire de tout connaitre pour créer quelque chose de fonctionnel et efficace !

Pour créer notre premier controller, nous allons donc executer la commande suivante :

> php artisan make:controller PagesController

## Utilisation du controller

Dans votre router, vous pourrez désormais appeler votre controller au lieu d'exécuter une fonction.

Et depuis votre controller, appeler votre view !

Essayez !


