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

Route::get('/wilayaget', 'ListController');
Route::get("/communget={code}", 'CommuneController');
Route::get('/specget', 'SpecialiteController');
Route::get('/medget/{s}/{w}/{c}', 'PatientController');

Route::get('/Admin', function(){
    return view('admin/admin'); 
})->middleware('check_user_role:' . "Admin");

Route::get('/Patient', function(){
    return view('patient/rdv');
})->middleware('check_user_role:' . "Patient");

Route::get('/Medecin', function(){
    return view('medecin/home');
})->middleware('check_user_role:' . "Medecin");
 
Route::resource('/Admin', 'AdminController')->only(['index'])->middleware('check_user_role:' . "Admin");
Route::resource('/Medecin', 'MedecinController')->only(['index'])->middleware('check_user_role:' . "Medecin");
Route::resource("/Medecin/parasave", 'ParameterController')->only(['store']);
//Route::resource('/Patient', 'PatientController');


