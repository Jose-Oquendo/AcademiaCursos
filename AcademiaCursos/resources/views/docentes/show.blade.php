@extends('docentes.index')
@section('show')
<div class="row">
    <div class="col-md-7">
        <img src="{{Storage::url($docente->foto)}}" class="d-flex" style="width: 100%;" alt="...">
    </div>
    <div class="col-md-4">
        <h2>{{$docente->nombre}}{{$docente->apellido}}</h2>
        <p>{{$docente->ocupacion}}</p>
        <p>Edad: {{$docente->edad}}</p>
        <p>Correo electronico: {{$docente->email}}</p>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModal">
            Editar docente
        </button>
    </div>
    @include('docentes/modaldocentes')
</div>
@endsection