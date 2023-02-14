<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

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

    //save admin to database
    public function Save_admin(Request $request){

        // $hashed = Hash::make('password', [
        //     'memory' => 65536,
        //     'threads' => 1,
        //     'time' => 4,
        // ]);

        // $hashed = Hash::make('password', [
        //     'rounds' => 10,
        // ]);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirmed' => 'required_with:password|same:password|min:8|string'
        ]);


        // dd($request);

        $data  = new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);

        if ($request->super_admin) {
            $data->user_type = '2';
        }else{
            $data->user_type = '1';
        }

        $data->save();

        return redirect()->route('manage_users')->with('success', 'Admin Created Successfully');

    }
    


}
