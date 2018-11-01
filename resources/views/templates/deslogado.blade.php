<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <a class="nav-link" id="link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="link" href="#">Conceitos</a>
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
  </div>
</nav>
<nav class="navbar navbar-light nav-secundario">
  <span>Você não está logado</span>
  <div class="right">
    <a data-toggle="modal" class="logarOuCadastrar" data-target="#login">Login</a>
    |
    <a data-toggle="modal" class="logarOuCadastrar" data-target="#cadastrar">Cadastrar</a>
  </div>

</nav>


<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realizar Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nome de usuário: </label>
            <input class="form-control"  type="text" placeholder=" Entre com nome de usuário">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Senha: </label>
            <input class="form-control" placeholder=" Entre com a senha">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-site">Logar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Nome completo: </label>
                <input class="form-control"  type="text" placeholder="Entre com seu nome">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Senha: </label>
                    <input class="form-control" placeholder=" Defina sua senha">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Confirme sua Senha: </label>
                    <input class="form-control" placeholder=" Confirme sua senha">
                  </div>
                </div>
              </div>
              <hr class="hr-style">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">E-mail: </label>
                    <input class="form-control" placeholder=" Defina sua senha">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Data de Nascimento: </label>
                     <input type="date" class="form-control" id="" placeholder="Date of Birth">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Sexo: </label>
                      <div class="form-group">
                        <select class="form-control" id="sel1">
                          <option>Masculino</option>
                          <option>Feminino</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-1"></div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-site">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

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