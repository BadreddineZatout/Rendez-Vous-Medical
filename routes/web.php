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

Route::get('/home', 'HomeController@index');

Route::get('/admin', function(){
    return view('admin/admin');
});//->middleware('check_user_role:' . \App\Role\UserRole::ROLE_ADMIN);

Route::get('/patient', function(){
    return view('patient/rdv');
});//->middleware('check_user_role:' . \App\Role\UserRole::ROLE_PATIENT);

Route::get('/medecin', function(){
    return view('medecin/home');
});//->middleware('check_user_role:' . \App\Role\UserRole::ROLE_MEDECIN);

/*Route::group(['middleware' => ''], function() {

    Route::get('/admin', function() {
 
       return 'Welcome Admin';
       
    });
 
 });*/
 
