@extends('layout.app')
@section('page-title', 'Scheda animale')
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
        <div class="card-body align-items-center m-2">
            <a class="btn btn-info" href="{{ route('pages.home') }}" class="card-link d-flex justify-content-center">Gli altri animali</a>
            <a class="btn btn-warning"href="{{route('pages.edit',['animal'=>$animal->id])}}">Modifica</a>
            <div class="d-flex justify-content-center m-2">
                <div class="mb-3">
                    <form action="{{route('pages.destroy',['animal'=>$animal->id])}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button></form>
                </div>
        </div></div>
    </div>
</section>

@endsection
