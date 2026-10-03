<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            [
                'name' => 'Kimbundu',
                'slug' => 'kimbundu'
            ],
            [
                'name' => 'Kikongo',
                'slug' => 'kikongo'
            ],
            [
                'name' => 'Umbundu',
                'slug' => 'umbundu'
            ],
            [
                'name' => 'Ohvanyaneka',
                'slug' => 'ohvanyaneka'
            ],
            [
                'name' => 'Cokwe',
                'slug' => 'cokwe'
            ],
            [
                'name' => 'Fiote',
                'slug' => 'fiote'
            ],
            [
                'name' => 'Nganguela',
                'slug' => 'nganguela'
            ],
            [
                'name' => 'Ubundu',
                'slug' => 'ubundu'
            ],
            [
                'name' => 'Oshiwambo',
                'slug' => 'oshiwambo'
            ],
            [
                'name' => 'Olunhaneka',
                'slug' => 'olunhaneka'
            ],
            [
                'name' => 'Oluherero',
                'slug' => 'oluherero'
            ],
            [
                'name' => 'Português',
                'slug' => 'portugues'
            ]
        ];



        foreach ($languages as $language) {
            Language::create([
                'name' => $language['name'],
                'slug' => $language['slug']
            ]);
        }
    }
}
