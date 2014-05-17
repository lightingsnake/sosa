<?php

class Images extends \BaseController {

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	//Guardar imagen
	public function store($id)
	{
		//Creamos la imagen en la base de datos.
		$image = new Image();
		$image->pageId = $id;

		if($image->save()):
			$file = Input::file('image');
			$name = explode('.', $file->getClientOriginalName());
			$extension = array_pop($name);
			$image->extension = $extension;
			if($image->save()):
				$file->move("uploads", $image->id.'.'.$image->extension);
				return Redirect::to('admin/paginas/'.$id.'')
						->with('success', 'Se ha guardado la imagen de forma exitosa');
			endif;
		else:
			return Redirect::to('admin/paginas/'.$id.'')
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

	public function destroy($id)
	{
		//
	}


}
