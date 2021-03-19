@extends('layout')

@section('title','About me')

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

    <div id="hot_pot">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/072tU1tamd0?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
@endsection
