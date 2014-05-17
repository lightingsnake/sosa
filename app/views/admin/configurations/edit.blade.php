@extends('admin.layout')

@section('page')
	<h1 class="page-header">Editar {{$configuration->name}}</h1>
	<br><br>
	{{link_to('admin/configuraciones', '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-left'))}}
	<br><br>
	{{Form::open(array('url' => 'admin/configuraciones/'.$configuration->id.'/edit', 'method'=>'PATCH'))}}
		{{Form::textarea('value', $configuration->value, array('class'=>'form-control', 'placeholder'=>'Valor de '.$configuration->name))}}
		<br>
		{{Form::submit('Guardar', array('class'=>'btn btn-success'))}}
	{{Form::close()}}
@stop