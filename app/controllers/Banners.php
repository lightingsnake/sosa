<?php

class Banners extends \BaseController {

	public function index()
	{
		$data['banners'] = Banner::all();
		return View::make('admin.banners.index', $data);
	}

	public function create()
	{
		//
	}

	//Guardar banner
	public function store()
	{
		//Creamos la imagen en la base de datos.
		$image = new Banner();

		if($image->save()):
			$file = Input::file('image');
			$name = explode('.', $file->getClientOriginalName());
			$extension = array_pop($name);
			$image->extension = $extension;
			if($image->save()):
				$file->move("uploads", 'banner'.$image->id.'.'.$image->extension);
				return Redirect::to('admin/banners')
						->with('success', 'Se ha guardado la imagen de forma exitosa');
			endif;
		else:
			return Redirect::to('admin/banners')
						->with('error', 'No se pudo guardar la imagen');
		endif;
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	//Borrar un banner(solo se borra de la base de datos, 
	//para borrarlo de forma definitiva se debera hacer desde la carpeta banners)
	public function destroy($id)
	{
		if(Banner::destroy($id)):
			return Redirect::to('admin/banners')
				->with('success', 'Se ha borrado la imagen de la base de datos.');
		else:
			return Redirect::to('admin/banners')
				->with('error', 'Ocurrio un error que impidio borrar la imagen.');
		endif;
	}


}
