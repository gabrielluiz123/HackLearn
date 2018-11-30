@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
   @foreach($desafio as $d)
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               {{$d->name}}
            </div>
            <div class="quiz-info">
                  <div class="quiz-sub-title text-center">
                     <div class="row">
                     <div class="col-md-4">Exp: {{$d->exp}}</div>
                     <div class="col-md-4">Usuario criador: Administrador </div>
                  </div>

               </div>
            </div>
            @endforeach
            <hr>

            <div class="quiz-content">  
            @foreach($desafio as $d)
                <div class="quiz-info">
                  <div class="quiz-sub-title text-center">
                     <div class="row">
                     <div class="col-md-4">Enunciado:  {{ $d->content}} </div>
                  </div>

               </div>
            </div>
            
            <hr>
            
            <form method="POST" action="{{url('/submeterDesafio')}}">
            <div class="dropdown show">
                <label for="exampleFormControlSelect1">Linguagem:</label>
                   <select class="dropdown show" name="language" id="language">
                   @foreach($linguagem as $l)
                                  <option value="{{$l->id}}">{{$l->name}}</option>
                               @endforeach    

                             </select>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Resposta:</label>
                  <textarea class="form-control" id="answer" name="answer" rows="3" placeholder="Qual a sua solução para o desafio?"></textarea>
                </div>
            </div>
  
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="challenge" value="{{$d->id}}">
            <div class="quiz-submit"> 
               <button type="submit" class="btn btn-outline-success">Submeter</button>
            </div>
            @endforeach
            </form>
            
         </div>
      </div>
   </div>
</div> 



@endsection