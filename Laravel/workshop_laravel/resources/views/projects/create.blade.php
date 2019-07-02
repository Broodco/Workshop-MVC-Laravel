@extends('layout')

@section('title')
    New Project
@endsection


@section('content')
    <h1>Create a new Project</h1>
    <form method="POST" action="/projects">
        @csrf
        <input type="text" name="title">
        <textarea name="description" cols="30" rows="10"></textarea>
        <button type="submit">Create Project</button>
    </form>
@endsection
