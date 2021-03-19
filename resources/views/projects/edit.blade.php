@extends('layout')
@section('title','Edit your BGG')
@section('content')
    <div id="in_edit">
        <p>
            Edit your BGG!
        </p>
    </div>

    <form method="POST" action="/projects/{{ $projects->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="filed">
            <!--<label class="label" for="title">
                Title
            </label>-->

            <div style="width=100%;height=fit-content;">
                <input type="text" id="edit_title" name="title" placeholder="title" value="{{ $projects->title }}">
            </div>
        </div>

        <div  style="width=100%;height=fit-content;">
            <!--<label class="label" for="description">Description</label>-->
            <textarea name="description" id="edit_content">{{ $projects->description }}</textarea>
        </div>


        <div style="width=100%;height=fit-content;">

            <button type="submit" id="update">Update Project</button>

        </div>
    </form>


    <form method="POST" action="/projects/{{ $projects->id }}" style="margin-top: 1em;" >
        @method('DELETE');
        @csrf

            <button type="submit" id="delete">Delete Project</button>

    </form>




@endsection
