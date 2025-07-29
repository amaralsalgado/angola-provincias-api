<?php

namespace Database\Seeders;

use App\Models\Comuna;
use App\Models\Municipio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $municipios = [
            [
                'provincia_id' => 1,
                'municipio' => 'Bula Atumba',
                'slug' => 'bula-atumba',
                'comunas' => ['Bula Atumba', 'Quiage']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Dande',
                'slug' => 'dande',
                'comunas' => ['Caxito', 'Mabubas', 'Quicabo']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Quibaxe',
                'slug' => 'quibaxe',
                'comunas' => ['Coxe', 'Paredes', 'Quibaxe']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Nambuangongo',
                'slug' => 'nambuangongo',
                'comunas' => ['Canacassala', 'Gombe', 'Zala']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Pango Aluquém',
                'slug' => 'pango-aluquem',
                'comunas' => ['Pango Aluquém', 'Cazuangongo']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Ambriz',
                'slug' => 'ambriz',
                'comunas' => ['Ambriz', 'Bela Vista', 'Tabi']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Muxaluando',
                'slug' => 'muxaluando',
                'comunas' => ['Muxaluando', 'Quixico', 'Cage Mazumbo']
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Piri',
                'slug' => 'piri',
                'comunas' => []
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Quicunzo',
                'slug' => 'quicunzo',
                'comunas' => []
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Úcua',
                'slug' => 'ucua',
                'comunas' => []
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Pangila',
                'slug' => 'pangila',
                'comunas' => []
            ],
            [
                'provincia_id' => 1,
                'municipio' => 'Barra do Dande',
                'slug' => 'barra-do-dande',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Baía Farta',
                'slug' => 'baia-farta',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Balombo',
                'slug' => 'balombo',
                'comunas' => ['Balombo', 'Maca Mombolo']
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Bocoio',
                'slug' => 'bocoio',
                'comunas' => ['Bocoio', 'Cubal do Lumbo', 'Monte Belo']
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Caimbambo',
                'slug' => 'caimbambo',
                'comunas' => ['Caimbambo', 'Caiave', 'Viangombe']
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Catumbela',
                'slug' => 'catumbela',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Chongorói',
                'slug' => 'chongoroi',
                'comunas' => ['Chongorói', 'Camuine']
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Cubal',
                'slug' => 'cubal',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Ganda',
                'slug' => 'ganda',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Lobito',
                'slug' => 'lobito',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Benguela',
                'slug' => 'benguela',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Egito Praia',
                'slug' => 'egito-praia',
                'comunas' => ['Egito Praia', 'Canjala']
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Chindumbo',
                'slug' => 'chindumbo',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Dombe Grande',
                'slug' => 'dombe-grande',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Capupa',
                'slug' => 'capupa',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Biópio',
                'slug' => 'biopio',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Chila',
                'slug' => 'chila',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Chicuma',
                'slug' => 'chicuma',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Babaera',
                'slug' => 'babaera',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Iambala',
                'slug' => 'iambala',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Catengue',
                'slug' => 'catengue',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Bolonguera',
                'slug' => 'bolonguera',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Canhamela',
                'slug' => 'canhamela',
                'comunas' => []
            ],
            [
                'provincia_id' => 2,
                'municipio' => 'Navegantes',
                'slug' => 'navegantes',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Andulo',
                'slug' => 'andulo',
                'comunas' => ['Andulo', 'Cassumbe', 'Chivaúlo']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Camacupa',
                'slug' => 'camacupa',
                'comunas' => ['Camacupa', 'Cuanza', 'Muinha']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Catabola',
                'slug' => 'catabola',
                'comunas' => ['Catabola', 'Caiuera', 'Sande']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chinguar',
                'slug' => 'chinguar',
                'comunas' => ['Chinguar', 'Cutato', 'Cangote']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chitembo',
                'slug' => 'chitembo',
                'comunas' => ['Chitembo', 'Cachingues', 'Malengue']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cuemba',
                'slug' => 'cuemba',
                'comunas' => ['Cuemba', 'Munhango', 'Sachinemuna']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cuito',
                'slug' => 'cuito',
                'comunas' => ['Cuito', 'Cunje']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cunhinga',
                'slug' => 'cunhinga',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Nharêa',
                'slug' => 'nharea',
                'comunas' => ['Nharêa', 'Gamba', 'Caieie']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Luando',
                'slug' => 'luando',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Ringoma',
                'slug' => 'ringoma',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Mumbuê',
                'slug' => 'mumbue',
                'comunas' => ['Mumbué', 'Mutumbo', 'Soma Cuanza']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'CalucingA',
                'slug' => 'calucinga',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chicala',
                'slug' => 'chicala',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Chipeta',
                'slug' => 'chipeta',
                'comunas' => ['Chipeta', 'Chiuca']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Umpulo',
                'slug' => 'umpulo',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Lúbia',
                'slug' => 'lubia',
                'comunas' => ['Lúbia', 'Dando']
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Cambândua',
                'slug' => 'cambandua',
                'comunas' => []
            ],
            [
                'provincia_id' => 3,
                'municipio' => 'Belo Horizonte',
                'slug' => 'belo-horizonte',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Belize',
                'slug' => 'belize',
                'comunas' => ['Luali', 'Belize']
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Buco-Zau',
                'slug' => 'buco-zau',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Cabinda',
                'slug' => 'cabinda',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Cacongo',
                'slug' => 'cacongo',
                'comunas' => ['Dinge', 'Lândana']
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Miconje',
                'slug' => 'miconje',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Massabi',
                'slug' => 'massabi',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Necuto',
                'slug' => 'necuto',
                'comunas' => ['Necuto', 'Inhuca']
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Tando Zinze',
                'slug' => 'tando-zinze',
                'comunas' => ['Tando Zinze', 'Malembo']
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Liambo',
                'slug' => 'liambo',
                'comunas' => []
            ],
            [
                'provincia_id' => 4,
                'municipio' => 'Ngoio',
                'slug' => 'ngoio',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Calai',
                'slug' => 'calai',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cuangar',
                'slug' => 'cuangar',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cuchi',
                'slug' => 'cuchi',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Cutato',
                'slug' => 'cutato',
                'comunas' => ['Cutato', 'Vissati']
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Caiundo',
                'slug' => 'caiundo',
                'comunas' => ['Caiundo', 'Jamba Cueio']
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Longa',
                'slug' => 'longa',
                'comunas' => ['Longa', 'Baixo Longa']
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Menongue',
                'slug' => 'menongue',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Nancova',
                'slug' => 'nancova',
                'comunas' => ['Nancova', 'Rito']
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Savate',
                'slug' => 'savate',
                'comunas' => ['Savate', 'Bondo Caíla']
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Chinguanja',
                'slug' => 'chinguanja',
                'comunas' => []
            ],
            [
                'provincia_id' => 5,
                'municipio' => 'Mavengue',
                'slug' => 'mavengue',
                'comunas' => ['Mavengue', 'Maué']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Ambaca',
                'slug' => 'ambaca',
                'comunas' => ['Camabatela', 'Máua', 'Bindo']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Banga',
                'slug' => 'banga',
                'comunas' => ['Banga', 'Cariamba']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Bolongongo',
                'slug' => 'bolongongo',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Cambambe',
                'slug' => 'cambambe',
                'comunas' => ['Dondo', 'Dange ya Menha', 'São Pedro da Quilemba']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Cazengo',
                'slug' => 'cazengo',
                'comunas' => ['Caculo Camuiza', 'Ndalatando']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Golungo Alto',
                'slug' => 'golungo-alto',
                'comunas' => ['Golungo Alto', 'Cambondo', 'Quilombo quía Puto']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Lucala',
                'slug' => 'lucala',
                'comunas' => ['Lucala', 'Quiangombe']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Ngonguembo',
                'slug' => 'ngonguembo',
                'comunas' => ['Quilombo dos Dembos', 'Camame', 'Cavunga']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Quiculungo',
                'slug' => 'quiculungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Samba Cajú',
                'slug' => 'samba-caju',
                'comunas' => ['Samba caju', 'Samba Lucala']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Massangano',
                'slug' => 'massangano',
                'comunas' => ['Massangano', 'Zenza do Itombe']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Cêrca',
                'slug' => 'cerca',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Tango',
                'slug' => 'tango',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Terreiro',
                'slug' => 'terreiro',
                'comunas' => ['Terreiro', 'Quiquiemba']
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Aldeia Nova',
                'slug' => 'aldeia-nova',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Caculo Cabaça',
                'slug' => 'caculo-cabaca',
                'comunas' => []
            ],
            [
                'provincia_id' => 6,
                'municipio' => 'Luinga',
                'slug' => 'luinga',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Gabela',
                'slug' => 'gabela',
                'comunas' => ['Gabela', 'Assango']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Cassongue',
                'slug' => 'cassongue',
                'comunas' => ['Cassongue', 'Atóme', 'Dumbi']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Waku Kungo',
                'slug' => 'waku-kungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Conda',
                'slug' => 'conda',
                'comunas' => ['Cunjo', 'Conda']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Ebo',
                'slug' => 'ebo',
                'comunas' => ['Ebo', 'Cassanje']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Calulo',
                'slug' => 'calulo',
                'comunas' => ['Calulo', 'Cabuta']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Mussende',
                'slug' => 'mussende',
                'comunas' => ['Mussende', 'Quipaxi']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Porto Amboim',
                'slug' => 'porto-amboim',
                'comunas' => ['Porto Amboim', 'Capolo']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quibala',
                'slug' => 'quibala',
                'comunas' => ['Quibala', 'Dala Cachibo']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quilenda',
                'slug' => 'quilenda',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Seles',
                'slug' => 'seles',
                'comunas' => ['Seles', 'Botera']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Sumbe',
                'slug' => 'sumbe',
                'comunas' => ['Sumbe', 'Quicombo']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quirimbo',
                'slug' => 'quirimbo',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Munenga',
                'slug' => 'munenga',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quissongo',
                'slug' => 'quissongo',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Gungo',
                'slug' => 'gungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Sanga',
                'slug' => 'sanga',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Gangula',
                'slug' => 'gangula',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Pambangala',
                'slug' => 'pambangala',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Condé',
                'slug' => 'conde',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Amboiva',
                'slug' => 'amboiva',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Lonhe',
                'slug' => 'lonhe',
                'comunas' => ['Lonhe', 'Cariango']
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Quenha',
                'slug' => 'quenha',
                'comunas' => []
            ],
            [
                'provincia_id' => 7,
                'municipio' => 'Boa Entrada',
                'slug' => 'boa-entrada',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cahama',
                'slug' => 'cahama',
                'comunas' => ['Cahama', 'Otchinjau']
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cuanhama',
                'slug' => 'cuanhama',
                'comunas' => ['Ondjiva', 'Môngua']
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Curoca',
                'slug' => 'curoca',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cuvelai',
                'slug' => 'cuvelai',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Namacunde',
                'slug' => 'namacunde',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Ombandja',
                'slug' => 'ombandja',
                'comunas' => ['Xangongo', 'Ombala yo Mungu']
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Chiéde',
                'slug' => 'chiede',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Nehone',
                'slug' => 'nehone',
                'comunas' => ['Nehone', 'Evale']
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Humbe',
                'slug' => 'humbe',
                'comunas' => ['Mucope', 'Humbe']
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Mupa',
                'slug' => 'mupa',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Naulila',
                'slug' => 'naulila',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Chitado',
                'slug' => 'chitado',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Cafima',
                'slug' => 'cafima',
                'comunas' => []
            ],
            [
                'provincia_id' => 8,
                'municipio' => 'Chissuata',
                'slug' => 'chissuata',
                'comunas' => []
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Bailundo',
                'slug' => 'bailundo',
                'comunas' => ['Bailundo', 'Lunge', 'Luvemba']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Caála',
                'slug' => 'caala',
                'comunas' => []
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Cachiungo',
                'slug' => 'cachiungo',
                'comunas' => ['Chinhama', 'Cachiungo']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Chicala Choloanga',
                'slug' => 'chicala-choloanga',
                'comunas' => ['Mbave', 'Chicala']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Chinjenje',
                'slug' => 'chinjenje',
                'comunas' => ['Chinjenje', 'Chiaca']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Ecunha',
                'slug' => 'ecunha',
                'comunas' => ['Ecunha', 'Quipeio']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Huambo',
                'slug' => 'huambo',
                'comunas' => ['Huambo', 'Calima']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Londuimbali',
                'slug' => 'londuimbali',
                'comunas' => ['Londuimbali', 'Ussoque']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Longonjo',
                'slug' => 'longonjo',
                'comunas' => ['Longonjo', 'Lépi']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Mungo',
                'slug' => 'mungo',
                'comunas' => ['Mungo', 'Cambuengo']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Ucuma',
                'slug' => 'ucuma',
                'comunas' => ['Ucuma', 'Cacoma', 'Mundundo']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Bimbe',
                'slug' => 'bimbe',
                'comunas' => ['Bimbe', 'Hengue']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Sambo',
                'slug' => 'sambo',
                'comunas' => ['Sambo', 'Samboto']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Galanga',
                'slug' => 'galanga',
                'comunas' => ['Galanga', 'Cumbira']
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Alto Hama',
                'slug' => 'alto-hama',
                'comunas' => []
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Chilata',
                'slug' => 'chilata',
                'comunas' => []
            ],
            [
                'provincia_id' => 9,
                'municipio' => 'Cuima',
                'slug' => 'cuima',
                'comunas' => ['Cuima', 'Catata']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Caconda',
                'slug' => 'caconda',
                'comunas' => ['Caconda', 'Gungue', 'Uaba', 'Cusse']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Cacula',
                'slug' => 'cacula',
                'comunas' => ['Cacula', 'Tchicuaqueia']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Caluquembe',
                'slug' => 'caluquembe',
                'comunas' => ['Caluquembe', 'Calepi', 'Negola']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chibia',
                'slug' => 'chibia',
                'comunas' => ['Chibia', 'Jau']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chicomba',
                'slug' => 'chicomba',
                'comunas' => ['Chicomba', 'Cutenda']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chipindo',
                'slug' => 'chipindo',
                'comunas' => ['Chipindo', 'Bambi']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Cuvango',
                'slug' => 'cuvango',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Gambos',
                'slug' => 'gambos',
                'comunas' => ['Chiange', 'Chimbemba']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Humpata',
                'slug' => 'humpata',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Jamba Mineira',
                'slug' => 'jamba-mineira',
                'comunas' => ['Cassinga', 'Jamba Mineira']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Lubango',
                'slug' => 'lubango',
                'comunas' => ['Lubango', 'Huíla']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Matala',
                'slug' => 'matala',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Quilengues',
                'slug' => 'quilengues',
                'comunas' => ['Quilengues', 'Impulo', 'Dinde']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Quipungo',
                'slug' => 'quipungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Dongo',
                'slug' => 'dongo',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Hoque',
                'slug' => 'hoque',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Capelongo',
                'slug' => 'capelongo',
                'comunas' => ['Capelongo', 'Mulondo']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chituto',
                'slug' => 'chituto',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Capunda Cavilongo',
                'slug' => 'capunda-cavilongo',
                'comunas' => ['Capunda Cavilongo', 'Quihita']
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Viti Vivali',
                'slug' => 'viti-vivali',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Galangue',
                'slug' => 'galangue',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Palanca',
                'slug' => 'palanca',
                'comunas' => []
            ],
            [
                'provincia_id' => 10,
                'municipio' => 'Chicungo',
                'slug' => 'chicungo',
                'comunas' => [],
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Belas',
                'slug' => 'belas',
                'comunas' => ['Benfica', 'Cabolombo', 'Barra do Cuanza', 'Ramiros']
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Cacuaco',
                'slug' => 'cacuaco',
                'comunas' => ['Cacuaco', 'Kikolo']
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Cazenga',
                'slug' => 'cazenga',
                'comunas' => ['Cazenga', 'Kima Kieza']
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Kilamba Kiaxi',
                'slug' => 'kilamba-kiaxi',
                'comunas' => ['Golfe', 'Nova vida']
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Viana',
                'slug' => 'viana',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Mussulo',
                'slug' => 'mussulo',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Sambizanga',
                'slug' => 'sambizanga',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Rangel',
                'slug' => 'rangel',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Maianga',
                'slug' => 'maianga',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Samba',
                'slug' => 'samba',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Camama',
                'slug' => 'camama',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Mulenvos',
                'slug' => 'mulenvos',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Kilamba',
                'slug' => 'kilamba',
                'comunas' => ['Kilamba', 'Vila Flôr']
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Hoji Ya Henda',
                'slug' => 'hoji-ya-henda',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Ingombota',
                'slug' => 'ingombota',
                'comunas' => []
            ],
            [
                'provincia_id' => 11,
                'municipio' => 'Talatona',
                'slug' => 'talatona',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cambulo',
                'slug' => 'cambulo',
                'comunas' => ['Cachimo', 'Nzage']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Capenda Camulemba',
                'slug' => 'capenda-camulemba',
                'comunas' => ['Capenda Camulemba', 'Xinge']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Caungula',
                'slug' => 'caungula',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Chitato',
                'slug' => 'chitato',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cuango',
                'slug' => 'cuango',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cuílo',
                'slug' => 'cuilo',
                'comunas' => ['Caluango', 'Cuílo']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lubalo',
                'slug' => 'lubalo',
                'comunas' => ['Muvuluege', 'Lubalo']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lucapa',
                'slug' => 'lucapa',
                'comunas' => ['Camissombo', 'Lucapa']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Lóvua',
                'slug' => 'lovua',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Xá-Muteba',
                'slug' => 'xa-muteba',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Dundo',
                'slug' => 'dundo',
                'comunas' => ['Dundo', 'Luachimo']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Xá Cassau',
                'slug' => 'xa-cassau',
                'comunas' => ['Xá Cassau', 'Capaia']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Camaxilo',
                'slug' => 'camaxilo',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Luangue',
                'slug' => 'luangue',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Luremo',
                'slug' => 'luremo',
                'comunas' => []
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Canzar',
                'slug' => 'canzar',
                'comunas' => ['Canzar', 'Luia']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cassanje Calucala',
                'slug' => 'cassanje-calucala',
                'comunas' => ['Cassanje Calucala', 'Iongo']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Mussungue',
                'slug' => 'mussungue',
                'comunas' => ['Mussungue', 'Caíta']
            ],
            [
                'provincia_id' => 12,
                'municipio' => 'Cafunfu',
                'slug' => 'cafunfu',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Cacolo',
                'slug' => 'cacolo',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Dala',
                'slug' => 'dala',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Muconda',
                'slug' => 'muconda',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Saurimo',
                'slug' => 'saurimo',
                'comunas' => ['Mona Quimbundo', 'Saurimo']
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Chiluage',
                'slug' => 'chiluage',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Cassai-Sul',
                'slug' => 'cassai-sul',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Xassengue',
                'slug' => 'xassengue',
                'comunas' => ['Xassengue', 'Cucumbi']
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Alto Chicapa',
                'slug' => 'alto-chicapa',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Sombo',
                'slug' => 'sombo',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Muriege',
                'slug' => 'muriege',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Luma Cassai',
                'slug' => 'luma-cassai',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Cazage',
                'slug' => 'cazage',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Muangueji',
                'slug' => 'muangueji',
                'comunas' => []
            ],
            [
                'provincia_id' => 13,
                'municipio' => 'Cassengo',
                'slug' => 'cassengo',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cacuso',
                'slug' => 'cacuso',
                'comunas' => ['Cacuso', 'Soqueco']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cahombo',
                'slug' => 'cahombo',
                'comunas' => ['Micanda', 'Cahombo']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Calandula',
                'slug' => 'calandula',
                'comunas' => ['Calandula', 'Cota']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cambundi Catembo',
                'slug' => 'cambundi-catembo',
                'comunas' => ['Cambundi Catembo', 'Dumba Cambango']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cangandala',
                'slug' => 'cangandala',
                'comunas' => ['Cangandala', 'Caribo', 'Culamagia']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Kiwaba Nzoji',
                'slug' => 'kiwaba-nzoji',
                'comunas' => ['Kiwaba Nzoji', 'Mufuma']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Kunda Dya Baze',
                'slug' => 'kunda-dya-baze',
                'comunas' => ['Kunda dya Baze', 'Lemba']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Luquembo',
                'slug' => 'luquembo',
                'comunas' => ['Luquembo', 'Dombo wa Zanga']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Malanje',
                'slug' => 'malanje',
                'comunas' => ['Malanje', 'Lombe']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Marimba',
                'slug' => 'marimba',
                'comunas' => ['Marimba', 'Mangando']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Massango',
                'slug' => 'massango',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quela',
                'slug' => 'quela',
                'comunas' => ['Quela', 'Bângalas']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quirima',
                'slug' => 'quirima',
                'comunas' => ['Quirima', 'Sautar']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cateco Cangola',
                'slug' => 'cateco-cangola',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cuale',
                'slug' => 'cuale',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Pungo A Ndongo',
                'slug' => 'pungo-a-ndongo',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Ngola Luiji',
                'slug' => 'ngola-luiji',
                'comunas' => ['Ngola Luiji', 'Cambaxe']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quihuhu',
                'slug' => 'quihuhu',
                'comunas' => ['Quihuhu', 'Quinguengue']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Xandel',
                'slug' => 'xandel',
                'comunas' => ['Xandel', 'Moma']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Cambo Suinginge',
                'slug' => 'cambo-suinginge',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Milando',
                'slug' => 'milando',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quitapa',
                'slug' => 'quitapa',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Capunda',
                'slug' => 'capunda',
                'comunas' => ['Capunda', 'Quimbango', 'Cunga Palanga']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Muquixe',
                'slug' => 'muquixe',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Quêssua',
                'slug' => 'quessua',
                'comunas' => []
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Caculama',
                'slug' => 'caculama',
                'comunas' => ['Caculama', 'Caxinga']
            ],
            [
                'provincia_id' => 14,
                'municipio' => 'Mbanji Ya Ngola',
                'slug' => 'mbanji-ya-ngola',
                'comunas' => ['Mbanji ya Ngola', 'Cabombo']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Chiúme',
                'slug' => 'chiume',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Lumbala Nguimbo',
                'slug' => 'lumbala-nguimbo',
                'comunas' => ['Lumbala Nguimbo', 'Mussuma Mitete', 'Sessa']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Camanongue',
                'slug' => 'camanongue',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Léua',
                'slug' => 'leua',
                'comunas' => ['Léua', 'Liangongo']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Alto Cuito',
                'slug' => 'alto-cuito',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Lutembo',
                'slug' => 'lutembo',
                'comunas' => ['Lutembo', 'Luvuei']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Cangumbe',
                'slug' => 'cangumbe',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Luena',
                'slug' => 'luena',
                'comunas' => ['Luena', 'Cassongo']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Cangamba',
                'slug' => 'cangamba',
                'comunas' => ['Cangombe', 'Cassamba', 'Cangamba', 'Muié']
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Lucusse',
                'slug' => 'lucusse',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Ninda',
                'slug' => 'ninda',
                'comunas' => []
            ],
            [
                'provincia_id' => 15,
                'municipio' => 'Lutuai',
                'slug' => 'lutuai',
                'comunas' => []
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Moçâmedes',
                'slug' => 'mocamedes',
                'comunas' => []
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Camucuio',
                'slug' => 'camucuio',
                'comunas' => ['Camucuio', 'Mamué', 'Chingo']
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Bibala',
                'slug' => 'bibala',
                'comunas' => ['Bibala', 'Capangombe', 'Caitou', 'Lola']
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Virei',
                'slug' => 'virei',
                'comunas' => ['Virei', 'Cainde']
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Tômbua',
                'slug' => 'tombua',
                'comunas' => []
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Lucira',
                'slug' => 'lucira',
                'comunas' => ['Lucira', 'Bentiaba']
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Iona',
                'slug' => 'iona',
                'comunas' => []
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Sacomar',
                'slug' => 'sacomar',
                'comunas' => []
            ],
            [
                'provincia_id' => 16,
                'municipio' => 'Cacimbas',
                'slug' => 'cacimbas',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Uíge',
                'slug' => 'uige',
                'comunas' => ['Uíge', 'Luanga', 'Casseche', 'Cancungo']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Cangola',
                'slug' => 'cangola',
                'comunas' => ['Cangola', 'Bengo', 'Caiongo']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Ambuíla',
                'slug' => 'ambuíla',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Bembe',
                'slug' => 'bembe',
                'comunas' => ['Bembe', 'Mabaia']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Nova Esperança',
                'slug' => 'nova-esperanca',
                'comunas' => ['Nova Esperança', 'Buenga - Sul', 'Cuilo camboso']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Bungo',
                'slug' => 'bungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Milunga',
                'slug' => 'milunga',
                'comunas' => ['Milunga', 'Macocola']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Damba',
                'slug' => 'damba',
                'comunas' => ['Damba', 'Petecusso', 'Camatambo', 'Lêmboa']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Maquela do Zombo',
                'slug' => 'maquela-do-zombo',
                'comunas' => ['Maquela do Zombo', 'Quibocolo']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Mucaba',
                'slug' => 'mucaba',
                'comunas' => ['Mucaba', 'Uando Mucaba']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Negage',
                'slug' => 'negage',
                'comunas' => ['Negage', 'Dimuca', 'Quisseque']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Puri',
                'slug' => 'puri',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Quimbele',
                'slug' => 'quimbele',
                'comunas' => ['Quimbele', 'Icoca']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Dange Quitexe',
                'slug' => 'dange-quitexe',
                'comunas' => ['Quitexe', 'Aldeia Viçosa']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Sanza Pombo',
                'slug' => 'sanza-pombo',
                'comunas' => ['Sanza Pombo', 'Cuilo Pombo', 'Uamba', 'Alfândega']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Songo',
                'slug' => 'songo',
                'comunas' => ['Songo', 'Quivuenga']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Sacandica',
                'slug' => 'sacandica',
                'comunas' => ['Sacandica', 'Cuilo Futa', 'Béu']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Nsosso',
                'slug' => 'nsosso',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Lucunga',
                'slug' => 'lucunga',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Quipedro',
                'slug' => 'quipedro',
                'comunas' => []
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Massau',
                'slug' => 'massau',
                'comunas' => ['Massau', 'Macolo']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Vista Alegre',
                'slug' => 'vista-alegre',
                'comunas' => ['Vista Alegre', 'Cambamba']
            ],
            [
                'provincia_id' => 17,
                'municipio' => 'Alto Zaza',
                'slug' => 'alto-zaza',
                'comunas' => ['Alto Zaza', 'Cuango Calumbo']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Mbanza Kongo',
                'slug' => 'mbanza-kongo',
                'comunas' => ['Mbanza Kongo', 'Caluca', 'Madimba', 'Quiende']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Soyo',
                'slug' => 'soyo',
                'comunas' => ['Soyo', 'Pedra de Feitiço']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Nzeto',
                'slug' => 'nzeto',
                'comunas' => ['Nzeto', 'Musserra', 'Quibala Norte']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Cuimba',
                'slug' => 'cuimba',
                'comunas' => ['Cuimba', 'Buela', 'Luvaca']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Nóqui',
                'slug' => 'noqui',
                'comunas' => ['Mpala']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Tomboco',
                'slug' => 'tomboco',
                'comunas' => ['Tomboco', 'Quinsimba', 'Quinzau']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Luvo',
                'slug' => 'luvo',
                'comunas' => []
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Lufico',
                'slug' => 'lufico',
                'comunas' => ['Lufico']
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Quêlo',
                'slug' => 'quelo',
                'comunas' => []
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Serra de Canda',
                'slug' => 'serra-de-canda',
                'comunas' => []
            ],
            [
                'provincia_id' => 18,
                'municipio' => 'Quindeje',
                'slug' => 'quindeje',
                'comunas' => ['Quibala - Norte', 'Quindeje']
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Cazombo',
                'slug' => 'cazombo',
                'comunas' => ['Cazombo', 'Lumbala Caquengue']
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Luacano',
                'slug' => 'luacano',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Cameia',
                'slug' => 'cameia',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Luau',
                'slug' => 'luau',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Nana Candundo',
                'slug' => 'nana-candundo',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Macondo',
                'slug' => 'macondo',
                'comunas' => ['Macondo', 'Calunda']
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Caianda',
                'slug' => 'caianda',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Lóvua do Zambeze',
                'slug' => 'lovua-do-zambeze',
                'comunas' => []
            ],
            [
                'provincia_id' => 19,
                'municipio' => 'Lago Dilolo',
                'slug' => 'lago-dilolo',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Cuito Cuanavale',
                'slug' => 'cuito-cuanavale',
                'comunas' => ['Cuito Cuanavale', 'Lupire']
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Dirico',
                'slug' => 'dirico',
                'comunas' => ['Dirico', 'Xamavera']
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Mavinga',
                'slug' => 'mavinga',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Rivungo',
                'slug' => 'rivungo',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Xipundo',
                'slug' => 'xipundo',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Dima',
                'slug' => 'dima',
                'comunas' => ['Cunjamba', 'Cutuile']
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Luiana',
                'slug' => 'luiana',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Mucusso',
                'slug' => 'mucusso',
                'comunas' => []
            ],
            [
                'provincia_id' => 20,
                'municipio' => 'Luengue',
                'slug' => 'luengue',
                'comunas' => []
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Catete',
                'slug' => 'catete',
                'comunas' => ['Catete', 'Cassoneca', 'Caculo Cahango', 'Caxicane']
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Quiçama',
                'slug' => 'quicama',
                'comunas' => ['Muxima', 'Quixinge', 'Demba Chio', 'Mumbondo']
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Calumbo',
                'slug' => 'calumbo',
                'comunas' => []
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Cabiri',
                'slug' => 'cabiri',
                'comunas' => []
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Cabo Ledo',
                'slug' => 'cabo-ledo',
                'comunas' => []
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Bom Jesus',
                'slug' => 'bom-jesus',
                'comunas' => []
            ],
            [
                'provincia_id' => 21,
                'municipio' => 'Sequele',
                'slug' => 'sequele',
                'comunas' => ['Funda', 'Quifangondo', 'Sequele']
            ],
        ];

        foreach ($municipios as $mun) {
            $municipio = Municipio::select('id')->where('provincia_id', $mun['provincia_id'])->where('slug', $mun['slug'])->limit(1)->first();

            if ($municipio) {
                foreach ($mun['comunas'] as $comuna) {
                    Comuna::create([
                        'nome' => $comuna,
                        'slug' => str($comuna)->slug(),
                        'municipio_id' => $municipio['id']
                    ]);
                }
            }
        }
    }
}
