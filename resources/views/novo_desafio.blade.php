@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-12">
			<div class="container mask">
				<div class="quiz-title">
					SUGERINDO NOVO DESAFIO
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="quiz-content">
							<form method="POST" action=" ">
								<div class="form-group">
									<label for="formGroupExampleInput">Título</label>
									<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Como se chama o desafio?">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Breve descrição</label>
									<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Dê uma breve explicação">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Experiencia</label>
									<input type="text" class="form-control" id="exp" name="exp" placeholder="Experiencia adquirida pelo desafio">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Enunciado</label>
									<textarea class="form-control" id="questao" name="questao" rows="3" placeholder="Qual o enunciado do desafio?"></textarea>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12 text-center">
										<div class="quiz-submit"> 
											<input class="btn btn-site" type="submit" value="Gerar Desafio">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			</div>
		</div>
	</div>
</div> 



@endsection