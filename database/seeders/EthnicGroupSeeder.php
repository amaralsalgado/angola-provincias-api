<?php

namespace Database\Seeders;

use App\Models\EthnicGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EthnicGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ethnicGroups = [
            [
                'name' => 'Ambundu',
                'slug' => 'ambundu'
            ],
            [
                'name' => 'Bakongo',
                'slug' => 'bakongo'
            ],
            [
                'name' => 'Ovimbundu',
                'slug' => 'ovimbundu'
            ],
            [
                'name' => 'Ohvanyaneka',
                'slug' => 'ohvanyaneka'
            ],
            [
                'name' => 'Tucokwe',
                'slug' => 'tucokwe'
            ],
            [
                'name' => 'Ovanganguela',
                'slug' => 'ovanganguela'
            ],
            [
                'name' => 'Ovambu',
                'slug' => 'ovambu'
            ],
            [
                'name' => 'Cokwe',
                'slug' => 'cokwe'
            ],
            [
                'name' => 'Ovanga',
                'slug' => 'ovanga'
            ],
            [
                'name' => 'Minoria Oluyaneka',
                'slug' => 'minoria-oluyaneka'
            ],
            [
                'name' => 'Bailundo',
                'slug' => 'bailundo'
            ],
            [
                'name' => 'Lunda-Quioco',
                'slug' => 'lunda-quioco'
            ]
        ];

        foreach ($ethnicGroups as $ethnic_group) {
            EthnicGroup::create([
                'name' => $ethnic_group['name'],
                'slug' => $ethnic_group['slug']
            ]);
        }
    }
}
