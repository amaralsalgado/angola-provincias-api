<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = [
            [
                'name' => 'Bengo',
                'area' => '31.371 km²',
                'founded_at' => '1980-04-26',
                'slug' => 'bengo',
            ],
            [
                'name' => 'Benguela',
                'area' => '39.827 km²',
                'founded_at' => '1617-05-17',
                'slug' => 'benguela'
            ],
            [
                'name' => 'Bié',
                'area' => '70.314 km²',
                'founded_at' => '1922-05-01',
                'slug' => 'bie'
            ],
            [
                'name' => 'Cabinda',
                'area' => '7.283 km²',
                'founded_at' => '1862-02-28',
                'slug' => 'cabinda'
            ],
            [
                'name' => 'Cubango',
                'area' => '199.049 km²',
                'founded_at' => '1961-10-21',
                'slug' => 'cubango'
            ],
            [
                'name' => 'Cuanza Norte',
                'area' => '24.110 km²',
                'founded_at' => '1914-08-15',
                'slug' => 'cuanza-norte'
            ],
            [
                'name' => 'Cuanza Sul',
                'area' => '55.660 km²',
                'founded_at' => '1914-09-15',
                'slug' => 'cuanza-sul'
            ],
            [
                'name' => 'Cunene',
                'area' => '78.342 km²',
                'founded_at' => '1970-07-10',
                'slug' => 'cunene'
            ],
            [
                'name' => 'Huambo',
                'area' => '2.609 km²',
                'founded_at' => '1912-08-08',
                'slug' => 'huambo'
            ],
            [
                'name' => 'Huíla',
                'area' => '79.022 km²',
                'founded_at' => '1901-09-02',
                'slug' => 'huila'
            ],
            [
                'name' => 'Luanda',
                'area' => '18.826 km²',
                'founded_at' => '1576-01-25',
                'slug' => 'luanda'
            ],
            [
                'name' => 'Lunda Norte',
                'area' => '103.760 km²',
                'founded_at' => '1978-07-04',
                'slug' => 'lunda-norte'
            ],
            [
                'name' => 'Lunda Sul',
                'area' => '77.636 km²',
                'founded_at' => '1895-07-13',
                'slug' => 'lunda-sul'
            ],
            [
                'name' => 'Malanje',
                'area' => '2.422 km²',
                'founded_at' => '1868-02-13',
                'slug' => 'malanje'
            ],
            [
                'name' => 'Moxico',
                'area' => '223.023 km²',
                'founded_at' => '1917-09-15',
                'slug' => 'moxico'
            ],
            [
                'name' => 'Namibe',
                'area' => '8.916 km²',
                'founded_at' => '1645-07-10',
                'slug' => 'namibe'
            ],
            [
                'name' => 'Uíge',
                'area' => '58.698 km²',
                'founded_at' => '1887-05-31',
                'slug' => 'uige'
            ],
            [
                'name' => 'Zaire',
                'area' => '40.130 km²',
                'founded_at' => '1961-04-01',
                'slug' => 'zaire'
            ],
            [
                'name' => 'Moxico Leste',
                'area' => null,
                'founded_at' => '2025-01-01',
                'slug' => 'moxico-leste'
            ],
            [
                'name' => 'Cuando',
                'area' => null,
                'founded_at' => '2025-01-01',
                'slug' => 'cuando'
            ],
            [
                'name' => 'Icolo e Bengo',
                'area' => null,
                'founded_at' => '2025-01-01',
                'slug' => 'icolo-e-bengo'
            ]
        ];


        foreach ($provinces as $province) {
            Province::create(
                [
                    'name' => $province['name'],
                    'slug' => $province['slug'],
                    'area' => $province['area'],
                    'founded_at' => $province['founded_at'],
                ]
            );
        }
    }
}
