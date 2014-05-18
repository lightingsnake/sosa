@extends('admin.layout')

@section('page')
	<h1 class="page-header">Bienvenido a la administración Banner</h1>
	<br><br>
	{{link_to('admin', '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-left'))}}
	<br><br>
	{{Form::open(array('url'=>'admin/banners', 'class'=>'fileForm', 'files'=>true))}}
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
			<th>
				Imagen
			</th>
			<th></th>
		</tr>
		@foreach ($banners as $banner)
			<tr>
				<td><img src="{{asset('uploads/banner'.$banner->id.'.'.$banner->extension)}}" alt=""></td>
				<td>
					{{link_to(asset('uploads/banner'.$banner->id.'.'.$banner->extension), '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-right', 'target'=>'_blank'))}}
				</td>
				<td>
					{{Form::open(array('url' => 'admin/banners/'.$banner->id.'/destroy', 'method' => 'DELETE'))}}
								{{ Form::submit('Borrar', array('class' => 'btn btn-danger delete')) }}
					{{Form::close()}}
				</td>
			</tr>
		@endforeach
	</table>
@stop