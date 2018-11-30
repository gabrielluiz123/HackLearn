@extends('templates/logado')

@section('content')



<div class="container principal">
   <div class="row">
      <div class="col-md-12">
         <div class="container mask">
            <div class="quiz-title">
               Desafios
            </div>
         </div>
      </div>
   </div>
   <div class="row">


   @foreach($desafios as $d)
      <div class="col-md-3">
         <div class="card-box" style="width: 100%;">
            <div class="card-body">
               <h4 class="card-title">{{$d->name}}</h4><hr/>
               <p class="card-text">{{$d->description}} -- EXP: {{$d->exp}}</p>
            </div>
            <div class="quiz-submit"> 
             <?php 
               $i=0;
            ?>
            @foreach($desafios_user as $du)
               @if($du->id_challenge == $d->id)
                  <?php
                  	$i=1;
                  ?>
               @endif
            @endforeach
            @if($i == 0)
               <a href="{{url('desafiosArea', $d->id)}}"><button type="button" class="btn btn-outline-success">Responder</button></a>
            @endif
               
            </div>
            <hr>
            <div class="card-info">
            @if($i == 1)
               Realizado
            @else
               Nao realizado
            @endif
            </div>
         </div>  
      </div>
      @endforeach






      
   </div>
</div> 



@endsection