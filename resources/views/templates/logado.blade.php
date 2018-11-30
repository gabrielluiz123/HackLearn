<!doctype html>
<html lang="pt-BR"  class="no-scroll">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="../js/iziToast.min.js" type="text/javascript"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
  <link rel="stylesheet" href="../css/iziToast.min.css">

  <title>Hack Learn - Plataforma de aprendizado em Cybersegurança</title>
</head>
<body class="background-body no-scroll">
  <div class="spinner-ctn">

    <div class="spinner"></div> 
  </div>
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
          <a class="nav-link semConteudo" id="link" href="#">Conceitos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Quiz
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{url('/area')}}">Realizar Quizzes</a>
            <a class="nav-link" href="{{url('/newQuiz')}}">Sugerir Quiz <span class="sr-only">(current)</span></a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Postagem
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="nav-link" href="{{url('/postCreate')}}">Criar Postagem</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="{{url('/areaChallenge')}}">Desafios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="link" href="{{url('/ranking')}}">Ranking</a>
        </li>
        
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
         Trabalho Gerência de Projetos - 2018.2

       </div>

       <div class="col-md-6">
         Universidade Federal de Itajubá
       </div>
     </div>
   </div>
 </section>

 <!-- Optional JavaScript -->


 <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="../js/custom.js"></script> 

</body>
</html>