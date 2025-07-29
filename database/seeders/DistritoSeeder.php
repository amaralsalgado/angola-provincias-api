<?php

namespace Database\Seeders;

use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {


            $municipios = [
                [
                    'provincia_id' => 1,
                    'municipio' => 'Bula Atumba',
                    'slug' => 'bula-atumba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Dande',
                    'slug' => 'dande',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Quibaxe',
                    'slug' => 'quibaxe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Nambuangongo',
                    'slug' => 'nambuangongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Pango Aluquém',
                    'slug' => 'pango-aluquem',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Ambriz',
                    'slug' => 'ambriz',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Muxaluando',
                    'slug' => 'muxaluando',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Piri',
                    'slug' => 'piri',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Quicunzo',
                    'slug' => 'quicunzo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Úcua',
                    'slug' => 'ucua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Pangila',
                    'slug' => 'pangila',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 1,
                    'municipio' => 'Barra do Dande',
                    'slug' => 'barra-do-dande',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Baía Farta',
                    'slug' => 'baia-farta',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Balombo',
                    'slug' => 'balombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Bocoio',
                    'slug' => 'bocoio',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Caimbambo',
                    'slug' => 'caimbambo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Catumbela',
                    'slug' => 'catumbela',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Chongorói',
                    'slug' => 'chongoroi',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Cubal',
                    'slug' => 'cubal',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Ganda',
                    'slug' => 'ganda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Lobito',
                    'slug' => 'lobito',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Benguela',
                    'slug' => 'benguela',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Egito Praia',
                    'slug' => 'egito-praia',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Chindumbo',
                    'slug' => 'chindumbo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Dombe Grande',
                    'slug' => 'dombe-grande',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Capupa',
                    'slug' => 'capupa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Biópio',
                    'slug' => 'biopio',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Chila',
                    'slug' => 'chila',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Chicuma',
                    'slug' => 'chicuma',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Babaera',
                    'slug' => 'babaera',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Iambala',
                    'slug' => 'iambala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Catengue',
                    'slug' => 'catengue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Bolonguera',
                    'slug' => 'bolonguera',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Canhamela',
                    'slug' => 'canhamela',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 2,
                    'municipio' => 'Navegantes',
                    'slug' => 'navegantes',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Andulo',
                    'slug' => 'andulo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Camacupa',
                    'slug' => 'camacupa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Catabola',
                    'slug' => 'catabola',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Chinguar',
                    'slug' => 'chinguar',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Chitembo',
                    'slug' => 'chitembo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Cuemba',
                    'slug' => 'cuemba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Cuito',
                    'slug' => 'cuito',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Cunhinga',
                    'slug' => 'cunhinga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Nharêa',
                    'slug' => 'nharea',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Luando',
                    'slug' => 'luando',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Ringoma',
                    'slug' => 'ringoma',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Mumbuê',
                    'slug' => 'mumbue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'CalucingA',
                    'slug' => 'calucinga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Chicala',
                    'slug' => 'chicala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Chipeta',
                    'slug' => 'chipeta',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Umpulo',
                    'slug' => 'umpulo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Lúbia',
                    'slug' => 'lubia',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Cambândua',
                    'slug' => 'cambandua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 3,
                    'municipio' => 'Belo Horizonte',
                    'slug' => 'belo-horizonte',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Belize',
                    'slug' => 'belize',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Buco-Zau',
                    'slug' => 'buco-zau',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Cabinda',
                    'slug' => 'cabinda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Cacongo',
                    'slug' => 'cacongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Miconje',
                    'slug' => 'miconje',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Massabi',
                    'slug' => 'massabi',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Necuto',
                    'slug' => 'necuto',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Tando Zinze',
                    'slug' => 'tando-zinze',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Liambo',
                    'slug' => 'liambo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 4,
                    'municipio' => 'Ngoio',
                    'slug' => 'ngoio',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Calai',
                    'slug' => 'calai',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Cuangar',
                    'slug' => 'cuangar',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Cuchi',
                    'slug' => 'cuchi',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Cutato',
                    'slug' => 'cutato',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Caiundo',
                    'slug' => 'caiundo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Longa',
                    'slug' => 'longa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Menongue',
                    'slug' => 'menongue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Nancova',
                    'slug' => 'nancova',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Savate',
                    'slug' => 'savate',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Chinguanja',
                    'slug' => 'chinguanja',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 5,
                    'municipio' => 'Mavengue',
                    'slug' => 'mavengue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Ambaca',
                    'slug' => 'ambaca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Banga',
                    'slug' => 'banga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Bolongongo',
                    'slug' => 'bolongongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Cambambe',
                    'slug' => 'cambambe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Cazengo',
                    'slug' => 'cazengo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Golungo Alto',
                    'slug' => 'golungo-alto',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Lucala',
                    'slug' => 'lucala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Ngonguembo',
                    'slug' => 'ngonguembo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Quiculungo',
                    'slug' => 'quiculungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Samba Cajú',
                    'slug' => 'samba-caju',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Massangano',
                    'slug' => 'massangano',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Cêrca',
                    'slug' => 'cerca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Tango',
                    'slug' => 'tango',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Terreiro',
                    'slug' => 'terreiro',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Aldeia Nova',
                    'slug' => 'aldeia-nova',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Caculo Cabaça',
                    'slug' => 'caculo-cabaca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 6,
                    'municipio' => 'Luinga',
                    'slug' => 'luinga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Gabela',
                    'slug' => 'gabela',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Cassongue',
                    'slug' => 'cassongue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Waku Kungo',
                    'slug' => 'waku-kungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Conda',
                    'slug' => 'conda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Ebo',
                    'slug' => 'ebo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Calulo',
                    'slug' => 'calulo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Mussende',
                    'slug' => 'mussende',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Porto Amboim',
                    'slug' => 'porto-amboim',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Quibala',
                    'slug' => 'quibala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Quilenda',
                    'slug' => 'quilenda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Seles',
                    'slug' => 'seles',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Sumbe',
                    'slug' => 'sumbe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Quirimbo',
                    'slug' => 'quirimbo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Munenga',
                    'slug' => 'munenga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Quissongo',
                    'slug' => 'quissongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Gungo',
                    'slug' => 'gungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Sanga',
                    'slug' => 'sanga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Gangula',
                    'slug' => 'gangula',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Pambangala',
                    'slug' => 'pambangala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Condé',
                    'slug' => 'conde',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Amboiva',
                    'slug' => 'amboiva',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Lonhe',
                    'slug' => 'lonhe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Quenha',
                    'slug' => 'quenha',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 7,
                    'municipio' => 'Boa Entrada',
                    'slug' => 'boa-entrada',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Cahama',
                    'slug' => 'cahama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Cuanhama',
                    'slug' => 'cuanhama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Curoca',
                    'slug' => 'curoca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Cuvelai',
                    'slug' => 'cuvelai',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Namacunde',
                    'slug' => 'namacunde',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Ombandja',
                    'slug' => 'ombandja',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Chiéde',
                    'slug' => 'chiede',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Nehone',
                    'slug' => 'nehone',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Humbe',
                    'slug' => 'humbe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Mupa',
                    'slug' => 'mupa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Naulila',
                    'slug' => 'naulila',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Chitado',
                    'slug' => 'chitado',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Cafima',
                    'slug' => 'cafima',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 8,
                    'municipio' => 'Chissuata',
                    'slug' => 'chissuata',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Bailundo',
                    'slug' => 'bailundo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Caála',
                    'slug' => 'caala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Cachiungo',
                    'slug' => 'cachiungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Chicala Choloanga',
                    'slug' => 'chicala-choloanga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Chinjenje',
                    'slug' => 'chinjenje',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Ecunha',
                    'slug' => 'ecunha',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Huambo',
                    'slug' => 'huambo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Londuimbali',
                    'slug' => 'londuimbali',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Longonjo',
                    'slug' => 'longonjo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Mungo',
                    'slug' => 'mungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Ucuma',
                    'slug' => 'ucuma',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Bimbe',
                    'slug' => 'bimbe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Sambo',
                    'slug' => 'sambo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Galanga',
                    'slug' => 'galanga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Alto Hama',
                    'slug' => 'alto-hama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Chilata',
                    'slug' => 'chilata',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 9,
                    'municipio' => 'Cuima',
                    'slug' => 'cuima',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Caconda',
                    'slug' => 'caconda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Cacula',
                    'slug' => 'cacula',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Caluquembe',
                    'slug' => 'caluquembe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Chibia',
                    'slug' => 'chibia',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Chicomba',
                    'slug' => 'chicomba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Chipindo',
                    'slug' => 'chipindo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Cuvango',
                    'slug' => 'cuvango',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Gambos',
                    'slug' => 'gambos',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Humpata',
                    'slug' => 'humpata',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Jamba Mineira',
                    'slug' => 'jamba-mineira',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Lubango',
                    'slug' => 'lubango',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Matala',
                    'slug' => 'matala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Quilengues',
                    'slug' => 'quilengues',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Quipungo',
                    'slug' => 'quipungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Dongo',
                    'slug' => 'dongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Hoque',
                    'slug' => 'hoque',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Capelongo',
                    'slug' => 'capelongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Chituto',
                    'slug' => 'chituto',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Capunda Cavilongo',
                    'slug' => 'capunda-cavilongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Viti Vivali',
                    'slug' => 'viti-vivali',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Galangue',
                    'slug' => 'galangue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Palanca',
                    'slug' => 'palanca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 10,
                    'municipio' => 'Chicungo',
                    'slug' => 'chicungo',
                    'distritos' => [],
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Belas',
                    'slug' => 'belas',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Cacuaco',
                    'slug' => 'cacuaco',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Cazenga',
                    'slug' => 'cazenga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Kilamba Kiaxi',
                    'slug' => 'kilamba-kiaxi',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Viana',
                    'slug' => 'viana',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Mussulo',
                    'slug' => 'mussulo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Sambizanga',
                    'slug' => 'sambizanga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Rangel',
                    'slug' => 'rangel',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Maianga',
                    'slug' => 'maianga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Samba',
                    'slug' => 'samba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Camama',
                    'slug' => 'camama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Mulenvos',
                    'slug' => 'mulenvos',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Kilamba',
                    'slug' => 'kilamba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Hoji Ya Henda',
                    'slug' => 'hoji-ya-henda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Ingombota',
                    'slug' => 'ingombota',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 11,
                    'municipio' => 'Talatona',
                    'slug' => 'talatona',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Cambulo',
                    'slug' => 'cambulo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Capenda Camulemba',
                    'slug' => 'capenda-camulemba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Caungula',
                    'slug' => 'caungula',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Chitato',
                    'slug' => 'chitato',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Cuango',
                    'slug' => 'cuango',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Cuílo',
                    'slug' => 'cuilo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Lubalo',
                    'slug' => 'lubalo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Lucapa',
                    'slug' => 'lucapa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Lóvua',
                    'slug' => 'lovua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Xá-Muteba',
                    'slug' => 'xa-muteba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Dundo',
                    'slug' => 'dundo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Xá Cassau',
                    'slug' => 'xa-cassau',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Camaxilo',
                    'slug' => 'camaxilo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Luangue',
                    'slug' => 'luangue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Luremo',
                    'slug' => 'luremo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Canzar',
                    'slug' => 'canzar',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Cassanje Calucala',
                    'slug' => 'cassanje-calucala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Mussungue',
                    'slug' => 'mussungue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 12,
                    'municipio' => 'Cafunfu',
                    'slug' => 'cafunfu',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Cacolo',
                    'slug' => 'cacolo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Dala',
                    'slug' => 'dala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Muconda',
                    'slug' => 'muconda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Saurimo',
                    'slug' => 'saurimo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Chiluage',
                    'slug' => 'chiluage',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Cassai-Sul',
                    'slug' => 'cassai-sul',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Xassengue',
                    'slug' => 'xassengue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Alto Chicapa',
                    'slug' => 'alto-chicapa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Sombo',
                    'slug' => 'sombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Muriege',
                    'slug' => 'muriege',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Luma Cassai',
                    'slug' => 'luma-cassai',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Cazage',
                    'slug' => 'cazage',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Muangueji',
                    'slug' => 'muangueji',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 13,
                    'municipio' => 'Cassengo',
                    'slug' => 'cassengo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cacuso',
                    'slug' => 'cacuso',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cahombo',
                    'slug' => 'cahombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Calandula',
                    'slug' => 'calandula',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cambundi Catembo',
                    'slug' => 'cambundi-catembo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cangandala',
                    'slug' => 'cangandala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Kiwaba Nzoji',
                    'slug' => 'kiwaba-nzoji',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Kunda Dya Baze',
                    'slug' => 'kunda-dya-baze',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Luquembo',
                    'slug' => 'luquembo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Malanje',
                    'slug' => 'malanje',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Marimba',
                    'slug' => 'marimba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Massango',
                    'slug' => 'massango',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Quela',
                    'slug' => 'quela',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Quirima',
                    'slug' => 'quirima',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cateco Cangola',
                    'slug' => 'cateco-cangola',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cuale',
                    'slug' => 'cuale',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Pungo A Ndongo',
                    'slug' => 'pungo-a-ndongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Ngola Luiji',
                    'slug' => 'ngola-luiji',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Quihuhu',
                    'slug' => 'quihuhu',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Xandel',
                    'slug' => 'xandel',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Cambo Suinginge',
                    'slug' => 'cambo-suinginge',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Milando',
                    'slug' => 'milando',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Quitapa',
                    'slug' => 'quitapa',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Capunda',
                    'slug' => 'capunda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Muquixe',
                    'slug' => 'muquixe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Quêssua',
                    'slug' => 'quessua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Caculama',
                    'slug' => 'caculama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 14,
                    'municipio' => 'Mbanji Ya Ngola',
                    'slug' => 'mbanji-ya-ngola',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Chiúme',
                    'slug' => 'chiume',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Lumbala Nguimbo',
                    'slug' => 'lumbala-nguimbo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Camanongue',
                    'slug' => 'camanongue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Léua',
                    'slug' => 'leua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Alto Cuito',
                    'slug' => 'alto-cuito',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Lutembo',
                    'slug' => 'lutembo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Cangumbe',
                    'slug' => 'cangumbe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Luena',
                    'slug' => 'luena',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Cangamba',
                    'slug' => 'cangamba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Lucusse',
                    'slug' => 'lucusse',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Ninda',
                    'slug' => 'ninda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 15,
                    'municipio' => 'Lutuai',
                    'slug' => 'lutuai',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Moçâmedes',
                    'slug' => 'mocamedes',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Camucuio',
                    'slug' => 'camucuio',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Bibala',
                    'slug' => 'bibala',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Virei',
                    'slug' => 'virei',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Tômbua',
                    'slug' => 'tombua',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Lucira',
                    'slug' => 'lucira',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Iona',
                    'slug' => 'iona',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Sacomar',
                    'slug' => 'sacomar',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 16,
                    'municipio' => 'Cacimbas',
                    'slug' => 'cacimbas',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Uíge',
                    'slug' => 'uige',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Cangola',
                    'slug' => 'cangola',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Ambuíla',
                    'slug' => 'ambuíla',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Bembe',
                    'slug' => 'bembe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Nova Esperança',
                    'slug' => 'nova-esperanca',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Bungo',
                    'slug' => 'bungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Milunga',
                    'slug' => 'milunga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Damba',
                    'slug' => 'damba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Maquela do Zombo',
                    'slug' => 'maquela-do-zombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Mucaba',
                    'slug' => 'mucaba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Negage',
                    'slug' => 'negage',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Puri',
                    'slug' => 'puri',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Quimbele',
                    'slug' => 'quimbele',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Dange Quitexe',
                    'slug' => 'dange-quitexe',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Sanza Pombo',
                    'slug' => 'sanza-pombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Songo',
                    'slug' => 'songo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Sacandica',
                    'slug' => 'sacandica',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Nsosso',
                    'slug' => 'nsosso',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Lucunga',
                    'slug' => 'lucunga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Quipedro',
                    'slug' => 'quipedro',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Massau',
                    'slug' => 'massau',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Vista Alegre',
                    'slug' => 'vista-alegre',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 17,
                    'municipio' => 'Alto Zaza',
                    'slug' => 'alto-zaza',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Mbanza Kongo',
                    'slug' => 'mbanza-kongo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Soyo',
                    'slug' => 'soyo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Nzeto',
                    'slug' => 'nzeto',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Cuimba',
                    'slug' => 'cuimba',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Nóqui',
                    'slug' => 'noqui',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Tomboco',
                    'slug' => 'tomboco',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Luvo',
                    'slug' => 'luvo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Lufico',
                    'slug' => 'lufico',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Quêlo',
                    'slug' => 'quelo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Serra de Canda',
                    'slug' => 'serra-de-canda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 18,
                    'municipio' => 'Quindeje',
                    'slug' => 'quindeje',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Cazombo',
                    'slug' => 'cazombo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Luacano',
                    'slug' => 'luacano',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Cameia',
                    'slug' => 'cameia',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Luau',
                    'slug' => 'luau',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Nana Candundo',
                    'slug' => 'nana-candundo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Macondo',
                    'slug' => 'macondo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Caianda',
                    'slug' => 'caianda',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Lóvua do Zambeze',
                    'slug' => 'lovua-do-zambeze',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 19,
                    'municipio' => 'Lago Dilolo',
                    'slug' => 'lago-dilolo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Cuito Cuanavale',
                    'slug' => 'cuito-cuanavale',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Dirico',
                    'slug' => 'dirico',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Mavinga',
                    'slug' => 'mavinga',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Rivungo',
                    'slug' => 'rivungo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Xipundo',
                    'slug' => 'xipundo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Dima',
                    'slug' => 'dima',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Luiana',
                    'slug' => 'luiana',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Mucusso',
                    'slug' => 'mucusso',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 20,
                    'municipio' => 'Luengue',
                    'slug' => 'luengue',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Catete',
                    'slug' => 'catete',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Quiçama',
                    'slug' => 'quicama',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Calumbo',
                    'slug' => 'calumbo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Cabiri',
                    'slug' => 'cabiri',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Cabo Ledo',
                    'slug' => 'cabo-ledo',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Bom Jesus',
                    'slug' => 'bom-jesus',
                    'distritos' => []
                ],
                [
                    'provincia_id' => 21,
                    'municipio' => 'Sequele',
                    'slug' => 'sequele',
                    'distritos' => []
                ],
            ];

            foreach ($municipios as $mun) {
                $municipio = Municipio::select('id')->where('slug', $mun['slug'])->limit(1)->first();
                if (isset($municipio['id'])) {

                    foreach ($mun['distritos'] as $distrito) {
                        Distrito::create([
                            'nome' => $distrito,
                            'slug' => $distrito,
                            'municipio_id' => $municipio['id']
                        ]);
                    }
                }
            }
        }
    }
}
