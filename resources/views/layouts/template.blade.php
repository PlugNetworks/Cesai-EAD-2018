<!doctype html>

<html lang="pt_BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cesai - Ensino a Distância</title>
    <link rel="icon" type="image/png" href="" />

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="">
    <meta name="language" content="" />
    <meta name="URL" content="http://" />
    <meta name="subject" content="" />
    <meta name="rating" content="general" />
    <meta name="updated" content="daily" />
    <meta name="robots" content="index, follow" />
    <meta name="audience" content="all" />
    <meta name="Publisher" content="" />
    <meta name="ia_archiver" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="msnbot" content="index, follow" />
    <meta name="Search Engines" content="" />
    <meta name="audience" content="all" />
    <meta name="revisit-after" content="1 days" />
    <meta name="generator" content="">
    <meta name="document-classification" content="" />

    <link rel="stylesheet" href="{{ asset('dist/css/reset.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ elixir('dist/css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dist/icomoon/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" type="text/css"/>

    <script type="text/javascript" src="{{ asset('dist/js/jQuery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/lightbox.js') }}"></script>

    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="">

    <script>
        $('body').on('mouseenter mouseleave','.dropdown',function(e){
            var _d=$(e.target).closest('.dropdown');_d.addClass('show');
            setTimeout(function(){
                _d[_d.is(':hover')?'addClass':'removeClass']('show');
            },300);
        });
    </script>

</head>

<body style="font-family: 'Roboto Condensed', sans-serif">

<div class="container-fluid" id="topo-page">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mt-1" id="sociais-icons">
                    <a href=""><span class="icon-facebook3 mr-1"></span></a>
                    <a href=""><span class="icon-twitter3 mr-1"></span></a>
                    <a href=""><span class="icon-googleplus mr-1"></span></a>
                    <a href=""><span class="icon-linkedin3 mr-1"></span></a>
                    <a href=""><span class="icon-rss3 mr-1"></span></a>
                </div>
                <div class="col-xl-2 ml-auto d-none d-sm-block">
                    <a href="" class="btn btn-outline-warning btn-block mt-1">
                        <span class="icon-notification"></span>&nbsp; Dúvidas</a>
                </div>
                <div class="col-xl-2 d-none d-sm-block">
                    <a href="" class="btn btn-outline-success btn-block mt-1">
                        <span class="icon-pencil2"></span>&nbsp; Atendimento</a>
                </div>
                <div class="col-xl-2 d-none d-sm-block">
                    <a href="" class="btn btn-outline-info btn-block mt-1">
                        <span class="icon-pencil2"></span>&nbsp; Cadastre-se</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-xl-5 mt-3">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" class="img-fluid" alt=""></a>
        </div>
        <div class="col-xl-7">
            <img src="{{ asset('images/img_header.png') }}" class="img-fluid" alt="Cesai - Ensino a Distância">
        </div>
    </div>
</div>

@include('includes.menu')

@yield('content')

<div class="container-fluid" style="background: #1B144E">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 mt-4 mb-4">                            
                            <div class="col-xl-12" style="color: #FFFFFF; border-left: solid 5px orangered">
                                <h5>Institucional</h5>
                            </div>
                            <div class="col-xl-12">
                                <div class="row">
                                    <ul id="list-pre-footer">
                                        <li class="mt-2"><a href=""><span class="icon-layers"></span> Quem Somos</a></li>
                                        <li class="mt-2"><a href=""><span class="icon-layers"></span> Termos de Uso</a></li>
                                        <li class="mt-2"><a href=""><span class="icon-layers"></span> Política de Privacidade</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 mt-4 mb-4">
                            <div class="col-xl-12" style="color: #FFFFFF; border-left: solid 5px orangered">
                                <h5>Atendimento</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 mt-4 mb-4">
                            <div class="col-xl-12" style="color: #FFFFFF; border-left: solid 5px orangered">
                                <h5>Siga nossos canais</h5>
                            </div>
                        </div>
                        <div class="col-xl-3 mt-4 mb-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <img src="{{ asset('images/logo_light.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-12">
                                    <p class="font-italic text-justify" style="color: #c1c1c1">
                                        “Estamos sempre inovando e preparando conteúdos cada vez mais objetivos e dinâmicos, resultando no aprendizado mais fácil e eficaz para o aluno”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="footer">
    <div class="row">
        <div class="col-xl-12">
            Desenvolvido por <a href="https://www.plugnetworks.com.br" target="_blank" class="link-plug"><strong>Plug Networks Developers</strong></a> - Todos os Direitos Reservados. Copyright &copy; <?php echo date('Y'); ?> - Cesai/EAD.
        </div>
    </div>
</div>

<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Volta para o Início da Pagina" data-toggle="tooltip" data-placement="left"><span class="icon-circle-up"></span></a>

<script>
    $(document).ready(function(){
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });

        $('#back-to-top').tooltip('show');

    });
</script>
</body>

<Script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('bootstrap/dist/popper.js') }}"></Script>
<Script type="text/javascript" src="{{ asset('bootstrap/dist/popper-utils.js') }}"></Script>


@include('modals.modalCurosInfo')

</html>