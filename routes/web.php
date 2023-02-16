<?php

use App\Http\Controllers\Admin_usersControllerer;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProjectController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;
use App\Models\Academics;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

//================FRONTEND ALL ROUTES============================================
//The search page route
Route::get('/search', [SearchController::class, 'Search'])->name('search');

//Search project show
Route::post('/search-product', [SearchController::class, 'SearchProject'])->name('search-p');

//contact page
Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


//================END FRONTEND ALL ROUTES============================================


//================ADMIN ALL ROUTES============================================

//admin index
Route::get('/home', [AdminController::class, 'Redirect'])->name('home');

//admin logout route
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

//Privacy Policy Page Route
Route::get('/privacy', [AdminController::class, 'Privacy'])->name('privacy');


Route::middleware(['auth:sanctum', 'checkadmin', config('jetstream.auth_session')])->group(function () {


    //================ADMIN ALL ROUTES===========================================

    //admin Manage academics session
    Route::get('/admin/academics', [AdminController::class, 'Academics'])->name('admin-academics');


    //admin add academics session
    Route::get('/admin/academics/add_session', [AdminController::class, 'Add_session'])->name('add_session');


    //admin add academics session
    Route::post('/admin/academics/save_session', [AdminController::class, 'Save_session'])->name('save_session');


    //admin delete academics session
    Route::get('/admin/academics/delete_session/{id}', [AdminController::class, 'Delete_session'])->name('delete_session');


    //admin edit academics session page
    Route::get('/admin/academics/edit_session/{id}', [AdminController::class, 'Edit_session'])->name('edit_session');

    //admin profile
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin-profile');

    //admin update profile
    Route::post('/admin/profile/update/{id}', [AdminController::class, 'AdminProfileUpdate'])->name('admin-update-profile');

    //admin update password
    Route::post('/admin/password/update/{id}', [AdminController::class, 'AdminPasswordUpdate'])->name('admin-update-password');


    //admin update academics session in database
    Route::post('/admin/academics/update_session/{id}', [AdminController::class, 'Update_session'])->name('update_session');
});
//================END ADMIN ALL ROUTES============================================



//project detail page
Route::get('/{id}', [ProjectController::class, 'ProjectsDetailsPage'])->name('project-details');

//download projet projects
Route::get('/download/now/{id}', [ProjectController::class, 'DownloadProjects'])->name('download');



//================PROJECT ALL ROUTES============================================
Route::middleware(['auth:sanctum', 'checkadmin',  config('jetstream.auth_session')])->group(function () {

    //admin view projects
    Route::get('/admin/projects', [ProjectController::class, 'Projects'])->name('admin-view-project');


    //admin store projects
    Route::post('/admin/project/store', [ProjectController::class, 'AdminStoreProjects'])->name('store-project');

    //upload project form
    Route::get('/admin/project/upload', function () {

        $datas = Academics::orderBy('id', 'desc')->get();

        return view('backend.projects.store_project', compact('datas'));
    })->name('project-upload');


    //admin delete projet projects
    Route::get('/admin/delete/project/{id}', [ProjectController::class, 'AdminDeleteProjects'])->name('admin-delete-project');

    //admin delete projet projects
    Route::get('/admin/edit/project/{id}', [ProjectController::class, 'AdminEditProjects'])->name('edit-project');

    //admin update projet projects
    Route::post('/admin/update/project/{id}', [ProjectController::class, 'AdminUpdateProjects'])->name('update-project');


});





Route::middleware(['auth:sanctum', 'checksuperadmin',  config('jetstream.auth_session')])->group(function () {


    //================ADMIN USERS ALL ROUTES============================================

    //admin view users
    Route::get('/admin/users', [Admin_usersControllerer::class, 'Manage_users'])->name('manage_users');

    //add admin users
    Route::get('/admin/users/add_admin', [Admin_usersControllerer::class, 'Add_admin'])->name('add_admin');

    //save admin users to database
    Route::post('/admin/users/save_admin', [Admin_usersControllerer::class, 'Save_admin'])->name('save_admin');

    //delete admin users to database
    Route::get('/admin/users/delete/{id}', [Admin_usersControllerer::class, 'Delete_user'])->name('delete_user');

    //edit admin users page
    Route::get('/admin/users/edit/{id}', [Admin_usersControllerer::class, 'Edit_user'])->name('edit_user');

    //save updated admin users to database
    Route::post('/admin/users/save/{id}', [Admin_usersControllerer::class, 'Update_user'])->name('update_admin');
});

//================END PROJECT ALL ROUTES============================================















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
