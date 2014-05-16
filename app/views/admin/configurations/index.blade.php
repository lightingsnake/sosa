@extends('admin.layout')

@section('page')
	<h1 class="page-header">Bienvenido a configuraciones</h1>
	<br><br>
	{{link_to('admin', '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-left'))}}
	<br><br>
	<table class="table">
		<tr>
			<th>
				Nombre
			</th>
			<th></th>
		</tr>
		@foreach ($configurations as $configuration)
			<tr>
				<td>{{$configuration->name}}</td>
				<td>{{link_to('admin/configuraciones/'.$configuration->id.'/edit', 'Editar', array('class'=>'btn btn-success'))}}</td>
			</tr>
		@endforeach
	</table>
@stop