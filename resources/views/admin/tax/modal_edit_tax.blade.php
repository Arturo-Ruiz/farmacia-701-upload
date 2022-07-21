<div class="modal fade" id="edit_taxes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Impuesto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{ route('taxe.update') }}">
            @csrf
            <input type="hidden" id="id" name="id">
            <div class="form-group">
                <div class="input-group input-group-alternative mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                  <input class="form-control name" id="name_edit" placeholder="Ingresar Nombre" name="name" required type="text">
                </div>
              </div>

              <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-money-bill-alt"></i></span>
                    </div>
                    <input class="form-control value" id="value_edit" placeholder="Ingresar Valor" name="value" required >
                  </div>
              </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary save">Editar Impuesto</button>
        </div>
        </form>
      </div>
    </div>
</div>
