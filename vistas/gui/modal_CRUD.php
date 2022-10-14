
<!-- MODAL DE EDITAR DISPOSITIVO -->
<div class="modal fade" id="editarDisp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarDispTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editarDispTitulo">Editar Dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
        <div class="mb-3">
          <label for="nombreDisp" class="form-label">Nombre:</label>
          <input type="Text" class="form-control" id="nombreDisp" value="[debe ir nombre de dispositivo]">
        </div>
        <div class="mb-3">
          <label for="marcaDisp" class="form-label">Marca:</label>
          <input type="Text" class="form-control" id="marcaDisp" value="[debe ir marca de dispositivo]">
        </div>
        <div class="mb-3">
          <label for="usoDisp" class="form-label">Tipo de Uso:</label>
          <input type="Text" class="form-control" id="usoDisp" value="[debe ir tipo de uso de dispositivo]">
        </div>
        <div class="mb-3">
          <label for="consumoDisp" class="form-label">Tipo de Consumo:</label>
          <select class="form-select" id="consumoDisp">
            <option selected>[debe ir tipo de consumo de dispositivo]</option>
            <option>Ocasional</option>
            <option>Prolongado</option>
            <option>Permanente</option>
          </select>
        </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success">Editar</button>
      </div>
    </div>
  </div>
</div>



<!--MODAL DE BORRAR DISPOSITIVO -->
<div class="modal fade" id="borrarDisp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="borrarDispTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="borrarDispTitulo">¿Seguro que desea eliminar el dispositivo?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row text-center">
          <div class="col-12">
            <h5>Dispositivo: [debe ir nombre de dispositivo]</h5>
          </div>
          <div class="col-12">
            <h5>Marca: [debe ir marca de dispositivo]</h5>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
    </div>
  </div>
</div> 

