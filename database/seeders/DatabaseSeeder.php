<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\CapitalSeeder;
use Database\Seeders\ProvinceSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\EthnicGroupSeeder;
use Database\Seeders\DistrictSeeder;
use Database\Seeders\CommuneSeeder;
use Database\Seeders\EthnicGroupProvinceSeeder;
use Database\Seeders\LanguageProvinceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ProvinceSeeder::class,
            MunicipalitySeeder::class,
            CommuneSeeder::class,
            DistrictSeeder::class,
            CapitalSeeder::class,
            LanguageSeeder::class,
            EthnicGroupSeeder::class,
            EthnicGroupProvinceSeeder::class,
            LanguageProvinceSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
