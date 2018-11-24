@extends('templates/logado')

@section('content')

<div class="container principal">
    <div class="row">
      <div class="col-md-12">
        <div class="container mask">
            <div class="mask-title">
                RANKING
            </div>
            <div class="mask-content-top10">
            <?php 
                $i=1;
                ?>
            @foreach($ranking as $r)
                <p>{{$i++}} - {{$r->name}} - EXP:{{$r->exp}}</p>  
            @endforeach
            <hr>
            <p>

            @foreach($ranking as $r)
                @if($id_user == $r->id_user)
                    <p>Sua posição: {{$posicao}} - {{$r->name}} - EXP:{{$r->exp}}</p>  
                @endif
            @endforeach

            </div>
        </div> 
      </div>
    </div>

@endsection