@extends('control_panel/header_panel')
@section('conteudo_login')
    <div class="services">
        <div class="container">
            <h3 class="title-module"><i class="fas fa-newspaper"></i> Artigos</h3>
            <div class="col-sm-12">

                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>
            <br />
            <a href="{{ route('new_article') }}" class="btn btn-success btn-new-article"><i class="fas fa-plus-circle"></i> Novo Artigo</a>
            <table class="table table-sm table-articles table-bordered table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Menu</th>
                    <th scope="col">Data e Hora</th>
                    <th scope="col">Excluir</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $articles as $article )
                <tr>
                    <td>{{ $article->article_id }} </td>
                    <td>{!! $article->article_title !!} </td>
                    <td>{{ $article->menu_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($article->article_date)->format('d/m/Y') }} {{$article->article_hour}}</td>
                    <td>
                        <a id="edit-article" href="{{ route('edit_article', ['id'=>$article->article_id]) }}"><i class="fa fa-pen"></i></a>
                        <a id="delete-article" onclick="delete_article({{$article->article_id}})"><i class="fas fa-trash"></i></a>
                    </td>
                    @csrf
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header login-card">
                    <h5 class="modal-title "><i class="fas fa-newspaper"></i> Artigos</h5>
                    <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja excluir o Artigo selecionado?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Fechar</button>
                    <button type="button" id="delete-article-yes" class="btn btn-primary">Sim</button>
                </div>
            </div>
        </div>
    </div>



@endsection



