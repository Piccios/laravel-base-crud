<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class AdminAnimalController extends Controller
{
    private $validationRules = [
        'nome' => 'required|max:50|min:3',
        'specie' => 'required|max:50|min:3',
        'eta' => 'required|integer',
        'peso' => 'required|decimal:0,1000',
        'sesso' => 'required|nullable',
        'url_img' => 'required|URL',
        'note' => 'max:1000|nullable',
    ];
    private $validationMessages = [
            'nome.required'=>'Devi inserire un nome',
            'specie.required'=>'La specie richiede almeno 3 caratteri',
            'eta.required'=>'Inserisci un numero valido',
            'peso.decimal'=>'Inserisci un numero decimale',
            'peso.required'=>'Inserisci un numero decimale',
            'sesso.required'=>'Specifica il sesso dell\' animale',
            'url_img.required'=>'Inserisci un\' URL valida'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('pages.home', compact('animals'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        // $animal = Animal::findOrFail($animal->id);
        return view('pages.show', compact('animal'));

    }




        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $data = $request->validate($this->validationRules, $this->validationMessages);




        $animal = new Animal($data);
        // $animal = new Animal($data);
        // $animal->nome = $data['nome'];
        // $animal->specie = $data['specie'];
        // $animal->eta = $data['eta'];
        // $animal->peso = $data['peso'];
        // $animal->sesso = $data['sesso'];
        // $animal->url_img = $data['url_img'];
        // $animal->note = $data['note'];
        $animal->save();
        return redirect()->route('pages.show', ['animal' => $animal->id]);


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Animal $animal)
    {
        $data = $request->except('_token');

        // $animal = new Animal($data);
        // $animal->nome = $data['nome'];
        // $animal->specie = $data['specie'];
        // $animal->eta = $data['eta'];
        // $animal->peso = $data['peso'];
        // $animal->sesso = $data['sesso'];
        // $animal->url_img = $data['url_img'];
        // $animal->note = $data['note'];
        $animal->update($data);
        return redirect()->route('pages.show', ['animal' => $animal->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->route('pages.home');
    }
}
