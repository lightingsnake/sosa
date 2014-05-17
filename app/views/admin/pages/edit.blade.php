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
			{{Form::text('filefake', 'No ha seleccionado ninguna imagen', array('id'=>'fileFakeText', 'class'=>'form-control', 'disabled'=>'disabled'))}}
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
					{{link_to($page->url, '', array('class'=>'btn btn-info glyphicon glyphicon-arrow-right'))}}
				</td>
				<td></td>
			</tr>
		@endforeach
	</table>

	<script>
		$("input[type=file]").hover(function() {
			$("#fileFakeInput, #fileFakeText").addClass('hover')
		}, function() {
			$("#fileFakeInput, #fileFakeText").removeClass('hover')
		});

		$("input[type=file").change(function(event) {
			var fileName =$("input[type=file").val().split('\\').pop();
			 $("#fileFakeText").val(fileName).addClass('class_name');
		});
	</script>
@stop