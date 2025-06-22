<?php

namespace Database\Seeders;

use App\Models\Capital;
use App\Models\Comuna;
use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $capitais = [
            [
                'provincia_id' => 1,
                'nome' => 'Caxito',
                'slug' => 'caxito'
            ],
            [
                'provincia_id' => 2,
                'nome' => 'Benguela',
                'slug' => 'benguela'
            ],
            [
                'provincia_id' => 3,
                'nome' => 'Cuíto',
                'slug' => 'cuito'
            ],
            [
                'provincia_id' => 4,
                'nome' => 'Cabinda',
                'slug' => 'cabinda'
            ],
            [
                'provincia_id' => 5,
                'nome' => 'Menongue',
                'slug' => 'menongue'
            ],
            [
                'provincia_id' => 6,
                'nome' => 'Ndalatando',
                'slug' => 'ndalatando'
            ],
            [
                'provincia_id' => 7,
                'nome' => 'Sumbe',
                'slug' => 'sumbe'
            ],
            [
                'provincia_id' => 8,
                'nome' => 'Ondjiva',
                'slug' => 'ondjiva'
            ],
            [
                'provincia_id' => 9,
                'nome' => 'Huambo',
                'slug' => 'huambo'
            ],
            [
                'provincia_id' => 10,
                'nome' => 'Lubango',
                'slug' => 'lubango'
            ],
            [
                'provincia_id' => 11,
                'nome' => 'Luanda',
                'slug' => 'luanda'
            ],
            [
                'provincia_id' => 12,
                'nome' => 'Dundo',
                'slug' => 'dundo'
            ],
            [
                'provincia_id' => 13,
                'nome' => 'Saurimo',
                'slug' => 'saurimo'
            ],
            [
                'provincia_id' => 14,
                'nome' => 'Malanje',
                'slug' => 'malanje'
            ],
            [
                'provincia_id' => 15,
                'nome' => 'Luena',
                'slug' => 'luena'
            ],
            [
                'provincia_id' => 16,
                'nome' => 'Moçâmedes',
                'slug' => 'mocamedes'
            ],
            [
                'provincia_id' => 17,
                'nome' => 'Uíge',
                'slug' => 'uige'
            ],
            [
                'provincia_id' => 18,
                'nome' => 'Mbanza Congo',
                'slug' => 'mbanza-congo'
            ]
        ];


        foreach ($capitais as $capital) {

            $capitalType = null;
            $capitalId = Municipio::where('slug', $capital['slug'])->first()?->id;

            if ($capitalId) {
                $capitalType = Municipio::class;
            }

            if (!$capitalId) {
                $capitalId = Comuna::where('slug', $capital['slug'])->first()?->id;
                $capitalType = Comuna::class;
            }

            if (!$capitalId) {
                $capitalId = Distrito::where('slug', $capital['slug'])->first()?->id;
                $capitalType = Distrito::class;
            }

            if (!$capitalId) {
                throw new \Exception("Capital ".$capital['nome']." was not found");
            }

            Capital::create([
                'provincia_id' => $capital['provincia_id'],
                'capitalable_id' => $capitalId,
                'capitalable_type' => $capitalType
            ]);
        }
    }
}
