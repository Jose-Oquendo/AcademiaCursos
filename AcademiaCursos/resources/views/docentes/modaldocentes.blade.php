<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Añadir docente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form class="" action="{{route('docentes.update', $docente->id)}}" method="POST" enctype='multipart/form-data'>
            @method('PATCH')
            @csrf
             <div>
                <label class="form-label" for="nombre">Nombre</label>
                <input class="form-control" name="nombre" id="nombre" type="" value="{{ $docente->nombre }}" placeholder="" >
             </div>
             <div>
                <label class="form-label" for="apellido">Apellido</label>
                <input class="form-control" name="apellido" id="apellido" type="" value="{{ $docente->apellido }}" placeholder="" >
             </div>
             <div>
                <label class="form-label" for="edad">Edad</label>
                <input class="form-control" name="edad" id="edad" type="number" value="{{ $docente->edad }}" placeholder="" >
             </div>
             <div>
                <label class="form-label" for="email">Correo</label>
                <input class="form-control" name="email" id="email" type="email" value="{{ $docente->email }}" placeholder="correo@example" >
             </div>
             <div>
                <label class="form-label" for="ocupacion">Ocupacion</label>
                <input class="form-control" name="ocupacion" id="ocupacion" type="" value="{{ $docente->ocupacion }}" placeholder="" >
             </div>
             <div>
                <label class="form-label" for="foto">Foto del docente</label>
                <input class="form-control" name="foto" id="foto" type="file" value="{{ $docente->foto }}" placeholder="" >
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!--Continuacion del form-->
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>