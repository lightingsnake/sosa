@extends('admin/layout')

@section('page')
	<h1 class="page-header">Editar {{$page->title}}</h1>
	<br><br>
	{{link_to('admin/paginas', '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-left'))}}
	<br><br>
	{{Form::model($page, array('role'=>'form', 'method'=>'PATCH'))}}
		<div class="input-group">
			<span class="input-group-addon">Titulo</span>
			{{Form::text('title', $page->title, array('class'=>'form-control', 'placeholder'=>'Titulo', 'title'=>'Titulo'))}}
		</div>
		<br><br>
		{{Form::textarea('content', $page->value, array('class'=>'form-control'))}}
		<br>
		{{Form::submit('Guardar', array('class'=>'btn btn-info'))}}
	{{Form::close()}}
	<br><br>
	<h3 class="page-header">Imagenes:</h3>
	<br><br>

	{{Form::open(array('url'=>'admin/image/'.$page->id.'/store', 'class'=>'fileForm', 'files'=>true))}}
		{{Form::file('image', array('class'=>'form-control'))}}
		<div class="fileFake">
			{{Form::text('filefake', '', array('id'=>'fileFakeText', 'class'=>'form-control', 'disabled'=>'disabled', 'placeholder'=>'No ha seleccionado ninguna imagen'))}}
			{{Form::button('Seleccionar Una Imagen', array('id' => 'fileFakeInput', 'class'=>'form-control'))}}	
		</div>
		<br>
		{{Form::submit('Guardar', array('class'=>'btn btn-info'))}}
		<br><br>
	{{Form::close()}}

	<br><br>

	<table class="table">
		<tr>
			<th>Imagen</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($page->images as $image)
			<tr>
				<td>
					<img src="{{asset('uploads/'.$image->id.'.'.$image->extension)}}" alt="" class="img-rounded">
				</td>
				<td>
					{{link_to(asset('uploads/'.$image->id.'.'.$image->extension), '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-right', 'target'=>'_blank'))}}
				</td>
				<td>
					{{Form::open(array('url' => 'admin/image/'.$image->id.'/destroy', 'method' => 'DELETE'))}}
								{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
					{{Form::close()}}
				</td>
			</tr>
		@endforeach
	</table>
@stop