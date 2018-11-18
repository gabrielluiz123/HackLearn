@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
   @foreach($quiz as $q)
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               {{$q->name}} - {{$Field}}
            </div>
            <div class="quiz-info">
                  <div class="quiz-sub-title text-center">
                     <div class="row">
                     <div class="col-md-4">Usuario criador: {{$userC}} </div>
                     <div class="col-md-4">Dificuldade: {{$dificuldade}}</div>
                     <div class="col-md-4">Exp: {{$q->exp}}</div>
                  </div>

               </div>
            </div>
            @endforeach
            <hr>
            <div class="quiz-content">
               Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz. Enunciado necessário para resolução do quiz.
            
            <hr>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 1
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 2
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 3
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" name="optradio">Option 4
              </label>
            </div>
            </div>
            <div class="quiz-submit"> 
               <button type="button" class="btn btn-outline-success">Submeter</button>
            </div>
            
         </div>
      </div>
   </div>
</div> 



@endsection