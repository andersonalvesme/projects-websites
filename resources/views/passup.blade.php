@php
    $telefone_formatado = '(48) 99999 - 9999';
    $telefone = '5548999999999';
    $skype = 'skype:live:.cid.xxxxxxxx?chat';
    $whatsapp = 'https://api.whatsapp.com/send?phone=' . $telefone . '&text=Oi.%20Estou%20interessado%20no%20sistema%20PassUp.';
@endphp

    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>PassUp - Gerenciador de senhas</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style-green.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">

    <style>
        .slick-slide {
            cursor: auto;
        }

        #header-holder.main-header #top-content .noti-holder .noti:after {
            content: '';
        }

        .unity-box:after {
            content: '';
        }

        .service-box .service-title a {
            cursor: auto;
        }

        .service-box .service-title a:after {
            content: '';
        }
    </style>

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
    <div class="bg-animation">
        <div class="graphic-show">
            <img class="fix-size" src="{{ asset('assets/images/graphic1.png') }}" alt="">
            <img class="img img1" src="{{ asset('assets/images/graphic1.png') }}" alt="">
            <img class="img img2" src="{{ asset('assets/images/graphic2.png') }}" alt="">
            <img class="img img3" src="{{ asset('assets/images/graphic3.png') }}" alt="">
        </div>
    </div>
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
                            <a class="logo-holder" href="{{ url('passup') }}">
                                PassUp
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse"
                             id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown unity-menu">
                                    <a href="javascript:void(0)">Recursos &nbsp; <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-unity">
                                        <li>
                                            <a class="unity-link" href="#services">
                                                <div class="unity-box">
                                                    <div class="unity-title">
                                                        Armazenamento
                                                    </div>
                                                    <div class="unity-details">
                                                        <small>Armazene suas senhas em apenas um local</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="#services">
                                                <div class="unity-box">
                                                    <div class="unity-title">
                                                        Organização
                                                    </div>
                                                    <div class="unity-details">
                                                        <small>Organize suas senhas através de modelos</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="#services">
                                                <div class="unity-box">
                                                    <div class="unity-title">
                                                        Compartilhamento
                                                    </div>
                                                    <div class="unity-details">
                                                        <small>Compartilhe suas senhas com usuários chaves</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="#services">
                                                <div class="unity-box">
                                                    <div class="unity-title">
                                                        Controle de acesso
                                                    </div>
                                                    <div class="unity-details">
                                                        <small>Controle o acesso por Usuários e Grupos</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#pricing">Preços</a></li>
                                <li><a class="login-button" target="_blank" href="https://passup.asasistemas.com">Acessar</a>
                                </li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="javascript:void(0)">Contato</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="mailto:contato@asasistemas.com">Enviar e-mail</a></li>
                                        <li><a href="{{ $whatsapp }}" target="_blank">Iniciar Whatsapp</a></li>
                                        <li><a href="{{ $skype }}">Iniciar Skype</a></li>
                                    </ul>
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
                <div class="col-md-7">
                    <div id="main-slider">
                        <div class="slide">
                            <div class="noti-holder">
                                <a href="#">
                                    <div class="noti">
                                        <span class="badge">Novo</span><span class="text">Gerador de senhas para garantir maior segurança.</span>
                                    </div>
                                </a>
                            </div>
                            <div class="spacer"></div>
                            <div class="big-title"><span>Gerenciador de senhas</span> para <span>equipes ágeis</span>
                            </div>
                            <p>Com o PassUp você mantém todas as senhas organizadas on-line de forma segura. Chega de
                                armazenar senhas em notas ou planilhas.</p>
                            <div class="btn-holder">
                                <a href="{{ $whatsapp }}" target="_blank" class="ybtn ybtn-header-color">Entrar em
                                    contato</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img class="header-graphic" src="{{ asset('assets/images/graphic1.png') }}" alt=""/>
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
                    Administre os acessos a bancos de dados, e-mails, chaves de API e vários outros com a mais <strong>alta
                        segurança</strong>.
                    <p>Entre em contato e saiba mais.</p>
                </div>
                <a href="{{ $whatsapp }}" target="_blank" class="ybtn ybtn-accent-color ybtn-shadow">Entrar em
                    contato</a>
            </div>
        </div>
    </div>
