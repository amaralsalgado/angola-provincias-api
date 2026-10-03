<?php

namespace Database\Seeders;

use App\Models\LanguageProvince;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageProvinceSeeder extends Seeder
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
                'languages' => [12, 1, 2],
            ],
            [
                'province' => 'Benguela',
                'province_id' => 2,
                'languages' => [12, 3, 4],
            ],
            [
                'province' => 'Bié',
                'province_id' => 3,
                'languages' => [12, 3],
            ],
            [
                'province' => 'Cabinda',
                'province_id' => 4,
                'languages' => [12, 2, 6],
            ],
            [
                'province' => 'Cubango',
                'province_id' => 5,
                'languages' => [12, 7],
            ],
            [
                'province' => 'Cuanza Norte',
                'province_id' => 6,
                'languages' => [12, 1],
            ],
            [
                'province' => 'Cuanza Sul',
                'province_id' => 7,
                'languages' => [12, 1, 8],
            ],
            [
                'province' => 'Cunene',
                'province_id' => 8,
                'languages' => [12, 9],
            ],
            [
                'province' => 'Huambo',
                'province_id' => 9,
                'languages' => [12, 3],
            ],
            [
                'province' => 'Huíla',
                'province_id' => 10,
                'languages' => [12, 10, 3],
            ],
            [
                'province' => 'Luanda',
                'province_id' => 11,
                'languages' => [12, 1],
            ],
            [
                'province' => 'Lunda Norte',
                'province_id' => 12,
                'languages' => [12, 5],
            ],
            [
                'province' => 'Lunda Sul',
                'province_id' => 13,
                'languages' => [12, 5],
            ],
            [
                'province' => 'Malanje',
                'province_id' => 14,
                'languages' => [12, 1],
            ],
            [
                'province' => 'Moxico',
                'province_id' => 15,
                'languages' => [12, 5, 7],
            ],
            [
                'province' => 'Namibe',
                'province_id' => 16,
                'languages' => [12, 11],
            ],
            [
                'province' => 'Uíge',
                'province_id' => 17,
                'languages' => [12, 2, 1],
            ],
            [
                'province' => 'Zaire',
                'province_id' => 18,
                'languages' => [12, 2],
            ],
            [
                'province' => 'Moxico Leste',
                'province_id' => 19,
                'languages' => [12, 5],
            ],
            [
                'province' => 'Cuando',
                'province_id' => 20,
                'languages' => [12, 7],
            ],
            [
                'province' => 'Icolo e Bengo',
                'province_id' => 21,
                'languages' => [12, 1],
            ]
        ];

        foreach ($provinces as $prov) {

            foreach ($prov['languages'] as $languageId) {
                LanguageProvince::create(
                    [
                        'language_id' => $languageId,
                        'province_id' => $prov['province_id'],
                    ]
                );
            }
        }
    }
}
