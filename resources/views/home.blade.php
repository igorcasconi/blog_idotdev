@extends('header')
@section('conteudo')
    <!-- services -->
    <div class="services">
        <div class="container">
            <h3 class="w3l_head w3l_head1">ÚLTIMOS ARTIGOS</h3>
            <div class="w3_agileits_services_grids row">
                <div class="col-md-4 w3_agileits_services_grid">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <i class="fa fa-database" aria-hidden="true"></i>
                        </div>
                        <h3>SQL</h3>
                        <ul class="article_list_home">
                            @foreach($article_sql as $sql)
                                <li><a href="{{ route('article_item',['id'=>$sql->article_id,'url_art'=>$sql->article_url]) }}">- {!! $sql->article_title !!}</a></li>
                            @endforeach
                        </ul>
                        <a href="{{route('articles','sql')}}" class="botao-link-menu"><i class="fa fa-chevron-circle-right"></i></a>
                    </div>

                </div>
                <div class="col-md-4 w3_agileits_services_grid">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <h3>WEB</h3>
                        <ul class="article_list_home">
                            @foreach($article_web as $web)
                                <li><a href="{{ route('article_item',['id'=>$web->article_id,'url_art'=>$web->article_url]) }}">- {!! $web->article_title !!}</a></li>
                            @endforeach
                        </ul>
                        <a href="{{route('articles','php')}}" class="botao-link-menu"><i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 w3_agileits_services_grid">
                    <div class="w3_agileits_services_grid_agile">
                        <div class="w3_agileits_services_grid_1">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <h3>Mobile </h3>
                        <ul class="article_list_home">
                            @foreach($article_mobile as $mobile)
                                <li><a href="{{ route('article_item',['id'=>$mobile->article_id,'url_art'=>$mobile->article_url]) }}">- {!! $mobile->article_title !!}</a></li>
                            @endforeach
                        </ul>
                        <a href="{{route('articles','mobile')}}" class="botao-link-menu"><i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <h3 class="w3l_head w3l_head1">SOBRE		</h3>
        <p class="w3ls_head_para w3ls_head_para2">Blog pessoal sobre experiências em dev </p>
        <p class="w3ls_head_para w3ls_head_para1">Este blog vai tratar sobre desenvolvimento, sobre o que já tive de contato, do que foi
            necessário em momentos para continuar a produção de software ou execução de tarefas e tudo de conhecimento que eu puder transmitir.</p>

    </div>



    <!-- team -->
    <div class="team-agileits">
        <div class="container">
            <h3 class="w3l_head w3l_head1">Autor do Blog</h3>
            <div class="team-grids">
                <div class="col-md-12 team-grid">
                    <div class="pic">
                        <div class="twisted">
                            <img src="images/4.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <h4>IGOR CASCONI DE OLIVEIRA</h4>
                    <p>Importação de Dados - Desenvolvedor - Bacharel em Ciência da Computação</p>
                    <ul class="social-nav model-3d-0">
                        <li><a href="https://www.linkedin.com/in/igor-casconi-de-oliveira-a85899178/" class="facebook">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                        <li><a href="https://twitter.com/ICasconi" class="facebook">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
