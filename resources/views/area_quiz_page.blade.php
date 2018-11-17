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

   <form method="POST" action="{{url('/quizzes')}}">
      
      <div class="col-md-3">
      @foreach($fields as $f)
         <div class="card-box" style="width: 100%;">
         <form method="POST" action="{{url('/quizzes')}}">
         
            <div class="card-body">
               <a href="posts/basicHeader.html"><h4 class="card-title">{{$f->name}}</h4></a><hr/>
               <p class="card-text">{{$f->description}}</p>
            </div>
            <br>
            <div class="row"> 
               <div class="col-md-6"> 
                  <div class="dropdown show">
                        <label for="exampleFormControlSelect1">Dificuldade:</label>
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
             <button type="submit" class="btn btn-outline-success">Encontrar Quizzes</button>
            </div>


            
            </form>
         </div>
         @endforeach
      </div>  
      
      </form>
   </div>







</div>
</div> 



@endsection