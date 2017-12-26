@extends('layouts.template')

@section('content')

    <div class="container my-3">
        <div class="row">
            <div class="col-xl-12">
                <img src="{{ asset('cursos/tema-admin.jpg') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="row">
            @foreach($pageadminists as $categoria)

                <div class="col-xl-4 my-3">
                    <div class="card">

                        <img src="{{ asset('cursos') }}/{{ $categoria->image }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title" style="border-bottom: solid thin #c1c1c1">{{ $categoria->titulo }}</h4>
                            <h6 class="card-subtitle mb-3 text-muted"><span class="icon-clock4"></span> Carga Horária: {{ $categoria->carga }}</h6>
                            <h6 class="card-subtitle mb-3 text-muted" style="border-bottom: solid thin #c1c1c1"><strong>Pré Requisito:</strong> {{ $categoria->requisito }}</h6>
                            <p class="card-text my-2 text-justify"><strong>OBJETIVO:</strong><br>{{ str_limit($categoria->objetivo, 110) }}</p>
                            <a href="{{ url('categoria/administracao/detalhes/'.$categoria->id) }}" class="btn btn-warning btn-lg btn-block">Ver Detalhes!</a>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    </div>

@stop