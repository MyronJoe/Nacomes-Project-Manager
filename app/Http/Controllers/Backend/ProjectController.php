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


//admin store project
public function AdminStoreProjects(Request $request){
    //validate request
    $request->validate([
        'title' => ['required', 'string','min:3'],
        'year' => ['required', 'string'],
        'student' => ['required', 'string','min:3'],
        'description' => ['required', 'string','min:3'],
        'project_file' => ['required', 'file', 'mimes:zip'],
]);


}//end method















}
