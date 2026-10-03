<?php

namespace Database\Seeders;

use App\Models\Commune;
use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $municipalities = [
            [
                'province_id' => 1,
                'municipality' => 'Bula Atumba',
                'slug' => 'bula-atumba',
                'communes' => ['Bula Atumba', 'Quiage']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Dande',
                'slug' => 'dande',
                'communes' => ['Caxito', 'Mabubas', 'Quicabo']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Quibaxe',
                'slug' => 'quibaxe',
                'communes' => ['Coxe', 'Paredes', 'Quibaxe']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Nambuangongo',
                'slug' => 'nambuangongo',
                'communes' => ['Canacassala', 'Gombe', 'Zala']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Pango Aluquém',
                'slug' => 'pango-aluquem',
                'communes' => ['Pango Aluquém', 'Cazuangongo']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Ambriz',
                'slug' => 'ambriz',
                'communes' => ['Ambriz', 'Bela Vista', 'Tabi']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Muxaluando',
                'slug' => 'muxaluando',
                'communes' => ['Muxaluando', 'Quixico', 'Cage Mazumbo']
            ],
            [
                'province_id' => 1,
                'municipality' => 'Piri',
                'slug' => 'piri',
                'communes' => []
            ],
            [
                'province_id' => 1,
                'municipality' => 'Quicunzo',
                'slug' => 'quicunzo',
                'communes' => []
            ],
            [
                'province_id' => 1,
                'municipality' => 'Úcua',
                'slug' => 'ucua',
                'communes' => []
            ],
            [
                'province_id' => 1,
                'municipality' => 'Pangila',
                'slug' => 'pangila',
                'communes' => []
            ],
            [
                'province_id' => 1,
                'municipality' => 'Barra do Dande',
                'slug' => 'barra-do-dande',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Baía Farta',
                'slug' => 'baia-farta',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Balombo',
                'slug' => 'balombo',
                'communes' => ['Balombo', 'Maca Mombolo']
            ],
            [
                'province_id' => 2,
                'municipality' => 'Bocoio',
                'slug' => 'bocoio',
                'communes' => ['Bocoio', 'Cubal do Lumbo', 'Monte Belo']
            ],
            [
                'province_id' => 2,
                'municipality' => 'Caimbambo',
                'slug' => 'caimbambo',
                'communes' => ['Caimbambo', 'Caiave', 'Viangombe']
            ],
            [
                'province_id' => 2,
                'municipality' => 'Catumbela',
                'slug' => 'catumbela',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Chongorói',
                'slug' => 'chongoroi',
                'communes' => ['Chongorói', 'Camuine']
            ],
            [
                'province_id' => 2,
                'municipality' => 'Cubal',
                'slug' => 'cubal',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Ganda',
                'slug' => 'ganda',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Lobito',
                'slug' => 'lobito',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Benguela',
                'slug' => 'benguela',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Egito Praia',
                'slug' => 'egito-praia',
                'communes' => ['Egito Praia', 'Canjala']
            ],
            [
                'province_id' => 2,
                'municipality' => 'Chindumbo',
                'slug' => 'chindumbo',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Dombe Grande',
                'slug' => 'dombe-grande',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Capupa',
                'slug' => 'capupa',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Biópio',
                'slug' => 'biopio',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Chila',
                'slug' => 'chila',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Chicuma',
                'slug' => 'chicuma',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Babaera',
                'slug' => 'babaera',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Iambala',
                'slug' => 'iambala',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Catengue',
                'slug' => 'catengue',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Bolonguera',
                'slug' => 'bolonguera',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Canhamela',
                'slug' => 'canhamela',
                'communes' => []
            ],
            [
                'province_id' => 2,
                'municipality' => 'Navegantes',
                'slug' => 'navegantes',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Andulo',
                'slug' => 'andulo',
                'communes' => ['Andulo', 'Cassumbe', 'Chivaúlo']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Camacupa',
                'slug' => 'camacupa',
                'communes' => ['Camacupa', 'Cuanza', 'Muinha']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Catabola',
                'slug' => 'catabola',
                'communes' => ['Catabola', 'Caiuera', 'Sande']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Chinguar',
                'slug' => 'chinguar',
                'communes' => ['Chinguar', 'Cutato', 'Cangote']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Chitembo',
                'slug' => 'chitembo',
                'communes' => ['Chitembo', 'Cachingues', 'Malengue']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Cuemba',
                'slug' => 'cuemba',
                'communes' => ['Cuemba', 'Munhango', 'Sachinemuna']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Cuito',
                'slug' => 'cuito',
                'communes' => ['Cuito', 'Cunje']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Cunhinga',
                'slug' => 'cunhinga',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Nharêa',
                'slug' => 'nharea',
                'communes' => ['Nharêa', 'Gamba', 'Caieie']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Luando',
                'slug' => 'luando',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Ringoma',
                'slug' => 'ringoma',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Mumbuê',
                'slug' => 'mumbue',
                'communes' => ['Mumbué', 'Mutumbo', 'Soma Cuanza']
            ],
            [
                'province_id' => 3,
                'municipality' => 'CalucingA',
                'slug' => 'calucinga',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Chicala',
                'slug' => 'chicala',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Chipeta',
                'slug' => 'chipeta',
                'communes' => ['Chipeta', 'Chiuca']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Umpulo',
                'slug' => 'umpulo',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Lúbia',
                'slug' => 'lubia',
                'communes' => ['Lúbia', 'Dando']
            ],
            [
                'province_id' => 3,
                'municipality' => 'Cambândua',
                'slug' => 'cambandua',
                'communes' => []
            ],
            [
                'province_id' => 3,
                'municipality' => 'Belo Horizonte',
                'slug' => 'belo-horizonte',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Belize',
                'slug' => 'belize',
                'communes' => ['Luali', 'Belize']
            ],
            [
                'province_id' => 4,
                'municipality' => 'Buco-Zau',
                'slug' => 'buco-zau',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Cabinda',
                'slug' => 'cabinda',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Cacongo',
                'slug' => 'cacongo',
                'communes' => ['Dinge', 'Lândana']
            ],
            [
                'province_id' => 4,
                'municipality' => 'Miconje',
                'slug' => 'miconje',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Massabi',
                'slug' => 'massabi',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Necuto',
                'slug' => 'necuto',
                'communes' => ['Necuto', 'Inhuca']
            ],
            [
                'province_id' => 4,
                'municipality' => 'Tando Zinze',
                'slug' => 'tando-zinze',
                'communes' => ['Tando Zinze', 'Malembo']
            ],
            [
                'province_id' => 4,
                'municipality' => 'Liambo',
                'slug' => 'liambo',
                'communes' => []
            ],
            [
                'province_id' => 4,
                'municipality' => 'Ngoio',
                'slug' => 'ngoio',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Calai',
                'slug' => 'calai',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Cuangar',
                'slug' => 'cuangar',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Cuchi',
                'slug' => 'cuchi',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Cutato',
                'slug' => 'cutato',
                'communes' => ['Cutato', 'Vissati']
            ],
            [
                'province_id' => 5,
                'municipality' => 'Caiundo',
                'slug' => 'caiundo',
                'communes' => ['Caiundo', 'Jamba Cueio']
            ],
            [
                'province_id' => 5,
                'municipality' => 'Longa',
                'slug' => 'longa',
                'communes' => ['Longa', 'Baixo Longa']
            ],
            [
                'province_id' => 5,
                'municipality' => 'Menongue',
                'slug' => 'menongue',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Nancova',
                'slug' => 'nancova',
                'communes' => ['Nancova', 'Rito']
            ],
            [
                'province_id' => 5,
                'municipality' => 'Savate',
                'slug' => 'savate',
                'communes' => ['Savate', 'Bondo Caíla']
            ],
            [
                'province_id' => 5,
                'municipality' => 'Chinguanja',
                'slug' => 'chinguanja',
                'communes' => []
            ],
            [
                'province_id' => 5,
                'municipality' => 'Mavengue',
                'slug' => 'mavengue',
                'communes' => ['Mavengue', 'Maué']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Ambaca',
                'slug' => 'ambaca',
                'communes' => ['Camabatela', 'Máua', 'Bindo']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Banga',
                'slug' => 'banga',
                'communes' => ['Banga', 'Cariamba']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Bolongongo',
                'slug' => 'bolongongo',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Cambambe',
                'slug' => 'cambambe',
                'communes' => ['Dondo', 'Dange ya Menha', 'São Pedro da Quilemba']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Cazengo',
                'slug' => 'cazengo',
                'communes' => ['Caculo Camuiza', 'Ndalatando']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Golungo Alto',
                'slug' => 'golungo-alto',
                'communes' => ['Golungo Alto', 'Cambondo', 'Quilombo quía Puto']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Lucala',
                'slug' => 'lucala',
                'communes' => ['Lucala', 'Quiangombe']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Ngonguembo',
                'slug' => 'ngonguembo',
                'communes' => ['Quilombo dos Dembos', 'Camame', 'Cavunga']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Quiculungo',
                'slug' => 'quiculungo',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Samba Cajú',
                'slug' => 'samba-caju',
                'communes' => ['Samba caju', 'Samba Lucala']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Massangano',
                'slug' => 'massangano',
                'communes' => ['Massangano', 'Zenza do Itombe']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Cêrca',
                'slug' => 'cerca',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Tango',
                'slug' => 'tango',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Terreiro',
                'slug' => 'terreiro',
                'communes' => ['Terreiro', 'Quiquiemba']
            ],
            [
                'province_id' => 6,
                'municipality' => 'Aldeia Nova',
                'slug' => 'aldeia-nova',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Caculo Cabaça',
                'slug' => 'caculo-cabaca',
                'communes' => []
            ],
            [
                'province_id' => 6,
                'municipality' => 'Luinga',
                'slug' => 'luinga',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Gabela',
                'slug' => 'gabela',
                'communes' => ['Gabela', 'Assango']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Cassongue',
                'slug' => 'cassongue',
                'communes' => ['Cassongue', 'Atóme', 'Dumbi']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Waku Kungo',
                'slug' => 'waku-kungo',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Conda',
                'slug' => 'conda',
                'communes' => ['Cunjo', 'Conda']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Ebo',
                'slug' => 'ebo',
                'communes' => ['Ebo', 'Cassanje']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Calulo',
                'slug' => 'calulo',
                'communes' => ['Calulo', 'Cabuta']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Mussende',
                'slug' => 'mussende',
                'communes' => ['Mussende', 'Quipaxi']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Porto Amboim',
                'slug' => 'porto-amboim',
                'communes' => ['Porto Amboim', 'Capolo']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Quibala',
                'slug' => 'quibala',
                'communes' => ['Quibala', 'Dala Cachibo']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Quilenda',
                'slug' => 'quilenda',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Seles',
                'slug' => 'seles',
                'communes' => ['Seles', 'Botera']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Sumbe',
                'slug' => 'sumbe',
                'communes' => ['Sumbe', 'Quicombo']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Quirimbo',
                'slug' => 'quirimbo',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Munenga',
                'slug' => 'munenga',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Quissongo',
                'slug' => 'quissongo',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Gungo',
                'slug' => 'gungo',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Sanga',
                'slug' => 'sanga',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Gangula',
                'slug' => 'gangula',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Pambangala',
                'slug' => 'pambangala',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Condé',
                'slug' => 'conde',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Amboiva',
                'slug' => 'amboiva',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Lonhe',
                'slug' => 'lonhe',
                'communes' => ['Lonhe', 'Cariango']
            ],
            [
                'province_id' => 7,
                'municipality' => 'Quenha',
                'slug' => 'quenha',
                'communes' => []
            ],
            [
                'province_id' => 7,
                'municipality' => 'Boa Entrada',
                'slug' => 'boa-entrada',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Cahama',
                'slug' => 'cahama',
                'communes' => ['Cahama', 'Otchinjau']
            ],
            [
                'province_id' => 8,
                'municipality' => 'Cuanhama',
                'slug' => 'cuanhama',
                'communes' => ['Ondjiva', 'Môngua']
            ],
            [
                'province_id' => 8,
                'municipality' => 'Curoca',
                'slug' => 'curoca',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Cuvelai',
                'slug' => 'cuvelai',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Namacunde',
                'slug' => 'namacunde',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Ombandja',
                'slug' => 'ombandja',
                'communes' => ['Xangongo', 'Ombala yo Mungu']
            ],
            [
                'province_id' => 8,
                'municipality' => 'Chiéde',
                'slug' => 'chiede',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Nehone',
                'slug' => 'nehone',
                'communes' => ['Nehone', 'Evale']
            ],
            [
                'province_id' => 8,
                'municipality' => 'Humbe',
                'slug' => 'humbe',
                'communes' => ['Mucope', 'Humbe']
            ],
            [
                'province_id' => 8,
                'municipality' => 'Mupa',
                'slug' => 'mupa',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Naulila',
                'slug' => 'naulila',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Chitado',
                'slug' => 'chitado',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Cafima',
                'slug' => 'cafima',
                'communes' => []
            ],
            [
                'province_id' => 8,
                'municipality' => 'Chissuata',
                'slug' => 'chissuata',
                'communes' => []
            ],
            [
                'province_id' => 9,
                'municipality' => 'Bailundo',
                'slug' => 'bailundo',
                'communes' => ['Bailundo', 'Lunge', 'Luvemba']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Caála',
                'slug' => 'caala',
                'communes' => []
            ],
            [
                'province_id' => 9,
                'municipality' => 'Cachiungo',
                'slug' => 'cachiungo',
                'communes' => ['Chinhama', 'Cachiungo']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Chicala Choloanga',
                'slug' => 'chicala-choloanga',
                'communes' => ['Mbave', 'Chicala']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Chinjenje',
                'slug' => 'chinjenje',
                'communes' => ['Chinjenje', 'Chiaca']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Ecunha',
                'slug' => 'ecunha',
                'communes' => ['Ecunha', 'Quipeio']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Huambo',
                'slug' => 'huambo',
                'communes' => ['Huambo', 'Calima']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Londuimbali',
                'slug' => 'londuimbali',
                'communes' => ['Londuimbali', 'Ussoque']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Longonjo',
                'slug' => 'longonjo',
                'communes' => ['Longonjo', 'Lépi']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Mungo',
                'slug' => 'mungo',
                'communes' => ['Mungo', 'Cambuengo']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Ucuma',
                'slug' => 'ucuma',
                'communes' => ['Ucuma', 'Cacoma', 'Mundundo']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Bimbe',
                'slug' => 'bimbe',
                'communes' => ['Bimbe', 'Hengue']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Sambo',
                'slug' => 'sambo',
                'communes' => ['Sambo', 'Samboto']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Galanga',
                'slug' => 'galanga',
                'communes' => ['Galanga', 'Cumbira']
            ],
            [
                'province_id' => 9,
                'municipality' => 'Alto Hama',
                'slug' => 'alto-hama',
                'communes' => []
            ],
            [
                'province_id' => 9,
                'municipality' => 'Chilata',
                'slug' => 'chilata',
                'communes' => []
            ],
            [
                'province_id' => 9,
                'municipality' => 'Cuima',
                'slug' => 'cuima',
                'communes' => ['Cuima', 'Catata']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Caconda',
                'slug' => 'caconda',
                'communes' => ['Caconda', 'Gungue', 'Uaba', 'Cusse']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Cacula',
                'slug' => 'cacula',
                'communes' => ['Cacula', 'Tchicuaqueia']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Caluquembe',
                'slug' => 'caluquembe',
                'communes' => ['Caluquembe', 'Calepi', 'Negola']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Chibia',
                'slug' => 'chibia',
                'communes' => ['Chibia', 'Jau']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Chicomba',
                'slug' => 'chicomba',
                'communes' => ['Chicomba', 'Cutenda']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Chipindo',
                'slug' => 'chipindo',
                'communes' => ['Chipindo', 'Bambi']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Cuvango',
                'slug' => 'cuvango',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Gambos',
                'slug' => 'gambos',
                'communes' => ['Chiange', 'Chimbemba']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Humpata',
                'slug' => 'humpata',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Jamba Mineira',
                'slug' => 'jamba-mineira',
                'communes' => ['Cassinga', 'Jamba Mineira']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Lubango',
                'slug' => 'lubango',
                'communes' => ['Lubango', 'Huíla']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Matala',
                'slug' => 'matala',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Quilengues',
                'slug' => 'quilengues',
                'communes' => ['Quilengues', 'Impulo', 'Dinde']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Quipungo',
                'slug' => 'quipungo',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Dongo',
                'slug' => 'dongo',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Hoque',
                'slug' => 'hoque',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Capelongo',
                'slug' => 'capelongo',
                'communes' => ['Capelongo', 'Mulondo']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Chituto',
                'slug' => 'chituto',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Capunda Cavilongo',
                'slug' => 'capunda-cavilongo',
                'communes' => ['Capunda Cavilongo', 'Quihita']
            ],
            [
                'province_id' => 10,
                'municipality' => 'Viti Vivali',
                'slug' => 'viti-vivali',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Galangue',
                'slug' => 'galangue',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Palanca',
                'slug' => 'palanca',
                'communes' => []
            ],
            [
                'province_id' => 10,
                'municipality' => 'Chicungo',
                'slug' => 'chicungo',
                'communes' => [],
            ],
            [
                'province_id' => 11,
                'municipality' => 'Belas',
                'slug' => 'belas',
                'communes' => ['Benfica', 'Cabolombo', 'Barra do Cuanza', 'Ramiros']
            ],
            [
                'province_id' => 11,
                'municipality' => 'Cacuaco',
                'slug' => 'cacuaco',
                'communes' => ['Cacuaco', 'Kikolo']
            ],
            [
                'province_id' => 11,
                'municipality' => 'Cazenga',
                'slug' => 'cazenga',
                'communes' => ['Cazenga', 'Kima Kieza']
            ],
            [
                'province_id' => 11,
                'municipality' => 'Kilamba Kiaxi',
                'slug' => 'kilamba-kiaxi',
                'communes' => ['Golfe', 'Nova vida']
            ],
            [
                'province_id' => 11,
                'municipality' => 'Viana',
                'slug' => 'viana',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Mussulo',
                'slug' => 'mussulo',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Sambizanga',
                'slug' => 'sambizanga',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Rangel',
                'slug' => 'rangel',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Maianga',
                'slug' => 'maianga',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Samba',
                'slug' => 'samba',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Camama',
                'slug' => 'camama',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Mulenvos',
                'slug' => 'mulenvos',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Kilamba',
                'slug' => 'kilamba',
                'communes' => ['Kilamba', 'Vila Flôr']
            ],
            [
                'province_id' => 11,
                'municipality' => 'Hoji Ya Henda',
                'slug' => 'hoji-ya-henda',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Ingombota',
                'slug' => 'ingombota',
                'communes' => []
            ],
            [
                'province_id' => 11,
                'municipality' => 'Talatona',
                'slug' => 'talatona',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Cambulo',
                'slug' => 'cambulo',
                'communes' => ['Cachimo', 'Nzage']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Capenda Camulemba',
                'slug' => 'capenda-camulemba',
                'communes' => ['Capenda Camulemba', 'Xinge']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Caungula',
                'slug' => 'caungula',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Chitato',
                'slug' => 'chitato',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Cuango',
                'slug' => 'cuango',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Cuílo',
                'slug' => 'cuilo',
                'communes' => ['Caluango', 'Cuílo']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Lubalo',
                'slug' => 'lubalo',
                'communes' => ['Muvuluege', 'Lubalo']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Lucapa',
                'slug' => 'lucapa',
                'communes' => ['Camissombo', 'Lucapa']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Lóvua',
                'slug' => 'lovua',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Xá-Muteba',
                'slug' => 'xa-muteba',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Dundo',
                'slug' => 'dundo',
                'communes' => ['Dundo', 'Luachimo']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Xá Cassau',
                'slug' => 'xa-cassau',
                'communes' => ['Xá Cassau', 'Capaia']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Camaxilo',
                'slug' => 'camaxilo',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Luangue',
                'slug' => 'luangue',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Luremo',
                'slug' => 'luremo',
                'communes' => []
            ],
            [
                'province_id' => 12,
                'municipality' => 'Canzar',
                'slug' => 'canzar',
                'communes' => ['Canzar', 'Luia']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Cassanje Calucala',
                'slug' => 'cassanje-calucala',
                'communes' => ['Cassanje Calucala', 'Iongo']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Mussungue',
                'slug' => 'mussungue',
                'communes' => ['Mussungue', 'Caíta']
            ],
            [
                'province_id' => 12,
                'municipality' => 'Cafunfu',
                'slug' => 'cafunfu',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Cacolo',
                'slug' => 'cacolo',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Dala',
                'slug' => 'dala',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Muconda',
                'slug' => 'muconda',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Saurimo',
                'slug' => 'saurimo',
                'communes' => ['Mona Quimbundo', 'Saurimo']
            ],
            [
                'province_id' => 13,
                'municipality' => 'Chiluage',
                'slug' => 'chiluage',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Cassai-Sul',
                'slug' => 'cassai-sul',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Xassengue',
                'slug' => 'xassengue',
                'communes' => ['Xassengue', 'Cucumbi']
            ],
            [
                'province_id' => 13,
                'municipality' => 'Alto Chicapa',
                'slug' => 'alto-chicapa',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Sombo',
                'slug' => 'sombo',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Muriege',
                'slug' => 'muriege',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Luma Cassai',
                'slug' => 'luma-cassai',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Cazage',
                'slug' => 'cazage',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Muangueji',
                'slug' => 'muangueji',
                'communes' => []
            ],
            [
                'province_id' => 13,
                'municipality' => 'Cassengo',
                'slug' => 'cassengo',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cacuso',
                'slug' => 'cacuso',
                'communes' => ['Cacuso', 'Soqueco']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cahombo',
                'slug' => 'cahombo',
                'communes' => ['Micanda', 'Cahombo']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Calandula',
                'slug' => 'calandula',
                'communes' => ['Calandula', 'Cota']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cambundi Catembo',
                'slug' => 'cambundi-catembo',
                'communes' => ['Cambundi Catembo', 'Dumba Cambango']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cangandala',
                'slug' => 'cangandala',
                'communes' => ['Cangandala', 'Caribo', 'Culamagia']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Kiwaba Nzoji',
                'slug' => 'kiwaba-nzoji',
                'communes' => ['Kiwaba Nzoji', 'Mufuma']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Kunda Dya Baze',
                'slug' => 'kunda-dya-baze',
                'communes' => ['Kunda dya Baze', 'Lemba']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Luquembo',
                'slug' => 'luquembo',
                'communes' => ['Luquembo', 'Dombo wa Zanga']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Malanje',
                'slug' => 'malanje',
                'communes' => ['Malanje', 'Lombe']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Marimba',
                'slug' => 'marimba',
                'communes' => ['Marimba', 'Mangando']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Massango',
                'slug' => 'massango',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Quela',
                'slug' => 'quela',
                'communes' => ['Quela', 'Bângalas']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Quirima',
                'slug' => 'quirima',
                'communes' => ['Quirima', 'Sautar']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cateco Cangola',
                'slug' => 'cateco-cangola',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cuale',
                'slug' => 'cuale',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Pungo A Ndongo',
                'slug' => 'pungo-a-ndongo',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Ngola Luiji',
                'slug' => 'ngola-luiji',
                'communes' => ['Ngola Luiji', 'Cambaxe']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Quihuhu',
                'slug' => 'quihuhu',
                'communes' => ['Quihuhu', 'Quinguengue']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Xandel',
                'slug' => 'xandel',
                'communes' => ['Xandel', 'Moma']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Cambo Suinginge',
                'slug' => 'cambo-suinginge',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Milando',
                'slug' => 'milando',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Quitapa',
                'slug' => 'quitapa',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Capunda',
                'slug' => 'capunda',
                'communes' => ['Capunda', 'Quimbango', 'Cunga Palanga']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Muquixe',
                'slug' => 'muquixe',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Quêssua',
                'slug' => 'quessua',
                'communes' => []
            ],
            [
                'province_id' => 14,
                'municipality' => 'Caculama',
                'slug' => 'caculama',
                'communes' => ['Caculama', 'Caxinga']
            ],
            [
                'province_id' => 14,
                'municipality' => 'Mbanji Ya Ngola',
                'slug' => 'mbanji-ya-ngola',
                'communes' => ['Mbanji ya Ngola', 'Cabombo']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Chiúme',
                'slug' => 'chiume',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Lumbala Nguimbo',
                'slug' => 'lumbala-nguimbo',
                'communes' => ['Lumbala Nguimbo', 'Mussuma Mitete', 'Sessa']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Camanongue',
                'slug' => 'camanongue',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Léua',
                'slug' => 'leua',
                'communes' => ['Léua', 'Liangongo']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Alto Cuito',
                'slug' => 'alto-cuito',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Lutembo',
                'slug' => 'lutembo',
                'communes' => ['Lutembo', 'Luvuei']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Cangumbe',
                'slug' => 'cangumbe',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Luena',
                'slug' => 'luena',
                'communes' => ['Luena', 'Cassongo']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Cangamba',
                'slug' => 'cangamba',
                'communes' => ['Cangombe', 'Cassamba', 'Cangamba', 'Muié']
            ],
            [
                'province_id' => 15,
                'municipality' => 'Lucusse',
                'slug' => 'lucusse',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Ninda',
                'slug' => 'ninda',
                'communes' => []
            ],
            [
                'province_id' => 15,
                'municipality' => 'Lutuai',
                'slug' => 'lutuai',
                'communes' => []
            ],
            [
                'province_id' => 16,
                'municipality' => 'Moçâmedes',
                'slug' => 'mocamedes',
                'communes' => []
            ],
            [
                'province_id' => 16,
                'municipality' => 'Camucuio',
                'slug' => 'camucuio',
                'communes' => ['Camucuio', 'Mamué', 'Chingo']
            ],
            [
                'province_id' => 16,
                'municipality' => 'Bibala',
                'slug' => 'bibala',
                'communes' => ['Bibala', 'Capangombe', 'Caitou', 'Lola']
            ],
            [
                'province_id' => 16,
                'municipality' => 'Virei',
                'slug' => 'virei',
                'communes' => ['Virei', 'Cainde']
            ],
            [
                'province_id' => 16,
                'municipality' => 'Tômbua',
                'slug' => 'tombua',
                'communes' => []
            ],
            [
                'province_id' => 16,
                'municipality' => 'Lucira',
                'slug' => 'lucira',
                'communes' => ['Lucira', 'Bentiaba']
            ],
            [
                'province_id' => 16,
                'municipality' => 'Iona',
                'slug' => 'iona',
                'communes' => []
            ],
            [
                'province_id' => 16,
                'municipality' => 'Sacomar',
                'slug' => 'sacomar',
                'communes' => []
            ],
            [
                'province_id' => 16,
                'municipality' => 'Cacimbas',
                'slug' => 'cacimbas',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Uíge',
                'slug' => 'uige',
                'communes' => ['Uíge', 'Luanga', 'Casseche', 'Cancungo']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Cangola',
                'slug' => 'cangola',
                'communes' => ['Cangola', 'Bengo', 'Caiongo']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Ambuíla',
                'slug' => 'ambuíla',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Bembe',
                'slug' => 'bembe',
                'communes' => ['Bembe', 'Mabaia']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Nova Esperança',
                'slug' => 'nova-esperanca',
                'communes' => ['Nova Esperança', 'Buenga - Sul', 'Cuilo camboso']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Bungo',
                'slug' => 'bungo',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Milunga',
                'slug' => 'milunga',
                'communes' => ['Milunga', 'Macocola']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Damba',
                'slug' => 'damba',
                'communes' => ['Damba', 'Petecusso', 'Camatambo', 'Lêmboa']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Maquela do Zombo',
                'slug' => 'maquela-do-zombo',
                'communes' => ['Maquela do Zombo', 'Quibocolo']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Mucaba',
                'slug' => 'mucaba',
                'communes' => ['Mucaba', 'Uando Mucaba']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Negage',
                'slug' => 'negage',
                'communes' => ['Negage', 'Dimuca', 'Quisseque']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Puri',
                'slug' => 'puri',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Quimbele',
                'slug' => 'quimbele',
                'communes' => ['Quimbele', 'Icoca']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Dange Quitexe',
                'slug' => 'dange-quitexe',
                'communes' => ['Quitexe', 'Aldeia Viçosa']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Sanza Pombo',
                'slug' => 'sanza-pombo',
                'communes' => ['Sanza Pombo', 'Cuilo Pombo', 'Uamba', 'Alfândega']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Songo',
                'slug' => 'songo',
                'communes' => ['Songo', 'Quivuenga']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Sacandica',
                'slug' => 'sacandica',
                'communes' => ['Sacandica', 'Cuilo Futa', 'Béu']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Nsosso',
                'slug' => 'nsosso',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Lucunga',
                'slug' => 'lucunga',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Quipedro',
                'slug' => 'quipedro',
                'communes' => []
            ],
            [
                'province_id' => 17,
                'municipality' => 'Massau',
                'slug' => 'massau',
                'communes' => ['Massau', 'Macolo']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Vista Alegre',
                'slug' => 'vista-alegre',
                'communes' => ['Vista Alegre', 'Cambamba']
            ],
            [
                'province_id' => 17,
                'municipality' => 'Alto Zaza',
                'slug' => 'alto-zaza',
                'communes' => ['Alto Zaza', 'Cuango Calumbo']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Mbanza Kongo',
                'slug' => 'mbanza-kongo',
                'communes' => ['Mbanza Kongo', 'Caluca', 'Madimba', 'Quiende']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Soyo',
                'slug' => 'soyo',
                'communes' => ['Soyo', 'Pedra de Feitiço']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Nzeto',
                'slug' => 'nzeto',
                'communes' => ['Nzeto', 'Musserra', 'Quibala Norte']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Cuimba',
                'slug' => 'cuimba',
                'communes' => ['Cuimba', 'Buela', 'Luvaca']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Nóqui',
                'slug' => 'noqui',
                'communes' => ['Mpala']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Tomboco',
                'slug' => 'tomboco',
                'communes' => ['Tomboco', 'Quinsimba', 'Quinzau']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Luvo',
                'slug' => 'luvo',
                'communes' => []
            ],
            [
                'province_id' => 18,
                'municipality' => 'Lufico',
                'slug' => 'lufico',
                'communes' => ['Lufico']
            ],
            [
                'province_id' => 18,
                'municipality' => 'Quêlo',
                'slug' => 'quelo',
                'communes' => []
            ],
            [
                'province_id' => 18,
                'municipality' => 'Serra de Canda',
                'slug' => 'serra-de-canda',
                'communes' => []
            ],
            [
                'province_id' => 18,
                'municipality' => 'Quindeje',
                'slug' => 'quindeje',
                'communes' => ['Quibala - Norte', 'Quindeje']
            ],
            [
                'province_id' => 19,
                'municipality' => 'Cazombo',
                'slug' => 'cazombo',
                'communes' => ['Cazombo', 'Lumbala Caquengue']
            ],
            [
                'province_id' => 19,
                'municipality' => 'Luacano',
                'slug' => 'luacano',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Cameia',
                'slug' => 'cameia',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Luau',
                'slug' => 'luau',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Nana Candundo',
                'slug' => 'nana-candundo',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Macondo',
                'slug' => 'macondo',
                'communes' => ['Macondo', 'Calunda']
            ],
            [
                'province_id' => 19,
                'municipality' => 'Caianda',
                'slug' => 'caianda',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Lóvua do Zambeze',
                'slug' => 'lovua-do-zambeze',
                'communes' => []
            ],
            [
                'province_id' => 19,
                'municipality' => 'Lago Dilolo',
                'slug' => 'lago-dilolo',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Cuito Cuanavale',
                'slug' => 'cuito-cuanavale',
                'communes' => ['Cuito Cuanavale', 'Lupire']
            ],
            [
                'province_id' => 20,
                'municipality' => 'Dirico',
                'slug' => 'dirico',
                'communes' => ['Dirico', 'Xamavera']
            ],
            [
                'province_id' => 20,
                'municipality' => 'Mavinga',
                'slug' => 'mavinga',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Rivungo',
                'slug' => 'rivungo',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Xipundo',
                'slug' => 'xipundo',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Dima',
                'slug' => 'dima',
                'communes' => ['Cunjamba', 'Cutuile']
            ],
            [
                'province_id' => 20,
                'municipality' => 'Luiana',
                'slug' => 'luiana',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Mucusso',
                'slug' => 'mucusso',
                'communes' => []
            ],
            [
                'province_id' => 20,
                'municipality' => 'Luengue',
                'slug' => 'luengue',
                'communes' => []
            ],
            [
                'province_id' => 21,
                'municipality' => 'Catete',
                'slug' => 'catete',
                'communes' => ['Catete', 'Cassoneca', 'Caculo Cahango', 'Caxicane']
            ],
            [
                'province_id' => 21,
                'municipality' => 'Quiçama',
                'slug' => 'quicama',
                'communes' => ['Muxima', 'Quixinge', 'Demba Chio', 'Mumbondo']
            ],
            [
                'province_id' => 21,
                'municipality' => 'Calumbo',
                'slug' => 'calumbo',
                'communes' => []
            ],
            [
                'province_id' => 21,
                'municipality' => 'Cabiri',
                'slug' => 'cabiri',
                'communes' => []
            ],
            [
                'province_id' => 21,
                'municipality' => 'Cabo Ledo',
                'slug' => 'cabo-ledo',
                'communes' => []
            ],
            [
                'province_id' => 21,
                'municipality' => 'Bom Jesus',
                'slug' => 'bom-jesus',
                'communes' => []
            ],
            [
                'province_id' => 21,
                'municipality' => 'Sequele',
                'slug' => 'sequele',
                'communes' => ['Funda', 'Quifangondo', 'Sequele']
            ],
        ];

        foreach ($municipalities as $mun) {
            $municipality = Municipality::select('id')->where('province_id', $mun['province_id'])->where('slug', $mun['slug'])->limit(1)->first();

            if ($municipality) {
                foreach ($mun['communes'] as $commune) {
                    Commune::create([
                        'name' => $commune,
                        'slug' => str($commune)->slug(),
                        'municipality_id' => $municipality['id']
                    ]);
                }
            }
        }
    }
}
