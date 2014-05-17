<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layout');
});

//Rutas de administrador
Route::group(array('before'=>"auth"), function(){
	//Inicio
	Route::get('admin', 'adminController@index');

	//Configuraciones
	//Route::resource('admin/configuraciones', 'Configurations');
	Route::get('admin/configuraciones', 'configurations@index');
	Route::get('admin/configuraciones/{id}/edit', 'configurations@edit');
	Route::patch('admin/configuraciones/{id}/edit', 'configurations@update');

	//Paginas
	Route::resource('admin/paginas', 'pages');
	Route::patch('admin/paginas/{id}/edit', 'pages@update');

	//Cerrar sesión
	Route::get('logout', 'adminController@logout');
});



//Ingresar
Route::get('login', 'adminController@loginForm');

//Login
Route::post('login', 'adminController@login');
