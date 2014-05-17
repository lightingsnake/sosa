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
		{{Form::submit('Guardar', array('class'=>'btn btn-success'))}}
	{{Form::close()}}
@stop