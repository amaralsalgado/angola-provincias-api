<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {


            $municipalities = [
                [
                    'province_id' => 1,
                    'municipality' => 'Bula Atumba',
                    'slug' => 'bula-atumba',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Dande',
                    'slug' => 'dande',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Quibaxe',
                    'slug' => 'quibaxe',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Nambuangongo',
                    'slug' => 'nambuangongo',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Pango Aluquém',
                    'slug' => 'pango-aluquem',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Ambriz',
                    'slug' => 'ambriz',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Muxaluando',
                    'slug' => 'muxaluando',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Piri',
                    'slug' => 'piri',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Quicunzo',
                    'slug' => 'quicunzo',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Úcua',
                    'slug' => 'ucua',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Panguila',
                    'slug' => 'panguila',
                    'districts' => []
                ],
                [
                    'province_id' => 1,
                    'municipality' => 'Barra do Dande',
                    'slug' => 'barra-do-dande',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Baía Farta',
                    'slug' => 'baia-farta',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Balombo',
                    'slug' => 'balombo',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Bocoio',
                    'slug' => 'bocoio',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Caimbambo',
                    'slug' => 'caimbambo',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Catumbela',
                    'slug' => 'catumbela',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Chongorói',
                    'slug' => 'chongoroi',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Cubal',
                    'slug' => 'cubal',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Ganda',
                    'slug' => 'ganda',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Lobito',
                    'slug' => 'lobito',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Benguela',
                    'slug' => 'benguela',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Egito Praia',
                    'slug' => 'egito-praia',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Chindumbo',
                    'slug' => 'chindumbo',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Dombe Grande',
                    'slug' => 'dombe-grande',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Capupa',
                    'slug' => 'capupa',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Biópio',
                    'slug' => 'biopio',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Chila',
                    'slug' => 'chila',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Chicuma',
                    'slug' => 'chicuma',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Babaera',
                    'slug' => 'babaera',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Iambala',
                    'slug' => 'iambala',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Catengue',
                    'slug' => 'catengue',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Bolonguera',
                    'slug' => 'bolonguera',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Canhamela',
                    'slug' => 'canhamela',
                    'districts' => []
                ],
                [
                    'province_id' => 2,
                    'municipality' => 'Navegantes',
                    'slug' => 'navegantes',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Andulo',
                    'slug' => 'andulo',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Camacupa',
                    'slug' => 'camacupa',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Catabola',
                    'slug' => 'catabola',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Chinguar',
                    'slug' => 'chinguar',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Chitembo',
                    'slug' => 'chitembo',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Cuemba',
                    'slug' => 'cuemba',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Cuito',
                    'slug' => 'cuito',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Cunhinga',
                    'slug' => 'cunhinga',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Nharêa',
                    'slug' => 'nharea',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Luando',
                    'slug' => 'luando',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Ringoma',
                    'slug' => 'ringoma',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Mumbuê',
                    'slug' => 'mumbue',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'CalucingA',
                    'slug' => 'calucinga',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Chicala',
                    'slug' => 'chicala',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Chipeta',
                    'slug' => 'chipeta',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Umpulo',
                    'slug' => 'umpulo',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Lúbia',
                    'slug' => 'lubia',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Cambândua',
                    'slug' => 'cambandua',
                    'districts' => []
                ],
                [
                    'province_id' => 3,
                    'municipality' => 'Belo Horizonte',
                    'slug' => 'belo-horizonte',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Belize',
                    'slug' => 'belize',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Buco-Zau',
                    'slug' => 'buco-zau',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Cabinda',
                    'slug' => 'cabinda',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Cacongo',
                    'slug' => 'cacongo',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Miconje',
                    'slug' => 'miconje',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Massabi',
                    'slug' => 'massabi',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Necuto',
                    'slug' => 'necuto',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Tando Zinze',
                    'slug' => 'tando-zinze',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Liambo',
                    'slug' => 'liambo',
                    'districts' => []
                ],
                [
                    'province_id' => 4,
                    'municipality' => 'Ngoio',
                    'slug' => 'ngoio',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Calai',
                    'slug' => 'calai',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Cuangar',
                    'slug' => 'cuangar',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Cuchi',
                    'slug' => 'cuchi',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Cutato',
                    'slug' => 'cutato',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Caiundo',
                    'slug' => 'caiundo',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Longa',
                    'slug' => 'longa',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Menongue',
                    'slug' => 'menongue',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Nancova',
                    'slug' => 'nancova',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Savate',
                    'slug' => 'savate',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Chinguanja',
                    'slug' => 'chinguanja',
                    'districts' => []
                ],
                [
                    'province_id' => 5,
                    'municipality' => 'Mavengue',
                    'slug' => 'mavengue',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Ambaca',
                    'slug' => 'ambaca',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Banga',
                    'slug' => 'banga',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Bolongongo',
                    'slug' => 'bolongongo',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Cambambe',
                    'slug' => 'cambambe',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Cazengo',
                    'slug' => 'cazengo',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Golungo Alto',
                    'slug' => 'golungo-alto',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Lucala',
                    'slug' => 'lucala',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Ngonguembo',
                    'slug' => 'ngonguembo',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Quiculungo',
                    'slug' => 'quiculungo',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Samba Cajú',
                    'slug' => 'samba-caju',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Massangano',
                    'slug' => 'massangano',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Cêrca',
                    'slug' => 'cerca',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Tango',
                    'slug' => 'tango',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Terreiro',
                    'slug' => 'terreiro',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Aldeia Nova',
                    'slug' => 'aldeia-nova',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Caculo Cabaça',
                    'slug' => 'caculo-cabaca',
                    'districts' => []
                ],
                [
                    'province_id' => 6,
                    'municipality' => 'Luinga',
                    'slug' => 'luinga',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Gabela',
                    'slug' => 'gabela',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Cassongue',
                    'slug' => 'cassongue',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Waku Kungo',
                    'slug' => 'waku-kungo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Conda',
                    'slug' => 'conda',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Ebo',
                    'slug' => 'ebo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Calulo',
                    'slug' => 'calulo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Mussende',
                    'slug' => 'mussende',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Porto Amboim',
                    'slug' => 'porto-amboim',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Quibala',
                    'slug' => 'quibala',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Quilenda',
                    'slug' => 'quilenda',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Seles',
                    'slug' => 'seles',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Sumbe',
                    'slug' => 'sumbe',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Quirimbo',
                    'slug' => 'quirimbo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Munenga',
                    'slug' => 'munenga',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Quissongo',
                    'slug' => 'quissongo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Gungo',
                    'slug' => 'gungo',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Sanga',
                    'slug' => 'sanga',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Gangula',
                    'slug' => 'gangula',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Pambangala',
                    'slug' => 'pambangala',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Condé',
                    'slug' => 'conde',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Amboiva',
                    'slug' => 'amboiva',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Lonhe',
                    'slug' => 'lonhe',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Quenha',
                    'slug' => 'quenha',
                    'districts' => []
                ],
                [
                    'province_id' => 7,
                    'municipality' => 'Boa Entrada',
                    'slug' => 'boa-entrada',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Cahama',
                    'slug' => 'cahama',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Cuanhama',
                    'slug' => 'cuanhama',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Curoca',
                    'slug' => 'curoca',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Cuvelai',
                    'slug' => 'cuvelai',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Namacunde',
                    'slug' => 'namacunde',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Ombadja',
                    'slug' => 'ombadja',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Chiéde',
                    'slug' => 'chiede',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Nehone',
                    'slug' => 'nehone',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Humbe',
                    'slug' => 'humbe',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Mupa',
                    'slug' => 'mupa',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Naulila',
                    'slug' => 'naulila',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Chitado',
                    'slug' => 'chitado',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Cafima',
                    'slug' => 'cafima',
                    'districts' => []
                ],
                [
                    'province_id' => 8,
                    'municipality' => 'Chissuata',
                    'slug' => 'chissuata',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Bailundo',
                    'slug' => 'bailundo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Caála',
                    'slug' => 'caala',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Cachiungo',
                    'slug' => 'cachiungo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Chicala Choloanga',
                    'slug' => 'chicala-choloanga',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Chinjenje',
                    'slug' => 'chinjenje',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Ecunha',
                    'slug' => 'ecunha',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Huambo',
                    'slug' => 'huambo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Londuimbali',
                    'slug' => 'londuimbali',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Longonjo',
                    'slug' => 'longonjo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Mungo',
                    'slug' => 'mungo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Ucuma',
                    'slug' => 'ucuma',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Bimbe',
                    'slug' => 'bimbe',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Sambo',
                    'slug' => 'sambo',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Galanga',
                    'slug' => 'galanga',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Alto Hama',
                    'slug' => 'alto-hama',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Chilata',
                    'slug' => 'chilata',
                    'districts' => []
                ],
                [
                    'province_id' => 9,
                    'municipality' => 'Cuima',
                    'slug' => 'cuima',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Caconda',
                    'slug' => 'caconda',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Cacula',
                    'slug' => 'cacula',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Caluquembe',
                    'slug' => 'caluquembe',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Chibia',
                    'slug' => 'chibia',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Chicomba',
                    'slug' => 'chicomba',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Chipindo',
                    'slug' => 'chipindo',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Cuvango',
                    'slug' => 'cuvango',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Gambos',
                    'slug' => 'gambos',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Humpata',
                    'slug' => 'humpata',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Jamba Mineira',
                    'slug' => 'jamba-mineira',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Lubango',
                    'slug' => 'lubango',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Matala',
                    'slug' => 'matala',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Quilengues',
                    'slug' => 'quilengues',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Quipungo',
                    'slug' => 'quipungo',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Dongo',
                    'slug' => 'dongo',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Hoque',
                    'slug' => 'hoque',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Capelongo',
                    'slug' => 'capelongo',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Chituto',
                    'slug' => 'chituto',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Capunda Cavilongo',
                    'slug' => 'capunda-cavilongo',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Viti Vivali',
                    'slug' => 'viti-vivali',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Galangue',
                    'slug' => 'galangue',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Palanca',
                    'slug' => 'palanca',
                    'districts' => []
                ],
                [
                    'province_id' => 10,
                    'municipality' => 'Chicungo',
                    'slug' => 'chicungo',
                    'districts' => [],
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Belas',
                    'slug' => 'belas',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Cacuaco',
                    'slug' => 'cacuaco',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Cazenga',
                    'slug' => 'cazenga',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Kilamba Kiaxi',
                    'slug' => 'kilamba-kiaxi',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Viana',
                    'slug' => 'viana',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Mussulo',
                    'slug' => 'mussulo',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Sambizanga',
                    'slug' => 'sambizanga',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Rangel',
                    'slug' => 'rangel',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Maianga',
                    'slug' => 'maianga',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Samba',
                    'slug' => 'samba',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Camama',
                    'slug' => 'camama',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Mulenvos',
                    'slug' => 'mulenvos',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Kilamba',
                    'slug' => 'kilamba',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Hoji Ya Henda',
                    'slug' => 'hoji-ya-henda',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Ingombota',
                    'slug' => 'ingombota',
                    'districts' => []
                ],
                [
                    'province_id' => 11,
                    'municipality' => 'Talatona',
                    'slug' => 'talatona',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Cambulo',
                    'slug' => 'cambulo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Capenda Camulemba',
                    'slug' => 'capenda-camulemba',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Caungula',
                    'slug' => 'caungula',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Chitato',
                    'slug' => 'chitato',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Cuango',
                    'slug' => 'cuango',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Cuílo',
                    'slug' => 'cuilo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Lubalo',
                    'slug' => 'lubalo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Lucapa',
                    'slug' => 'lucapa',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Lóvua',
                    'slug' => 'lovua',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Xá-Muteba',
                    'slug' => 'xa-muteba',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Dundo',
                    'slug' => 'dundo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Xá Cassau',
                    'slug' => 'xa-cassau',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Camaxilo',
                    'slug' => 'camaxilo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Luangue',
                    'slug' => 'luangue',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Luremo',
                    'slug' => 'luremo',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Canzar',
                    'slug' => 'canzar',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Cassanje Calucala',
                    'slug' => 'cassanje-calucala',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Mussungue',
                    'slug' => 'mussungue',
                    'districts' => []
                ],
                [
                    'province_id' => 12,
                    'municipality' => 'Cafunfu',
                    'slug' => 'cafunfu',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Cacolo',
                    'slug' => 'cacolo',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Dala',
                    'slug' => 'dala',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Muconda',
                    'slug' => 'muconda',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Saurimo',
                    'slug' => 'saurimo',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Chiluage',
                    'slug' => 'chiluage',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Cassai-Sul',
                    'slug' => 'cassai-sul',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Xassengue',
                    'slug' => 'xassengue',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Alto Chicapa',
                    'slug' => 'alto-chicapa',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Sombo',
                    'slug' => 'sombo',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Muriege',
                    'slug' => 'muriege',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Luma Cassai',
                    'slug' => 'luma-cassai',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Cazage',
                    'slug' => 'cazage',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Muangueji',
                    'slug' => 'muangueji',
                    'districts' => []
                ],
                [
                    'province_id' => 13,
                    'municipality' => 'Cassengo',
                    'slug' => 'cassengo',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cacuso',
                    'slug' => 'cacuso',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cahombo',
                    'slug' => 'cahombo',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Calandula',
                    'slug' => 'calandula',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cambundi Catembo',
                    'slug' => 'cambundi-catembo',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cangandala',
                    'slug' => 'cangandala',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Kiwaba Nzoji',
                    'slug' => 'kiwaba-nzoji',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Kunda Dya Baze',
                    'slug' => 'kunda-dya-baze',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Luquembo',
                    'slug' => 'luquembo',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Malanje',
                    'slug' => 'malanje',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Marimba',
                    'slug' => 'marimba',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Massango',
                    'slug' => 'massango',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Quela',
                    'slug' => 'quela',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Quirima',
                    'slug' => 'quirima',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cateco Cangola',
                    'slug' => 'cateco-cangola',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cuale',
                    'slug' => 'cuale',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Pungo A Ndongo',
                    'slug' => 'pungo-a-ndongo',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Ngola Luiji',
                    'slug' => 'ngola-luiji',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Quihuhu',
                    'slug' => 'quihuhu',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Xandel',
                    'slug' => 'xandel',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Cambo Suinginge',
                    'slug' => 'cambo-suinginge',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Milando',
                    'slug' => 'milando',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Quitapa',
                    'slug' => 'quitapa',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Capunda',
                    'slug' => 'capunda',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Muquixe',
                    'slug' => 'muquixe',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Quêssua',
                    'slug' => 'quessua',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Caculama',
                    'slug' => 'caculama',
                    'districts' => []
                ],
                [
                    'province_id' => 14,
                    'municipality' => 'Mbanji Ya Ngola',
                    'slug' => 'mbanji-ya-ngola',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Chiúme',
                    'slug' => 'chiume',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Lumbala Nguimbo',
                    'slug' => 'lumbala-nguimbo',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Camanongue',
                    'slug' => 'camanongue',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Léua',
                    'slug' => 'leua',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Alto Cuito',
                    'slug' => 'alto-cuito',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Lutembo',
                    'slug' => 'lutembo',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Cangumbe',
                    'slug' => 'cangumbe',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Luena',
                    'slug' => 'luena',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Cangamba',
                    'slug' => 'cangamba',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Lucusse',
                    'slug' => 'lucusse',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Ninda',
                    'slug' => 'ninda',
                    'districts' => []
                ],
                [
                    'province_id' => 15,
                    'municipality' => 'Lutuai',
                    'slug' => 'lutuai',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Moçâmedes',
                    'slug' => 'mocamedes',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Camucuio',
                    'slug' => 'camucuio',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Bibala',
                    'slug' => 'bibala',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Virei',
                    'slug' => 'virei',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Tômbua',
                    'slug' => 'tombua',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Lucira',
                    'slug' => 'lucira',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Iona',
                    'slug' => 'iona',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Sacomar',
                    'slug' => 'sacomar',
                    'districts' => []
                ],
                [
                    'province_id' => 16,
                    'municipality' => 'Cacimbas',
                    'slug' => 'cacimbas',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Uíge',
                    'slug' => 'uige',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Cangola',
                    'slug' => 'cangola',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Ambuíla',
                    'slug' => 'ambuíla',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Bembe',
                    'slug' => 'bembe',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Nova Esperança',
                    'slug' => 'nova-esperanca',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Bungo',
                    'slug' => 'bungo',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Milunga',
                    'slug' => 'milunga',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Damba',
                    'slug' => 'damba',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Maquela do Zombo',
                    'slug' => 'maquela-do-zombo',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Mucaba',
                    'slug' => 'mucaba',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Negage',
                    'slug' => 'negage',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Puri',
                    'slug' => 'puri',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Quimbele',
                    'slug' => 'quimbele',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Dange Quitexe',
                    'slug' => 'dange-quitexe',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Sanza Pombo',
                    'slug' => 'sanza-pombo',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Songo',
                    'slug' => 'songo',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Sacandica',
                    'slug' => 'sacandica',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Nsosso',
                    'slug' => 'nsosso',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Lucunga',
                    'slug' => 'lucunga',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Quipedro',
                    'slug' => 'quipedro',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Massau',
                    'slug' => 'massau',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Vista Alegre',
                    'slug' => 'vista-alegre',
                    'districts' => []
                ],
                [
                    'province_id' => 17,
                    'municipality' => 'Alto Zaza',
                    'slug' => 'alto-zaza',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Mbanza Kongo',
                    'slug' => 'mbanza-kongo',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Soyo',
                    'slug' => 'soyo',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Nzeto',
                    'slug' => 'nzeto',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Cuimba',
                    'slug' => 'cuimba',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Nóqui',
                    'slug' => 'noqui',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Tomboco',
                    'slug' => 'tomboco',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Luvo',
                    'slug' => 'luvo',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Lufico',
                    'slug' => 'lufico',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Quêlo',
                    'slug' => 'quelo',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Serra de Canda',
                    'slug' => 'serra-de-canda',
                    'districts' => []
                ],
                [
                    'province_id' => 18,
                    'municipality' => 'Quindeje',
                    'slug' => 'quindeje',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Cazombo',
                    'slug' => 'cazombo',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Luacano',
                    'slug' => 'luacano',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Cameia',
                    'slug' => 'cameia',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Luau',
                    'slug' => 'luau',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Nana Candundo',
                    'slug' => 'nana-candundo',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Macondo',
                    'slug' => 'macondo',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Caianda',
                    'slug' => 'caianda',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Lóvua do Zambeze',
                    'slug' => 'lovua-do-zambeze',
                    'districts' => []
                ],
                [
                    'province_id' => 19,
                    'municipality' => 'Lago Dilolo',
                    'slug' => 'lago-dilolo',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Cuito Cuanavale',
                    'slug' => 'cuito-cuanavale',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Dirico',
                    'slug' => 'dirico',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Mavinga',
                    'slug' => 'mavinga',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Rivungo',
                    'slug' => 'rivungo',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Xipundo',
                    'slug' => 'xipundo',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Dima',
                    'slug' => 'dima',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Luiana',
                    'slug' => 'luiana',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Mucusso',
                    'slug' => 'mucusso',
                    'districts' => []
                ],
                [
                    'province_id' => 20,
                    'municipality' => 'Luengue',
                    'slug' => 'luengue',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Catete',
                    'slug' => 'catete',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Quiçama',
                    'slug' => 'quicama',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Calumbo',
                    'slug' => 'calumbo',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Cabiri',
                    'slug' => 'cabiri',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Cabo Ledo',
                    'slug' => 'cabo-ledo',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Bom Jesus',
                    'slug' => 'bom-jesus',
                    'districts' => []
                ],
                [
                    'province_id' => 21,
                    'municipality' => 'Sequele',
                    'slug' => 'sequele',
                    'districts' => []
                ],
            ];

            foreach ($municipalities as $mun) {
                $municipality = Municipality::select('id')->where('slug', $mun['slug'])->limit(1)->first();
                if (isset($municipality['id'])) {

                    foreach ($mun['districts'] as $district) {
                        District::create([
                            'name' => $district,
                            'slug' => $district,
                            'municipality_id' => $municipality['id']
                        ]);
                    }
                }
            }
        }
    }
}
