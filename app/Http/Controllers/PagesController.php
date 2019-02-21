<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class PagesController extends Controller
{

    public function home()
    {
        
        $Task=['go to stora', 'goto to work'];
        $projects = Project::all();
        
        
        return view('welcome')->with([
            'task'=>$Task,
            'projects'=>$projects
        ]);
    }

    public function about()
    {
        return view('about');
        # code...
    }
}
