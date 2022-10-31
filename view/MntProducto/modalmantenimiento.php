<div id="modalmantenimiento" class="modal fade">
    <div class="modal-dialog modal-lg w-100" role="document">
        <div class="modal-content">
            <form method="POST" id="producto_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">
                    <div class="form-group">
                        <label for="cat_id" class="form-label">Categoria</label>
                        <select class="form-control select2" name="cat_id" id="cat_id" data-placeholder="Seleccione"
                            style="width: 100%;"></select>
                    </div>
                    <div class="form-group">
                        <label for="prod_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="prod_nombre" name="prod_nombre"
                            placeholder="Ingrese Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="prod_nombre" class="form-label">Descripcion</label>
                        <textarea rows="3" class="form-control" id="prod_descripcion" name="prod_descripcion"
                            placeholder="Ingrese Descripción" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prod_cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="prod_cantidad" name="prod_cantidad"
                            placeholder="Ingrese Cantidad" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add"
                        class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>

        </div>
    </div>
</div>