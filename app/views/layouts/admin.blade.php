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
       	<link rel="shortcut icon" type="image/x-ico" href="/admin/public/favicon.ico" />
       	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
       	<link rel="stylesheet" type="text/css" href="/admin/public/assets/css/bootstrap.min.css" media="all">
       	<link rel="stylesheet" type="text/css" href="/admin/public/assets/css/admin.css" media="all">
       	<!-- <link rel="stylesheet" type="text/css" href="/public/assets/css/bootstrap-theme.min.css" media="all"> -->
		<title>DomiciliosCO Admin</title>
   	</head>
   	<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/dashboard/') }}"><img src="/admin/public/assets/images/banner.png" style="width: 2em;"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
                    <ul class="nav navbar-nav">
                        @if(Auth::user()->getRole() != 2)
                            @if(Request::segment(2) === 'additional') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/additional') }}">Adicionales</a></li>
                        @endif

                        @if(Auth::user()->getRole() == 1)
                            @if(Request::segment(2) === 'banners') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/banners') }}">Banners</a></li>
                        @endif

                        @if(Auth::user()->getRole() != 2)
                            @if(Request::segment(2) === 'menus') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/menus') }}">Menus</a></li>
                        @endif

                        @if(Request::segment(2) === 'orders') <li class="active"> @else <li> @endif
                        <a href="{{ url('dashboard/orders') }}">Ordenes</a></li>

                        @if(Auth::user()->getRole() != 2)
                            @if(Request::segment(2) === 'reports') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/reports') }}">Reportes</a></li>
                        @endif

                        @if(Auth::user()->getRole() == 1)
                            @if(Request::segment(2) === 'restaurants') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/restaurants') }}">Restaurantes</a></li>

                            @if(Request::segment(2) === 'users') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/users') }}">Usuarios</a></li>

                            @if(Request::segment(2) === 'message') <li class="active"> @else <li> @endif
                            <a href="{{ url('dashboard/message') }}">Mensajes</a></li>
                        @endif
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li><a href="#">Link</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->getName() }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#"><img src="/admin/public/profiles/default.jpg" alt="" class="img-profile img-circle img-responsive"></a></li>
                                <li><a href="#">{{ Auth::user()->getRole() }}</a></li>
                                <li><a href="{{ url('dashboard/profile/'.Auth::user()->getAuthIdentifier()) }}">Configuraciones</a></li>
                                <li class="divider"></li>
                                <li>{{ HTML::link('/session/'.Auth::user()->getAuthIdentifier().'/destroy', 'Cerrar Sesion') }}</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container text-center">
            @yield('content')
        </div>
        <nav class="navbar navbar-fixed-bottom navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-5">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-5">
                    <p class="navbar-text navbar-right">Copyrigth 2013 - 2014</p>
                </div>
            </div>
        </nav>
   	</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('assets/js/bootstrap.min.js') }}
</html>