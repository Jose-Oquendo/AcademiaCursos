@extends('docentes.index')
@section('show')
<div class="row bg-dark text-white-50 p-4">
    <div class="col-md-7">
        <img src="{{Storage::url($docente->foto)}}" class="d-flex" style="width: 100%;" alt="...">
    </div>
    <div class="col-md-5">
        <h2>{{$docente->nombre}} {{$docente->apellido}}</h2>
        <p>{{$docente->ocupacion}}</p>
        <p>Edad: {{$docente->edad}}</p>
        <p>Correo electronico: {{$docente->email}}</p>
        <div class="py-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#editModal">
                Editar
            </button>
            <form method="post" action="{{ route('docentes.destroy', $docente->id) }}" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-light">
                    Eliminar
                </button>
            </form>
        </div>
    </div>
    @include('docentes/modaldocentes')
</div>
@endsection