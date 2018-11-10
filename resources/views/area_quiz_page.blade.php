@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               ASSUNTOS DOS QUIZZES
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
            <div class="row"> 
               <div class="col-md-6"> 
                  <div class="form-group">
                     <label for="exampleFormControlSelect1">Dificuldade</label>
                     <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-6"> 
                  <div class="form-group">
                     <label for="exampleFormControlSelect1">Quantidade</label>
                     <select class="form-control" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                     </select>
                  </div>
               </div>
            </div>  
            

            <div class="quiz-submit"> 
               <a href="quiz_page"><button type="button" class="btn btn-outline-success">Encontrar Quizzes</button></a>
            </div>


            
         </div>
      </div>  
   </div>







</div>
</div> 



@endsection