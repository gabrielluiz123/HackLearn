@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="container mask">
				<div class="quiz-title">
					{{$nome_quiz}}
				</div>
				
				<div class="quiz-content">
					<form method="POST" action="{{url('storeAnswer')}}">

						<div class="form-group">
							<label for="exampleFormControlTextarea1">Enunciado</label>
							<textarea class="form-control" id="questao" name="questao" rows="3" placeholder="Qual o enunciado do Quiz?"></textarea>
						</div>
						<hr>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 1</label>
							<input type="text" class="form-control" id="q1" name="q1" placeholder="Escreva a primeira alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 2</label>
							<input type="text" class="form-control" id="q2" name="q2" placeholder="Escreva a segunda alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 3</label>
							<input type="text" class="form-control" id="q3" name="q3" placeholder="Escreva a terceira alternativa">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput2">Alternativa 4</label>
							<input type="text" class="form-control" id="q4" name="q4" placeholder="Escreva a quarta alternativa">
						</div>
						<hr>
						<div class="row text-center">
							<!--Dropdown dificuldade -->
							<div class="col-md-4">
								<div class="dropdown show">
								<label for="exampleFormControlSelect1">Resposta correta:</label>
									 <select class="dropdown show" name="certa" id="certa">
                        					<option value="1"> 1 </option>
                        					<option value="2"> 2 </option>
                        					<option value="3"> 3 </option>
                        					<option value="4"> 4 </option>

                    				 </select>
								</div>
							</div>
							<div class="col-md-4">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="id_quiz" id="id_quiz" value="{{$id_quiz}}">
								<div class="quiz-submit"> 
									<input class="btn btn-site" type="submit" value="Proxima questao">
								</div>
								

							</div>
							<div class="col-md-4">
								<div class="quiz-submit"> 
									<a href="{{url('/')}}"><input class="btn btn-site" type="button" value="Finalizar Quiz"></a>
								</div>

							</div>
							</form>
							</div>

						</div>
					
				</div>
				<div class="col-md-1"></div>

			</div>
		</div>
	</div>
</div> 



@endsection