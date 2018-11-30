@extends('templates/logado')

@section('content')



<div class="container principal">
	<div class="row">
		<div class="col-md-12">
			<div class="container mask">
				<div class="quiz-title">
					VALIDANDO DESAFIO
				</div>
			</div>
			<div class="container mask">
				<div class="quiz-title">
				@foreach($desafio as $d)
					{{$d->name}}
				@endforeach
				</div>
				<div class="quiz-info">
					<div class="quiz-sub-title text-center">
						<div class="row">
							<div class="col-md-8">Solução do usuário: {{$user_nome}}</div>
						</div>

					</div>
				</div>
				<hr>
				<div class="quiz-content">
					@foreach($desafio as $d)
					<div class="quiz-sub-title text-left">
						<div class="col-md-4">Descrição: {{$d->description}}</div> 
						</div>
						
						<div class="quiz-sub-title text-left">
						<div class="col-md-4">Enunciado: {{$d->content}}</div> 
						</div>

						
					@endforeach 
					<hr>
					<div class="quiz-sub-title text-left">
						<div class="col-md-4">Linguagem utilizada: {{$language}}</div> 
						<br>
						</div>
					@foreach($desafio_answer as $da)
						<div class="quiz-sub-title text-left">
						<div class="col-md-4">Solução:</div> 
						</div>  {{$da->answer}}
					@endforeach
					<hr>
					<div class="row">
						<!--Dropdown dificuldade -->


						</div>
						</form>
						<div class="col-md-2">
							<div class="quiz-submit"> 
							@foreach($desafio_answer as $da)
								<a href="{{url('/declineDesafio', $da->id)}}"><input class="btn btn-danger" type="button" value="Recusar Desafio"></a>
								<a href="{{url('acceptDesafio', $da->id)}}"><input class="btn btn-success" type="button" value="Validar Desafio"></a>
							@endforeach
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div> 



@endsection