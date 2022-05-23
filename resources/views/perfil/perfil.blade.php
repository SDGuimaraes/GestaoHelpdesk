@extends('adminlte::page')

@section('title', 'Meu perfil')
@section('js')
<script type="text/javascript" src="{{url('/assets/js/script_perfil.js')}}"></script>
@endsection
@section('content_header')
    @if(session('status'))
        <h6 class="alert bg-gradient alert-success"><i class="icon fas fa-check"></i>{{session('status')}}</h6>
    @endif
    
@endsection
@section('content')
<form method="post" action='{{route("usuario_perfil",$usuario->id)}}' enctype="multipart/form-data">
    @csrf
<div class="card card-outline card-primary">
    <div class="card-body">
        <div class="col mb-3">
            <div class="row g-3">
                <div class="col-md-3">
                    @if(($usuario->img) === null)
                        <img src="{{url('assets/usuarios/default.png')}}" alt="user-avatar" class="img-fluid img-bordered " width="250">
                    @else
                        <img src="{{$usuario->img}}" alt="user-avatar" class="img-fluid img-bordered " width="250">
                    @endif
                </div>
                <div class="col">
                    <div class="col mb-3">
                    <h1>{{$usuario->name}}</h1>
                    </div>
                    <div class="col mb-3">
                        <h2>{{$usuario->email}}</h2>
                    </div>
                    <div class="col mb-3">
                        <h2>{{$usuario->clientes->setores->nome}}</h2>
                    </div>
                    <div class="col row mb-3">
                        <h2>{{$usuario->clientes->nome}}</h2>
                        <h2 class="ml-4">{{$usuario->status->nome}}</h2>
                    </div>

                </div>
            </div>
            <hr>
        </div>
    @if($usuario == Auth::user())            
        
        <div class="col mb-3">
            <input class="form-control" name="name" type="text" value={{$usuario->name}}>
        </div>
        <div class="col mb-3">
            <input class="form-control" name="email" type="text" value={{$usuario->email}}>
        </div>
        
        <div class="col row mb-3">
            <input class="form-control col ml-2" id="ddd" name="ddd" type="text" value={{$usuario->ddd}}>
            <input class="form-control col-4 ml-2 " id="tel" name="telefone" maxlength="10"  type="text" value={{$usuario->telefone}}>
            <input class="form-control col-4 ml-2" id="cpf" name="cpf" type="text" value={{$usuario->cpf}}>
            <input class="form-control col-1 ml-2" name="sexo" type="text" value={{$usuario->sexo}}>
        </div>
        

        <div class="col mb-3">
            <input class="form-control" type="file" id="formFileMultiple" name="img" value={{$usuario->img}} multiple>
          </div>
    @else 
        não logado
    @endif
    </div>
    <div class="card-footer">
        <div class="col-sm-10 align-items-end">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </div>
</div>
</form>

@endsection