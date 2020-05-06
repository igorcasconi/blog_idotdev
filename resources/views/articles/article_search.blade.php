@extends('header')
@section('conteudo')

    <div class="services">
        <div class="container">
            <h5 class="w3l_head w3l_head1">Artigos</h5>
            <form id="form_search"  method="post" action="{{route('search_article')}}">
                <div class=" input-group search-text">
                    <input type="text" class="form-control" id="text_search" name="text_search" placeholder="Buscar Artigo" value="{{$text_search}}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary sm-2"><i class="fa fa-search"></i></button>
                    </div>
                </div>

                @csrf
            </form>
            <br/>
            <ul class="list-search">
                @if(count($find_article) > 0)
                    @foreach($find_article as $find)
                        <li><a href="{{ route('article_item',['id'=>$find->article_id,'url_art'=>$find->article_url]) }}">
                                <h6>{!! $find->article_title !!}</h6>
                                <p>{{ \Carbon\Carbon::parse($find->article_date)->format('d/m/Y') }} {{ $find->article_hour }}</p>
                                <p>{!! $find->article_subtitle !!}</p>
                            </a></li>
                        <hr/>
                    @endforeach
                @else
                    <p>Não foi encontrado nenhum artigo!</p>
                @endif
            </ul>
        </div>
    </div>
@endsection
