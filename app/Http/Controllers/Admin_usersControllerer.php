<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class Admin_usersControllerer extends Controller
{

    //Manage Users Page
    public function Manage_users()
    {
        $super_admin = User::where('user_type', '=', '2')->orderBy('id', 'desc')->get();

        $admin_users = User::where('user_type', '=', '1')->orderBy('id', 'desc')->get();
        
        // dd($super_admin);

        return view('backend.admin_users.manage_users', compact('admin_users', 'super_admin'));
    }


    //add admin form Page
    public function Add_admin()
    {

        return view('backend.admin_users.add_admin');
    }

    //save admin to database
    public function Save_admin(Request $request)
    {

        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirmed' => 'required_with:password|same:password|min:8|string'
        ]);


        //Checks if the user already exist b4 adding to the database
        $email = User::where('email', $request->email)->exists();
        if ($email) {
            return redirect()->back()->with('error', 'Email Already Exist');
        }
        else {

            $data  = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->super_admin) {
                $data->user_type = '2';
            } else {
                $data->user_type = '1';
            }

            $data->save();

            return redirect()->route('manage_users')->with('success', 'Admin Created Successfully');
        }
    }


    //Delete User Function
    public function Delete_user($id){

        $data = User::findOrFail($id);

        $data->delete();

        return redirect()->route('manage_users')->with('success', 'User Deleted Successfully');
    }

    //add admin form Page
    public function Edit_user($id){

        $data = User::findOrFail($id);

        return view('backend.admin_users.edit_user', compact('data'));
    }

    //Update user data and store in database
    public function Update_user(Request $request, $id){

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'confirmed' => 'required_with:password|same:password|min:8|string'
        ]);

        $data = User::findOrFail($id);

        //checks if the email already exist && != any other email in the database b4 adding to database
        $email = User::where('email', $request->email)->exists();


        if ($email && $data->email !== $request->email) {
            return redirect()->back()->with('error', 'Email Already Exist');
        } else {

            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);

            if ($request->super_admin) {
                $data->user_type = '2';
            } else {
                $data->user_type = '1';
            }

            $data->save();

            return redirect()->route('manage_users')->with('success', 'Admin User updated Successfully');
        }
    }



}
