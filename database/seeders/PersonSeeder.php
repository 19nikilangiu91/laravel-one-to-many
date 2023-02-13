<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Importo il model Person
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //  6) Vado a creare i dati nel DB nella tabella "People"
    public function run()
    {
        Person::factory()->count(100)->create();
    }
}