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
				@foreach($quiz as $q)
					{{$q->name}}
				@endforeach
				</div>
				<div class="quiz-info">
					<div class="quiz-sub-title text-center">
						<div class="row">
							<div class="col-md-4">Área sugerida: {{$quiz_area}}</div>
							<div class="col-md-8">Usuário responsável: {{$quiz_user}}</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="quiz-content">
					@foreach($quiz as $q)
					<div class="quiz-sub-title text-left">
						<div class="col-md-4">Descrição:</div> 
						</div>
						{{$q->description}}
					@endforeach 
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
								<label for="exampleFormControlSelect1">Dificuldade:</label>
									 <select class="dropdown show" name="dificuldade" id="dificuldade">
									 @foreach($difficulty as $d)
                        					<option value="{{$d->id}}">{{$d->description}}</option>
                        			 @endforeach		

                    				 </select>
							</div>
						</div>
						<!-- Termina aqui -->

						<div class="col-md-2">
							<div class="quiz-submit"> 
								<input class="btn btn-success" type="submit" value="Validar Quiz">
							</div>
						</div>
						<div class="col-md-2">
							<div class="quiz-submit"> 
								<a href="{{url('/declineQuiz')}}"><input class="btn btn-danger" type="button" value="Recusar Quiz"></a>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div> 



@endsection