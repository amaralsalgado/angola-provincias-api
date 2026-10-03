<?php

namespace Database\Seeders;

use App\Models\EthnicGroupProvince;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicGroupProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            [
                'province' => 'Bengo',
                'province_id' => 1,
                'ethnic_groups' => [1,2],
            ],
            [
                'province' => 'Benguela',
                'province_id' => 2,
                'ethnic_groups' => [3,4],
            ],
            [
                'province' => 'Bié',
                'province_id' => 3,
                'ethnic_groups' => [11],
            ],
            [
                'province' => 'Cabinda',
                'province_id' => 4,
                'ethnic_groups' => [2],
            ],
            [
                'province' => 'Cubango',
                'province_id' => 5,
                'ethnic_groups' => [6],
            ],
            [
                'province' => 'Cuanza Norte',
                'province_id' => 6,
                'ethnic_groups' => [1],
            ],
            [
                'province' => 'Cuanza Sul',
                'province_id' => 7,
                'ethnic_groups' => [1,3],
            ],
            [
                'province' => 'Cunene',
                'province_id' => 8,
                'ethnic_groups' => [7],
            ],
            [
                'province' => 'Huambo',
                'province_id' => 9,
                'ethnic_groups' => [3],
            ],
            [
                'province' => 'Huíla',
                'province_id' => 10,
                'ethnic_groups' => [7],
            ],
            [
                'province' => 'Luanda',
                'province_id' => 11,
                'ethnic_groups' => [1],
            ],
            [
                'province' => 'Lunda Norte',
                'province_id' => 12,
                'ethnic_groups' => [8],
            ],
            [
                'province' => 'Lunda Sul',
                'province_id' => 13,
                'ethnic_groups' => [8],
            ],
            [
                'province' => 'Malanje',
                'province_id' => 14,
                'ethnic_groups' => [1],
            ],
            [
                'province' => 'Moxico',
                'province_id' => 15,
                'ethnic_groups' => [9],
            ],
            [
                'province' => 'Namibe',
                'province_id' => 16,
                'ethnic_groups' => [10],
            ],
            [
                'province' => 'Uíge',
                'province_id' => 17,
                'ethnic_groups' => [1,2],
            ],
            [
                'province' => 'Zaire',
                'province_id' => 18,
                'ethnic_groups' => [2],
            ],
            [
                'province' => 'Moxico Leste',
                'province_id' => 19,
                'ethnic_groups' => [],
            ],
            [
                'province' => 'Cuando',
                'province_id' => 20,
                'ethnic_groups' => [6],
            ],
            [
                'province' => 'Icolo e Bengo',
                'province_id' => 21,
                'ethnic_groups' => [1],
            ]
        ];

        foreach ($provinces as $prov) {

            foreach ($prov['ethnic_groups'] as $ethnicGroupId) {
                EthnicGroupProvince::create(
                    [
                    'ethnic_group_id' => $ethnicGroupId,
                    'province_id' => $prov['province_id'],
                    ]
                );
            }

        }
    }
}
