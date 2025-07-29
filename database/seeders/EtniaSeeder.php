<?php

namespace Database\Seeders;

use App\Models\Etnia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etnias = [
            [
                'nome' => 'Ambundu',
                'slug' => 'ambundu'
            ],
            [
                'nome' => 'Bakongo',
                'slug' => 'bakongo'
            ],
            [
                'nome' => 'Ovimbundu',
                'slug' => 'ovimbundu'
            ],
            [
                'nome' => 'Ohvanyaneka',
                'slug' => 'ohvanyaneka'
            ],
            [
                'nome' => 'Tucokwe',
                'slug' => 'tucokwe'
            ],
            [
                'nome' => 'Ovanganguela',
                'slug' => 'ovanganguela'
            ],
            [
                'nome' => 'Ovambu',
                'slug' => 'ovambu'
            ],
            [
                'nome' => 'Cokwe',
                'slug' => 'cokwe'
            ],
            [
                'nome' => 'Ovanga',
                'slug' => 'ovanga'
            ],
            [
                'nome' => 'Minoria Oluyaneka',
                'slug' => 'minoria-oluyaneka'
            ],
            [
                'nome' => 'Bailundo',
                'slug' => 'bailundo'
            ]
        ];

        foreach ($etnias as $etnia) {
            Etnia::create([
                'nome' => $etnia['nome'],
                'slug' => $etnia['slug']
            ]);
        }
    }
}
