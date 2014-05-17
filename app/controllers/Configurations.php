<?php

class Configurations extends \BaseController {

	//Lista de configuraciones
	public function index()
	{
		$data['configurations'] = Configuration::all();
		return View::make('admin.configurations.index', $data);
	}



	public function create()
	{
		//
	}

	public function store()
	{
		//
	}

	public function show($id)
	{
		//
	}

	//Editar una configuración
	public function edit($id)
	{
		$data['configuration'] = Configuration::find($id);
		return View::make('admin.configurations.edit', $data);	
	}

	//Actualizar la configuración
	public function update($id)
	{
		//Recuperar la configuracion y asignar el value
		$configuration = Configuration::find($id);
		$configuration->value = Input::get('value');

		//Guardar el valor de la configuración
		if($configuration->save()):
			return Redirect::to('admin/configuraciones/'.$id.'/edit')->with('success', 'Se ha guardado la configuración de forma exitosa');
		else:
			return Redirect::back()->with('error', 'No se pudo guardar los cambios, por favor vuelva a intentarlo.');
		endif;
	}

	public function destroy($id)
	{
		//
	}


}
