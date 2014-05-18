<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Administración</title>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

		{{HTML::style('assets/bootstrap/css/bootstrap.css')}}
		{{HTML::style('assets/css/admin.css')}}
		{{HTML::script('assets/js/jquery/jquery.js')}}
		{{HTML::script('assets/bootstrap/js/bootstrap.js')}}
		{{HTML::script('assets/js/admin.js')}}
		
	</head>
	<body>
		<header>
			<nav>
				<div class="container">
					<ul>
						<li>{{link_to('admin', 'Inicio')}}</li>
						<li>{{link_to('/', 'Volver a la Web')}}</li>
						<li>{{link_to('admin/banners', 'Banner')}}</li>
						<li>{{link_to('admin/paginas', 'Páginas Internas')}}</li>
						<li>{{link_to('admin/configuraciones', 'Configuraciones')}}</li>
						<li>{{link_to('logout', 'Salir')}}</li>
					</ul>
				</div>
			</nav>
		</header>

		@if(Session::has('error'))
			<div class="alert alert-warning container">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alerta</strong>	{{ Session::get('error') }}
			</div>
	    @endif

	    @if(Session::has('success'))
			<div class="alert alert-info container">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Alerta</strong>	{{ Session::get('success') }}
			</div>
	    @endif
		
		<div class="container">
			<div id="contentAdmin">
				@yield('page')
			</div>
		</div>

	</body>
</html>