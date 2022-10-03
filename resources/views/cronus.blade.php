@include('shared.header')

<body>
<div id="header-holder" class="main-header">
    <div class="bg-custom"></div>
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            @include('shared.navbar')
        </div>
    </nav>
    <div id="top-content" class="container-fluid padding-bottom-none">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="big-title">
                        <span>Sistema de CRM online</span> para ajudar sua equipe comercial a
                        <span>vender mais e melhor</span>.
                        <hr>
                        Vamos organizar todo o seu <span>ciclo de vendas</span>.
                    </div>

                    <div class="btn-holder">
                        <a href="https://app.cronus.one/register" target="_blank" class="ybtn ybtn-white ybtn-shadow">
                            Teste grátis
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive" src="{{ asset('assets/images/man.png') }}" alt=""/>
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
                    <p>Comece a <b>mapear</b> seus clientes e tenha maior <b>controle e visibilidade</b>.</p>
                </div>
                <a href="#contact-info" class="ybtn ybtn-accent-color ybtn-shadow">Entre em contato</a>
            </div>
        </div>
    </div>
</div>

<div id="services" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Recursos</div>
                <div class="row-subtitle">Alguns dos nossos principais recursos</div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Organizações e Contatos</a></div>
                    <div class="service-details text-justify">
                        <p>Mantenha armazenado todas as suas Organizações e Contatos, bem como histórico, anotações e
                            informações importantes.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M12 12c2 -2.96 0 -7 -1 -8c0 3.038 -1.773 4.741 -3 6c-1.226 1.26 -2 3.24 -2 5a6 6 0 1 0 12 0c0 -1.532 -1.056 -3.94 -2 -5c-1.786 3 -2.791 3 -4 2z"></path>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Funil de vendas</a></div>
                    <div class="service-details text-justify">
                        <p>Gerencie seus negócios em todas as etapas do processo, desde a captação do negócio, até o
                            fechamento da oportunidade.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                            <path
                                d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1"></path>
                            <path d="M12 6v2m0 8v2"></path>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Receitas e despesas</a></div>
                    <div class="service-details text-justify">
                        <p>Controle as receitas e despesas referentes a cada negócio, podendo analisar os reais ganhos
                            de cada oportunidade. Gere faturas e pedidos de pagamento.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3.5 5.5l1.5 1.5l2.5 -2.5"></path>
                            <path d="M3.5 11.5l1.5 1.5l2.5 -2.5"></path>
                            <path d="M3.5 17.5l1.5 1.5l2.5 -2.5"></path>
                            <line x1="11" y1="6" x2="20" y2="6"></line>
                            <line x1="11" y1="12" x2="20" y2="12"></line>
                            <line x1="11" y1="18" x2="20" y2="18"></line>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Tarefas de follow up</a></div>
                    <div class="service-details text-justify">
                        <p>Crie tarefas e agende data e hora para conversar com o cliente, não perca nenhum contato e
                            não deixe sua relação esfriar.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                            <polyline points="3 7 12 13 21 7"></polyline>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Envio de e-mail</a></div>
                    <div class="service-details text-justify">
                        <p>Envie e-mails para seus contatos de forma fácil através do sistema. Envie suas propostas,
                            contratos, faturas com apenas um clique.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="6" y1="9" x2="12" y2="9"></line>
                            <line x1="4" y1="5" x2="8" y2="5"></line>
                            <path d="M6 5v11a1 1 0 0 0 1 1h5"></path>
                            <rect x="12" y="7" width="8" height="4" rx="1"></rect>
                            <rect x="12" y="15" width="8" height="4" rx="1"></rect>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Campos customizados</a></div>
                    <div class="service-details text-justify">
                        <p>Adicione informações essenciais para seu negócio. O sistema é customizável e permite que você
                            inclua campos adicionais.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 12v-3a3 3 0 0 1 3 -3h13m-3 -3l3 3l-3 3"></path>
                            <path d="M20 12v3a3 3 0 0 1 -3 3h-13m3 3l-3 -3l3 -3"></path>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Exportação recorrente</a></div>
                    <div class="service-details text-justify">
                        <p>Caso tenha interesse em encaminhar os dados de seus negócios via e-mail, fazemos isso de
                            forma recorrente ou manual.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="service-box">
                    <div class="service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="128" viewBox="0 0 24 24" stroke-width="2"
                             stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                            <line x1="9" y1="7" x2="10" y2="7"></line>
                            <line x1="9" y1="13" x2="15" y2="13"></line>
                            <line x1="13" y1="17" x2="15" y2="17"></line>
                        </svg>
                    </div>
                    <div class="service-title"><a href="javascript:void(0)">Faturas</a></div>
                    <div class="service-details text-justify">
                        <p>Gere faturas para pagamento e controle a situação de cada uma através de seu status. Não
                            deixe nenhuma situação passar despercebida.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="custom-plan" class="container-fluid margin-bottom-xl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Planos</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row margin-top-lg">
            <div class="col-md-8">
                <h4>Crie seu plano</h4>
                <p>
                    Escolha o plano ideal para você. Todos os recursos estão disponíveis.
                    <br>
                    Você também pode se cadastrar e utilizar o sistema <b>gratuitamente por 14 dias</b>.
                </p>
                <div class="custom-plan-box">
                    <input id="c-plan" type="text" data-slider-min="1" data-slider-max="100" data-slider-step="1"
                           data-slider-value="5" data-currency="R$ " data-unit=" usuários">
                </div>
            </div>
            <div class="col-md-4">
                <div class="custom-plan-info-box">
                    <div class="title">Detalhes do seu plano</div>
                    <div class="details">
                        <div class="feature feature1"><span>5</span> usuários</div>
                        <div class="feature">&nbsp;</div>
                        <div class="feature feature2 margin-top-sm">Todos os recursos disponíveis</div>
                        <div class="feature feature3 margin-top-sm">Avaliação <b>gratuita</b> de 14 dias</div>
                    </div>

                    <div class="price">R$ 125</div>
                    <div class="btn-holder">
                        <a href="javascript:void(0)" class="ybtn ybtn-accent-color btn-block text-center"
                           target="_blank" onclick="this.href='https://app.cronus.one/register?active_users_limit=' + $('#c-plan').val()">
                            Cadastrar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="contact-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Entre em contato</div>
                <div class="row-subtitle"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-title">Horário de atendimento</div>
                    <div class="info-details"><p>Nosso horário de atendimento é das 09:00 até às 18:00 de segunda a sexta-feira.</p>

                        <p>Todo nosso atendimento é feito via internet.</p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-title">Chat</div>
                    <p>Para entrar em contato via WhatsApp <a href="{{ $data['whatsapp'] }}" target="_blank">clique aqui</a>.</p>
                    <p>Para entrar em contato via Skype <a href="{{ $data['skype'] }}" target="_blank">clique aqui</a>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="info-title">Outros</div>
                    <div class="info-details">
                        <p>Para entrar em contato via e-mail pode ser utilizado o endereço <a
                                href="mailto:contato@cronus.one">contato@cronus.one</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('shared.choose_us')
@include('shared.footer')

</body>
</html>
