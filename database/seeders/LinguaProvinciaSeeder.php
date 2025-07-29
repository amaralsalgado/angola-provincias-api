<?php

namespace Database\Seeders;

use App\Models\Lingua_Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinguaProvinciaSeeder extends Seeder
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
                'linguas' => [12, 1, 2],
            ],
            [
                'provincia' => 'Benguela',
                'provincia_id' => 2,
                'linguas' => [12, 3, 4],
            ],
            [
                'provincia' => 'Bié',
                'provincia_id' => 3,
                'linguas' => [12, 3],
            ],
            [
                'provincia' => 'Cabinda',
                'provincia_id' => 4,
                'linguas' => [12, 2, 6],
            ],
            [
                'provincia' => 'Cubango',
                'provincia_id' => 5,
                'linguas' => [12, 7],
            ],
            [
                'provincia' => 'Cuanza Norte',
                'provincia_id' => 6,
                'linguas' => [12, 1],
            ],
            [
                'provincia' => 'Cuanza Sul',
                'provincia_id' => 7,
                'linguas' => [12, 1, 8],
            ],
            [
                'provincia' => 'Cunene',
                'provincia_id' => 8,
                'linguas' => [12, 9],
            ],
            [
                'provincia' => 'Huambo',
                'provincia_id' => 9,
                'linguas' => [12, 3],
            ],
            [
                'provincia' => 'Huíla',
                'provincia_id' => 10,
                'linguas' => [12, 10, 3],
            ],
            [
                'provincia' => 'Luanda',
                'provincia_id' => 11,
                'linguas' => [12, 1],
            ],
            [
                'provincia' => 'Lunda Norte',
                'provincia_id' => 12,
                'linguas' => [12, 5],
            ],
            [
                'provincia' => 'Lunda Sul',
                'provincia_id' => 13,
                'linguas' => [12, 5],
            ],
            [
                'provincia' => 'Malanje',
                'provincia_id' => 14,
                'linguas' => [12, 1],
            ],
            [
                'provincia' => 'Moxico',
                'provincia_id' => 15,
                'linguas' => [12, 5, 7],
            ],
            [
                'provincia' => 'Namibe',
                'provincia_id' => 16,
                'linguas' => [12, 11],
            ],
            [
                'provincia' => 'Uíge',
                'provincia_id' => 17,
                'linguas' => [12, 2, 1],
            ],
            [
                'provincia' => 'Zaire',
                'provincia_id' => 18,
                'linguas' => [12, 2],
            ],
            [
                'provincia' => 'Moxico Leste',
                'provincia_id' => 19,
                'linguas' => [12, 5],
            ],
            [
                'provincia' => 'Cuando',
                'provincia_id' => 20,
                'linguas' => [12, 7],
            ],
            [
                'provincia' => 'Icolo e Bengo',
                'provincia_id' => 21,
                'linguas' => [12, 1],
            ]
        ];

        foreach ($provincias as $prov) {

            foreach ($prov['linguas'] as $linguaId) {
                Lingua_Provincia::create(
                    [
                        'lingua_id' => $linguaId,
                        'provincia_id' => $prov['provincia_id'],
                    ]
                );
            }
        }
    }
}
