@extends('layout')

@section('title','Welcome to my BGG')

@section('content')
    <div id="setting">
        <div id="logo">
            My BlogGG
        </div>

        <div id="logo1">
            <a href="/projects" class="HomePage">
                HomePage
            </a>
        </div>

        <div id="logo2">
            <a href="/projects/about" class="about">
                About Me
            </a>
        </div>
    </div>


    <div class="article">
        <p>
            Article List
        </p>
    </div>
    @foreach($projects as $project)

        <div class="article1">
            <a href="/projects/{{ $project->id }}" id="loop_a">
                {{ $project->title }}
            </a>
        </div>

    @endforeach

    <input id="create" type="button" value="Write a new article" onclick="location.href='/projects/create'">
@endsection
