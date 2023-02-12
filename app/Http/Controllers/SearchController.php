<?php

namespace App\Http\Controllers;

use App\Models\Backend\Project;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //

    public function Search(){
        return view('frontend.search');
    }


//serch product
public function SearchProject(Request $request){
    //validate
    $item = $request->search;

    $products = Project::where('title', 'LIKE', "%$item%")->
    select('title',  'year' , 'id')->get();

        return view('frontend.project.project_search', compact('products'));
}

















}
