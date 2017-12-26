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

    <link rel="stylesheet" href="{{ asset('dist/bootstrap_4/dist/css/flatly.min.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('dist/css/reset.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ elixir('dist/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('dist/icomoon/style.css') }}" type="text/css"/>

    <script type="text/javascript" src="{{ asset('dist/js/jQuery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('dist/js/lightbox.js') }}"></script>

    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:app_id" content="">
    <meta property="og:description" content="">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12" style="background: #f8f9fa">
                @include('includes.top')
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2" id="logomarca">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Cesai Tecnologia da Informação">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 offset-xl-2" style="text-align: center; color: #666e76">
                <h1>Estamos atualizando este site! </br>Aguarde, novidades em breve!</h1>
            </div>
        </div>
        <div class="row">
            <div class="fixed-bottom" style="background: #f8f9fa" id="footer-txt">
                Desenvolvido por Plug Networks Developers - Todos os Direitos Reservados Copyright &copy; <?php echo date('Y') ?>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('dist/js/scripts.js') }}"></script>

<!-- Início do script -->
<script>document.addEventListener('DOMContentLoaded',function(){var JSLink=location.protocol+'//widget.omnize.com',JSElement=document.createElement('script');JSElement.async=!0;JSElement.charset='UTF-8';JSElement.src=JSLink;JSElement.onload=OnceLoaded;document.getElementsByTagName('body')[0].appendChild(JSElement);function OnceLoaded(){wOmz.init({id:6837});}},false);</script>
<!-- Fim do script -->

@include('includes.contatoModal')

</html>