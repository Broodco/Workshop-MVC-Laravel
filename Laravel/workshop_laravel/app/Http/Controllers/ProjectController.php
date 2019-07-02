<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        // Pour une API, on peut juste return notre requete, Laravel retourne du JSON
        // return $projects;

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // Pour montrer un json des données envoyées par le formulaire
        // return request()->all();

        $project = new Project();

        $project->title = request()->title;
        $project->description = request()-> description;

        $project->save();

        return redirect('/projects');
    }
}
