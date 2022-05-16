@extends('adminlte::page')

@section('title', 'Categorias')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href={{url ("assets/css/config_style.css")}}>    
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
@endsection
@section('content_header')
    @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif
    <div class="h3"><i class="bi bi-activity mr-2"></i>Status</div>
@endsection
@section('content')
    @if (isset($status) && count($status) > 0)
        <div class="fixed-action-btn">
            <button type="button" class="btn-floating btn-large btn-success" data-toggle="modal" data-target="#criarStatus"><i class="bi bi-plus-lg mr-1"></i>Status</button>
        </div>
        <div class="card">
            
            <div class="card-body">
                <table class="table-hover table table-bordered" >
                    <thead>
                        <tr>
                            <th style="width:80px; text-align: center">ID</th>
                            <th >Categoria</th>
                            <th style="width:100px; text-align: center">BG_Cor</th>
                            <th style="width:80px;"></th>
                        </tr>
                    </thead>
                    @foreach ($status as $st)
                        <tbody>
                            <tr>
                                <th style="text-align:center;" id="mmodal" data-toggle="modal" data-target="#editarStatus{{$st->id}}" style="cursor: pointer;">{{$st->id}}</th>
                                <td style="font-size:18px;" id="mmodal" data-toggle="modal" data-target="#editarStatus{{$st->id}}" style="cursor: pointer;">{{$st->status}}</td>
                                <td style="text-align:center;"><input type="color" name="bg_color" value="{{$st->bg_color}}" class="input-control mt-2" aria-label="Disabled input example" style="width:40px;"> 
                                </td>
                                <td style="text-align:center"><a type="" href="" class="btn btn-danger" id="btn-excluir"><i class="bi bi-trash"></i></a></td>
                                @include('config.chamados.status.modal.status_editar')
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    @else
    <div class="fixed-action-btn">
        <button type="button" class="btn-floating btn-large btn-success" data-toggle="modal" data-target="#criarStatus"><i class="bi bi-plus-lg mr-1"></i>Status</button>
    </div>

    <div class="alert">
        <h3 class="alert alert-warning"> Nenhum Status cadastrado!!</h3>
    </div>
    <div class="alert" id="alert">
        <h6 class="alert alert-success"> Cadastre ao lado -></h6>
    </div>
    @endif
@include('config.chamados.status.modal.status_criar')
@endsection