</div>
<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Recursos</div>
                <div class="row-subtitle">Principais recursos do sistema</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-title"><a href="javascript:void(0)">Armazenamento</a></div>
                    <div class="service-details text-justify">
                        <p>Armazene todas as senhas utilizadas na sua organização em apenas um local de forma segura,
                            evitando perdas de acessos.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-title"><a href="javascript:void(0)">Organização</a></div>
                    <div class="service-details text-justify">
                        <p>Organize suas senhas através de modelos diferenciando os vários tipos de acesso que sua
                            organização possui.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-title"><a href="javascript:void(0)">Compartilhamento</a></div>
                    <div class="service-details text-justify">
                        <p>Compartilhe as senhas com os usuários chaves da sua organização. Quando a senha for alterada
                            todos ficarão sabendo.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-title"><a href="javascript:void(0)">Controle de acesso</a></div>
                    <div class="service-details text-justify">
                        <p>Controle o acesso dos usuários utilizando níveis de permissões que podem ser aplicados nas
                            telas do sistema e nas senhas cadastradas.</p>
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
                    <a href="{{ $whatsapp }}" target="_blank" class="ybtn ybtn-accent-color">Entrar em contato</a>
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
                <div class="row-subtitle">Veja onde sua empresa se encaixa</div>
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
                        <div class="pricing-price">
                            R$ 3,00
                        </div>
                        <div class="price-title">Por usuário/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>10</b> usuários <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="{{ $whatsapp }}" target="_blank" class="ybtn">Entrar em contato</a>
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
                        <div class="pricing-price">
                            R$ 2,50
                        </div>
                        <div class="price-title">Por usuário/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>25</b> usuários <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="{{ $whatsapp }}" target="_blank" class="ybtn">Entrar em contato</a>
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
                        <div class="pricing-price">
                            R$ 2,30
                        </div>
                        <div class="price-title">Por usuário/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                Até <b>50</b> usuários <br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="{{ $whatsapp }}" target="_blank" class="ybtn">Entrar em contato</a>
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
                        <div class="pricing-price">
                            R$ 1,80
                        </div>
                        <div class="price-title">Por usuário/mês</div>
                        <div class="pricing-details">
                            <p class="text-left">
                                <b>51</b> usuários ou mais<br>
                            </p>
                        </div>
                        <div class="pricing-link">
                            <a href="{{ $whatsapp }}" target="_blank" class="ybtn">Entrar em contato</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row-title">Por que nos escolher?</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row rtl-cols">
            <div class="col-sm-12 col-md-6">
                <div id="features-links-holder">
                    <div class="icons-axis">
                        <img src="{{ asset('assets/images/choice.svg') }}" alt="">
                    </div>
                    <div class="feature-icon-holder feature-icon-holder1 opened" data-id="1">
                        <div class="animation-holder">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="feature-icon"><i class="fa fa-lock"></i></div>
                        <div class="feature-title">Segurança</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder2" data-id="2">
                        <div class="animation-holder">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="feature-icon"><i class="fa fa-plug"></i></div>
                        <div class="feature-title">API para integrações</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder3" data-id="3">
                        <div class="animation-holder">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="feature-icon"><i class="fa fa-user-circle"></i></div>
                        <div class="feature-title">Contato único</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder4" data-id="4">
                        <div class="animation-holder">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="feature-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="feature-title">Central de ajuda</div>
                    </div>
                    <div class="feature-icon-holder feature-icon-holder5" data-id="5">
                        <div class="animation-holder">
                            <div class="special-gradiant"></div>
                        </div>
                        <div class="feature-icon"><i class="fa fa-cloud"></i></div>
                        <div class="feature-title">Sistema em nuvem</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div id="features-holder">
                    <div class="feature-box feature-d1 show-details">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-lock"></i></span>
                            <span class="feature-title">Segurança</span>
                        </div>
                        <div class="feature-details">
                            <p>As senhas são armazenadas completamente criptografadas, com hash, com salt e
                                iterações.</p>

                            <p>O nível de segurança pode ser alterado nas configurações do sistema.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d2">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-plug"></i></span>
                            <span class="feature-title">API para integrações</span>
                        </div>
                        <div class="feature-details">
                            <p>Quer cadastrar as senhas de forma automatizada? Ficou fácil integrar.</p>

                            <p>Basta enviar os dados para nossa API e pronto, senha cadastrada.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d3">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-user-circle"></i></span>
                            <span class="feature-title">Contato único</span>
                        </div>
                        <div class="feature-details">
                            <p>Cansado de ser jogado de um lado para o outro quando precisa resolver algum problema ou
                                tirar alguma dúvida?</p>

                            <p>Aqui você terá um gerente responsável por sua conta que resolverá todos os seus
                                problemas. Nada de ficar explicando a mesma coisa para um monte de "gente". ;) </p>
                        </div>
                    </div>
                    <div class="feature-box feature-d4">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-question-circle"></i></span>
                            <span class="feature-title">Central de ajuda</span>
                        </div>
                        <div class="feature-details">
                            <p>Reunimos em apenas um local uma série de conteúdos para lhe auxiliar na execução de seus
                                trabalhos.</p>

                            <p>Também é possível abrir chamados e/ou dúvidas. Mas não se esqueça, o gerente da sua conta
                                que vai acompanhar a resolução do começo ao fim.</p>
                        </div>
                    </div>
                    <div class="feature-box feature-d5">
                        <div class="feature-title-holder">
                            <span class="feature-icon"><i class="fa fa-cloud"></i></span>
                            <span class="feature-title">Sistema em nuvem</span>
                        </div>
                        <div class="feature-details">
                            <p>Nosso sistema funciona inteiramente via internet rodando no navegador, basta ter o Google
                                Chrome instalado.</p>

                            <p>Não será necessário possuir servidor na empresa e nem nada do tipo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-menu-holder">
                    <h4>Recursos</h4>
                    <ul class="footer-menu">
                        <li><a href="#services">Armazenamento</a></li>
                        <li><a href="#services">Organização</a></li>
                        <li><a href="#services">Compartilhamento</a></li>
                        <li><a href="#services">Controle de acesso</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>PassUp</h4>
                    <ul class="footer-menu">
                        <li><a href="#services">Recursos</a></li>
                        <li><a href="#pricing">Preços</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Contato</h4>
                    <ul class="footer-menu">
                        <li><a href="mailto:contato@asasistemas.com">Enviar e-mail</a>
                        </li>
                        <li><a href="{{ $whatsapp }}" target="_blank">Iniciar Whatsapp</a></li>
                        <li><a href="{{ $skype }}">Iniciar Skype</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="https://www.linkedin.com/company/asa-sistemas"
                               target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-slider.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
