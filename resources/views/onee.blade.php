@php
    $telefone_formatado = '(48) 99999 - 9999';
    $telefone = '5548999999999';
    $skype = 'skype:live:.cid.xxxxxxxx?chat';
    $whatsapp = 'https://api.whatsapp.com/send?phone=' . $telefone . '&text=Oi.%20Estou%20interessado%20no%20sistema%20Onee.';
@endphp

    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="description"
          content="Sistema de avaliação de desempenho através de competências capaz de gerar relatórios de avaliações de colaboradores e gestores.">

    <title>Onee - Avaliação de desempenho</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-purple.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178012631-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-178012631-1');
    </script>

</head>
<body>

<div id="header-holder" class="main-header">
    <div class="bg-custom"></div>
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed"
                                    data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="logo-holder" href="{{ url('/') }}">
                                ASA
                            </a>
                            <div class="logo-holder" style="cursor: auto">
                                -
                            </div>
                            <a class="logo-holder" href="{{ url('onee') }}">
                                Onee
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse"
                             id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#services">Recursos</a></li>
                                <li><a href="#pricing">Preços</a></li>
                                <li><a href="{{ url('contact') }}">Contato</a></li>
                                <li><a class="login-button" target="_blank"
                                       href="https://onee.asasistemas.com">Acessar</a>
                                </li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="https://onee.asasistemas.com/register">Cadastre-se</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="main-slider">
                        <div class="slide">
                            <div class="noti-holder">
                                <a href="#">
                                    <div class="noti">
                                        <span class="badge">Novo</span><span class="text">Feedback contínuo para manter seus colaboradores sempre engajados.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="spacer"></div>
                            <div class="big-title">Avaliação de <span>desempenho</span><br>para
                                <span>melhoria contínua</span>
                            </div>
                            <p>Um conjunto de ferramentas para auxiliar nossos parceiros na busca pelo
                                desenvolvimento, capacitação e humanização de suas organizações.</p>
                            <div class="btn-holder">
                                <a href="https://onee.asasistemas.com/register" class="ybtn ybtn-header-color">
                                    Iniciar avaliação
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="{{ asset('assets/images/man_smile.png') }}" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="info-text">
                    Para promover a melhoria contínua dentro de uma organização, é fundamental que sejam feitas
                    avaliações de desempenho.
                    <p>Comece a <b>mapear a situação</b> de sua empresa.</p>
                </div>
                <a href="{{ $whatsapp }}" target="_blank" class="ybtn ybtn-accent-color ybtn-shadow">Entre em
                    contato</a>
            </div>
        </div>
    </div>
</div>

