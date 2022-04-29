@extends('layouts.app')
@section('titulo', '{{ $cursito->nombre}}')
@section('contenido')
<div>
    <h3 class="text-center">Edicion del curso</h3> {{-- este formulario lo heredamos de abajo--}}
        <form action="/{{$cursito->id}}/" method="POST" enctype='multipart/form-data'> {{-- en action debemos invocar la ruta hacia donde abre cuando le damos click al botonel metodo post siempre va para los formulario y el enctype se usa para enviar archivos como fotos --}}
            @method('PATCH')
            @csrf{{--Este es el token de botstrapt- la proteccion contra ataques --}}
            <div class="form-group">
                <label for="nombre">Nombre del curso: </label>
                <input id="nombre" class="form-control" type="text" name="nombre"  value="{{$cursito->nombre}}" required>
            </div>
            <div class="form-group">
                <label for="descript">Descriptción: </label>
                <input id="descript" class="form-control" type="text" name="descripcion"  value="{{$cursito->description}}" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen del curso: </label>
                <br>
                <input id="imagen" type="file" name="imagen" value="{{$cursito->imagen}}" required>
            </div>
            <button class="btn btn-dark" type="submit">Actualizar</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
</div>
@endsection