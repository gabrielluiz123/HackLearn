<!doctype html>
<html lang="pt-BR" class="no-scroll">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="../css/styleDeslogado.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
	
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<title>Hack Learn - Plataforma de aprendizado em Cybersegurança</title>
</head>
<body class="background-body no-scroll">
	<div class="spinner-ctn">

		<div class="spinner"></div> 
	</div>
	<div class="overlay"></div>

	<div id="particles-js"></div>
	<div class="container">
		<div class="row content-deslogado text-center">
			<div class="col-md-5 wow fadeInLeft" data-wow-delay="0.8s">
				<img src="../imgs/logo_hacklearn.png" class="logo-deslogado">
			</div>
			<div class="col-md-7">

				<h1 class="titulo wow zoomIn" data-wow-delay="0.8s" style="font-family: 'Russo One', sans-serif;">SEJA BEM VINDO AO HACK LEARN!</h1>
				<span id="typed" class="wow zoomIn" data-wow-delay="0.8s"></span>
				<p class="paragrafos wow fadeInUp" data-wow-delay="1.2s" style="font-family: 'Raleway', sans-serif;">Conheça a plataforma gamificada, colaborativa e gratuita mais completa da Web para o aprendizado de <b style="color: #6ACC91;">Segurança Cibernética!</b> Aqui o ensino é realizado através de quizzes e problemas a serem resolvidos, além de várias postagens sobre o tema! Ganhe experiência a cada novo aprendizado e conquiste várias medalhas! Faça também parte dessa comunidade!</p>
				<div class="row">
					<div class="col-md-6 wow jackInTheBox" data-wow-delay="2s">
						<a data-toggle="modal" data-target="#login"><button class="button" style="font-family: 'Russo One', sans-serif;" data-toggle="tooltip" data-placement="bottom" title="Logue com sua conta!">Entrar</button></a>
					</div>
					<div class="col-md-6 wow jackInTheBox" data-wow-delay="2.2s">
						<a data-toggle="modal" data-target="#cadastrar"><button class="button" style="font-family: 'Russo One', sans-serif;" data-toggle="tooltip" data-placement="bottom" title="Registre-se aqui! É super rápido!">Cadastrar</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<p>Realizar Login</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="/auth/login">
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Nome de usuário: </label>
							<input class="form-control" name="email"  type="email" value="{{ old('email') }}" id="email" placeholder=" Entre com nome de usuário">
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Senha: </label>
							<input class="form-control" type="password" id="password" name="password" placeholder=" Entre com a senha">
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-site">Logar</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<p>Cadastrar usuário</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="{{url('register')}}">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="form-group">
									<label for="recipient-name" class="col-form-label">Nome completo: </label>
									<input class="form-control"  type="text" id="nome" required name="nome" placeholder="Entre com seu nome">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="message-text" class="col-form-label">Senha: </label>
											<input class="form-control" type="password" id="senha" required name="senha"  placeholder=" Defina sua senha">
										</div>
									</div>
								</div>
								<hr class="hr-style">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="message-text" class="col-form-label">E-mail: </label>
											<input class="form-control" type="email" id="email" required name="email" placeholder=" Defina sua senha">

										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>

					</div>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="modal-footer text-center">
						<button type="submit" class="btn btn-site">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<script src="../js/wow.min.js"></script>
	<script src="../js/customDeslogado.js"></script>

	<script>
		$('document').ready(function(){
			var typed = new Typed('#typed',{
				strings:[
				'"Não existe segurança na rede." (Kevin Mitnick)', 
				'"Em dois anos, o spam será resolvido." (Bill Gates, 2004)', 
				'"Concentre-se naquilo que você é bom, delegue todo o resto." (Steve Jobs)',
				'"O poder da Web está em sua universalidade. O acesso de todos, independentemente da deficiência, é um aspecto essencial." (Tim Berners-Lee)',
				'"Os governos devem investir em software livre para recuperar sua soberania." (Richard Stallman)',
				'"As pessoas não sabem o que querem, até mostrarmos a elas." (Steve Jobs)', 
				],
				stringsElement: '#typed-strings',
				backSpeed: 22,
				typeSpeed: 35,
				smartBackspace: true,
				startDelay: 1500,
				loop: false,
				loopCount: Infinity,
			});
		});

		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</body>
</html>