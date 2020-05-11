<!DOCTYPE html>
<html lang="pt">
<head>
    <title>I.Dev</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="icon" type="image/png" alt="igorcasconidev" sizes="32x32" href="{{asset('images/favicon.png')}}">

    @extends('scripts')

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/fa/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fa/all.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fa/solid.css')}}" />
    <!-- //font-awesome icons -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

@section('content_header')
</head>
<body>
    <div class="head-panel">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <a class="navbar-brand" id="logo-navbar" href="{{route('control_panel')}}"><img alt="igorcasconidev" src="{{asset('images/icon.png')}}"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse my-2 my-sm-0" id="navbarNavDropdown">
                    <ul class="navbar-nav list-menu">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('articles_panel')}}">Artigos</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home')}}" target="_blank">Abrir Site</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('logout')}}">Logout</a>
                        </li>
                        <br/>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    @yield('conteudo_login')
</body>
</html>
@endsection
