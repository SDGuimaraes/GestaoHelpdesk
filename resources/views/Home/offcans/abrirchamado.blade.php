<form action="{{ route('criar.chamado')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="offcanvas offcanvas-end" tabindex="-1" id="Abrirchamado" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
        <div class="col s12">
          <h5 class="modal-title mx-3 text-primary mb-4 text-center"style="align-heigth:40px">
            <i class="bi bi-clipboard-check mx-2" style="font-size:37px;"></i>
              {{ _('Novo Chamado')}}
          </h5>
          <hr>
          <label for="basic-url" class="form-label"><i class="bi bi-type mr-2" style="margin-right: 5px;"></i>Titulo do chamado</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="titulo" placeholder="Digite aqui...">
          </div>
          <div class="input-group mb-3" id="token">
            <input type="text" class="form-control" name="token" placeholder="Digite aqui..." style="display:none;"></div>
          </div>
          <label for="basic-url" class="form-label"><i class="bi bi-person-lines-fill mr-2" style="margin-right: 5px;"></i>Nome do Solicitante</label>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="nome" placeholder="Digite aqui...">
          </div>
          <label for="basic-url" class="form-label"><i class="bi bi-at mr-2" style="margin-right: 5px;"></i>Email de Contato</label>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Digite aqui...">
          </div>
          <label for="basic-url" class="form-label mt-2"><i class="bi bi-list mr-2" style="margin-right: 5px;"></i>Descrição</label>
          <div class="input-group mb-3">
            <textarea class="form-control" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" placeholder="Digite aqui..." name="desc" id="textcreate"></textarea>
          </div>               
          <label for="basic-url" class="form-label mt-2"><i class="bi bi-bookmark mr-3" style="margin-right: 5px;"></i>Categorias</label>
          <div class="input-group">
            <select class="form-select" name="categoria_id" id="CategoriaChamado">
              <option selected>Categorias...</option>
              @foreach ($categorias as $cat)
              <option value="{{$cat->id}}">{{$cat->categoria}}</span></option>
              @endforeach
            </select>
          </div>
          <label for="basic-url" class="form-label mt-2"><i class="bi bi-upload mr-2" style="margin-right: 5px;"></i>Anexo</label>
          <div class="input-group mb-3">
            <label for="formFileMultiple" class="form-label"></label>
            <input class="form-control" type="file" id="formFileMultiple" name="anexo" multiple>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mx-3 mb-3" style="width:94%; heigth: 50px; ">Novo Chamado</button>
  </div>
  </div>
</div>
</form>