<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipios = [
            [
                'provincia_id' => 1,
                'municipio' => 'Ambriz',
                'slug' => 'ambriz'
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Bula Atumba',
                'slug' => 'bula-atumba'
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Dande',
                'slug' => 'dande'
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Dembos',
                'slug' => 'dembos'
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Nambuangongo',
                'slug' => 'nambuangongo'
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Pango Aluquém',
                'slug' => 'pango-aluquem'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Baía Farta',
                'slug' => 'baia-farta'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Balombo',
                'slug' => 'balombo'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Benguela',
                'slug' => 'benguela'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Bocoio',
                'slug' => 'bocoio'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Caimbambo',
                'slug' => 'caimbambo'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Catumbela',
                'slug' => 'catumbela'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Chongoroi',
                'slug' => 'chongoroi'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Cubal',
                'slug' => 'cubal'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Ganda',
                'slug' => 'ganda'
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Lobito',
                'slug' => 'lobito'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Andulo',
                'slug' => 'andulo'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Camacupa',
                'slug' => 'camacupa'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Catabola',
                'slug' => 'catabola'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chinguar',
                'slug' => 'chinguar'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chitembo',
                'slug' => 'chitembo'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cuemba',
                'slug' => 'cuemba'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cunhinga',
                'slug' => 'cunhinga'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cuíto',
                'slug' => 'cuito'
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Nharea',
                'slug' => 'nharea'
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Cabinda',
                'slug' => 'cabinda'
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Cacongo',
                'slug' => 'cacongo'
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Buco-Zau',
                'slug' => 'buco-zau'
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Belize',
                'slug' => 'belize'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Calai',
                'slug' => 'calai'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cuangar',
                'slug' => 'cuangar'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cuchi',
                'slug' => 'cuchi'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cuito Cuanavale',
                'slug' => 'cuito-cuanavale'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Dirico',
                'slug' => 'dirico'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Mavinga',
                'slug' => 'mavinga'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Menongue',
                'slug' => 'menongue'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Nancova',
                'slug' => 'nancova'
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Rivungo',
                'slug' => 'rivungo'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Ambaca',
                'slug' => 'ambaca'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Banga',
                'slug' => 'banga'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Bolongongo',
                'slug' => 'bolongongo'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Cambambe',
                'slug' => 'cambambe'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Cazengo',
                'slug' => 'cazengo'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Golungo Alto',
                'slug' => 'golungo-alto'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Gonguembo',
                'slug' => 'gonguembo'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Lucala',
                'slug' => 'lucala'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Quiculungo',
                'slug' => 'quiculungo'
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Samba Cajú',
                'slug' => 'samba-caju'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Gabela',
                'slug' => 'gabela'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Cassongue',
                'slug' => 'cassongue'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Cela',
                'slug' => 'cela'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Conda',
                'slug' => 'conda'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Ebo',
                'slug' => 'ebo'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Libolo',
                'slug' => 'libolo'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Mussende',
                'slug' => 'mussende'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Porto Amboim',
                'slug' => 'porto-amboim'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quilenda',
                'slug' => 'quilenda'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quibala',
                'slug' => 'quibala'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Seles',
                'slug' => 'seles'
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Sumbe',
                'slug' => 'sumbe'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cahama',
                'slug' => 'cahama'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cuanhama',
                'slug' => 'cuanhama'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Curoca',
                'slug' => 'curoca'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cuvelai',
                'slug' => 'cuvelai'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Namacunde',
                'slug' => 'namacunde'
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Ombadja',
                'slug' => 'ombadja'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Longonjo',
                'slug' => 'longonjo'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Bailundo',
                'slug' => 'bailundo'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Chicala Choloanga',
                'slug' => 'chicala-choloanga'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Mungo',
                'slug' => 'mungo'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Londuimbale',
                'slug' => 'londuimbale'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Tchindjenje',
                'slug' => 'tchindjenje'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Ucuma',
                'slug' => 'ucuma'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Cachiungo',
                'slug' => 'cachiungo'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Caála',
                'slug' => 'caala'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Ecunha',
                'slug' => 'ecunha'
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Huambo',
                'slug' => 'huambo'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Caconda',
                'slug' => 'caconda'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Cacula',
                'slug' => 'cacula'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Caluquembe',
                'slug' => 'caluquembe'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Gambos',
                'slug' => 'gambos'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chibia',
                'slug' => 'chibia'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chicomba',
                'slug' => 'chicomba'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chipindo',
                'slug' => 'chipindo'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Cuvango',
                'slug' => 'cuvango'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Humpata',
                'slug' => 'humpata'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Jamba',
                'slug' => 'jamba'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Lubango',
                'slug' => 'lubango'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Matala',
                'slug' => 'matala'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Quilengues',
                'slug' => 'quilengues'
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Quipungo',
                'slug' => 'quipungo'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Icolo e Bengo',
                'slug' => 'icolo-e-bengo'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Luanda',
                'slug' => 'luanda'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Quiçama',
                'slug' => 'quicama'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Cacuaco',
                'slug' => 'cacuaco'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Cazenga',
                'slug' => 'cazenga'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Viana',
                'slug' => 'viana'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Belas',
                'slug' => 'belas'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Kilamba Kiaxi',
                'slug' => 'kilamba-kiaxi'
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Talatona',
                'slug' => 'talatona'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cambulo',
                'slug' => 'cambulo'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Capenda Camulemba',
                'slug' => 'capenda-camulemba'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Caungula',
                'slug' => 'caungula'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Chitato',
                'slug' => 'chitato'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cuango',
                'slug' => 'cuango'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cuílo',
                'slug' => 'cuilo'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lubalo',
                'slug' => 'lubalo'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lucapa',
                'slug' => 'lucapa'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lóvua',
                'slug' => 'lovua'
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Xá-Muteba',
                'slug' => 'xa-muteba'
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Cacolo',
                'slug' => 'cacolo'
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Dala',
                'slug' => 'dala'
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Muconda',
                'slug' => 'muconda'
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Saurimo',
                'slug' => 'saurimo'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cacuso',
                'slug' => 'cacuso'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Caombo',
                'slug' => 'caombo'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Calandula',
                'slug' => 'calandula'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cambundi-Catembo',
                'slug' => 'cambundi-catembo'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cangandala',
                'slug' => 'cangandala'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cuaba Nzogo',
                'slug' => 'cuaba-nzogo'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cunda-Dia-Baze',
                'slug' => 'cunda-dia-baze'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Luquembo',
                'slug' => 'luquembo'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Malanje',
                'slug' => 'malanje'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Marimba',
                'slug' => 'marimba'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Massango',
                'slug' => 'massango'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Mucari',
                'slug' => 'mucari'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quela',
                'slug' => 'quela'
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quirima',
                'slug' => 'quirima'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Alto Zambeze',
                'slug' => 'alto-zambeze'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Bundas',
                'slug' => 'bundas'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Camanongue',
                'slug' => 'camanongue'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Léua',
                'slug' => 'leua'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Luacano',
                'slug' => 'luacano'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Moxico',
                'slug' => 'moxico'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Luchazes',
                'slug' => 'luchazes'
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Cameia',
                'slug' => 'cameia'
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Moçâmedes',
                'slug' => 'mocamedes'
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Camucuio',
                'slug' => 'camucuio'
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Bibala',
                'slug' => 'bibala'
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Virei',
                'slug' => 'virei'
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Tômbua',
                'slug' => 'tombua'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Uíge',
                'slug' => 'uige'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Alto Cauale',
                'slug' => 'alto-cauale'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Ambuíla',
                'slug' => 'ambuila'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Bembe',
                'slug' => 'bembe'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Buengas',
                'slug' => 'buengas'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Bungo',
                'slug' => 'bungo'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Milunga',
                'slug' => 'milunga'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Damba',
                'slug' => 'damba'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Maquela do Zombo',
                'slug' => 'maquela-do-zombo'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Mucaba',
                'slug' => 'mucaba'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Negage',
                'slug' => 'negage'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Puri',
                'slug' => 'puri'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Quimbele',
                'slug' => 'quimbele'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Quitexe',
                'slug' => 'quitexe'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Sanza Pombo',
                'slug' => 'sanza-pombo'
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Songo',
                'slug' => 'songo'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Mbanza Congo',
                'slug' => 'mbanza-congo'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Soyo',
                'slug' => 'soyo'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Nzeto',
                'slug' => 'nzeto'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Cuimba',
                'slug' => 'cuimba'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Nóqui',
                'slug' => 'noqui'
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Tomboco',
                'slug' => 'tomboco'
            ]
        ];

        foreach ($municipios as $municipio) {
          Municipio::create([
            'nome' => $municipio['municipio'],
            'slug' => $municipio['slug'],
            'provincia_id' => $municipio['provincia_id']
          ]);
        }
    }
}
