@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-12">
			<div class="container mask">
				<div class="quiz-title">
					SUGERINDO NOVO QUIZ
				</div>
				
				<div class="quiz-content">
					<form>
						<div class="form-group">
							<label for="formGroupExampleInput">Título</label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Como se chama o Quiz?">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Breve descrição</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Dê uma breve explicação">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Enunciado</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Qual o enunciado do Quiz?"></textarea>
						</div>
						<hr>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 1</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escreva a primeira alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 2</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escreva a segunda alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 3</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escreva a terceira alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 4</label>
							<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Escreva a quarta alternativa">
						</div>
						<hr>
						<div class="row">
							<!--Dropdown dificuldade -->
							<div class="col-md-5">
								<div class="dropdown show">
									<a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Definir resposta correta
									</a>

									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">1</a>
										<a class="dropdown-item" href="#">2</a>
										<a class="dropdown-item" href="#">3</a>
										<a class="dropdown-item" href="#">4</a>
									</div>
								</div>
							</div>
							<!-- Termina aqui -->
							<!--Dropdown áreas -->
							<div class="col-md-5">
								<div class="dropdown show">
									<a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Definir área do Quiz
									</a>

									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
										<a class="dropdown-item" href="#">Assunto 1</a>
										<a class="dropdown-item" href="#">Assunto 2</a>
									</div>
								</div>
							</div>
							<!-- Termina aqui -->

							<div class="col-md-2">
								<div class="quiz-submit"> 
									<input class="btn btn-success" type="button" value="Sugerir Quiz">
								</div>
							</div>

						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div> 



@endsection