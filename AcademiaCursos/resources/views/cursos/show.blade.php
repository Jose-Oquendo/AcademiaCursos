@extends('layouts.app')
@section('titulo', 'Editar')
@section('contenido')
<div>
    <h3>Detalles del curso</h3>
    <div class="row">
        <div class="col-md-5">
            <img src="{{Storage::url($cursito->imagen) }}" alt="Imagen del curso" height="300">
        </div>
        <div class="col-md-7">
            <h4>{{$cursito->nombre}}</h4>
            <p>{{$cursito->description}}</p>
            <a href="{{route('curso.edit', $cursito->id)}}" class="btn btn-dark">Editar</a>
            <a href="#" class="btn btn-dark d-inline">Eliminar</a>
        </div>
    </div>
</div>
@endsection