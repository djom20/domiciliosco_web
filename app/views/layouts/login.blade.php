<!DOCTYPE HTML>
<html lang="es-CO">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="googlebot" content="index,follow"/>
		<meta name="author" content="Ing. Jonathan Olier Miranda"/>
		<meta name="copyright" content="Todos los derechos reservados por AltiviaOT.com"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="shortcut icon" type="image/x-ico" href="./favicon2.ico" />
		{{ HTML::style('assets/css/bootstrap.min.css') }}
		{{ HTML::style('assets/css/bootstrap-theme.min.css') }}
		{{ HTML::style('assets/css/signin.css') }}
		<title>DomiciliosCO</title>
	</head>
	<body>
		@yield('content')
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	<!-- {{ HTML::script('assets/js/angular.min.js') }}
	{{ HTML::script('assets/js/app.js') }}
	{{ HTML::script('assets/js/controllers.js') }} -->
	@yield('scripts')
</html>