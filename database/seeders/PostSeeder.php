<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il Model "Person" e "Post"
use App\Models\Person;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 11) Dal model "Post" richiamiamo la Factory e tramite il foreach richiamiamo ogni "singolo Post ($p)"
        Post::factory()->count(100)->make()->each(function ($p) {

            // Richiamiamo il model "Person" in ordine casuale e andiamo a prendere il primo elemento casuale
            $person = Person::inRandomOrder()->first();

            // Richiamiamo "$pd" alla funzione inversa nel Model "Post" e associamo una singola "Persona ($person)"
            $p->person()->associate($person);

            // Salviamo il nuovo elemento
            $p->save();
        });
    }
}