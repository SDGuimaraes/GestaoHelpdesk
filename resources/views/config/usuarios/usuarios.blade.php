@extends('adminlte::page')

@section('title', 'Usuarios')

@section('css')
    <link rel="stylesheet" href={{url('/assets/css/css_usuario.css')}}>
@endsection
@section('content')
    <section class="content">
        
        <div class="card card-solid">
            <div class="card-body pb-0">
                <h1>contagem usuario:{{count($usuario)}}</h1>
                <div class="row">
                @foreach ($usuario as $us)
                
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                                {{$us->clientes->setores->nome}}
                            </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{$us->name}}</b></h2>
                                        <h3><p class="text-muted text-md"><b>Status: </b> <span class="badge bg-dark">{{$us->status->nome}}</span> </p></h3>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fa fa-at" aria-hidden="true"></i></span>Email: {{$us->email}}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>Telefone:({{$us->ddd}}){{$us->telefone}}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    @if($us->img === null)
                                    <img src="{{url('assets/usuarios/teste.jpg')}}" alt="user-avatar" class="img-circle img-fluid">
                                    @else
                                    <img src={{$us->img}} alt="user-avatar" class="img-circle img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> Ver Perfil
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                @endforeach
                </div>
            </div>
            
            <!--<div class="card-footer">
            <nav aria-label="Contacts Page Navigation">
                <ul class="pagination justify-content-center m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                </ul>
            </nav>
            </div>-->
        </div>
    </section>
@endsection