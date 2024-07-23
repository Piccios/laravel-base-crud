@extends('layout.app')
@section('page-title', 'Homepage')
@section('main-content')

<section class="container d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{ $animal->url_img }}" class="card-img-top" alt="animal img">

        <div class="card-body">
            <h5 class="card-title">Nome: {{ $animal->nome }}</h5>
            <h3 class="card-title">Specie: {{ $animal->specie }}</h3>
            <p class="card-text">Info: {{ $animal->note }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Eta': {{ $animal->eta }}</li>
            <li class="list-group-item">Peso: {{ $animal->peso }}kg</li>
            <li class="list-group-item">Sesso:
                @if ($animal->sesso == 1)
                    Maschio
                @elseif ($animal->sesso == 2)
                    Femmina
                @else
                    Non specificato
                @endif
            </li>
        </ul>
        <div class="card-body">
            <a href="{{ route('pages.home') }}" class="card-link d-flex justify-content-center">Gli altri animali</a>

        </div>
    </div>
</section>

@endsection
