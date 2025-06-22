<?php

namespace Database\Seeders;

use App\Models\Etnia_Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtniaProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [
            [
                'provincia' => 'Bengo',
                'provincia_id' => 1,
                'etnias' => [1,2],
            ],
            [
                'provincia' => 'Benguela',
                'provincia_id' => 2,
                'etnias' => [3,4],
            ],
            [
                'provincia' => 'Bié',
                'provincia_id' => 3,
                'etnias' => [3,5],
            ],
            [
                'provincia' => 'Cabinda',
                'provincia_id' => 4,
                'etnias' => [2],
            ],
            [
                'provincia' => 'Cuando Cubango',
                'provincia_id' => 5,
                'etnias' => [6],
            ],
            [
                'provincia' => 'Cuanza Norte',
                'provincia_id' => 6,
                'etnias' => [1],
            ],
            [
                'provincia' => 'Cuanza Sul',
                'provincia_id' => 7,
                'etnias' => [1,3],
            ],
            [
                'provincia' => 'Cunene',
                'provincia_id' => 8,
                'etnias' => [7],
            ],
            [
                'provincia' => 'Huambo',
                'provincia_id' => 9,
                'etnias' => [3],
            ],
            [
                'provincia' => 'Huíla',
                'provincia_id' => 10,
                'etnias' => [7],
            ],
            [
                'provincia' => 'Luanda',
                'provincia_id' => 11,
                'etnias' => [1],
            ],
            [
                'provincia' => 'Lunda Norte',
                'provincia_id' => 12,
                'etnias' => [8],
            ],
            [
                'provincia' => 'Lunda Sul',
                'provincia_id' => 13,
                'etnias' => [8],
            ],
            [
                'provincia' => 'Malanje',
                'provincia_id' => 14,
                'etnias' => [1],
            ],
            [
                'provincia' => 'Moxico',
                'provincia_id' => 15,
                'etnias' => [9],
            ],
            [
                'provincia' => 'Namibe',
                'provincia_id' => 16,
                'etnias' => [10],
            ],
            [
                'provincia' => 'Uíge',
                'provincia_id' => 17,
                'etnias' => [1,2],
            ],
            [
                'provincia' => 'Zaire',
                'provincia_id' => 18,
                'etnias' => [2],
            ]
        ];

        foreach ($provincias as $prov) {

            foreach ($prov['etnias'] as $etniaId) {
                Etnia_Provincia::create(
                    [
                    'etnia_id' => $etniaId,
                    'provincia_id' => $prov['provincia_id'],
                    ]
                );
            }

        }
    }
}
