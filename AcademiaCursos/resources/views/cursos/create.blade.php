
{{-- En blade heredamos con @extends --}}
@extends('layouts.app') {{-- Estoy llamando la plantilla de layouts app.blade.php --}}

@section('titulo', 'Crear Curso') {{-- Esto es para personalizar esa seccion--}}

@section('contenido')
    <h3 class="text-center"> Creación del nuevo curso </h3> {{-- este formulario lo heredamos de abajo--}}
        <form action="/" method="POST" enctype='multipart/form-data'> {{-- en action debemos invocar la ruta hacia donde abre cuando le damos click al botonel metodo post siempre va para los formulario y el enctype se usa para enviar archivos como fotos --}}
            @method('POST')
            @csrf{{--Este es el token de botstrapt- la proteccion contra ataques --}}
            <div class="form-group">
                <label for="nombre">Ingrese nombre del curso: </label>
                <input id="nombre" class="form-control" type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descript">Ingrese una descriptción: </label>
                <input id="descript" class="form-control" type="text" name="descripcion" required>
            </div>
            <div class="form-group">
                <label for="imagen">Cargue una imagen para el curso: </label>
                <br>
                <input id="imagen" type="file" name="imagen" required>
            </div>
            <button class="btn btn-dark" type="submit">Crear</button>  <!-- (el type debe ser subtmit para que cree) · -->
        </form>
@endsection {{--  debo cerrar el section --}}

