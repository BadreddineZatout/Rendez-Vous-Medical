<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();



Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@aller');

Route::get('/Admin', function(){
    return view('admin/admin');
})->middleware('check_user_role:' . \App\Role\UserRole::ROLE_ADMIN);

Route::get('/Patient', function(){
    return view('patient/rdv');
})->middleware('check_user_role:' . \App\Role\UserRole::ROLE_PATIENT);

Route::get('/Medecin', function(){
    return view('medecin/home');
})->middleware('check_user_role:' . \App\Role\UserRole::ROLE_MEDECIN);
 
Route::resource('/Admin', 'AdminController');

Route::get('/wilayaget', 'ListController');
