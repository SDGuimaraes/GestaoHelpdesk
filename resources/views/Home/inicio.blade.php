<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="/assets/css/style.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script type="text/javascript" src="/assets/js/script.js"></script>





@if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

@foreach ( $homes as $home )
<nav class="navbar navbar-expand-lg " id="nav">
    <div class="container-fluid">
        <a class="navbar-brand" style="color:{{$home->txcor}}">{{$home->titulo}}</a>
        <form class="d-flex" action="{{route('pesquisa.chamado')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" class="input-control" name="pesquisar" placeholder="Consulte aqui o id do chamado">
            <button type="submit" class="btn btn-success" id="iniciopesquisar" >Consultar</button>
            <button class="btn btn-outline-light " type="button" id="inicioabrir" data-bs-toggle="offcanvas" data-bs-target="#Abrirchamado" aria-controls="offcanvasRight">Abrir chamado</button>       
            <a class="btn btn-outline-dark" href={{route('principal')}}>Entrar</a>

        </form>
    </div>
</nav>


<body class="" style="background-image:linear-gradient({{$home->bgcor1}},{{$home->bgcor2}})">
    <div class="content" style="margin-left: 100px;">
        <h1 style="color:{{$home->txcor}};" id="hometitulo">{{$home->titulo}}</h1><br>
        <h3 style="color:{{$home->txcor}}" id="homesubtitulo">{{$home->subtitulo}}</h3>
    </div>


@endforeach



@include('Home.offcans.abrirchamado')
@include('Home.offcans.pesquisar')