@extends('layouts.app') {{-- Le decimos q herede de app--}}
@section('titulo', 'Nuestros docentes!')
@section('contenido')
<div class="">
    <h2>Los docentes de nuestra academia</h2>
    <br>
    <div class="row">
        <div class="col-md-4">
            @foreach($docentes as $docente)
                <a class="text-dark text-decoration-none" href="{{route('docente.show', $docente->id)}}">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{Storage::url($docente->foto)}}"  height="100" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$docente->ocupacion}}</h5>
                                <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                            </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="col-md-8">
            @yield('show', 'Elige uno de nuestros estructores si quieres saber mas acerca de ellos')
        </div>
    </div>
</div>
@endsection