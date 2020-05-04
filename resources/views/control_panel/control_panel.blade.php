@extends('control_panel/header_panel')

@section('conteudo_login')
   <div class="services">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header login-card">Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Você está logado como <b>{{ auth()->user()->name }}</b>
                        </div>
                    </div>
                    <br/>
                    <div class="card">
                        <div class="card-header login-card">Estatísticas do Site</div>

                        <div class="card-body">
                            <h5><i class="fas fa-users"></i> Total de visitas ao site: {{ $total_visitors }}</h5>
                            <br />
                            <h5><i class="fa fa-book"></i>  Artigos mais lidos:</h5>

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
