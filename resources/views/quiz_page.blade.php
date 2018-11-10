@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               QUIZZES
            </div>
         </div>
      </div>
   </div>
   <div class="row">



      <div class="col-md-3">
         <div class="card-box" style="width: 100%;">
            <div class="card-body">
               <a href="posts/basicHeader.html"><h4 class="card-title">TITULO 1 </h4></a><hr/>
               <p class="card-text">Aqui vai um breve resumo de cada quiz para o usuário saber o que será mencionado.</p>
            </div>
            <div class="quiz-submit"> 
               <a href="quiz_solution"><button type="button" class="btn btn-outline-success">Responder</button></a>
            </div>
            <hr>
            <div class="card-info">
               Realizado/Não realizado
            </div>
         </div>  
      </div>






      
   </div>
</div> 



@endsection