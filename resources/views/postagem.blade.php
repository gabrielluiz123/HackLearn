@extends('templates/logado')

@section('content')


<div class="container principal">
    <div class="row">
    	<div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="container mask">
          @foreach($post as $p)
            <div class="mask-title">
              {{$p->name}}
              	<div class="info-post">
              	  	Postado em: {{$p->created_at}}<br>
              	  	Autor: <a href="{{url('/perfilUs', $p->id_user)}}">{{$nome_user}}</a>
            	</div>
            </div>
            <div class="mask-content">
              <img src="./imgs/mcdonalds.png" class="img-post" width="180px;">
              	<p class="post-text">{{$p->content}}</p>
            </div>
          </div>
        </div>
        <div class="col-md-1"></div>
        @endforeach
    </div>
  

</div>
@endsection