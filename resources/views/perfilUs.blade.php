@extends('templates/logado')

@section('content')



<div class="container principal">
    <div class="row">
        <div class="col-md-12">
          	<div class="container mask">
            	<div class="topo-perfil">
              		<div class="avatar">
                		<img src="./imgs/avatar.jpg" width="180px">
              		</div>
              	<div class="nome-perfil">
              	@foreach($perfil as $p)
                	{{$p->name}}
                @endforeach
              	</div>

            	</div>

            	<div class="pills-perfil">
              		<ul class="nav nav-tabs" id="myTab" role="tablist">
                		<li class="nav-item">
                  			<a class="nav-link active" id="home-page-pill" data-toggle="tab" href="#home-page" role="tab" aria-controls="home" aria-selected="true">Home-page</a>
               			</li>
               			 <li class="nav-item">
                  			<a class="nav-link" id="postagens-pill" data-toggle="tab" href="#postagens" role="tab" aria-controls="profile" aria-selected="false">Postagens</a>
                		</li>
              		</ul>
              	</div>

              	<div class="tab-content" id="myTabContent">

                	<div class="tab-pane fade show active" id="home-page" role="tabpanel">
                  		<div class="row">
                  			<div class="col-md-12">
                  				<div class="row">
	                  				<div class="col-md-7">
	                  					<div class="home-page-perfil-text-nivel">
	                  						Título: {{$title}}
	                  					</div>
		                  			</div>
		                  			<div class="col-md-5">
		                  				<div class="home-page-perfil-text-exp">
				                  			Experiência: {{$attributes_exp}}<br>
				                  			Quizes: [{{$nQuizuser}}/{{$nQuiz}}]<br>
				                  			Cases: [2/4]
				                 		</div>	
		                  			</div>
	                  			</div>
	                  		</div>	
                  		</div>
                  	<hr class="hr-style">
                  	<div class="row">
                  		<div class="col-md-12">
                  			<div class="home-page-perfil-text">
                  				Conquistas alcançadas	
                  			</div>
                  		</div>	
                  	</div>
                  	<div class="container">
                  		<div class="row">
                      @if($quiz_hacker > 0)
	                  		<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq1.png" width="100px">
	                  	    	<div class="conq-title">Hacker quiz</div>
	                  		</div>
                      @endif
                      @if($quiz_persistente > 0)
		                  	<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq2.png" width="100px">
	                  	    	<div class="conq-title">Hacker persistente</div>
	                  		</div>
                      @endif
                      @if($quiz_hacker_master > 0)
	                  		<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq3.jpg" width="100px">
	                  	    	<div class="conq-title">Hecker master</div>
	                  		</div>
                      @endif
                      @if($quiz_insistente > 0)
	                  		<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq4.png" width="100px">
	                  	    	<div class="conq-title">Hacker insistente</div>
	                  		</div>
                      @endif
                      @if($quiz_hacker_god > 0)
	                  		<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq2.png" width="100px">
	                  	    	<div class="conq-title">Hacker god</div>
	                  		</div>
                      @endif
                      @if($quiz_king_easy > 0)
	                  		<div class="col-md-2 conquista_simbol">
	                  	   		<img src="./imgs/conq6.png" width="100px">
	                  	    	<div class="conq-title">King of easy quiz</div>
	                  		</div>
                      @endif
                      @if($quiz_king_mediun > 0)
                        <div class="col-md-2 conquista_simbol">
                            <img src="./imgs/conq4.png" width="100px">
                            <div class="conq-title">King of mediun quiz</div>
                        </div>
                      @endif
                      @if($quiz_king_hard > 0)
                        <div class="col-md-2 conquista_simbol">
                            <img src="./imgs/conq3.png" width="100px">
                            <div class="conq-title">King of hard quiz</div>
                        </div>
                      @endif
	                	</div>
                  	</div>
                </div>

                <div class="tab-pane fade" id="postagens" role="tabpanel">
                  	<div class="card-postagem">
                    	<div class="row">
                      		<div class="col-md-2">
                        		<div class="avatar-postagem">
                          			<img src="./imgs/mcdonalds.png" width="100px">
                        		</div>
                     		</div>
	                     	<div class="col-md-10">
	                        	<div class="card-content">
	                          		<div class="card-nome">
	                            		História da empresa MC Donalds
	                          		</div>
	                          		<hr>
	                          		<div class="card-description">
	                            		A postagem conta a história do Mc Donalds
	                          		</div>
	                          		<div class="card-link">
	                            		<a href="post">
	                           			Ler postagem completa...
	                       				</a>
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