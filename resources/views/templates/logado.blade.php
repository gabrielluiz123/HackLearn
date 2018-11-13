<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body class="background-body">

    <nav class="navbar navbar-expand-lg navbar-light nav-principal">
  <!--<a class="navbar-brand" href="#">Brand</a>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
    <img src="imgs/menu.png" width="40px">
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" id="link" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="link" href="#">Conceitos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="link" href="#">Cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="link" href="{{url('/area')}}">Quiz</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" id="link" href="{{url('/newQuiz')}}">Criar Quiz <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="link" href="#">Ranking</a>
      </li>
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>-->
    </ul>
    <form class="form-inline my-2 my-lg-0" method="POST" action="{{url('search')}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input class="form-control mr-sm-2" required name="pesquisa" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-site" type="submit">Pesquisar</button>

    </form>
  </div>
</nav>
<nav class="navbar navbar-light nav-secundario">
  <span>Logado como <a href="{{url('perfil')}}">{{$nome}}</a></span>
  <span class="right"><a href="{{url('auth/logout')}}">Deslogar</a></span>
</nav>

@yield ('content')


<section class="footer fixed-bottom">
<div class="container">
  <div class="row">
    <div class="col-md-6">
       Trabalho Gerência de Projetos
    
    </div>

    <div class="col-md-6">
       Universidade Federal de Itajubá
    </div>
   </div>
</div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>