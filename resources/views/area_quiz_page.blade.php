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
      @foreach($fields as $f)
      <div class="col-md-3">
      
         <div class="card-box" style="width: 100%;">
         <form method="POST" action="{{url('/quizzes')}}">
                 
            <div class="card-body">
               <h4 class="card-title">{{$f->name}}</h4><hr/>
               <p class="card-text">{{$f->description}}</p>
            </div>

            <div class="row"> 
               <div class="col-md-12 text-center"> 
                  <div class="dropdown show">
                      <label for="exampleFormControlSelect1">Dificuldade </label>
                      <br>
                        <select class="dropdown show" name="dificuldade" id="dificuldade">
                            @foreach($difficulty as $d)
                              <option value="{{$d->id}}">{{$d->description}}</option>
                            @endforeach      
                        </select>        
                  </div>
               </div>
            </div>  
            
            <br>
            <div class="quiz-submit"> 
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="field" id="field" value="{{$f->id}}">
             <button type="submit" class="btn btn-site">Consultar</button>
            </div>


            
            </form>
         </div>
         
      </div>  
      @endforeach
   </div>







</div>
</div> 



@endsection