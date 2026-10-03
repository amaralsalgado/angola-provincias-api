<?php

namespace Database\Seeders;

use App\Models\Capital;
use App\Models\Commune;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $capitals = [
            [
                'province_id' => 1,
                'name' => 'Dande',
                'slug' => 'dande'
            ],
            [
                'province_id' => 2,
                'name' => 'Benguela',
                'slug' => 'benguela'
            ],
            [
                'province_id' => 3,
                'name' => 'Cuito',
                'slug' => 'cuito'
            ],
            [
                'province_id' => 4,
                'name' => 'Cabinda',
                'slug' => 'cabinda'
            ],
            [
                'province_id' => 5,
                'name' => 'Menongue',
                'slug' => 'menongue'
            ],
            [
                'province_id' => 6,
                'name' => 'Cazengo',
                'slug' => 'cazengo'
            ],
            [
                'province_id' => 7,
                'name' => 'Sumbe',
                'slug' => 'sumbe'
            ],
            [
                'province_id' => 8,
                'name' => 'Cuanhama',
                'slug' => 'cuanhama'
            ],
            [
                'province_id' => 9,
                'name' => 'Huambo',
                'slug' => 'huambo'
            ],
            [
                'province_id' => 10,
                'name' => 'Lubango',
                'slug' => 'lubango'
            ],
            [
                'province_id' => 11,
                'name' => 'Ingombota',
                'slug' => 'ingombota'
            ],
            [
                'province_id' => 12,
                'name' => 'Dundo',
                'slug' => 'dundo'
            ],
            [
                'province_id' => 13,
                'name' => 'Saurimo', //(antiga) ainda não definida
                'slug' => 'saurimo'
            ],
            [
                'province_id' => 14,
                'name' => 'Malanje',
                'slug' => 'malanje'
            ],
            [
                'province_id' => 15,
                'name' => 'Luena',
                'slug' => 'luena'
            ],
            [
                'province_id' => 16,
                'name' => 'Moçâmedes', //(antiga) ainda não definida
                'slug' => 'mocamedes'
            ],
            [
                'province_id' => 17,
                'name' => 'Uíge',
                'slug' => 'uige'
            ],
            [
                'province_id' => 18,
                'name' => 'Mbanza Kongo',
                'slug' => 'mbanza-kongo'
            ],
            [
                'province_id' => 19,
                'name' => 'Cazombo',
                'slug' => 'cazombo'
            ],
            [
                'province_id' => 20,
                'name' => 'Mavinga',
                'slug' => 'mavinga'
            ],
            [
                'province_id' => 21,
                'name' => 'Catete',
                'slug' => 'catete'
            ]
        ];


        foreach ($capitals as $capital) {

            $capitalType = null;
            $capitalId = Municipality::where('slug', $capital['slug'])->first()?->id;

            if ($capitalId) {
                $capitalType = Municipality::class;
            }

            if (!$capitalId) {
                $capitalId = Commune::where('slug', $capital['slug'])->first()?->id;
                $capitalType = Commune::class;
            }

            if (!$capitalId) {
                $capitalId = District::where('slug', $capital['slug'])->first()?->id;
                $capitalType = District::class;
            }

            if (!$capitalId) {
                throw new \Exception("Capital ".$capital['name']." was not found");
            }

            Capital::create([
                'province_id' => $capital['province_id'],
                'capitalable_id' => $capitalId,
                'capitalable_type' => $capitalType
            ]);
        }
    }
}
