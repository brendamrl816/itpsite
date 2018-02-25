<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::auth();


Route::group(['prefix' => 'admin'], function () {
    //Login Routes...
    
    Route::get('/','Auth\AdminAuthController@index')->name('admin.main');
    Route::post('/login','Auth\AdminAuthController@postLogin')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminAuthController@getLogout');
});  

Route::resource('students', 'StudentController', 
    ['only'=>['index', 'store', 'update', 'destroy']]);

Route::post('upload','StudentController@upload');
Route::post('deletepic','StudentController@deletePicture');
