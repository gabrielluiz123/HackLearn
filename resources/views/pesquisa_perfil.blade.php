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


            			<div class="col-md-3">
            				<div class="card-perfil">
            					<div class="card-perfil-avatar">
				              		<div class="avatar">
				                		<img src="./imgs/avatar.jpg" width="180px">
				              		</div>
					              	<div class="card-perfil-nome">
					                	Nome do usuário
					              	</div>
					              	<div class="card-perfil-titulos">	
					              		Título: Awesome Hacker<br>
					              		Nível: 37
					              	</div>
					              	<a href="perfil"> Acessar Perfil</a>
				            	</div>
            				</div>
            			</div>

            			<div class="col-md-3">
            				<div class="card-perfil">
            					<div class="card-perfil-avatar">
				              		<div class="avatar">
				                		<img src="./imgs/avatar.jpg" width="180px">
				              		</div>
					              	<div class="card-perfil-nome">
					                	Nome do usuário
					              	</div>
					              	<div class="card-perfil-titulos">	
					              		Título: Noob Hacker<br>
					              		Nível: 9
					              	</div>
					              	<a href="perfil"> Acessar Perfil</a>
				            	</div>
            				</div>
            			</div>
            			
            		</div>
            	</div>
            </div>
          </div>
        </div> 
    </div>
</div>


@endsection

