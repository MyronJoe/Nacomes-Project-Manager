<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect('/');
    }

    //admin manage academics session
    public function Academics()
    {
        return view('backend.academics_session.academics');
    }
}
