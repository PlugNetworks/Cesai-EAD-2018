@extends('layouts.template')

@section('content')

    <div class="container my-3">
        <div class="row">
            <div class="col-xl-12">
                <h1 style="border-bottom: solid 5px orangered">{{ $pageadminists->titulo }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-8" id="font-style">
                        <div class="row">
                            <div class="col-xl-12">
                                <img src="{{ asset('cursos') }}/{{ $pageadminists->image }}" class="img-fluid img-thumbnail" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <h3 style="color: #666e76; border-bottom: thin solid #C2CCD1; line-height: 40px"><span class="icon-books"></span> Objetivo:</h3>
                                <p class="text-justify mt-4">{{ $pageadminists->objetivo }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-xl-12">
                                <h3 style="color: #666e76; border-bottom: thin solid #C2CCD1; line-height: 40px"><span class="icon-list2"></span> Conteúdo Programático:</h3>
                                <p class="mt-4"><?php echo nl2br("$pageadminists->conteudo"); ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">

                        <div class="row">
                            <div class="col-xl-12">
                                <h3 class="mt-0" style="color: #666e76; border-bottom: thin solid #C2CCD1; line-height: 40px"><span class="icon-clock3"></span> Carga Horária:</h3>
                                <h3 class="mt-3" style="text-align: right; color: #2C3E50"><strong>{{ $pageadminists->carga }}</strong></h3>
                                <h3 class="mt-3" style="color: #666e76; border-bottom: thin solid #C2CCD1; line-height: 40px"><span class="icon-warning2"></span> Pré Requisitos:</h3>
                                <h3 class="mt-3" style="text-align: right; color: #2C3E50"><strong>{{ $pageadminists->requisito }}</strong></h3>
                                <h3 class="mt-3" style="color: #666e76; border-bottom: thin solid #C2CCD1; line-height: 40px"><span class="icon-cart2"></span> Preço:</h3>
                                <h1 class="display-4" style="text-align: right; color: #2C3E50"><strong>R$ {{ $pageadminists->valor }}</strong></h1>
                                <h3 style="text-align: right; color: #c1c1c1"><strong>{{ $pageadminists->parcela }}</strong><br><small>sem juros</small></h3>
                                <a href="" class="btn btn-outline-info btn-block btn-lg">Matricular neste Curso</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop