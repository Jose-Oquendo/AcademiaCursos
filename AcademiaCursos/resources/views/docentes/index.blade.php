@extends('layouts.app') {{-- Le decimos q herede de app--}}
@section('titulo', 'Nuestros docentes!')
@section('contenido')
<div class="">
    <h2>Los docentes de nuestra academia</h2>
    <br>
    <div class="row">
        <div class="col-md-4">
            <button class="my-3 btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Lista de docentes
            </button>
            @foreach($docentes as $docente)
                <div class="collapse.show" id="collapseExample">
                    <a class="text-dark text-decoration-none" href="{{route('docentes.show', $docente->id)}}">
                        <div class="rounded-pill card mb-3" style="max-width: 540px; height: 100px;">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <img src="{{Storage::url($docente->foto)}}"  class="rounded-circle" height="100" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$docente->ocupacion}}</h5>
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col-md-8">
            @yield('show', "Escoge un docente para concer su infomracion")
        </div>
    </div>
</div>
@endsection