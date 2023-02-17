<?php

namespace App\Http\Controllers;

use App\Models\Academics;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //Login pattern functions
    public function Redirect()
    {
        $userType = Auth::user()->user_type;

        if ($userType === '1' || $userType === '2') {
            return view('backend.index');
        } else {
            return view('frontend.index');
        }
    }

    //Privacy policy page
    public function Privacy(){

        return view('frontend.privacy');
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

        $datas = Academics::orderBy('id', 'desc')->get();

        return view('backend.academics_session.academics', compact('datas'));
    }

    //the add session page route
    public function Add_session()
    {

        return view('backend.academics_session.add_session');
    }


    //the add session to database function
    public function Save_session(Request $request)
    {


        //checks if the session already exist b4 adding to database
        $year = Academics::where('session', $request->year)->exists();

        if ($year) {
            return redirect()->back()->with('error', 'Accademic Session Already Exist');
        } else {
            $data = new Academics();

            $data->session = $request->year;

            $data->save();

            return redirect()->route('admin-academics')->with('success', 'Accademic Session Added Successfully');
        }
    }


    //Delete session function
    public function Delete_session($id)
    {

        $data = Academics::find($id);

        $data->delete();

        return redirect()->route('admin-academics')->with('success', 'Accademic Session Deleted Successfully');
    }


    //edit session page function
    public function Edit_session($id)
    {

        $data = Academics::find($id);


        return view('backend.academics_session.edit_session', compact('data'));
    }


    //Update session in database function
    public function Update_session(Request $request, $id)
    {

        $data = Academics::find($id);

        //checks if the session already exist && != any other session in the database b4 adding to database
        $year = Academics::where('session', $request->year)->exists();

        // dd($data->session);
        // dd($request->year);

        if ($year && $data->session !== $request->year) {
            return redirect()->back()->with('error', 'Accademic Session Already Exist');
        } else {
            $data->session = $request->year;

            $data->save();

            return redirect()->route('admin-academics')->with('success', 'Accademic Session Updated Successfully');
        }
    }




    //==============================ADMIN PROFILE============================================
    //admin proofile
    public function AdminProfile()
    {
        $admin = User::findOrFail(Auth::user()->id);

        return view('admin.profile', compact('admin'));
    }

    //admin update profile
    public function AdminProfileUpdate(Request $request, $id)
    {
        //validate
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email'],
        ]);

        //update
        User::findOrFail($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }



    //admin update password
    public function AdminPasswordUpdate(Request $request, $id)
    {

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',

        ]);

        //check password
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->current_password, $hashedPassword)) {
            User::findorFail($id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Current Password not correct!.');
        }
    }
}
