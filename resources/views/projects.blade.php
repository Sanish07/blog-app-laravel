@extends('layout.secondary')
@section('title','My Other Projects')

@section('route','contact')
@section('route-label','Contact')

@section('page-content')

<div class="projects">
    <a class="project-card" href="https://github.com/Sanish07/todo-assignment-2" target="_blank">
        <img src="{{ asset('project-images/p1-img.jpg') }}" alt="p1-logo" height="170" />
        <div class="project-text">React Todo-list App</div>
    </a>

    <a class="project-card" href="https://github.com/Sanish07/Guess-The-Number" target="_blank">
        <img src="{{ asset('project-images/p2-img.jpg') }}" alt="p2-logo" height="170" />
        <div class="project-text">Guess The Number Game</div>
    </a>

    <a class="project-card" href="https://github.com/Sanish07/simon-game" target="_blank">
        <img src="{{ asset('project-images/p3-img.jpg') }}" alt="p3-logo" height="170" />
        <div class="project-text">Simon Memory Game</div>
    </a>

    <a class="project-card" href="https://github.com/Sanish07/Infomania-v2.0" target="_blank">
        <img src="{{ asset('project-images/p4-img.jpg') }}" alt="p4-logo" height="170" />
        <div class="project-text">Infomania Front End Website</div>
    </a>
</div>

@endsection