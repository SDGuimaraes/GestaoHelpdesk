@extends('adminlte::page')

@section('title', 'Chamados')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ url ('/assets/css/style.css') }}">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="/assets/js/script.js"></script>
@endsection


@section('content')
@if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
@endif
@if(session('erro'))
        <h6 class="alert alert-danger">{{session('erro')}}</h6>
@endif
 <div class="fixed-action-btn">
<button type="button" class="btn-floating btn-large btn-primary" data-toggle="modal" data-target="#novoChamado"><i class="bi bi-plus-lg"></i>Novo Chamado</button>
</div>

<table class="table table-hover border-black align-middle ">
  <thead class="table-light">
    <tr>
      <th class="text-center" style="width: 150px;" >Status</th>
      <th class="text-center">Id Chamado</th>
      <th class="text-center">Titulo</th>
      <th class="text-center">Categoria</th>
      <th class="text-center" style="width: 150px;">Data Criação</th>
      <th class="text-center" style="width: 150px;">Ultima alteração</th>
      <th class="text-center">Solicitante</th>
      <th class="text-center"style="width: 150px;">Ações</th>
    </tr>
  </thead>
  @foreach ( $chamados as $ch)
  <tbody>
    <div>
      <tr >
          <td class="text-center"  style="cursor:pointer;"><span class=" info-box-icon bg-gradient badge elevation-1" id="stats" style="background-color:{{$ch->status->bg_color}}">{{$ch->status->status}}</span></td>
          <td class="text-center"><strong>{{$ch->token}}</strong></td>
          <td class="text-center">{{$ch->titulo}}</td>     
          <td class="text-center"><span class="badge rounded-pill bg-gradient elevation-1"id="transf" style="background-color:{{$ch->categoria->bg_color}}">{{$ch->categoria->categoria}}</span></td>
          <td class="text-center">{{$ch->created_at->format('H:i - d/m')}}</td>
          <td class="text-center">{{$ch->updated_at->format('H:i - d/m')}}</td>
          <td class="text-center"><span class="badge rounded-pill bg-dark elevation-1" style="padding:10px;"><i class="bi bi-at" style="font-size:12px;"></i>{{$ch->usuario->name}}</span></td>
          <td class="text-center">
            <button type="button" class="btn bg-gradient btn-outline-primary elevation-1" data-toggle="modal" data-target="#chamadoModalEdit{{$ch->id}}"><i class="bi bi-display"></i></button>
            @if($ch->anexo != null)
            <a href='{{url('/admin/download',$ch->anexo)}}'> <button type="button" class="btn bg-gradient btn-success" >
            <i class="bi bi-download"></i>
            </button></a>
            @else
            <button type="button" class="btn bg-gradient btn-secondary" disabled><i class="bi bi-at"></i></button>
            @endif
          </td>
        </tr>
    </div>
  </tbody> 
  @endforeach  
</table>


@include('chamados.modals.editar')
@include('chamados.modals.criar')
    
@endsection

