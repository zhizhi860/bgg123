<?php

namespace App\Http\Controllers;

use \App\Models\projects;

//use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $projects = projects::all();

        //return projects;

        return view('projects.index',compact('projects'));
    }

    public function about(){
        return view('projects.about',compact('projects'));
    }

    public function create(){

        return view('projects.create');
    }

    public function store(){

        $projects = new projects();

        $projects->title = request('title');

        $projects->description = request('description');

        $projects->save();

        return redirect('/projects');
        //return request()->all();
        //return request('description);
        //return requese('title');
    }

    public function show($id){
        $projects = projects::findOrFail($id);
        return view('projects.show',compact('projects'));
    }

    public function edit($id){

        $projects = Projects::findOrFail($id);

        return view('projects.edit',compact('projects'));
    }

    public function update($id){
        $projects = Projects::findOrFail($id);
        $projects->title = request('title');
        $projects->description = request('description');
        $projects->save();
        return redirect('/projects');
    }

    public function destroy($id){
        projects::findOrFail($id)->delete();
        return redirect('/projects');
    }
}
