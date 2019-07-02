@extends('layout')

@section('title')
    Projects
@endsection

@section('content')
    <h1>Projects</h1>

    <div>
        @foreach ($projects as $project)
            <h3>{{$project->title}}</h3>
            <p>{{$project->description}}</p>
        @endforeach
    </div>
@endsection
