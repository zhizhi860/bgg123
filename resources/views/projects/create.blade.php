@extends('layout')

@section('title','Create some BGG')

@section('content')
    <div id="in_create">
        Create some BGGs!
    </div>
    <form method="POST" action="/projects">

        {{ csrf_field() }}

        <div style="width=100%;height=fit-content;">
            <input id="create_title" type="text" name="title" placeholder="Article Title">
        </div>

        <div style="width=100%;height=fit-content;">
            <textarea id="create_content" name="description" palceholder="Article content"></textarea>
        </div>
        <div>
            <button id="create_btn" type="submit">Create Project</button>
            <input class="back" type="button" value="Go back to HomePage" onclick="location.href='/projects'">
        </div>
    </form>
@endsection
