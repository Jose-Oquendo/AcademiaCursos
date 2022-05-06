@extends('layouts.app') {{-- Le decimos q herede de app--}}
@section('titulo', 'Nuestros docentes!')
@section('contenido')
<div class="my-5">
    <h2 class="text-center">Docentes de nuestra academia</h2>
    @if($message == true)
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            El docente ha sido registrado exitosamente
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $alerta)
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <ul>
                    <li>{{$alerta}}</li>
                </ul>    
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    <form class="" action="/docentes/" method="POST" enctype='multipart/form-data'>
        @method('POST')
        @csrf
        <div class="form-group">
            <label class="form-label" for="nombre">Nombre</label>
            <input class="form-control" name="nombre" id="nombre" type="" value="" placeholder="" >
        </div>
        <div class="form-group">
            <label class="form-label" for="apellido">Apellido</label>
            <input class="form-control" name="apellido" id="apellido" type="" value="" placeholder="" >
        </div>
        <div class="form-group">
            <label class="form-label" for="edad">Edad</label>
            <input class="form-control" name="edad" id="edad" type="number" value="" placeholder="" >
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Correo</label>
            <input class="form-control" name="email" id="email" type="email" value="" placeholder="correo@example" >
        </div>
        <div class="form-group">
            <label class="form-label" for="ocupacion">Ocupacion</label>
            <input class="form-control" name="ocupacion" id="ocupacion" type="" value="" placeholder="" >
        </div>
        <div class="form-group">
            <label class="form-label" for="foto">Foto del docente</label>
            <input class="form-control" name="foto" id="foto" type="file" value="" placeholder="" >
            <small class="text-muted ">La foto debe tener un tamaño que no supere los 1024px de ancho y de largo</small>
        </div>
        <button type="submit" class="btn btn-primary">Guardar nuevo docente</button>
    </form>
</div>
@endsection