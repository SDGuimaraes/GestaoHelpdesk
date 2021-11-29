<!--Modal de Editar -->
@foreach ($chamados as $ch)
  <form method="post" action="{{route('editar_chamado',$ch->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="modal fade" id="chamadoModalEdit{{$ch->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg"role="document">
        <div class="modal-content">
          <div class="modal-header" style="height: 10px;">
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
          </div>
          <div class="modal-body">
            <form method="post" action="" enctype="multipart/form-data">
              <div class="row">
                <div class="col-6">
                  <h5 class="modal-title mx-3 mb-4"style="align-heigth:40px">
                    {{$ch->titulo}}
                  </h5>
                  <label for="basic-url" class="form-label"><i class="bi bi-exclamation-octagon mr-1"></i>id do chamado: {{$ch->token}}</label>
                  <br>
                  <label for="basic-url" class="form-label"><i class="bi bi-info-square mr-1"></i>Titulo</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" name="titulo" value="{{$ch->titulo}}">
                  </div>
                  <label for="basic-url" class="form-label mt-2"> <i class="bi bi-intersect mr-1"></i>Categoria</label>
                  <div class="input-group mb-3">
                    <span class="badge rounded-pill" style="padding-left:15px; padding-right:15px; font-size:16px; background-color:{{$ch->categoria->bg_color}}">{{$ch->categoria->categoria}}</span>
                  </div>
                  <label  class="form-label mt-2"><i class="bi bi-person mr-1"></i>Solicitante</label>
                  <div class="input-group mb-3">
                    <span class="badge rounded-pill bg-primary" style="padding-left:15px; padding-right:15px; font-size:16px;"><i class="bi bi-at"></i>{{$ch->nome}}</span>
                  </div>
                  <label  class="form-label mt-2"><i class="bi bi-at mr-1"></i>Contato</label>
                  <div class="input-group mb-3">
                    <span class="badge rounded-pill bg-primary" style="padding-left:15px; padding-right:15px; font-size:16px;"><i class="bi bi-at"></i>{{$ch->email}}</span>
                  </div>
                  <label  class="form-label mt-2"><i class="bi bi-at mr-1"></i>Anexo</label>
                  <div class="input-group mb-3">
                    <a href='{{url('/admin/download',$ch->anexo)}}'>{{$ch->anexo}}</a>
                  </div>
                  <!--<label  class="form-label mt-2"><i class="bi bi-calendar mr-1"></i>Data de Criação</label>
                  <div class="input-group mb-3">
                    <div class="input-group justify-content-start mr-3" style="width:190px; ">
                    <input type="datetime" class="form-control md-1" value="{{$ch->created_at}}" >
                    </div>
                  </div>
                  <div class="input-group mb-3 ml-4" id="checked">
                    <input type="checkbox" class="form-check-input" name="concluido" id="check">
                    <label class="form-check-label" for="flexCheckDefault" id="checkname" >
                      Concluido
                    </label>-->
                </div>
              
                <div class="col-6">
                  <div class="input-group mb-3">
                    <label for="basic-url" class="form-label mt-2"><i class="bi bi-signpost mr-1"></i></i>Status</label>
                    <div class="input-group">
                      <select class="form-select" name="status_id" id="CategoriaChamado">
                        @foreach ($status as $st)
                        <option value="{{$st->id}}"><span class="badge rounded-pill bg-secondary">{{$st->status}}</span></option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <label for="basic-url" class="form-label mt-2"><i class="bi bi-justify mr-1"></i>Descrição</label>
                  <div class="input-group mb-3">
                    <textarea class="form-control" placeholder="Digite aqui..." name="desc" onkeyup="auto_grow(this);" id="textcreate1">{{$ch->desc}}
                    </textarea>
                  </div>
                    <!--<div class="card">
                    <div class="card-body">
                        <label for="basic-url" class="form-label mt-1">Comentários</label>
                        <div class="input-group mb-3 comentariodiv">
                          <textarea class="form-control textcomentario" placeholder="Comentarios...." name ="comentario"  onkeypress="auto_grow(this);" onkeyup="auto_grow(this);"  id="comentario"></textarea>
                          <div id="enviarComentario" class="envcomentario">
                            <button type="" class="btn btn-outline-primary btn-sm  me-md-2">Enviar</button>
                          </div>
                        </div>
                        <hr>
                        <div class="card-fotter">
                          <div class="input-group mb-3 comment">
                            <img src="/vendor/adminlte/dist/img/AdminLTELogo.png" class="input-group-text mr-1" id="usercoment">
                            <input type="text" class="form-control" id="usercomentario" aria-label="Amount (to the nearest dollar)" value="@ {{Auth::user()->name}} - realizar transferencia">
                            <a class="btn btn-outline-secondary" id="userbtn"><i class="bi bi-pencil" id="pencil" style="line-item: center"></i></a>
                          </div>                        
                        </div>
                    </div>
                    </div> -->  
                    <label for="basic-url" class="form-label mt-1">Resposta do Chamado</label>
                    <div class="input-group mb-3">
                      <textarea class="form-control" placeholder="Digite aqui..." name="resp" onkeypress="auto_grow(this);" onkeyup="auto_grow(this);" id="textcreate">{{$ch->resp}}</textarea>
                    </div>
                </div>
              </div>
            </form>  
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" >Salvar</button>
          </div>
        </div>
    </div>
  </div> 
  
@endforeach
  <!-- fim editar modal chamado-->