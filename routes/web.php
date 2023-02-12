<?php

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

//================END FRONTEND ALL ROUTES============================================


//================ADMIN ALL ROUTES============================================
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    //admin index

//================ADMIN ALL ROUTES===========================================

Route::get('/home', [AdminController::class, 'Redirect'])->name('home');

//admin logout route
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


//admin Manage academics session
Route::get('/admin/academics', [AdminController::class, 'Academics'])->name('admin-academics');


//admin add academics session
Route::get('/admin/academics/add_session', [AdminController::class, 'Add_session'])->name('add_session');


//admin add academics session
Route::post('/admin/academics/save_session', [AdminController::class, 'Save_session'])->name('save_session');



});
//================END ADMIN ALL ROUTES============================================





//================PROJECT ALL ROUTES============================================
Route::middleware(['auth:sanctum', 'checkregister', config('jetstream.auth_session')])->group(function () {

//admin view projects
Route::get('/admin/projects', [ProjectController::class, 'Projects'])->name('admin-view-project');

//admin store projects
Route::post('/admin/project/store', [ProjectController::class, 'AdminStoreProjects'])->name('store-project');

//upload project form
Route::get('/admin/project/upload', function () {

    $datas = Academics::orderBy('id', 'desc')->get();

    return view('backend.projects.store_project', compact('datas'));

})->name('project-upload');

//download projet projects
Route::get('/download/now/{id}', [ProjectController::class, 'DownloadProjects'])->name('download');

//admin delete projet projects
Route::get('/admin/delete/project/{id}', [ProjectController::class, 'AdminDeleteProjects'])->name('admin-delete-project');

//admin delete projet projects
Route::get('/admin/edit/project/{id}', [ProjectController::class, 'AdminEditProjects'])->name('edit-project');

//admin update projet projects
Route::post('/admin/update/project/{id}', [ProjectController::class, 'AdminUpdateProjects'])->name('update-project');

//project detail page
Route::get('/{id}', [ProjectController::class, 'ProjectsDetailsPage'])->name('project-details');


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
