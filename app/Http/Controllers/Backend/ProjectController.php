<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    //admin view project
    public function Projects(){
        return view('backend.projects.project');
    }


//admin store project
public function AdminStoreProjects(Request $request){
    // dd($request->all());
    //validate request
    $request->validate([
        'title' => ['required', 'string','min:3'],
        'year' => ['required', 'string'],
        'student' => ['required', 'string','min:3'],
        'description' => ['required', 'string','min:3'],
        'project_file' => ['required', 'file', 'mimes:zip'],
]);



//check if project title or student name exist
if (Project::where('title', $request->title )->exists()){
    return redirect()->back()->with('error', 'Project Topic Already Exist');
}
//check if student name exist
elseif(Project::where('student', $request->student )->exists()){
    return redirect()->back()->with('error', 'Student Name Already Exist');
}
else{
    
}


}//end method















}
