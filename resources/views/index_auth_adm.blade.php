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
							<a class="nav-link" id="alterar-info-pill" data-toggle="tab" href="#alterar-info" role="tab" aria-controls="contact" aria-selected="false">Alterar Informações</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="validar-quizzes-pill" data-toggle="tab" href="#validar-quizzes" role="tab" aria-controls="contact" aria-selected="false">Validar Quizzes [{{$numero}}]</a>
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
											Quizes: [10/15]<br>
											Cases: [2/4]
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
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq1.png" width="100px">
									<div class="conq-title">Nome Conq1</div>
								</div>
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq2.png" width="100px">
									<div class="conq-title">Nome Conq2</div>
								</div>
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq3.jpg" width="100px">
									<div class="conq-title">Nome Conq3</div>
								</div>
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq4.png" width="100px">
									<div class="conq-title">Nome Conq4</div>
								</div>
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq2.png" width="100px">
									<div class="conq-title">Nome Conq5</div>
								</div>
								<div class="col-md-2 conquista_simbol">
									<img src="./imgs/conq6.png" width="100px">
									<div class="conq-title">Nome Conq6</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane fade" id="postagens" role="tabpanel">
						<div class="card-postagem">
							<div class="row">
								<div class="col-md-2">
									<div class="avatar-postagem">
										<img src="./imgs/mcdonalds.png" width="100px">
									</div>
								</div>
								<div class="col-md-10">
									<div class="card-content">
										<div class="card-nome">
											História da empresa MC Donalds
										</div>
										<hr>
										<div class="card-description">
											A postagem conta a história do Mc Donalds
										</div>
										<div class="card-link">
											<a href="post">
												Ler postagem completa...
											</a>
										</div>
									</div>
								</div>
							</div> 
						</div>
					</div>
					<div class="tab-pane fade" id="alterar-info" role="tabpanel">
						<div class="change-info">
							<div class="row">
								<div class="col-md-12">
									<h3 class="home-page-perfil-text">Alterar Informações</h3>
									<hr class="hr-style-2">
								</div>
							</div>

							<hr class="hr-style-2">
							<form method="POST" action="{{url('updateU')}}">
                    	<div class="row">
                      		<div class="col-md-3"></div>
                     		<div class="col-md-3"></div>
                    	</div>
                    	<hr class="hr-style-2">
                    	<div class="row">
                      		<div class="col-md-3"></div>
                      			<div class="col-md-3">
                        			Nova senha:
                            		<input type="password" required name="password" id="password" class="form-control" placeholder="Nova senha">
                      			</div>
                     		<div class="col-md-3"></div>
                      </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    	<button type="submit" class="btn btn-site">Atualizar</button>
                      </form>

						 <form method="get" action="{{url('deleteUser')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-site">Deletar conta</button>
                      </form>
					</div>
					</div>
					<div class="tab-pane fade" id="validar-quizzes" role="tabpanel">
						<div class="container">
							<div class="row">
							

								<!--Quiz começa aqui -->
								<div class="col-md-3">
								
									<div class="quiz-card">
									@foreach($quiz as $q)
										<div class="card-box" style="width: 100%;">
											<div class="card-body">
												<a href="posts/basicHeader.html"><h4 class="card-title">{{$q->name}} </h4></a><hr/>
												<p class="card-text">{{$q->description}}</p>
											</div>
											<div class="quiz-submit"> 
												<a href="{{url('/validateQuiz', $q->id)}}"><button type="button" class="btn btn-outline-success">Analisar</button></a>
											</div>
										</div>  
										@endforeach
									</div>
									
								</div> 
								<!--Termina aqui -->


							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div> 



	@endsection