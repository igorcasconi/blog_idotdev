@extends('header')
@section('conteudo')

    <div class="services">
        <div class="container">
            <h5 class="w3l_head w3l_head1">Artigos</h5>
            <form>
                <div class="search-text">
                    <input type="text" class="form-control" id="" placeholder="Buscar Artigo">
                </div>
                <a href="#" class="btn btn-primary sm-2 button-search"><i class="fa fa-search"></i></a>
            </form>
            <br/>
            <ul>
                @foreach($find_article as $find)
                    <li><a>
                            <h6>{!! $find->article_title !!}</h6>
                            <p>{{ \Carbon\Carbon::parse($article->article_date)->format('d/m/Y') }} {{$article->article_hour}}</p>
                        </a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
