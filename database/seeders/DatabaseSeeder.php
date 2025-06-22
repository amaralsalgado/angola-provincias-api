<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CapitalSeeder;
use Database\Seeders\ProvinciaSeeder;
use Database\Seeders\LinguaSeeder;
use Database\Seeders\EtniaSeeder;
use Database\Seeders\DistritoSeeder;
use Database\Seeders\ComunaSeeder;
use Database\Seeders\EtniaProvinciaSeeder;
use Database\Seeders\LinguaProvinciaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ProvinciaSeeder::class,
            MunicipioSeeder::class,
            ComunaSeeder::class,
            DistritoSeeder::class,
            CapitalSeeder::class,
            LinguaSeeder::class,
            EtniaSeeder::class,
            EtniaProvinciaSeeder::class,
            LinguaProvinciaSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
