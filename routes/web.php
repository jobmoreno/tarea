<?php

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
Route::view('/about','about')->name('about');
Route::view('/contac','contac')->name('contac');

Route::get('/', function () {
	$nombre = "Job";
    return view('welcome')->with('nombre',$nombre);
});

Route::get('miApp/{nombre?}',function($nombre='Usuario'){
	return "mi app ".$nombre;
});
// ---------

Route::resource('tarea',"tareaController");

// ---------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
