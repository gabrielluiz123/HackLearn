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
      
         <div class="card-box" style="width: 100%;">
         @foreach($fields as $f)
            <div class="card-body">
               <a href="posts/basicHeader.html"><h4 class="card-title">{{$f->name}}</h4></a><hr/>
               <p class="card-text">{{$f->description}}</p>
            </div>
            <input type="hidden" name="fields" value="{{$f->id}}">
            <div class="row"> 
               <div class="col-md-6"> 
                  <div class="form-group">
                     <label for="exampleFormControlSelect1">Dificuldade</label>
                     <select class="form-control" name="difficulty" id="exampleFormControlSelect1">
                     @foreach($difficulty as $d)
                        <option value="{{$d->id}}">{{$d->description}}</option>
                     @endforeach
                     </select>
                  </div>
               </div>
            </div>  
            

            <div class="quiz-submit"> 
               <a href="{{url('/quizzes', $f->id)}}"><button type="button" class="btn btn-outline-success">Encontrar Quizzes</button></a>
            </div>


            @endforeach
         </div>
         
      </div>  
      
      </form>
   </div>







</div>
</div> 



@endsection