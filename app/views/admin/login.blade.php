<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>Administración</title>

		{{HTML::style('assets/bootstrap/css/bootstrap.css')}}
		{{HTML::style('assets/css/admin.css')}}
		{{HTML::script('assets/js/jquery/jquery.js')}}
		{{HTML::script('assets/bootstrap/js/bootstrap.js')}}
		
	</head>
	<body>
		@if(Session::has('error'))
			<div class="alert alert-warning container">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alerta</strong>	{{ Session::get('error') }}
			</div>
	    @endif
		{{Form::open(array('id'=>'login', 'url'=>'login'))}}
			<h2>
				Ingresar
			</h2>
			<p class="loginInput">
				<label for="password">Email:</label>
				{{Form::text('email', '', array('placeholder'=>'Email'))}}
			</p>

			<p class="loginInput">
				<label for="password">Contraseña:</label>
				{{Form::password('password', '', array('placeholder'=>'Contraseña'))}}
			</p>

			<p class="loginInput">
		        {{Form::checkbox('remember', 'remember', false, array('id'=>'remember'))}}
		        <label for="remember">Recordar me</label>
		    </p>

			<p class="loginInput">
				{{Form::submit('Entrar')}}
			</p>

		{{Form::close()}}
	</body>
</html>