<form action="{{ route('criar_chamado')}}" method="post" enctype="multipart/form-data">
  @foreach ($chamados as $ch)
  @csrf
  <div class="modal fade" id="novoChamado" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header" style="height: 10px;">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
        </div>
        <div class="modal-body">
            <div class="row">
              <div class="col s12">
                <h5 class="modal-title mx-3 text-primary mb-4 text-center"style="align-heigth:40px">
                  <i class="bi bi-clipboard-check mx-2" style="font-size:37px;"></i>
                    {{ _('Novo Chamado')}}
                </h5>
                <hr>
                <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo do chamado</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="titulo" placeholder="Digite aqui...">
                </div>
                <div class="input-group mb-3" id="token">
                  <input type="text" class="form-control" name="token" placeholder="Digite aqui..."></div>
                </div>
                <label for="basic-url" class="form-label"><i class="bi bi-person-lines-fill mr-2"></i>Nome do Solicitante</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="nome" value={{$ch->usuario->name}}>
                </div>
                <label for="basic-url" class="form-label"><i class="bi bi-at mr-2" ></i>Email de Contato</label>
                <div class="input-group mb-3">
                  <input type="email" class="form-control" name="email" value={{$ch->usuario->email}}>
                </div>
                <label for="basic-url" class="form-label mt-2"><i class="bi bi-list mr-2"></i>Descrição</label>
                <div class="input-group mb-3">
                  <textarea class="form-control" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" placeholder="Digite aqui..." name="desc" id="textcreate"></textarea>
                </div>               
                <label for="basic-url" class="form-label mt-2"><i class="bi bi-bookmark mr-2" ></i>Categorias</label>
                <div class="input-group">
                  <select class="form-select" name="categoria_id" id="CategoriaChamado">
                    <option selected>Categorias...</option>
                    @foreach ($categorias as $cat)
                    <option value="{{$cat->id}}">{{$cat->categoria}}</span></option>
                    @endforeach
                  </select>
                </div>
                <label for="basic-url" class="form-label mt-2"><i class="bi bi-upload mr-2"></i>Anexo</label>
                <div class="input-group mb-3">
                  <label for="formFileMultiple" class="form-label"></label>
                  <input class="form-control" type="file" id="formFileMultiple" name="anexo" multiple>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mx-3 mb-3" style="width:94%; heigth: 50px; ">Novo Chamado</button>
        </div>
        @endforeach 
        
      </div>
    </div>
  </div>   
</form>