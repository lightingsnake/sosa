<?php

class AdminController extends \BaseController {

	//Mostramos el admin
	public function index()
	{
		return View::make('admin.index');
	}

	//Mostramos el formulario para ingresar
	public function loginForm()
	{
		return View::make('admin.login');
	}

	//Función que procesa si hay login o no
	public function login()
	{
		//Recuperar datos del login
		$userdata = array('email'=>Input::get('email'), 'password'=>Input::get('password'));

		if(Auth::attempt($userdata, Input::get('remember', 0))):
			return Redirect::to('admin');
		else:
			return Redirect::to('login')
						->with('error', 'Tus datos son incorrectos')
						->withInput();
		endif;
	}

	//Función de logout
	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}
