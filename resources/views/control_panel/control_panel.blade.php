@extends('control_panel/header_panel')

@section('conteudo_login')
   <div class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card card-login">
                        <div class="card-body corpo-card">
                            <h4>Dashboard</h4>
                            <br/>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Você está logado como <b>{{ auth()->user()->name }}</b>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-login">
                        <div class="card-body corpo-card">
                            <h4>Estatísticas do Site</h4>
                            <br/>
                            <h6><i class="fas fa-users"></i> Total de visitas ao site: {{ $total_visitors }}</h6>
                            <br/>
                            <h6><i class="fa fa-book"></i>  Artigos mais lidos:</h6>
                            <ol>
                            @foreach($article_read as $art_read)
                                <li><a href="{{ route('article_item',['id'=>$art_read->article_id,'url_art'=>$art_read->article_url]) }}" target="_blank">{!! $art_read->article_title !!}</a></li>
                             @endforeach
                            </ol>
                        </div>
                    </div>
                </div>

            </div>
        </div>
   </div>
@endsection
