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
        $projects = Project::latest()->simplePaginate(10);

        return view('backend.projects.project', compact('projects'));
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
        // 'project_file' => ['required', 'file', 'mimes:zip'],
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

    $file  = $request->file('project_file');
    $filename = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
   $file_url =  $request->project_file->move('uploads/'.$filename);
   $save_url = 'uploads/'.$filename;


$thisyear = date('Y');
//insert to db
Project::create([
     'title' => $request->title,
     'year' => $request->year,
     'this_year' => $thisyear,

     'student' => $request->student,
     'description' => $request->description,
     'title' => $request->title,
     'project_file' =>  $save_url ,

]);

return redirect()->route('admin-view-project')->with('success', 'Project Uploaded Successfully.');

}


}//end method





//download
public function DownloadProjects($id){
   $f = Project::findOrFail($id);
   $filePath = public_path($f->project_file);
   $headers = ['Content-Type: application/pdf'];
   $fileName = time().'.zip';

   return response()->download($filePath, $fileName, $headers);



}





}
