@extends('header')
@section('conteudo')
<div class="services">
    <div class="container">
        @foreach($article as $art)
        <h2 class="w3l_head w3l_head1">{!! $art->article_title !!}</h2>
        <div class="container">

            <h4 class="subtitle">{!! $art->article_subtitle  !!}</h4>

            <div class="corpo-article">
                <p class="data-publicacao">{{ \Carbon\Carbon::parse($art->article_datetime)->format('d/m/Y H:i') }}</p>
                <br/>
                    {!! $art->article_body !!}
                <br/>
                <p>Escrito por: {{ $art->article_owner }}</p>
                <p >{{ \Carbon\Carbon::parse($art->article_datetime)->format('d/m/Y H:i') }}</p>
                <p>Total de Leituras: {{ $art->article_read }}</p>
                <br/>
                <p>Compartilhe em:</p>
                <ul class="list-share">
                    <li>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{route('article_item',['id'=>$art->article_id,'url_art'=>$art->article_url])}}" target="_blank">
                            <img width="25" height="25" src="{{asset('images/facebook.png')}}" alt="Ícones feitos por Freepik from www.flaticon.com">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{route('article_item',['id'=>$art->article_id,'url_art'=>$art->article_url])}}" target="_blank">
                            <img width="25" height="25" src="{{asset('images/linkedin.png')}}" alt="Ícones feitos por Freepik from www.flaticon.com">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet?url={{route('article_item',['id'=>$art->article_id,'url_art'=>$art->article_url])}}&text={{ str_replace('</i>','',str_replace('<i>','',$art->article_title)) }} ----" target="_blank">
                            <img width="25" height="25" src="{{asset('images/twitter.png')}}" alt="Ícones feitos por Freepik from www.flaticon.com">
                        </a>
                    </li>
                </ul>
        </div>
        @endforeach
    </div>
</div>
@endsection
