@extends('layouts.main')

@section('titulo','Series')

@section('listas')

        <movie>
            <p>
            Series Recientes
            </p>

            <div class="row">
            <div class="row__inner">

              @foreach ($recientes as $serie)
                <div class="tile">
                <div class="tile__media">
                    <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-{{ rand(1,19)}}.jpg" alt=""  />
                </div>
                <div class="tile__details">
                    <div class="tile__title">
                    {{ $serie->title}}
                    </div>
                </div>
                </div>
              @endforeach




            </div>
            </div>
        </movie>

        <movie>
                <p>
                Series Sugeridas
                </p>

                <div class="row">
                <div class="row__inner">


                  @foreach ($sugeridas as $serie)
                    <div class="tile">
                    <div class="tile__media">
                        <img class="tile__img" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/70390/show-{{ rand(1,19)}}.jpg" alt=""  />
                    </div>
                    <div class="tile__details">
                        <div class="tile__title">
                        {{ $serie->title}}
                        </div>
                    </div>
                    </div>
                  @endforeach



                </div>
                </div>
            </movie>

@endsection
