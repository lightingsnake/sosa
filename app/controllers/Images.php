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
				return Redirect::to('admin/paginas/'.$id.'/edit')
						->with('success', 'Se ha guardado la imagen de forma exitosa');
			endif;
		else:
			return Redirect::to('admin/paginas/'.$id.'/edit')
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

	//Borrar una imagen (solo se borra de la base de datos, 
	//para borrarla de forma definitiva se debera hacer desde la carpeta uploads)
	public function destroy($id)
	{
		$image = Image::find($id);
		$pageId = $image->pageId;
		if(Image::destroy($id)):
			return Redirect::to('admin/paginas/'.$pageId.'/edit')
				->with('success', 'Se ha borrado la imagen de la base de datos.');
		else:
			return Redirect::to('admin/paginas/'.$pageId.'/edit')
				->with('error', 'Ocurrio un error que impidio borrar la imagen.');
		endif;
	}


}
