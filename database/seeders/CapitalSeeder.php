<?php

namespace Database\Seeders;

use App\Models\Capital;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $capitais = [
            [
                'nome' => 'Caxito',
                'slug' => 'caxito'
            ],
            [
                'nome' => 'Benguela',
                'slug' => 'benguela'
            ],
            [
                'nome' => 'Cuíto',
                'slug' => 'cuito'
            ],
            [
                'nome' => 'Cabinda',
                'slug' => 'cabinda'
            ],
            [
                'nome' => 'Menongue',
                'slug' => 'menongue'
            ],
            [
                'nome' => 'Ndalatando',
                'slug' => 'ndalatando'
            ],
            [
                'nome' => 'Sumbe',
                'slug' => 'sumbe'
            ],
            [
                'nome' => 'Ondijiva',
                'slug' => 'ondijiva'
            ],
            [
                'nome' => 'Huambo',
                'slug' => 'huambo'
            ],
            [
                'nome' => 'Lubango',
                'slug' => 'lubango'
            ],
            [
                'nome' => 'Luanda',
                'slug' => 'luanda'
            ],
            [
                'nome' => 'Dundo',
                'slug' => 'dundo'
            ],
            [
                'nome' => 'Saurimo',
                'slug' => 'saurimo'
            ],
            [
                'nome' => 'Malanje',
                'slug' => 'malanje'
            ],
            [
                'nome' => 'Luena',
                'slug' => 'luena'
            ],
            [
                'nome' => 'Moçâmedes',
                'slug' => 'mocamedes'
            ],
            [
                'nome' => 'Uíge',
                'slug' => 'uige'
            ],
            [
                'nome' => 'Mbanza Congo',
                'slug' => 'mbanza-congo'
            ]
        ];


        foreach ($capitais as $capital) {
            Capital::create([
                'nome'=> $capital['nome'],
                'slug'=> $capital['slug']
            ]);
        }
    }
}
