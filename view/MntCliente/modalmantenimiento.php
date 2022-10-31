<!-- LARGE MODAL -->
<div id="modalmantenimiento" class="modal fade">
    <div class="modal-dialog modal-lg w-100" role="document">
        <div class="modal-content ">
            <form method="POST" id="cliente_form">
                <div class="modal-header pd-x-20">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body pd-20">
                    <input type="hidden" id="cliente_id" name="cliente_id">
                    <div class="form-group">
                        <label for="cliente_nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="cliente_nombre" name="cliente_nombre"
                            placeholder="Ingrese Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente_mail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="cliente_mail" name="cliente_mail"
                            placeholder="Ingrese Correo" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente_celular" class="form-label">Celular</label>
                        <input type="text" class="form-control" id="cliente_celular" name="cliente_celular"
                            placeholder="Ingrese Cantidad" maxlength="10" required>
                    </div>
                </div>
                <!-- modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add"
                        class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->