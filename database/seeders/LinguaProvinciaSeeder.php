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
        $data = [
            [
                'provincia' => 'Bengo',
                'provincia_id' => 1,
                'linguas' => [1,2],
            ],
            [
                'provincia' => 'Benguela',
                'provincia_id' => 2,
                'linguas' => [3,4],
            ],
            [
                'provincia' => 'Bié',
                'provincia_id' => 3,
                'linguas' => [3,5],
            ],
            [
                'provincia' => 'Cabinda',
                'provincia_id' => 4,
                'linguas' => [2,6],
            ],
            [
                'provincia' => 'Cuando Cubango',
                'provincia_id' => 5,
                'linguas' => [7],
            ],
            [
                'provincia' => 'Cuanza Norte',
                'provincia_id' => 6,
                'linguas' => [1],
            ],
            [
                'provincia' => 'Cuanza Sul',
                'provincia_id' => 7,
                'linguas' => [1,8],
            ],
            [
                'provincia' => 'Cunene',
                'provincia_id' => 8,
                'linguas' => [9],
            ],
            [
                'provincia' => 'Huambo',
                'provincia_id' => 9,
                'linguas' => [3],
            ],
            [
                'provincia' => 'Huíla',
                'provincia_id' => 10,
                'linguas' => [10,3],
            ],
            [
                'provincia' => 'Luanda',
                'provincia_id' => 11,
                'linguas' => [1],
            ],
            [
                'provincia' => 'Lunda Norte',
                'provincia_id' => 12,
                'linguas' => [5],
            ],
            [
                'provincia' => 'Lunda Sul',
                'provincia_id' => 13,
                'linguas' => [5],
            ],
            [
                'provincia' => 'Malanje',
                'provincia_id' => 14,
                'linguas' => [1],
            ],
            [
                'provincia' => 'Moxico',
                'provincia_id' => 15,
                'linguas' => [5,7],
            ],
            [
                'provincia' => 'Namibe',
                'provincia_id' => 16,
                'linguas' => [11],
            ],
            [
                'provincia' => 'Uíge',
                'provincia_id' => 17,
                'linguas' => [2,1],
            ],
            [
                'provincia' => 'Zaire',
                'provincia_id' => 18,
                'linguas' => [2],
            ]
        ];

        foreach ($data as $data) {

            foreach ($data['linguas'] as $linguaId) {
                Lingua_Provincia::create(
                    [
                    'lingua_id' => $linguaId,
                    'provincia_id' => $data['provincia_id'],
                    ]
                );
            }

        }
    }
}
