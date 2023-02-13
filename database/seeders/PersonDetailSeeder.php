<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il Model "Person" e "PersonDetail"
use App\Models\Person;
use App\Models\PersonDetail;

class PersonDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 9) Richiamo tutte le "Person" e tramite il foreach richiamiamo ogni singola "Persona ($p)"
        Person::all()->each(function ($p) {

            // Generiamo un "PersonDetail" dalla "PersonFactory"
            $pd = PersonDetail::factory()->make();

            // Richiamiamo "$pd" alla funzione inversa nel Model "PersonDetail" e associamo una singola "Persona ($p)"
            $pd->person()->associate($p);

            // Salviamo il nuovo elemento
            $pd->save();
        });
    }
}