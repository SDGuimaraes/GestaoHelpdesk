
<div class="offcanvas offcanvas-end" tabindex="-1" id="consultar" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col s12">
                <h5 class="modal-title mx-3 text-primary mb-4 text-center"style="align-heigth:40px">
                    <i class="bi bi-clipboard-check mx-2" style="font-size:37px;"></i>
                    {{ _('Consultar Chamado')}}
                </h5>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="pesquisar" placeholder="Consulte aqui o id do chamado">
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-primary mb-3" style="width:100%; heigth: 50px; " ><i class="bi bi-search" style="margin-right: 5px;"></i>Consultar Chamado</button>
    </div>
    

@if(session('error'))
<h6 class="alert alert-danger">{{session('error')}}</h6>
@endif
</form>