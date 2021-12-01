<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="/assets/css/home-style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>

@foreach ( $homes as $home )

<body>
    <!-- Header -->
    <div id="header" class="active">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between" >            
                    <a class="navbar-brand" href="{{ route('home')}}">
                        {{$home->titulo}}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">       
                                <a class="nav-link" type="button" id="inicioabrir" data-bs-toggle="offcanvas" data-bs-target="#Abrirchamado" aria-controls="offcanvasRight">Abrir chamado</a>       
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="login" href={{route('principal')}}>Entrar</a>
                            </li>
                        </ul>
                    </div>            
            </nav>
        </div>
    </div>
    
    <!-- fim do Header -->
    <div class="block" id="topo">
        <div class="container pt-5" id="bodyContent"  style=" height:80%; background-image:linear-gradient({{$home->bgcor1}},{{$home->bgcor2}})">
            <div class="titulo" id="titulo">
                <h1 class="display-1 text-center" style="color:{{$home->txcor}};" id="hometitulo">{{$home->titulo}}</h1><br>
                <h3 class="text-center"style="color:{{$home->txcor}}" id="homesubtitulo">{{$home->subtitulo}}</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card" id="card">
                        <div class="card-content">
                            <a>
                                <div class="img-container mb-3">
                                    <h5><i class="bi bi-chat-square-text"></i></h5>
                                    <h4>{{$home->c1titulo}}</h4>
                                    <p class="mb-0">
                                        {{$home->c1subtitulo}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card" id="card">
                        <div class="card-content">
                            <a>
                                <div class="img-container mb-3">
                                    <h5><i class="bi bi-briefcase"></i></h5>
                                    <h4>{{$home->c2titulo}}</h4>
                                    <p class="mb-0">
                                        {{$home->c2subtitulo}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card" id="card">
                        <div class="card-content">
                            <a>
                                <div class="img-container mb-3">
                                    <h5><i class="bi bi-calendar3"></i></h5>
                                    <h4>{{$home->c3titulo}}</h4>
                                    <p class="mb-0">
                                        {{$home->c3subtitulo}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card" id="card">
                        <div class="card-content">
                            <a>
                                <div class="img-container mb-3">
                                    <h5><i class="bi bi-clipboard-data"></i></h5>
                                    <h4>{{$home->c4titulo}}</h4>
                                    <p class="mb-0">
                                        {{$home->c4subtitulo}}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </div>
    
@endforeach
    <div class="container">
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
            <div class="block mt-2 mb-5" id="consulta">
                <div class="container">
                    <h2 class="title text-center">Consultar Chamados</h2>
                    <h4 class="subtitle text-center mb-4">Para consultar precisa do Id do chamado</h4>
                </div>
                <form class="d-flex" action="{{route('home')}}" method="get">
                    @csrf
                    <input type="text" class="form-control mr-2" name="token" placeholder="Consulte aqui o id do chamado">
                    <button type="submit" class="btn btn-success" id="iniciopesquisar" >Consultar</button>
                </form>
                @if ($pesquisas)
                    <h5>Consultando ID do Chamado: {{$pesquisas}}</h5>
                <div class="card" id="pesquisa">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:150px;">Status</th>
                            <th style="width:180px;">Id Chamado</th>
                            <th>titulo</th>
                            <th>resposta</th>
                        </tr>
                        </thead>
                        @foreach ( $chamados as $ch )
                        <tbody>
                            <tr>
                                <td><span class="badge" id="stats" style="background-color:{{$ch->status->bg_color}}; font-size: 1em;">{{$ch->status->status}}</span></td>
                                <td >{{$ch->token}}</td>
                                <td>{{$ch->titulo}}</td>
                                <td>{{$ch->resp}}</td>
                            </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>   
                    
                @else
                
                @endif
                
            </div>
    </div>
</body>





@include('Home.offcans.abrirchamado')
