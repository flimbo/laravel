<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Flimbo;

class ProjectsController extends Controller
{
    //

    public function index()
    {
        $projects = Project::all();
            return view('projects.index', ['projects'=>$projects]);
        

        # code...
    }

    public function create()
    {
        # code...
        return view('projects.create');
        
    }

    public function store()
    {

        \request()->validate(['title'=>'required', 'description'=>'required']);

        Project::create(request(['title', 'description']));
   
        return redirect('/project');


    }

    public function edit(Project $project){
       

        return view('projects.edit', compact('project'));

    }

    public function update(Project $project){
        //dd(request()->all());

        $project->title= \request('title');
        $project->save();
        
        return redirect('project');

    }

    public function show(Project $project)
    {
        
        //return $project;
        $flimbo = new Flimbo();
        $flimbo->Ahoj();

        dd("tested");

        return view('projects.show', compact('project'));
        
        # code...
    }
}
