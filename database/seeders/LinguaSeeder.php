<?php

namespace Database\Seeders;

use App\Models\Lingua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinguaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $linguas = [
            [
                'nome' => 'Kimbundu',
                'slug' => 'kimbundu'
            ],
            [
                'nome' => 'Kikongo',
                'slug' => 'kikongo'
            ],
            [
                'nome' => 'Umbundu',
                'slug' => 'umbundu'
            ],
            [
                'nome' => 'Ohvanyaneka',
                'slug' => 'ohvanyaneka'
            ],
            [
                'nome' => 'Cokwe',
                'slug' => 'cokwe'
            ],
            [
                'nome' => 'Fiote',
                'slug' => 'fiote'
            ],
            [
                'nome' => 'Nganguela',
                'slug' => 'nganguela'
            ],
            [
                'nome' => 'Ubundu',
                'slug' => 'ubundu'
            ],
            [
                'nome' => 'Oshiwambo',
                'slug' => 'oshiwambo'
            ],
            [
                'nome' => 'Olunhaneka',
                'slug' => 'olunhaneka'
            ],
            [
                'nome' => 'Oluherero',
                'slug' => 'oluherero'
            ],
            [
                'nome' => 'Português',
                'slug' => 'portugues'
            ]
        ];



        foreach ($linguas as $lingua) {
            Lingua::create([
                'nome' => $lingua['nome'],
                'slug' => $lingua['slug']
            ]);
        }
    }
}
