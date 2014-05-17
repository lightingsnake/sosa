<?php

class Pages extends \BaseController {

	//Muestra la lista de las paginas
	public function index()
	{
		$data['pages'] = Page::all();
		return View::make('admin.pages.index', $data);
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

	//Editar una página
	public function edit($id)
	{
		$data['page'] = Page::find($id);
		return View::make('admin.pages.edit', $data);
	}

	public function update($id)
	{
		$page = Page::find($id);
		$page->title = Input::get('title');
		$page->content = Input::get('content');
		if($page->save()):
			return Redirect::to('admin/paginas/'.$id.'/edit')
					->with('success', 'Se ha guardado los cambios de forma exitosa.');
		else:
			return Redirect::to('admin/paginas/'.$id.'/edit')
					->with('error', 'No se pudieron guardar los cambios.');
		endif;
	}

	public function destroy($id)
	{
		//
	}
}
