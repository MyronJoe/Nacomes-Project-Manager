<?php

namespace App\Http\Controllers;

use App\Models\Academics;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //Login pattern functions
    public function Redirect()
    {
        $userType = Auth::user()->user_type;

        if ($userType === '1') {
            return view('backend.index');
        } else {
            return view('frontend.index');
        }
    }

    //Admin Logout Function
    public function logout(Request $request)
    {
        auth()->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    //admin manage academics session
    public function Academics(){

        $datas = Academics::orderBy('id', 'desc')->get();

        return view('backend.academics_session.academics', compact('datas'));
    }

    //the add session page route
    public function Add_session(){

        return view('backend.academics_session.add_session');
    }


    //the add session to database function
    public function Save_session(Request $request){

        $data = new Academics();

        $data->session = $request->year;

        $data->save();

        return redirect()->route('admin-academics')->with('message', 'Accademic Session Added Successfully');
    }


    //Delete session function
    public function Delete_session($id){

        $data = Academics::find($id);

        $data->delete();

        return redirect()->route('admin-academics')->with('message', 'Accademic Session Deleted Successfully');
    }


    //Delete session function
    public function Edit_session($id){

        $data = Academics::find($id);

        

        return view('backend.academics_session.add_session');
    }






}
