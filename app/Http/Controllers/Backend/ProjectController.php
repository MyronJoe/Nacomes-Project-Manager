<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Academics;
use App\Models\Backend\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    //admin view project
    public function Projects()
    {
        $projects = Project::latest()->simplePaginate(5);

        return view('backend.projects.project', compact('projects'));
    }


    //admin store project
    public function AdminStoreProjects(Request $request)
    {
        // dd($request->all());
        //validate request
        $request->validate([
            'title' => ['required', 'string', 'min:3'],
            'year' => ['required', 'string'],
            'student' => ['required', 'string', 'min:3'],
            // 'description' => ['required', 'string', 'min:3'],
            'project_file' => ['required', 'file', 'mimes:pdf'],
        ]);



        //check if project title or student name exist
        if (Project::where('title', $request->title)->exists()) {
            return redirect()->back()->with('error', 'Project Topic Already Exist');
        }
        //check if student name exist
        elseif (Project::where('student', $request->student)->exists()) {
            return redirect()->back()->with('error', 'Student Name Already Exist');
        } else {

            $file  = $request->project_file;
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->project_file->move('uploads', $filename);



            $thisyear = date('Y');
            //insert to db
            Project::create([
                'title' => $request->title,
                'year' => $request->year,
                'this_year' => $thisyear,

                'student' => $request->student,
                'description' => $request->description,
                'title' => $request->title,
                'project_file' =>  $filename,

            ]);

            return redirect()->route('admin-view-project')->with('success', 'Project Uploaded Successfully.');
        }
    } //end method





    //download
    public function DownloadProjects($id)
    {
        $f = Project::findOrFail($id);


        return response()->download(public_path('uploads/' . $f->project_file));
    }


    //admin delete project
    public function AdminDeleteProjects($id)
    {
        $project = Project::findOrFail($id);
        $file = public_path('uploads/' . $project->project_file);

        if (Project::where('project_file', $project->project_file)->exists()) {
            unlink($file);
            Project::findOrFail($id)->delete();

            return redirect()->back()->with('success', 'Project Deleted Successfully.');
        } else {

            Project::findOrFail($id)->delete();

            return redirect()->back()->with('success', 'Project Deleted Successfully.');
        }
    } //end method


    //admin edit project
    public function AdminEditProjects($id)
    {
        $edit = Project::findOrFail($id);

        $academics = Academics::latest()->get();

        return view('backend.projects.edit_project', compact('edit', 'academics'));
    }




    //admin update project
    public function AdminUpdateProjects(Request $request, $id)
    {
        $old_file = $request->old_file;

        //check if there is a new file
        if ($request->project_file == null) {
            //valide without file
            $request->validate([
                'title' => ['required', 'string', 'min:3'],
                'year' => ['required', 'string'],
                'student' => ['required', 'string', 'min:3'],
                // 'description' => ['required', 'string', 'min:3'],
            ]);


            $thisyear = date('Y');
            //insert to db
            Project::findOrFail($id)->update([
                'title' => $request->title,
                'year' => $request->year,
                'this_year' => $thisyear,

                'student' => $request->student,
                'description' => $request->description,
                'title' => $request->title,
                //  'project_file' =>  $filename ,

            ]);

            return redirect()->route('admin-view-project')->with('success', 'Project Updated Successfully.');
        } //end if

        else {

            //validate request
            $request->validate([
                'title' => ['required', 'string', 'min:3'],
                'year' => ['required', 'string'],
                'student' => ['required', 'string', 'min:3'],
                // 'description' => ['required', 'string', 'min:3'],
                'project_file' => ['required', 'file', 'mimes:pdf'],
            ]);

            //fine id
            $pro = Project::findOrFail($id);
            $file = public_path('uploads/' . $pro->project_file);
            //delete old file
            unlink($file);

            //upload old file
            $f  = $request->project_file;
            $filename = time() . '.' . $f->getClientOriginalExtension();
            $request->project_file->move('uploads', $filename);



            $thisyear = date('Y');
            //insert to db
            Project::findOrFail($id)->update([
                'title' => $request->title,
                'year' => $request->year,
                'this_year' => $thisyear,

                'student' => $request->student,
                'description' => $request->description,
                'title' => $request->title,
                'project_file' =>  $filename,

            ]);

            return redirect()->route('admin-view-project')->with('success', 'Project Updated Successfully.');
        } //end else

    }


    //project detail page
    public function ProjectsDetailsPage($id)
    {
        $project = Project::findOrFail($id);

        return view('frontend.project.project_details', compact('project'));
    }
}
