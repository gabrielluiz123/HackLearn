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
            {{$i=1}}
            @foreach($quiz_answer as $qa)
            <div class="quiz-content">
            <br><br>
               Questão {{$i++}}: {{$qa->question}}

            <hr>
            <form method="POST" action="{{url('/submeterQuiz')}}">
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="1" name="{{$i}}">Opção 1: {{$qa->ans_1}}
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="2" name="{{$i}}">Opção 2: {{$qa->ans_2}}
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="3" name="{{$i}}">Opção 3: {{$qa->ans_3}}
              </label>
            </div>
            <div class="form-check">
              <label class="form-check-label">
                <input type="radio" class="form-check-input" value="4" name="{{$i}}">Opção 4: {{$qa->ans_4}}
              </label>
            </div>
            </div>
            @endforeach
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id_quiz" value="{{$idQ}}">
            <div class="quiz-submit"> 
               <button type="submit" class="btn btn-outline-success">Submeter</button>
            </div>
            </form>
            
         </div>
      </div>
   </div>
</div> 



@endsection