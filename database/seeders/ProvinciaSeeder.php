<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [
            [
                'nome' => 'Bengo',
                'capital' => 1,
                'extensao' => '31.371 km²',
                'fundacao' => '1980-04-26',
                'slug' => 'bengo'
            ],
            [
                'nome' => 'Benguela',
                'capital' => 2,
                'extensao' => '39.827 km²',
                'fundacao' => '1617-05-17',
                'slug' => 'benguela'
            ],
            [
                'nome' => 'Bié',
                'capital' => 3,
                'extensao' => '70.314 km²',
                'fundacao' => '1922-05-01',
                'slug' => 'bie'
            ],
            [
                'nome' => 'Cabinda',
                'capital' => 4,
                'extensao' => '7.283 km²',
                'fundacao' => '1868-02-28',
                'slug' => 'cabinda'
            ],
            [
                'nome' => 'Cuando Cubango',
                'capital' => 5,
                'extensao' => '199.049 km²',
                'fundacao' => '1961-10-21',
                'slug' => 'cuando-cubango'
            ],
            [
                'nome' => 'Cuanza Norte',
                'capital' => 6,
                'extensao' => '24.110 km²',
                'fundacao' => '1914-08-15',
                'slug' => 'cuanza-norte'
            ],
            [
                'nome' => 'Cuanza Sul',
                'capital' => 7,
                'extensao' => '55.660 km²',
                'fundacao' => '1917-09-15',
                'slug' => 'cuanza-sul'
            ],
            [
                'nome' => 'Cunene',
                'capital' => 8,
                'extensao' => '78.342 km²',
                'fundacao' => '1970-07-10',
                'slug' => 'cunene'
            ],
            [
                'nome' => 'Huambo',
                'capital' => 9,
                'extensao' => '2609',
                'fundacao' => '1912-08-08',
                'slug' => 'huambo'
            ],
            [
                'nome' => 'Huíla',
                'capital' => 10,
                'extensao' => '79022',
                'fundacao' => '1901-09-02',
                'slug' => 'huila'
            ],
            [
                'nome' => 'Luanda',
                'capital' => 11,
                'extensao' => '18.826 km²',
                'fundacao' => '1576-01-25',
                'slug' => 'luanda'
            ],
            [
                'nome' => 'Lunda Norte',
                'capital' => 12,
                'extensao' => '103.760 km²',
                'fundacao' => '1978-07-04',
                'slug' => 'lunda-norte'
            ],
            [
                'nome' => 'Lunda Sul',
                'capital' => 13,
                'extensao' => '77.636 km²',
                'fundacao' => '1895-07-13',
                'slug' => 'lunda-sul'
            ],
            [
                'nome' => 'Malanje',
                'capital' => 14,
                'extensao' => '2.422 km²',
                'fundacao' => '1868-02-13',
                'slug' => 'malanje'
            ],
            [
                'nome' => 'Moxico',
                'capital' => 15,
                'extensao' => '223.023 km²',
                'fundacao' => '1917-09-15',
                'slug' => 'moxico'
            ],
            [
                'nome' => 'Namibe',
                'capital' => 16,
                'extensao' => '8916',
                'fundacao' => '1645-07-10',
                'slug' => 'namibe'
            ],
            [
                'nome' => 'Uíge',
                'capital' => 17,
                'extensao' => '58.698 km²',
                'fundacao' => '1887-05-31',
                'slug' => 'uige'
            ],
            [
                'nome' => 'Zaire',
                'capital' => 18,
                'extensao' => '40130',
                'fundacao' => '1961-04-01',
                'slug' => 'zaire'
            ]
        ];


        foreach ($provincias as $provincia) {
            Provincia::create(
                [
                'nome' => $provincia['nome'],
                'slug' => $provincia['slug'],
                'extensao' => $provincia['extensao'],
                'data_fundacao' => $provincia['fundacao'],
                'capital_id' => $provincia['capital']
                ]
            );
        }
    }
}
