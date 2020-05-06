<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>I.Dev
        @if(!empty($menu_id)) -
            @foreach($menu_id ?? '' as $menu) {{$menu->menu_name}} @endforeach
        @endif
    @if(!empty($article))
            - @foreach($article as $art) {{ str_replace('</i>','',str_replace('<i>','',$art->article_title)) }} @endforeach
    @endif
    </title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/bootstrap-grid.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
    <link rel="icon" type="image/png" alt="igorcasconidev" sizes="32x32" href="{{asset('images/favicon.png')}}">

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" />
    <!-- //font-awesome icons -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

    <!-- TAGS -->
    <META NAME="DESCRIPTION" CONTENT="SQL - Programação web - conteúdos mobile - Experiências em DEV - etc.">
    <META NAME="KEYWORDS" CONTENT="SQL,PHP,Ionic,Angular,MySQL,Laravel,CodeIgniter,Cordova,WEB,Programação" >
    <META NAME="DISTRIBUTION" CONTENT="global">

    @extends('scripts')

@section('content_header')
</head>
<body>

    <!-- banner -->
    <div class="head-top-agileinfo1 img-fluid">
        <div class="bg-light">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <a class="navbar-brand" id="logo-navbar" href="{{route('home')}}"><img alt="igorcasconidev" src="{{asset('images/icon.png')}}"/></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse my-2 my-sm-0" id="navbarNavDropdown">
                        <ul class="navbar-nav list-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}"> Home </a>
                            </li>
                            @if(!empty($menus))
                                @foreach($menus ?? '' as $menu)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('articles',$menu->menu_link)}}"> {{ $menu->menu_name }} </a>
                                    </li>
                                @endforeach
                            @endif
                            <br/>
                        </ul>
                    </div>
                    <form id="form_search"  method="post" action="{{route('search_article')}}">
                        <div class=" input-group search-text">
                            <input type="text" class="form-control" id="text_search" name="text_search" placeholder="Buscar Artigo">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary sm-2"><i class="fa fa-search"></i></button>
                            </div>
                        </div>

                        @csrf
                    </form>
                </nav>
            </div>
        </div>
    </div>

        @yield('conteudo')

    <!-- footer -->
    <div class="footer-w3-agile">
        <div class="container">
        </div>
    </div>
    <!-- //footer -->
    <!-- foot-agileits -->
    <div class="foot-agileits-w3layouts">

        <div class="container">
            <div class="row">
                <div class="col-md-4 contact-info">
                    <div class="w3ls-cont">
                        <div class="email-info">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <h5>Contato</h5>
                            <p class="p4"><a href="mailto:igor492@gmail.com">igor492@gmail.com</a></p>
                            <p class="p4"><a href="mailto:igor@idotdev.online">igor@idotdev.online</a></p>
                        </div>
                        <ul class="social-icons1">
                            <li><a href="https://www.linkedin.com/in/igor-casconi-de-oliveira-a85899178/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://twitter.com/ICasconi"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright-agileinfo">
                    <p>© 2017 Corporative. All Rights Reserved | Design by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
                    <p>© 2020 Igor Casconi. All Rights Reserved About Backend Website</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
