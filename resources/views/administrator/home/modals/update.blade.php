<div class="modal fade" id="modal-update-element">
    <form action="{{ route('home.content.generic-section.update') }}" method="post" id="form-update-slider" class="modal-dialog" data-asyn="no" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Slider</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
        <div class="modal-body">
            <input type="hidden" name="id">
            <input type="hidden" name="section_id" value="1">
            <div class="form-group">
                <input type="text" name="order" value="" class="form-control" placeholder="Ingrese el orden AA BB CC">
            </div>
            <div class="form-group">
                <input type="text" name="content_1" class="form-control" placeholder="AMPLIA EXPERIENCIA">
            </div>
            <div class="form-group">
                <input type="text" name="content_2" class="form-control" placeholder="FABRICANDO MÁQUINAS">
            </div>
            <div class="form-group">
                <textarea name="content_3" class="ckeditor" cols="30" rows="10" placeholder="PARA LA INDUSTRIA DE LA MARROQUINERÍA Y EL CALZADO"></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control-file">
                <small>la imagen debe ser al menos 1300x400</small>
            </div>    
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </form>
    <!-- /.modal-dialog -->
</div>