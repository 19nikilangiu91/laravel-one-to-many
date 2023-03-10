<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // 7) Richiamo il "PersonSeeder" nel DB
        // 8) Richiamo il "PersonDetailSeeder" nel DB
        // 10) Richiamo il "PostSeeder" nel DB

        $this->call([
            PersonSeeder::class,
            PersonDetailSeeder::class,
            PostSeeder::class,
        ]);
    }
}