<div class="modal fade" id="modal-info-{{$rev->id_revision}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalle de la Tablet</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Datos Tecnicos de la Tablet:</p>
                <label class="form-control">serie: {{$rev->n_serie}}</label>
                <label class="form-control">marca: {{$rev->marca}}</label>
                <label class="form-control">hora: {{$rev->hora}}</label>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
        <!-- /.modal-content-->
    </div>
    <!-- /.modal-dialog-->
</div>
