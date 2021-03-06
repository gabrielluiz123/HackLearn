@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="container mask">
				<div class="quiz-title">
					SUGERINDO NOVO QUIZ
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="quiz-content">
							<form method="POST" action="{{url('storeQuiz')}}">
								<div class="form-group">
									<label for="formGroupExampleInput">Título</label>
									<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Como se chama o Quiz?">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Breve descrição</label>
									<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Dê uma breve explicação">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Experiencia</label>
									<input type="text" class="form-control" id="exp" name="exp" placeholder="Experiencia adquirida pelo quiz">
								</div>

								<hr>
								<div class="row">
									<div class="col-md-6 text-center">
										<div class="dropdown show">
											<label for="exampleFormControlSelect1">Área: </label>
											<select class="dropdown show" name="field" id="exampleFormControlSelect1">

												@foreach($fields as $f)
												<option value="{{$f->id}}">{{$f->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
									<!-- Termina aqui -->
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="col-md-6 text-center">
										<div class="quiz-submit"> 
											<input class="btn btn-site" type="submit" value="Sugerir Quiz">
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
		<div class="col-md-1"></div>
	</div>
</div> 



@endsection