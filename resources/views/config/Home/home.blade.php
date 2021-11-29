@extends('adminlte::page')

@section('title', 'Chamados')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="/assets/css/style.css">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="/assets/js/script.js"></script>
@endsection

@section('content_header')
    <h1>Configurações da Pagina principal</h1>
@endsection
@section('content')
@if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
@endif
@foreach ( $homes as $home)

<div class="card">
    <div class="card-body">
        <form action="{{route('config.home.salvar',$home->id)}}" method="post" class="form-horizontal">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo do Site</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="titulo" value="{{$home->titulo}}">
                </div>
                <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Sub-titulo do Site</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="subtitulo" value="{{$home->subtitulo}}">
                </div><br>
                <div class="input-group mt-2">
                <label for="basic-url" class="form-label mr-2">Cor de fundo 1:</label>
                <input type="color" name="bgcor1" value="{{$home->bgcor1}}" class="input-control  mr-2" style="width:40px;">
                <label for="basic-url" class="form-label ml-2 mr-2">Cor de fundo 2:</label>
                <input type="color" name="bgcor2" value="{{$home->bgcor2}}" class="input-control  mr-2" style="width:40px;">
                <label for="basic-url" class="form-label ml-2 mr-2">Cor do texto:</label>
                <input type="color" name="txcor" value="{{$home->txcor}}" class="input-control " style="width:40px;">
                <br><br>
                <div class="input-group">
                    <div class="card p-2 mr-3">
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo Card 1</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c1titulo" value="{{$home->c1titulo}}">
                        </div><br>
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Sub-titulo card 1</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c1subtitulo" value="{{$home->c1subtitulo}}">
                        </div><br>
                    </div>
                    <div class="card p-2 mr-3">
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo Card 2</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c2titulo" value="{{$home->c2titulo}}">
                        </div><br>
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Sub-titulo card 2</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c2subtitulo" value="{{$home->c2subtitulo}}">
                        </div><br>
                    </div>
                    <div class="card p-2 mr-3">
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo Card 3</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c3titulo" value="{{$home->c3titulo}}">
                        </div><br>
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Sub-titulo card 3</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c3subtitulo" value="{{$home->c3subtitulo}}">
                        </div><br>
                    </div>
                    <div class="card p-2 mr-3">
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Titulo Card 4</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c4titulo" value="{{$home->c4titulo}}">
                        </div><br>
                        <label for="basic-url" class="form-label"><i class="bi bi-type mr-2"></i>Sub-titulo card 4</label>
                        <div class="input-group mb-1">
                        <input type="text" class="form-control" name="c4subtitulo" value="{{$home->c4subtitulo}}">
                        </div><br>
                    </div>
                </div>
            </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <input type="submit"  value="Salvar" class="btn btn-success" >
                </div>
            </div>
        </form>
    </div>
</div>
    
@endforeach


@endsection