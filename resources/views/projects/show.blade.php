@extends('layout')

@section('content')

    <div id="show_your_title">
        {{ $projects->title }}
    </div>

    <div >
        <textarea name="description" id="show_your_des1"  disabled="disabled" >{{ $projects->description }}</textarea>
    </div>

    <div>
        <a  id="edit" href="/projects/{{ $projects->id }}/edit">
            Edit
        </a>

        <input type="button" class="back" value="Go back to HomePage" onclick="location.href='/projects'">
    </div>
@endsection
