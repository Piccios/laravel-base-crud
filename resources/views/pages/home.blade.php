@extends('layout.app')
@section('page-title', 'Homepage')

    @section('main-content')

    <section class="card-container">
        <div class="container text-center mb-5 mt-2 fw-bold">
            <h1>I nostri amici animali</h1>
        </div>
        <section class="cards row">
            @foreach ($animals as $animal)
            <article class="col animal-item mb-3">
                <div class="card text-center">
                    <img src="{{$animal->url_img}}" class="card-img-top" alt="animalIMG">

                    <div class="card-body">
                        <h3 class="card-title">Specie: {{ $animal->specie }}</h3>
                        <h3 class="card-title">Nome: {{ $animal->nome }}</h3>
                        <p class="card-text">
                            {{ $animal->info }}
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Età: {{ $animal->eta}} anni</li>
                        <li class="list-group-item">Peso: {{ $animal->peso}} kg</li>
                        <li class="list-group-item">Sesso:
                            @if ($animal->sesso == 1)
                                Maschio
                            @elseif ($animal->sesso == 2)
                                Femmina
                            @else
                                Non specificato
                            @endif</li>
                    </ul>
                    <div class="card-body">
                        <a href="{{route('pages.show',['animal'=>$animal->id])}}">La mia scheda</a>
                    </div>
                </div>
            </article>

            @endforeach

        </section>

    </section>

    @endsection
