<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class AdminAnimalController extends Controller
{
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

        dd($request->all());
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
