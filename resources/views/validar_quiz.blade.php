@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-12">
			<div class="container mask">
				<div class="quiz-title">
					VALIDANDO QUIZ
				</div>
			</div>
			<div class="container mask">
				<div class="quiz-title">
					NOME DO QUIZ
				</div>
				<div class="quiz-info">
					<div class="quiz-sub-title text-center">
						<div class="row">
							<div class="col-md-4">Área sugerida:</div>
							<div class="col-md-8">Usuário responsável:</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="quiz-content">
					Descrição para saber sobre o que é o quiz. Descrição para saber sobre o que é o quiz. Descrição para saber sobre o que é o quiz. Descrição para saber sobre o que é o quiz. Descrição para saber sobre o que é o quiz. Descrição para saber sobre o que é o quiz. 
					<hr>
					Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz.

					<hr>
					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio">Option 1
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio">Option 2
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio">Option 3
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="radio" class="form-check-input" name="optradio">Option 4
						</label>
					</div>
					<hr>
					<div class="row">
						<!--Dropdown dificuldade -->
						<div class="col-md-7">
							

							<div class="dropdown show">
								<a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Definir dificuldade
								</a>

								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="#">1</a>
									<a class="dropdown-item" href="#">2</a>
									<a class="dropdown-item" href="#">3</a>
									<a class="dropdown-item" href="#">4</a>
									<a class="dropdown-item" href="#">5</a>
								</div>
							</div>
						</div>
						<!-- Termina aqui -->

						<div class="col-md-2">
							<div class="quiz-submit"> 
								<input class="btn btn-success" type="button" value="Validar Quiz">
							</div>
						</div>
						<div class="col-md-2">
							<div class="quiz-submit"> 
								<input class="btn btn-danger" type="button" value="Recusar Quiz">
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div> 



@endsection