<div id="more-info-onee" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Recursos</div>
                <div class="row-subtitle">Principais recursos do sistema.</div>
            </div>
        </div>
        <div class="row margin-top-xl">
            <div class="col-md-4">
                <div class="links-holder">
                    <ul>
                        <li>
                            <div class="info-link opened" data-id="1">Feedback contínuo</div>
                        </li>
                        <li>
                            <div class="info-link" data-id="2">Avaliação do colaborador</div>
                        </li>
                        <li>
                            <div class="info-link" data-id="3">Avaliação do gestor</div>
                        </li>
                        <li>
                            <div class="info-link" data-id="4">Autoavaliação</div>
                        </li>
                        <li>
                            <div class="info-link" data-id="5">Plano de desenvolvimento</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="info-details-holder">
                    <div class="info-details service-box info-d1 show-details">
                        <h1>Feedback contínuo</h1>
                        <p>O <strong>feedback contínuo</strong> é o ato de dar retorno aos colaboradores da empresa com
                            o intuito de melhorar o <strong>desempenho da função</strong>,
                            <strong>produtividade</strong> e o <strong>clima organizacional</strong>.</p>
                        <p>O gestor poderá registrar os feedbacks no sistema que compartilhará com o colaborador as
                            informações.</p>
                        <p>Além disso o colaborador poderá consultar o feedback a qualquer momento, afim de relembrar o
                            que foi alinhado.</p>
                        <br>
                        <p><strong>O foco do feedback é ter uma conversa sincera.</strong></p>
                    </div>
                    <div class="info-details service-box info-d2">
                        <h1>Avaliação de desempenho do colaborador</h1>
                        <p>Avaliar os profissionais individualmente é importante, pois <strong>cada um apresenta
                                peculiaridades</strong>
                            que definem o seu potencial.</p>
                        <p>A equipe de Recursos Humanos poderá programar avaliações periódicas no sistema, onde os
                            gestores estarão avaliando os colaboradores.</p>
                        <p>Através dos resultados da avaliação, os PDI's serão definidos afim de manter uma equipe
                            sempre equalizada.</p>
                        <br>
                        <p><strong>O foco é sempre evoluir sua equipe.</strong></p>
                    </div>
                    <div class="info-details service-box info-d3">
                        <h1>Avaliação de desempenho do gestor</h1>
                        <p>O gestor é responsável por conduzir a equipe <strong>rumo ao sucesso</strong>.</p>
                        <p>Por isso, ele também precisa passar por um processo de avaliação e receber feedbacks sobre a
                            sua performance.</p>
                        <p>A equipe de Recursos Humanos poderá registrar no sistema as avaliações onde os colaboradores
                            estarão avaliando seu gestor de <strong>forma anônima</strong>.</p>
                        <br>
                        <p><strong>O foco é manter o gestor engajado com sua equipe.</strong></p>
                    </div>
                    <div class="info-details service-box info-d4">
                        <h1>Autoavaliação</h1>
                        <p>A autoavaliação é um dos principais tipos de avaliação de desempenho.</p>
                        <p>Ela é realizada em duas etapas.</p>
                        <p>Primeiramente, o colaborador responde a um questionário com o
                            objetivo de refletir sobre a sua atuação, identificando seus <strong>pontos fortes e
                                fracos</strong>.</p>
                        <p>Em seguida, é feito uma comparação da avaliação feita pelo gestor e da autoavaliação feita
                            pelo colaborador.</p>
                        <br>
                        <p><strong>O foco é o colaborador fazer uma análise sobre o seu comportamento e sobre os
                                resultados que ele tem alcançado.</strong></p>
                    </div>
                    <div class="info-details service-box info-d5">
                        <h1>PDI - Plano de desenvolvimento individual</h1>
                        <p>Usada para <strong>monitorar o desenvolvimento</strong> das competências de cada colaborador.
                        </p>
                        <p>O Plano de Desenvolvimento Individual é gerado no sistema de acordo com os resultados da
                            avaliação feita por cada gestor.</p>
                        <p>Através da avaliação são identificados quais competências o colabordor precisa evoluir.</p>
                        <br>
                        <p><strong>O foco é indicar o caminho para que o colaborador evolua em sua carreira.</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="message1" class="container-fluid message-area">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="text-other-color1">Você está pronto?</div>
                <div class="text-other-color2">Entre em contato para saber mais</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="buttons-holder">
                    <a href="https://onee.asasistemas.com/register" class="ybtn ybtn-accent-color">
                        Iniciar avaliação
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="pricing" class="container-fluid">
    <div class="bg-color"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Preços</div>
                <div class="row-subtitle">Avaliação <b>gratuita</b> de 14 dias</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3" style="padding: 0;">
                <div class="pricing-box pricing-unity pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="{{ asset('assets/images/starter.png') }}" alt="">
                        </div>
                        <div class="pricing-title">STARTER</div>
                        <div class="pricing-details"><s><b>R$ 5,50</b></s></div>
                        <div class="pricing-price">
                            R$ 3,50
                        </div>
                        <div class="price-title">Por colaborador/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>50</b> colaboradores <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="https://onee.asasistemas.com/register" class="ybtn">
                                Iniciar avaliação
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3" style="padding: 0;">
                <div class="pricing-box pricing-unity pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="{{ asset('assets/images/begin.png') }}" alt="">
                        </div>
                        <div class="pricing-title">PLATINUM</div>
                        <div class="pricing-details"><s><b>R$ 5,00</b></s></div>
                        <div class="pricing-price">
                            R$ 3,00
                        </div>
                        <div class="price-title">Por colaborador/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>100</b> colaboradores <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="https://onee.asasistemas.com/register" class="ybtn">
                                Iniciar avaliação
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3" style="padding: 0;">
                <div class="pricing-box pricing-unity pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="{{ asset('assets/images/gold.png') }}" alt="">
                        </div>
                        <div class="pricing-title">GOLD</div>
                        <div class="pricing-details"><s><b>R$ 4,50</b></s></div>
                        <div class="pricing-price">
                            R$ 2,50
                        </div>
                        <div class="price-title">Por colaborador/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>250</b> colaboradores <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="https://onee.asasistemas.com/register" class="ybtn">
                                Iniciar avaliação
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3" style="padding: 0;">
                <div class="pricing-box pricing-unity pricing-color1">
                    <div class="pricing-content">
                        <div class="pricing-icon">
                            <img src="{{ asset('assets/images/premium.png') }}" alt="">
                        </div>
                        <div class="pricing-title">PREMIUM</div>
                        <div class="pricing-details"><s><b>R$ 4,00</b></s></div>
                        <div class="pricing-price">
                            R$ 2,00
                        </div>
                        <div class="price-title">Por colaborador/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                <b>251</b> colaboradores ou mais<br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="https://onee.asasistemas.com/register" class="ybtn">
                                Iniciar avaliação
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('shared.choose_us')
@include('shared.blog')
@include('shared.footer')

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-slider.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>


