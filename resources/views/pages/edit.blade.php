@extends('layout.app')
@section('page-title', 'Add a new animal')
@section('main-content')

    <section class="container text-center mt-5">
        <div class="row justify-content-center">

            <h1 class="mb-3 fw-bolder text-center">
                Aggiungi un nuovo animale
            </h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <form action="{{ route('pages.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input class="form-control form-control-lg" type="text" placeholder="nome animale"
                            aria-label="nome animale" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="specie" class="form-label">Specie</label>
                        <input class="form-control form-control-lg" type="text" id="specie" name="specie" placeholder="Specie dell'animale">
                    </div>
                    <div class="mb-3">
                        <label for="eta" class="form-label">Età</label>
                        <input class="form-control form-control-lg" type="number" id="eta" name="eta" placeholder="Età dell'animale">
                    </div>
                    <div class="mb-3">
                        <label for="peso" class="form-label">Peso</label>
                        <input class="form-control form-control-lg" type="number" step="0.01" id="peso" name="peso" placeholder="Peso dell'animale in kg">
                    </div>
                    <div class="mb-3">
                        <label for="sesso" class="form-label">Sesso</label>
                        <select class="form-control form-control-lg" id="sesso" name="sesso">
                            <option value="1">Maschio</option>
                            <option value="0">Femmina</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="url_img" class="form-label">URL Immagine</label>
                    <input class="form-control form-control-lg" type="text" id="url_img" name="url_img" placeholder="URL dell'immagine">
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label">Note</label>
                        <textarea class="form-control form-control-lg" id="note" name="note" placeholder="Note sull'animale" rows="5"></textarea>
                    </div>
                    <div class="buttons d-flex justify-content-around">
                    <button type="submit" class="btn btn-primary btn-lg">Aggiungi Animale</button>
                    <button type="reset" value="Reset fields" class="btn btn-warning btn-lg">Reset</button>
                </div>
            </div>


            </form>
        </div>
    </section>

@endsection