<div class="modal fade" id="novoEmail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="height: 10px;">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col s12">
                  <h5 class="modal-title mx-3 text-primary mb-4 text-center"style="align-heigth:40px">
                    <i class="bi bi-envelope mx-2" style="font-size:37px;"></i>
                      {{ _('Novo Email')}}
                  </h5>
                  <hr>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="para" placeholder="Para:">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="assunto" placeholder="Assunto:">
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="texto" id="texto"></textarea>
                </div>
                <div class="form-group">
                    <input class="form-control" type="file" id="formFileMultiple" name="anexo" multiple>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
</div>