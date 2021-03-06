@extends('templates/logado')

@section('content')

<div class="container principal">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="container mask">
				<div class="quiz-title">
					REALIZAR NOVA POSTAGEM
				</div>
				
				<div class="row">	
					<div class="col-md-1"></div>
					<div class="col-md-10">
						<div class="quiz-content">
							<form method="POST" action="{{url('/postStore')}}">
								<div class="form-group">
									<p class="paragrafos">A área de computação está em constante mudança e novas tecnologias surgem a cada dia, porém a segurança muitas vezes é negligenciada. Com essas inovações, portanto, torna-se necessário uma maior atenção para sua proteção e o conhecimento da área pode muitas vezes negar oportunidades aos invasores, mitigando possíveis problemas. Contribua sempre que possível!</p>
									<hr>
									<label for="formGroupExampleInput">Título</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Qual o nome da sua postagem?">
								</div>
								<div class="form-group">
									<label for="formGroupExampleInput2">Breve descrição</label>
									<input type="text" class="form-control" id="description" name="description" placeholder="Escreva um resumo da postagem">
								</div>
								<div class="form-group">
									<label for="exampleFormControlTextarea1">Postagem</label>
									<textarea class="form-control" id="post" name="post" rows="3" placeholder="Coloque aqui o conteúdo da postagem"></textarea>
								</div>
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="col-md-12 text-center">
									<div class="quiz-submit"> 
										<input class="btn btn-site" type="submit" value="Realizar postagem">
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
</div> 



@endsection