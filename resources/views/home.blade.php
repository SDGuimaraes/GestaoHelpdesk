@extends('adminlte::page')

@section('title', 'Inicio')
@php
    date_default_timezone_set('America/Sao_Paulo');
    $hora = date('H:i');
@endphp


@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if($hora >= 6 && $hora <= 12)
                <h1 class="m-0">Olá Bom dia, {{Auth::user()->name}}</h1>
                @elseif($hora > 12 && $hora <= 18)
                <h1 class="m-0">Olá Boa Tarde, {{Auth::user()->name}}</h1>
                @elseif($hora > 18 && $hora <= 00)
                <h1 class="m-0">Olá Boa Noite, {{Auth::user()->name}}</h1>
                @else
                <h1 class="m-0">Olá Boa Madrugada, {{Auth::user()->name}}</h1>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
        <span class="info-box-icon bg-gradient-danger elevation-1"><i class="fa fa-medkit" aria-hidden="true"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">
            Chamados Abertos
        </span>
        <span class="info-box-number">
        {{$chama}}
        </span>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
        <span class="info-box-icon bg-gradient-success elevation-1"><i class="fas fa-thumbs-up"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Chamados Concluidos</span>
        <span class="info-box-number">{{$concluido}}</span>
        </div>
        
        </div>
        
        </div>
        
        
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
        <span class="info-box-icon bg-gradient-info elevation-1"><i class="fas fa-shopping-cart"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Aproveitamento</span>
        <span class="info-box-number">
            {{$porc}}
        <small>%</small>
        </span>
        </div>
        
        </div>
        
        </div>
        
        <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
        <span class="info-box-icon bg-gradient-warning elevation-1"><i class="fas fa-users"></i></span>
        <div class="info-box-content">
        <span class="info-box-text">Usuarios</span>
        <span class="info-box-number">{{count($usuarios)}}</span>
        </div>
        
        </div>
        
        </div>
        
        </div>
</div>
@endsection
