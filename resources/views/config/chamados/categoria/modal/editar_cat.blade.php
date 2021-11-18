@foreach ($categorias as $cat)
<form action="{{ route('config_cat_editar', $cat->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="modal fade" id="editarCategoria{{$cat->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header" style="height: 10px;">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
                </div>
                <div class="modal-body">
                    <div class="title"><div class="h4">{{$cat->categoria}}</div></div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group">
                                <span class="input-group mb-3"></span>
                                <input type="text" name="categoria" value="{{$cat->categoria}}"class="form-control mr-2" placeholder="Categoria">
                                <input type="color" name="bg_color" value="{{$cat->bg_color}}" class="input-control form-control-color" style="width:40px;">
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
@endforeach     