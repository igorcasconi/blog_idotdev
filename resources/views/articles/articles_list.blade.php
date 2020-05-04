@extends('header')
@section('conteudo')
    <div class="services">
        <div class="container">

            <h2 class="w3l_head w3l_head1">
                @foreach($menu_id as $menu)
                    <i class="{{$menu->menu_icon}}" aria-hidden="true"></i>
                    {{ $menu->menu_name }}
                @endforeach
            </h2>
            <h3 class="title-list">Artigos</h3>
            <ul class="list-articles">
                @foreach($type_article as $type_art)
                    <li><a href="{{ route('article_item',['id'=>$type_art->article_id,'url_art'=>$type_art->article_url]) }}"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> {!! $type_art->article_title !!}</li>
                @endforeach

            </ul>

        </div>
    </div>
@endsection
