<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_usersControllerer extends Controller
{

    //Manage Users Page
    public function Manage_users(){

        return view('backend.admin_users.manage_users');
    }


    //add admin form Page
    public function Add_admin(){

        return view('backend.admin_users.add_admin');
    }
}
