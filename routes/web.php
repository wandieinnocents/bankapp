<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


// user dashboard
Route::get('/admin_dashboard' , 'App\Http\Controllers\AdminPagesController@admin_dashboard')->middleware('role:admin_user');
// admin dashboard
Route::get('/user_dashboard' , 'App\Http\Controllers\AdminPagesController@user_dashboard')->middleware('role:normal_user');

Route::resource('/recipients' , 'App\Http\Controllers\RecipientController')->middleware('auth');

// user management
Route::resource('/users' , 'App\Http\Controllers\UserController')->middleware('auth');




// Auth::routes();
// disable register route
Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


