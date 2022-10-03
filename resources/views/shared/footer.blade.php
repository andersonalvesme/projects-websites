<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="footer-menu-holder">
                    <h4>Sobre</h4>
                    <p>O Cronus é um Sistema de CRM online que tem como objetivo ajudar sua equipe comercial a vender
                        mais e melhor, organizando todo o seu ciclo de negócios.</p>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <h4>Contato</h4>
                    <div class="email">Via Whatsapp <a href="{{ $data['whatsapp'] }}" target="_blank">clique aqui</a></div>
                    <div class="email">Via Skype <a href="{{ $data['skype'] }}">clique aqui</a></div>
                    <div class="email">Via e-mail <a href="mailto:contato@cronus.one">{{ $data['email'] }}</a></div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-1 col-md-1">
                <div class="footer-menu-holder">
                    <h4>Links</h4>
                    <ul class="footer-menu">
                        <li><a href="#services">Recursos</a></li>
                        <li><a href="#custom-plan">Planos</a></li>
                        <li><a href="#contact-info">Contato</a></li>
                        {{--                        <li><a href="#articles">Blog</a></li>--}}
                        <li><a target="_blank" href="https://app.cronus.one/">Acessar</a></li>
                        <li><a target="_blank" href="https://app.cronus.one/register">Teste grátis</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="https://www.linkedin.com/company/cronuscrmonline" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/cronuscrmonline" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/cronuscrmonline" target="_blank"><i class="fab fa-facebook"></i></a></li>
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
