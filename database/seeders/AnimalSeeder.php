<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<50; $i++){
            $animal = new Animal();
            $animal->nome = $faker->name();
            $animal->specie = $faker->name();
            $animal->eta = $faker->numberBetween(1, 10);
            $animal->peso = $faker->randomFloat(2, 1, 10);
            $animal->sesso = $faker->numberBetween(1, 2);
            $animal->url_img = $faker->imageUrl(500, 300, 'animals', true);
            $animal->note = $faker->realText(350);
            $animal->save();
        }
    //per n volte
        //prendo il modello
        //lo popolo
        //lo salvo
    }
}
