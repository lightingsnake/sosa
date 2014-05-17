@extends('admin/layout')

@section('page')
	<h1 class="page-header">Bienvenido a Páginas internas</h1>
	<br><br>
	{{link_to('admin', '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-left'))}}
	<br><br>
	<table class="table">
		<tr>
			<th>
				Titulo
			</th>
			<th></th>
			<th></th>
		</tr>
		@foreach ($pages as $page)
			<tr>
				<td>{{$page->title}}</td>
				<td>{{link_to('admin/paginas/'.$page->id.'/edit', 'Editar', array('class'=>'btn btn-success'))}}</td>
				<td>{{link_to($page->url, '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-right'))}}</td>
			</tr>
		@endforeach
	</table>
@stop