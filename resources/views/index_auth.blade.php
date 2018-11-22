@extends('templates/logado')

@section('content')


<div class="container principal">
    <div class="row">
      <div class="col-md-12">
        <div class="container mask">
            <div class="mask-title">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="./imgs/slider1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="../imgs/slider2.jpg" alt="Second slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
        </div> 
      </div>
    </div>

    <div class="row">
        <div class="col-md-8">
          <div class="container mask">
            <div class="mask-title">
              Postagens Recentes
            </div>

            <div class="mask-content">
              <div class="card-postagem">
                 <div class="row">
                    <div class="col-md-3">
                      <div class="avatar-postagem">
                          <img src="./imgs/mcdonalds.png" width="100px">
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="card-content">
                        <div class="card-nome">
                          História da empresa MC Donalds
                        </div>
                        <hr>
                        <div class="card-description">
                          A postagem conta a história do Mc Donalds
                        </div>
                        <div class="card-link">
                          <a href="post">
                              Ler postagem completa...
                          </a>
                        </div>
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="container mask">
            <div class="mask-title">
              Ranking - TOP 10
            </div>
            <div class="mask-content-top10">
            {{$i=1}}
            @foreach($ranking as $r)

              @if($i==1)
                  - {{$r->name}} - EXP {{$r->exp}} EXP<br>
                  {{$i++}}
              @else
               {{$i++}} - {{$r->name}} - EXP: {{$r->exp}} <br>
              @endif  
            @endforeach
            </div>
            
          </div>
        </div>
    </div>
</div>

@endsection