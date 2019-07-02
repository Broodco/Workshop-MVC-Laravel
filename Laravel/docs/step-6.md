# Step-6 - Envoyer des données à la database

## Route, Controller@create & Form

Pour envoyer des données depuis une view vers une BDD, on utilise généralement un formulaire situé sur une page de notre app. C'est ce que nous allons faire ici.

### Etape 1
 Assigner une route à la page de création 

    Route::get('/projects/create', 'ProjectController@create');

### Etape 2
 Créer une fonction dans le controller permettant d'afficher la page contenant le formulaire

    public function create()
    {
        return view('projects.create');
    }

### Etape 3
 Il faut créer une view _create.blade.php_ dans le dossier approprié. Celle-ci devra contenir un formulaire avec les inputs requis. Ce form renverra une "post" request avec les données à insérer. 
Par convention, on renverra cette request à la même route que la liste des projets, mais le routeur fera la différence entre une _get_ request et une _post_ request.

    <h1>Create a new Project</h1>
    <form method="POST" action="/projects">
        <input type="text" name="title">
        <textarea name="description" cols="30" rows="10"></textarea>
        <button type="submit">Create Project</button>
    </form>

### Etape 4 

Créer la route nécessaire pour la _post_ request dans le router, ainsi que la fonction appelée dans le controller (nommée par convention _store_).

### Etape 5

Récupérer les données du formulaire dans notre controller.

    public function store()
    {
        return request()->all();
    }

Et là, c'est le drame !

#### CSRF protection

Laravel est configuré pour être très sécurisé. Tellement sécurisé qu'il n'accepte pas des données dont il ne connait pas la provenance.

Admettons que je souhaite envoyer des données à mon serveur via _Postman_. Je n'ai donc pas besoin d'un formulaire ou autre et je peux tenter, par exemple, d'altérer le champ _id_ de la BDD.

Et bien Laravel m'en empêchera car il n'accepte pas les données qui ne sont pas accompagnées d'un token *CSRF*.

> CSRF = cross-site request forgery

Lorsque je crée un formulaire dans mon application, je dois donc lui donner "la permission" d'envoyer des données au serveur. Avec Blade, rien de plus simple, il suffit d'ajouter
> @csrf

dans notre formulaire.

Résultat :

    <form method="POST" action="/projects">
        @csrf
        <input type="text" name="title">
        <textarea name="description" cols="30" rows="10"></textarea>
        <button type="submit">Create Project</button>
    </form>

Et maintenant, nous récupérons les données du formulaire ! Youpi !

(C'est bien sécurisé quand même.)

### Etape 6

Dans notre controller, nous pouvons maintenant faire notre requete vers la BDD avec Eloquent pour ajouter notre élément et ensuite rediriger le client.

    $project = new Project();

    $project->title = request()->title;
    $project->description = request()-> description;

    $project->save();

    return redirect('/projects');


