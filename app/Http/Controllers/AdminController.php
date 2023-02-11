<?php

namespace App\Http\Controllers;

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
    public function Academics()
    {
        return view('backend.academics_session.academics');
    }

    public function Add_session(){

        return view('backend.academics_session.add_session');
    }
}
