<?php

use Admin\AboutusController;
use Admin\DashboardController;
use App\Http\Controllers\JohnController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TherapistController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/role-register','Admin\DashboardController@registered');
Route::get('/role-edit{id}','Admin\DashboardController@registeredit');
Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
Route::DELETE('/role-delete/{id}','Admin\DashboardController@registerdelete');
Route::post('/save-user','Admin\DashboardController@registerstore');




Route::get('/aboutus','Admin\AboutusController@index');
Route::post('/save-aboutus','Admin\AboutusController@store');




////good routes

Route::get('/john','JohnController@index');
Route::post('/john','JohnController@store');
Route::get('/john/{id}','JohnController@edit');
Route::put('/john/{id}','JohnController@update');
Route::delete('/john/{id}','JohnController@delete');




Route::get('/therapist','TherapistController@index');
Route::post('/therapist','TherapistController@store');
Route::get('/therapist/{id}','TherapistController@edit');
Route::put('/therapist/{id}','TherapistController@update');
Route::delete('/therapist/{id}','TherapistController@delete');



 







