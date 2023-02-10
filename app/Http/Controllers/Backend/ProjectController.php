<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //admin view project
    public function Projects(){
        return view('backend.projects.project');
    }
}
