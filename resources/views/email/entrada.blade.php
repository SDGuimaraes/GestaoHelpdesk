@extends('adminlte::page')
@section('title', 'Caixa de Entrada')
@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ url ('/assets/css/style_email.css') }}">
@endsection



@section('content')
<body>
    <div class="conteiner" id="inbox" style="min-height: 1112.12px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-2">
                    <button type= "button" class="btn btn-primary btn-block mb-3" data-toggle="modal" data-target="#novoEmail">Novo Email</button>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Menu</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item active">
                                    <a href="#" class="nav-link"><i class="fas fa-inbox"></i> Caixa de entrada </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="far fa-envelope"></i> Enviados</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="far fa-file-alt"></i> Rascunho</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="far fa-trash-alt"></i> Lixeira</a>
                                </li>
                            </ul>
                        </div>
                    </div>  
                </div>
                <div class="col-md-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title ml-3">Caixa de Entrada</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm mv-1">
                                <input type="text" class="form-control" placeholder="Procurar Email">
                                    <div class="input-group-append">
                                        <div class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                            
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm">
                                        <i class="fas fa-share"></i>
                                    </button>
                                </div>
                                
                                <button type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped border-black align-middle">
                                    <tbody>
                                        <tr>
                                            <td >
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check1">
                                                <label for="check1"></label>
                                                </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Alexandre</a></td>
                                            <td class="mailbox-subject"><b>Assunto</b> - resolução de problema...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">5 mins ago</td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check2">
                                                <label for="check2"></label>
                                            </div>
                                            </td>
                                            <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                            <td class="mailbox-name"><a href="read-mail.html">Carlos</a></td>
                                            <td class="mailbox-subject"><b>Problema Carregador</b> - Carregador parou de funcionar no...
                                            </td>
                                            <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                                            <td class="mailbox-date">28 mins ago</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>                                
                        </div>      
                        <div class="card-footer p-0">
                            <div class="mailbox-controls">
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-sm"><i class="far fa-trash-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-reply"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i>
                                    </button>
                                </div>
                                
                                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-sync-alt"></i>
                                </button>
                                <div class="float-right">
                                    1-50/200
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                
                                </div>
                        
                            </div>
                        </div>
                    </div>   
                </div>      
            </div>
        </section>
    </div>
</body>
@endsection

<!-- Modal -->

@include("email.email.novo")

