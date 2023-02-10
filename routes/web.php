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

//The search page route
Route::get('/search', [SearchController::class, 'Search'])->name('search');





//================ADMIN ALL ROUTES============================================
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    //admin index

//================ADMIN ALL ROUTES===========================================

Route::get('/home', [AdminController::class, 'Redirect'])->name('home');

//admin logout route
Route::get('/logout', [AdminController::class, 'Logout'])->name('logout');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
