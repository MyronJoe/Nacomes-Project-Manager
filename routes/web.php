<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ProjectController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SearchController;

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
Route::get('/logout', [AdminController::class, 'Logout'])->name('logout');


//admin add academics session
Route::get('/admin/academics', [AdminController::class, 'Academics'])->name('admin-academics');



});
//================END ADMIN ALL ROUTES============================================





//================PROJECT ALL ROUTES============================================
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {

//admin view projects
Route::get('/admin/projects', [ProjectController::class, 'Projects'])->name('admin-view-project');

//admin store projects
Route::get('/admin/project/store', [ProjectController::class, 'AdminStoreProjects'])->name('store-project');



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
