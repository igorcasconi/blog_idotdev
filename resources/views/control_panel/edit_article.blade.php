@extends('control_panel/header_panel')
@section('conteudo_login')
    <script src="https://cdn.ckeditor.com/4.14.0/standard-all/ckeditor.js"></script>
    <div class="services">
        <div class="container">
            <h3 class="title-module"><i class="fas fa-newspaper"></i> {{ $title }}</h3>
            <br/>
            <div class="container-fluid">
                <form id="form_article" method="post" action="{{route('save_article',$article->article_id)}}">
                    @csrf
                    <div class="form-group">
                        <label for="article_title">Título</label>
                        <input class="form-control form-control-sm" type="text" id="article_title" name="article_title" value="{{$article->article_title}}">
                    </div>
                    <div class="form-group">
                        <label for="article_subtitle">SubTítulo</label>
                        <input class="form-control form-control-sm" type="text" id="article_subtitle" name="article_subtitle" value="{{$article->article_subtitle}}">
                    </div>
                    <div class="form-group">
                        <label for="article_datetime">Data</label>
                        <input class="form-control form-control-sm" type="date" id="article_datetime" name="article_date" value="{{ $article->article_date }}">
                    </div>
                    <div class="form-group">
                        <label for="article_datetime">Hora</label>
                        <input class="form-control form-control-sm" type="time" id="article_datetime" name="article_hour" value="{{ $article->article_hour }}">
                    </div>
                    <label for="article_menu">Menu</label>
                    <div class="input-group mb-3">

                        <select class="custom-select custom-select-sm" id="article_menu_id" name="article_menu_id">
                            <option selected>Selecionar Menu...</option>
                            @foreach($menus as $mn)
                                <option  value="{{$mn->menu_id}}" @if($article->article_menu_id == $mn->menu_id) {{ 'selected' }} @endif >{{$mn->menu_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="article_url">Url</label>
                        <input id="article_url" name="article_url" class="form-control form-control-sm" type="text"  value="{{$article->article_url}}">
                    </div>
                    <div class="form-group">
                        <label for="article_owner">Escrito por</label>
                        <input id="article_owner" name="article_owner" class="form-control form-control-sm" type="text"  value="{{$article->article_owner}}">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="article_active" name="article_active" @if($article->article_active == 1) {{ 'checked' }} @endif>
                        <label class="form-check-label" for="article_active"  >Ativo</label>
                    </div>
                    <div class="form-group">
                        <label for="article_body">Corpo do Artigo</label>
                        <textarea id="article_body" name="article_body" >{{$article->article_body}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Gravar</button>
                    <a type="button" class="btn btn-dark" href="{{ route('articles_panel') }}"><i class="fas fa-times"></i> Cancelar</a>@csrf
                </form>
                <br/>

            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'article_body', {
            language: 'pt-BR',
            filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            toolbar: [{
                name: 'clipboard',
                items: ['Paste', '-', 'Undo', 'Redo']
            },
                {
                    name: 'basicstyles',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'RemoveFormat', 'Subscript', 'Superscript']
                },
                {
                    name: 'links',
                    items: ['Link', 'Unlink']
                },
                {
                    name: 'paragraph',
                    items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote']
                },
                {
                    name: 'insert',
                    items: ['Image', 'Table']
                },
                {
                    name: 'editing',
                    items: ['Scayt']
                },
                '/',

                {
                    name: 'styles',
                    items: ['Format', 'Font', 'FontSize']
                },
                {
                    name: 'colors',
                    items: ['TextColor', 'BGColor', 'CopyFormatting']
                },
                {
                    name: 'align',
                    items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
                },
                {
                    name: 'document',
                    items: ['Print', 'Source']
                }
            ],
            extraPlugins: 'colorbutton,font,justify,print,tableresize,liststyle,pastefromgdocs',
            contentsCss: [
                'http://cdn.ckeditor.com/4.14.0/full-all/contents.css',
                'https://ckeditor.com/docs/vendors/4.14.0/ckeditor/assets/css/pastefromgdocs.css'
            ],
            bodyClass: 'document-editor',
        });
    </script>
@endsection

