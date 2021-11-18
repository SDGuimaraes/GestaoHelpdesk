<form action="{{ route('config_st_criar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="criarStatus" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" style="height: 10px;">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
                </div>
                <div class="modal-body">
                    <div class="title"><h5 class="modal-title mx-3 text-primary mb-4 text-center"style="align-heigth:40px">
                        <i class="bi bi-clipboard-check mx-2" style="font-size:37px;"></i>
                          {{ _('Novo Status')}}
                      </h5></div>
                      <hr>
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group mb-3"></span>
                                <input type="text" name="status" class="form-control mr-2" placeholder="Status">
                                <input type="color" name="bg_color" class="input-control form-control-color" style="width:40px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>        