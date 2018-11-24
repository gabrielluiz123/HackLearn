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
                      <img class="d-block w-100" src="../imgs/slider1.jpg" alt="First slide">
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
                 @foreach($post as $p)
                    <div class="col-md-12">
                      <div class="card-content">
                        <div class="card-nome text-center">
                          {{$p->name}}
                        </div>
                        <hr>
                        <div class="card-description text-center">
                          {{$p->description}}
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-md-8 text-center">
                          <div class="card-posted-by">Postado por:</div> {{$nome_user}}, em {{$p->created_at}}
                        </div>
                        <div class="col-md-4 text-center card-link">
                          <a href="{{url('/post', $p->id)}}">
                              LER TUDO (+)
                          </a>
                        </div>
                        </div>

                      </div>
                    </div>
                    @endforeach
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
            <?php 
              $i=1;
            ?>
            @foreach($ranking as $r)

              @if($i==1)
                 {{$i++}} - {{$r->name}} - EXP {{$r->exp}} EXP<br>
                  
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