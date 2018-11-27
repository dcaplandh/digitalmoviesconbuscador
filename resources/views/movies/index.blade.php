@extends('layouts.main')

@section('titulo','Películas')

@section('listas')

        <movie>
            <p>
            Peliculas Recientes
            </p>

            <div class="row">
            <div class="row__inner">

              @foreach ($recientes as $movie)
                <div class="tile">
                <div class="tile__media">
                    <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-{{ rand(1,19)}}.jpg" alt=""  />
                </div>
                <div class="tile__details">
                    <div class="tile__title">
                    {{ $movie->nombreParaListar()}}
                    </div>
                </div>
                </div>
              @endforeach




            </div>
            </div>
        </movie>

        <movie>
                <p>
                Peliculas Sugeridas
                </p>

                <div class="row">
                <div class="row__inner">


                  @foreach ($sugeridas as $movie)
                    <div class="tile">
                    <div class="tile__media">
                        <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-{{ rand(1,19)}}.jpg" alt=""  />
                    </div>
                    <div class="tile__details">
                        <div class="tile__title">
                        {{ $movie->nombreParaListar()}}
                        </div>
                    </div>
                    </div>
                  @endforeach



                </div>
                </div>
            </movie>

            <movie>
                    <p>
                    Peliculas Más Premiadas
                    </p>

                    <div class="row">
                    <div class="row__inner">



                      @foreach ($maspremiadas as $movie)
                        <div class="tile">
                        <div class="tile__media">
                            <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-{{ rand(1,19)}}.jpg" alt=""  />
                            <?php //echo rand(1,19); ?>
                        </div>
                        <div class="tile__details">
                            <div class="tile__title">
                            {{ $movie->nombreParaListar()}}
                            </div>
                        </div>
                        </div>
                      @endforeach

                    </div>
                    </div>
                </movie>
@endsection
