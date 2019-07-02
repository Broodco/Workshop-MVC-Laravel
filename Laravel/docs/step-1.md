# Step 1 - Routing basique

La première étape pour apprivoiser Laravel aujourd'hui est d'utiliser son système de _routing_.

Les routes de votre application se situent dans 
> _routes/web.php_

(Les autres fichiers du dossier peuvent également être utilisées, comme par exemple _api.php_ pour définir les routes de votre API. Cependant, nous nous limiterons au fichier _web.php_ lors de ce workshop.)

## Structure d'une route et appel à une vue

    Route::get('/', function () {
      return view('welcome');
    });

Ici, le chemin **get('/')** (=> requête GET sur '/') retourne la vue nommée _'welcome'_.

Par défaut, les vues se trouvent dans 
> _resources/views_

Cherchez le fichier 'welcome.blade.php' et modifiez-le pour voir si ça change quelque chose.

## Fichiers blade

Blade est le moteur de template de Laravel. Il nous permet de créer des vues de la même manière qu'avec des fichier _.php_. On peut y intégrer un peu de logique grâce à des boucles ou des conditions, et bien entendu utiliser des layouts faits maison.

Vous pouvez bien entendu voir cela dans 'layout.blade.php'.

## Création d'une nouvelle route et d'une nouvelle page

Rien de plus simple : Sur base de la route précédente, creez une route '/about' qui renverra sur une page simple nommée 'about.blade.php'.

## Oui mais... C'était pas supposé être du MVC Laravel?

Et bien oui ! Dans le MVC la route ne dirige pas directement vers une vue. Nous allons donc voir dans la partie suivante comment ça fonctionne avec Laravel.