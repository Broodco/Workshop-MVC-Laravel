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
}
