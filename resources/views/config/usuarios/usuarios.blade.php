@extends('adminlte::page')

@section('title', 'Usuarios')


@section('content')
<div class="container">
@if($usuario != null)
<div class="card card-primary card-outline">
<table class="table table-hover table-striped border-black table-bordered">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Usuario</th>
                        <th >Email</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Cliente</th>
                        <th class="text-center">Setor</th>
                        <th class="text-center">Acões</th>
                    </tr>
                </thead>
@foreach ($usuario as $us)
            <tbody>
                <tr>
                    <td>{{$us->name}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->status->nome}}</td>
                    <td>{{$us->clientes->nome}}</td>
                    <td>{{$us->clientes->setores->nome}}</td>
                    <td></td>
                </tr>
            </tbody>
        
    @endforeach
    </table> 
</div>
@else

Favor Cadastrar Usuario

@endif
</div>

@endsection