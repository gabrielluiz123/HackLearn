@extends('templates/logado')

@section('content')





<div class="container principal">
    <div class="row">
        <div class="col-md-12">
          <div class="container mask">
            <div class="mask-title">
            	PERFIS ENCONTRADOS
            </div>
            <div class="mask-content">
            	<div class="container">
            		<div class="row">

                    @foreach($perfil as $p)
            			<div class="col-md-3">
            				<div class="card-perfil">
            					<div class="card-perfil-avatar">
				              		<div class="avatar">
				                		<img src="./imgs/avatar.jpg" width="180px">
				              		</div>
					              	<div class="card-perfil-nome">
					                	{{$p->name}}
					              	</div>
					              	<div class="card-perfil-titulos">	
					              		Título: Awesome Hacker<br>
					              		Nível: 37
					              	</div>
					              	<a href="{{url('perfilUs', $p->id)}}"> Acessar Perfil</a>
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

