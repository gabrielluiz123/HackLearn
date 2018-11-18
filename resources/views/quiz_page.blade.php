@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               QUIZZES - {{$field}} - {{$dificuldade}}
            </div>
         </div>
      </div>
   </div>
   <div class="row">


   @foreach($quiz as $q)
      <div class="col-md-3">
         <div class="card-box" style="width: 100%;">
            <div class="card-body">
               <h4 class="card-title">{{$q->name}}</h4><hr/>
               <p class="card-text">{{$q->description}} -- EXP: {{$q->exp}}</p>
            </div>
            <div class="quiz-submit"> 
               <a href="{{url('quizzesArea', $q->id)}}"><button type="button" class="btn btn-outline-success">Responder</button></a>
            </div>
            <hr>
            <div class="card-info">
               Realizado/Não realizado
            </div>
         </div>  
      </div>
      @endforeach






      
   </div>
</div> 



@endsection