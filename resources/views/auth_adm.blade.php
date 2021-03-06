@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-12">
			<div class="container mask">
				<div class="topo-perfil">
					<div class="avatar">
						<img src="../imgs/avatar.jpg" width="180px">
					</div>
					<div class="nome-perfil">
						[ADM] {{$nome}}
					</div>

				</div>

				<div class="pills-perfil">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-page-pill" data-toggle="tab" href="#home-page" role="tab" aria-controls="home" aria-selected="true">Home-page</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="postagens-pill" data-toggle="tab" href="#postagens" role="tab" aria-controls="profile" aria-selected="false">Postagens</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="alterar-info-pill" data-toggle="tab" href="#alterar-info" role="tab" aria-controls="contact" aria-selected="false">Configurações</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="validar-quizzes-pill" data-toggle="tab" href="#validar-quizzes" role="tab" aria-controls="contact" aria-selected="false">Quizzes[{{$nChallengeP}}] & Desafios[{{$nQuizP}}]</a>
						</li>
					</ul>
				</div>

				<div class="tab-content" id="myTabContent">

					<div class="tab-pane fade show active" id="home-page" role="tabpanel">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-7">
										<div class="home-page-perfil-text-nivel">
											Título: {{$title}}
										</div>
									</div>
									<div class="col-md-5">
										<div class="home-page-perfil-text-exp">
											Experiência: {{$attributes_exp}}<br>
											Quizes: [{{$nQuizuser}}/{{$nQuiz}}]<br>
											Cases: [{{$nChallengeF}}/{{$nChallenge}}]
										</div>	
									</div>
								</div>
							</div>	
						</div>
						<hr class="hr-style">
						<div class="row">
							<div class="col-md-12">
								<div class="home-page-perfil-text">
									Conquistas alcançadas	
								</div>
							</div>	
						</div>
						<div class="container">
							<div class="row">
								@if($quiz_hacker > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq1.png" width="100px">
									<div class="conq-title">Hacker quiz</div>
								</div>
								@endif
								@if($quiz_persistente > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq2.png" width="100px">
									<div class="conq-title">Hacker persistente</div>
								</div>
								@endif
								@if($quiz_hacker_master > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq3.jpg" width="100px">
									<div class="conq-title">Hecker master</div>
								</div>
								@endif
								@if($quiz_insistente > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq4.png" width="100px">
									<div class="conq-title">Hacker insistente</div>
								</div>
								@endif
								@if($quiz_hacker_god > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq2.png" width="100px">
									<div class="conq-title">Hacker god</div>
								</div>
								@endif
								@if($quiz_king_easy > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq6.png" width="100px">
									<div class="conq-title">King of easy quiz</div>
								</div>
								@endif
								@if($quiz_king_mediun > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq4.png" width="100px">
									<div class="conq-title">King of mediun quiz</div>
								</div>
								@endif
								@if($quiz_king_hard > 0)
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq3.png" width="100px">
									<div class="conq-title">King of hard quiz</div>
								</div>
								@endif
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="postagens" role="tabpanel">
						<div class="card-postagem">
							<div class="row">
								@foreach($post as $p)
								<div class="col-md-10">
									<div class="card-content">
										<div class="card-nome">
											{{$p->name}}
										</div>
										<hr>
										<div class="card-description">
											{{$p->description}}
										</div>
										<div class="card-link" style="font-size: 14px;">
											<a href="{{url('/post', $p->id)}}">
												Ler postagem completa...
											</a>
										</div>
									</div>
								</div>
								@endforeach
							</div> 
						</div>
					</div>
					<div class="tab-pane fade" id="alterar-info" role="tabpanel">
						<div class="change-info">
							<div class="row">
								<div class="col-md-12">
									<h4 class="quiz-title">Configurações</h4>
								</div>
							</div>
							<hr class="hr-style-2">
							<form method="POST" action="{{url('updateU')}}">
								<div class="row">
									<div class="col-md-3"></div>
									<div class="col-md-6 text-center">
										Nova senha:
										<input type="password" required name="password" id="password" class="form-control" placeholder="Nova senha">
									</div>
									<div class="col-md-3"></div>
								</div>
								<hr class="hr-style-2">
								<div class="row text-center">
									<div class="col-md-6">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<button type="submit" class="btn btn-site">Atualizar</button>
									</div>
									<div class="col-md-6">
										<form method="get" action="{{url('deleteUser')}}">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<button type="submit" class="btn btn-site">Deletar conta</button>
										</form>
									</div>

								</div>

							</form>



						</div>
					</div>
					<div class="tab-pane fade" id="validar-quizzes" role="tabpanel">
						<div class="container">
							<br>
							<div class="row">
								<div class="col-md-6 text-center">
									<a href="{{url('/newQuiz')}}"><button type="button" class="btn btn-site">Adicionar novo quiz</button> </a>
								</div>
								<div class="col-md-6 text-center">
									<a href="{{url('/newChallenge')}}"><button type="button" class="btn btn-site">Adicionar novo desafio</button> </a>
								</div>
							</div>
							<hr>
							<div class="home-page-perfil-text-nivel-2">
								Quizzes:
							</div>
							<div class="row">


								<!--Quiz começa aqui -->

								@foreach($quiz as $q)
								<div class="col-md-3">

									<div class="quiz-card">

										<div class="card-box" style="width: 100%;">
											<div class="card-body">
												<h4 class="card-title">{{$q->name}} </h4><hr/>
												<p class="card-text">{{$q->description}}</p>
											</div>
											<div class="quiz-submit"> 
												<a href="{{url('/validateQuiz', $q->id)}}"><button type="button" class="btn btn-site">Analisar</button></a>
											</div>
										</div>  
										
									</div>
									
								</div> 
								@endforeach
								<!--Termina aqui -->
							</div>
							<hr class="hr-style-2">
							<div class="home-page-perfil-text-nivel-2">

								Desafios:


							</div>
							<div class="row">
								@foreach($challenge_answer as $c)
								<div class="col-md-3">

									<div class="quiz-card">

										<div class="card-box" style="width: 100%;">
											<div class="card-body">
												<h4 class="card-title">{{$c->name}} </h4><hr/>
												<p class="card-text">{{$c->description}}</p>
											</div>
											<div class="quiz-submit"> 
												<a href="{{url('/validateDesafio', $c->id)}}"><button type="button" class="btn btn-site">Analisar</button></a>
											</div>
										</div>  
										
									</div>
									
								</div> 
								@endforeach

							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div> 



	@endsection