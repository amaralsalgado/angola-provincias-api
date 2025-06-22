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
    {
        {


            $municipios = [
                [
                    'nome' => 'Ambriz',
                    'slug' => 'ambriz',
                    'comunas' => [
                        ['nome' => 'Bela Vista', 'slug' => 'bela-vista'],
                        ['nome' => 'Ambriz', 'slug' => 'ambriz'],
                        ['nome' => 'Tabi', 'slug' => 'tabi']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bula Atumba',
                    'slug' => 'bula-atumba',
                    'comunas' => [
                        ['nome' => 'Bula Atumba', 'slug' => 'bula-atumba'],
                        ['nome' => 'Quiage', 'slug' => 'quiage']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Dande',
                    'slug' => 'dande',
                    'comunas' => [
                        ['nome' => 'Barra do Dande', 'slug' => 'barra-do-dande'],
                        ['nome' => 'Caxito', 'slug' => 'caxito'],
                        ['nome' => 'Mabubas', 'slug' => 'mabubas'],
                        ['nome' => 'Quicabo', 'slug' => 'quicabo'],
                        ['nome' => 'Úcua', 'slug' => 'ucua']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Dembos',
                    'slug' => 'dembos',
                    'comunas' => [
                        ['nome' => 'Quibaxe', 'slug' => 'quibaxe'],
                        ['nome' => 'Piri', 'slug' => 'piri'],
                        ['nome' => 'Paredes', 'slug' => 'paredes'],
                        ['nome' => 'Coxe', 'slug' => 'coxe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Nambuangongo',
                    'slug' => 'nambuangongo',
                    'comunas' => [
                        ['nome' => 'Canacassala', 'slug' => 'canacassala'],
                        ['nome' => 'Quicunzo', 'slug' => 'quicunzo'],
                        ['nome' => 'Muxaluando', 'slug' => 'muxaluando'],
                        ['nome' => 'Quixico', 'slug' => 'quixico'],
                        ['nome' => 'Gombe', 'slug' => 'gombe'],
                        ['nome' => 'Cage', 'slug' => 'cage'],
                        ['nome' => 'Zala', 'slug' => 'zala']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Pango Aluquém',
                    'slug' => 'pango-aluquem',
                    'comunas' => [
                        ['nome' => 'Pango Aluquém', 'slug' => 'pango-aluquem'],
                        ['nome' => 'Cazuangongo', 'slug' => 'cazuangongo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Baía Farta',
                    'slug' => 'baia-farta',
                    'comunas' => [
                        ['nome' => 'Dombe Grande', 'slug' => 'dombe-grande'],
                        ['nome' => 'Baía Farta', 'slug' => 'baia-farta'],
                        ['nome' => 'Calohanga', 'slug' => 'calohanga'],
                        ['nome' => 'Equimina', 'slug' => 'equimina']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Balombo',
                    'slug' => 'balombo',
                    'comunas' => [
                        ['nome' => 'Balombo', 'slug' => 'balombo'],
                        ['nome' => 'Chingongo', 'slug' => 'chingongo'],
                        ['nome' => 'Chindumbo', 'slug' => 'chindumbo'],
                        ['nome' => 'Maca Mombolo', 'slug' => 'maca-mombolo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Benguela',
                    'slug' => 'benguela',
                    'comunas' => [],
                    'distritos' => [
                        ['nome' => 'Benguela', 'slug' => 'benguela']
                    ]
                ],
                [
                    'nome' => 'Bocoio',
                    'slug' => 'bocoio',
                    'comunas' => [
                        ['nome' => 'Bocoio', 'slug' => 'bocoio'],
                        ['nome' => 'Cubal do Lumbo', 'slug' => 'cubal-do-lumbo'],
                        ['nome' => 'Monte Belo', 'slug' => 'monte-belo'],
                        ['nome' => 'Chila', 'slug' => 'chila'],
                        ['nome' => 'Passe', 'slug' => 'passe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caimbambo',
                    'slug' => 'caimbambo',
                    'comunas' => [
                        ['nome' => 'Caimbambo', 'slug' => 'caimbambo'],
                        ['nome' => 'Catengue', 'slug' => 'catengue'],
                        ['nome' => 'Caiave', 'slug' => 'caiave'],
                        ['nome' => 'Canhamela', 'slug' => 'canhamela'],
                        ['nome' => 'Viangombe', 'slug' => 'viangombe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Catumbela',
                    'slug' => 'catumbela',
                    'comunas' => [
                        ['nome' => 'Catumbela', 'slug' => 'catumbela'],
                        ['nome' => 'Biópio', 'slug' => 'biopio'],
                        ['nome' => 'Gama', 'slug' => 'gama'],
                        ['nome' => 'Praia Bebé', 'slug' => 'praia-bebe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chongoroi',
                    'slug' => 'chongoroi',
                    'comunas' => [
                        ['nome' => 'Chongorói', 'slug' => 'chongoroi'],
                        ['nome' => 'Bolonguera', 'slug' => 'bolonguera'],
                        ['nome' => 'Camuine', 'slug' => 'camuine']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cubal',
                    'slug' => 'cubal',
                    'comunas' => [
                        ['nome' => 'Capupa', 'slug' => 'capupa'],
                        ['nome' => 'Cubal', 'slug' => 'cubal'],
                        ['nome' => 'Tumbulo', 'slug' => 'tumbulo'],
                        ['nome' => 'Iambala', 'slug' => 'iambala']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ganda',
                    'slug' => 'ganda',
                    'comunas' => [
                        ['nome' => 'Ganda', 'slug' => 'ganda'],
                        ['nome' => 'Ebanga', 'slug' => 'ebanga'],
                        ['nome' => 'Chicuma', 'slug' => 'chicuma'],
                        ['nome' => 'Babaera', 'slug' => 'babaera'],
                        ['nome' => 'Casseque', 'slug' => 'casseque']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lobito',
                    'slug' => 'lobito',
                    'comunas' => [
                        ['nome' => 'Egito Praia', 'slug' => 'egito-praia'],
                        ['nome' => 'Lobito', 'slug' => 'lobito'],
                        ['nome' => 'Canata', 'slug' => 'canata'],
                        ['nome' => 'Canjala', 'slug' => 'canjala']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Andulo',
                    'slug' => 'andulo',
                    'comunas' => [
                        ['nome' => 'Andulo', 'slug' => 'andulo'],
                        ['nome' => 'Calucinga', 'slug' => 'calucinga'],
                        ['nome' => 'Cassumbe', 'slug' => 'cassumbe'],
                        ['nome' => 'Chivaúlo', 'slug' => 'chivaulo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Camacupa',
                    'slug' => 'camacupa',
                    'comunas' => [
                        ['nome' => 'Ringoma', 'slug' => 'ringoma'],
                        ['nome' => 'Camacupa', 'slug' => 'camacupa'],
                        ['nome' => 'Muinha', 'slug' => 'muinha'],
                        ['nome' => 'Umpulo', 'slug' => 'umpulo'],
                        ['nome' => 'Cuanza', 'slug' => 'cuanza']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Catabola',
                    'slug' => 'catabola',
                    'comunas' => [
                        ['nome' => 'Catabola', 'slug' => 'catabola'],
                        ['nome' => 'Chipeta', 'slug' => 'chipeta'],
                        ['nome' => 'Caiuera', 'slug' => 'caiuera'],
                        ['nome' => 'Chiuca', 'slug' => 'chiuca'],
                        ['nome' => 'Sande', 'slug' => 'sande']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chinguar',
                    'slug' => 'chinguar',
                    'comunas' => [
                        ['nome' => 'Chinguar', 'slug' => 'chinguar'],
                        ['nome' => 'Cutato', 'slug' => 'cutato'],
                        ['nome' => 'Cangote', 'slug' => 'cangote']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chitembo',
                    'slug' => 'chitembo',
                    'comunas' => [
                        ['nome' => 'Cachingues', 'slug' => 'cachingues'],
                        ['nome' => 'Chitembo', 'slug' => 'chitembo'],
                        ['nome' => 'Mutumbo', 'slug' => 'mutumbo'],
                        ['nome' => 'Mumbué', 'slug' => 'mumbue'],
                        ['nome' => 'Malengue', 'slug' => 'malengue'],
                        ['nome' => 'Soma Cuanza', 'slug' => 'soma-cuanza']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuemba',
                    'slug' => 'cuemba',
                    'comunas' => [
                        ['nome' => 'Luando', 'slug' => 'luando'],
                        ['nome' => 'Munhango', 'slug' => 'munhango'],
                        ['nome' => 'Cuemba', 'slug' => 'cuemba'],
                        ['nome' => 'Sachinemuna', 'slug' => 'sachinemuna']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cunhinga',
                    'slug' => 'cunhinga',
                    'comunas' => [
                        ['nome' => 'Cunhinga', 'slug' => 'cunhinga'],
                        ['nome' => 'Belo Horizonte', 'slug' => 'belo-horizonte']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuíto',
                    'slug' => 'cuito',
                    'comunas' => [
                        ['nome' => 'Cuito', 'slug' => 'cuito'],
                        ['nome' => 'Chicala', 'slug' => 'chicala'],
                        ['nome' => 'Cunje', 'slug' => 'cunje'],
                        ['nome' => 'Trumba', 'slug' => 'trumba'],
                        ['nome' => 'Cambândua', 'slug' => 'cambandua']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Nharea',
                    'slug' => 'nharea',
                    'comunas' => [
                        ['nome' => 'Nharêa', 'slug' => 'nharea'],
                        ['nome' => 'Gamba', 'slug' => 'gamba'],
                        ['nome' => 'Lúbia', 'slug' => 'lubia'],
                        ['nome' => 'Caiei', 'slug' => 'caiei'],
                        ['nome' => 'Dando', 'slug' => 'dando']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cabinda',
                    'slug' => 'cabinda',
                    'comunas' => [
                        ['nome' => 'Cabinda', 'slug' => 'cabinda'],
                        ['nome' => 'Malembo', 'slug' => 'malembo'],
                        ['nome' => 'Tando Zinze', 'slug' => 'tando-zinze']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cacongo',
                    'slug' => 'cacongo',
                    'comunas' => [
                        ['nome' => 'Cacongo', 'slug' => 'cacongo'],
                        ['nome' => 'Dinge', 'slug' => 'dinge'],
                        ['nome' => 'Massabi', 'slug' => 'massabi']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Buco-Zau',
                    'slug' => 'buco-zau',
                    'comunas' => [
                        ['nome' => 'Buco Zau', 'slug' => 'buco-zau'],
                        ['nome' => 'Necuto', 'slug' => 'necuto'],
                        ['nome' => 'Inhuca', 'slug' => 'inhuca']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Belize',
                    'slug' => 'belize',
                    'comunas' => [
                        ['nome' => 'Miconje', 'slug' => 'miconje'],
                        ['nome' => 'Belize', 'slug' => 'belize'],
                        ['nome' => 'Luali', 'slug' => 'luali']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Calai',
                    'slug' => 'calai',
                    'comunas' => [
                        ['nome' => 'Maué', 'slug' => 'maue'],
                        ['nome' => 'Calai', 'slug' => 'calai'],
                        ['nome' => 'Mavengue', 'slug' => 'mavengue']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuangar',
                    'slug' => 'cuangar',
                    'comunas' => [
                        ['nome' => 'Savate', 'slug' => 'savate'],
                        ['nome' => 'Caila', 'slug' => 'caila'],
                        ['nome' => 'Cuangar', 'slug' => 'cuangar']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuchi',
                    'slug' => 'cuchi',
                    'comunas' => [
                        ['nome' => 'Cuchi', 'slug' => 'cuchi'],
                        ['nome' => 'Cutato', 'slug' => 'cutato'],
                        ['nome' => 'Chinguanja', 'slug' => 'chinguanja'],
                        ['nome' => 'Vissati', 'slug' => 'vissati']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuito Cuanavale',
                    'slug' => 'cuito-cuanavale',
                    'comunas' => [
                        ['nome' => 'Lupire', 'slug' => 'lupire'],
                        ['nome' => 'Cuito Cuanavale', 'slug' => 'cuito-cuanavale'],
                        ['nome' => 'Longa', 'slug' => 'longa'],
                        ['nome' => 'Baixo Longa', 'slug' => 'baixo-longa']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Dirico',
                    'slug' => 'dirico',
                    'comunas' => [
                        ['nome' => 'Dirico', 'slug' => 'dirico'],
                        ['nome' => 'Mucusso', 'slug' => 'mucusso'],
                        ['nome' => 'Xamavera', 'slug' => 'xamavera']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mavinga',
                    'slug' => 'mavinga',
                    'comunas' => [
                        ['nome' => 'Mavinga', 'slug' => 'mavinga'],
                        ['nome' => 'Cutuile', 'slug' => 'cutuile'],
                        ['nome' => 'Cunjamba', 'slug' => 'cunjamba'],
                        ['nome' => 'Luengue', 'slug' => 'luengue']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Menongue',
                    'slug' => 'menongue',
                    'comunas' => [
                        ['nome' => 'Caiundo', 'slug' => 'caiundo'],
                        ['nome' => 'Menongue', 'slug' => 'menongue'],
                        ['nome' => 'Cueio', 'slug' => 'cueio'],
                        ['nome' => 'Missombo', 'slug' => 'missombo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Nancova',
                    'slug' => 'nancova',
                    'comunas' => [
                        ['nome' => 'Rito', 'slug' => 'rito'],
                        ['nome' => 'Nancova', 'slug' => 'nancova']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Rivungo',
                    'slug' => 'rivungo',
                    'comunas' => [
                        ['nome' => 'Rivungo', 'slug' => 'rivungo'],
                        ['nome' => 'Xipundo', 'slug' => 'xipundo'],
                        ['nome' => 'Luiana', 'slug' => 'luiana']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ambaca',
                    'slug' => 'ambaca',
                    'comunas' => [
                        ['nome' => 'Camabatela', 'slug' => 'camabatela'],
                        ['nome' => 'Tango', 'slug' => 'tango'],
                        ['nome' => 'Máua', 'slug' => 'maua'],
                        ['nome' => 'Bindo', 'slug' => 'bindo'],
                        ['nome' => 'Luinga', 'slug' => 'luinga']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Banga',
                    'slug' => 'banga',
                    'comunas' => [
                        ['nome' => 'Banga', 'slug' => 'banga'],
                        ['nome' => 'Caculo Cabaça', 'slug' => 'caculo-cabaca'],
                        ['nome' => 'Aldeia Nova', 'slug' => 'aldeia-nova'],
                        ['nome' => 'Cariamba', 'slug' => 'cariamba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bolongongo',
                    'slug' => 'bolongongo',
                    'comunas' => [
                        ['nome' => 'Bolongongo', 'slug' => 'bolongongo'],
                        ['nome' => 'Terreiro', 'slug' => 'terreiro'],
                        ['nome' => 'Quiquiemba', 'slug' => 'quiquiemba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cambambe',
                    'slug' => 'cambambe',
                    'comunas' => [
                        ['nome' => 'Dondo', 'slug' => 'dondo'],
                        ['nome' => 'Massangano', 'slug' => 'massangano'],
                        ['nome' => 'Dange ya Menha', 'slug' => 'dange-ya-menha'],
                        ['nome' => 'Zenza do Itombe', 'slug' => 'zenza-do-itombe'],
                        ['nome' => 'São Pedro da Quilemba', 'slug' => 'sao-pedro-da-quilemba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cazengo',
                    'slug' => 'cazengo',
                    'comunas' => [
                        ['nome' => 'Ndalatando', 'slug' => 'ndalatando'],
                        ['nome' => 'Canhoca', 'slug' => 'canhoca']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Golungo Alto',
                    'slug' => 'golungo-alto',
                    'comunas' => [
                        ['nome' => 'Golungo Alto', 'slug' => 'golungo-alto'],
                        ['nome' => 'Cambondo', 'slug' => 'cambondo'],
                        ['nome' => 'Cêrca', 'slug' => 'cerca'],
                        ['nome' => 'Quiluanje', 'slug' => 'quiluanje']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Gonguembo',
                    'slug' => 'gonguembo',
                    'comunas' => [
                        ['nome' => 'Quilombo dos Dembos', 'slug' => 'quilombo-dos-dembos'],
                        ['nome' => 'Camame', 'slug' => 'camame'],
                        ['nome' => 'Cavunga', 'slug' => 'cavunga']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lucala',
                    'slug' => 'lucala',
                    'comunas' => [
                        ['nome' => 'Lucala', 'slug' => 'lucala'],
                        ['nome' => 'Quiangombe', 'slug' => 'quiangombe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quiculungo',
                    'slug' => 'quiculungo',
                    'comunas' => [
                        ['nome' => 'Quiculungo', 'slug' => 'quiculungo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Samba Cajú',
                    'slug' => 'samba-caju',
                    'comunas' => [
                        ['nome' => 'Samba Cajú', 'slug' => 'samba-caju']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Gabela',
                    'slug' => 'gabela',
                    'comunas' => [
                        ['nome' => 'Gabela', 'slug' => 'gabela'],
                        ['nome' => 'Assango', 'slug' => 'assango']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cassongue',
                    'slug' => 'cassongue',
                    'comunas' => [
                        ['nome' => 'Cassongue', 'slug' => 'cassongue'],
                        ['nome' => 'Pambangala', 'slug' => 'pambangala'],
                        ['nome' => 'Dumbi', 'slug' => 'dumbi'],
                        ['nome' => 'Atóme', 'slug' => 'atome']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cela',
                    'slug' => 'cela',
                    'comunas' => [
                        ['nome' => 'Sanga', 'slug' => 'sanga'],
                        ['nome' => 'Waku Kungo', 'slug' => 'waku-kungo'],
                        ['nome' => 'Quissanga Cunjo', 'slug' => 'quissanga-cunjo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Conda',
                    'slug' => 'conda',
                    'comunas' => [
                        ['nome' => 'Conda', 'slug' => 'conda'],
                        ['nome' => 'Cunjo', 'slug' => 'cunjo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ebo',
                    'slug' => 'ebo',
                    'comunas' => [
                        ['nome' => 'Ebo', 'slug' => 'ebo'],
                        ['nome' => 'Condé', 'slug' => 'conde'],
                        ['nome' => 'Quissanje', 'slug' => 'quissanje']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Libolo',
                    'slug' => 'libolo',
                    'comunas' => [
                        ['nome' => 'Calulo', 'slug' => 'calulo'],
                        ['nome' => 'Munenga', 'slug' => 'munenga'],
                        ['nome' => 'Cabuta', 'slug' => 'cabuta'],
                        ['nome' => 'Quissongo', 'slug' => 'quissongo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mussende',
                    'slug' => 'mussende',
                    'comunas' => [
                        ['nome' => 'Mussende', 'slug' => 'mussende'],
                        ['nome' => 'Quienha', 'slug' => 'quienha'],
                        ['nome' => 'São Lucas', 'slug' => 'sao-lucas']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Porto Amboim',
                    'slug' => 'porto-amboim',
                    'comunas' => [
                        ['nome' => 'Capolo', 'slug' => 'capolo'],
                        ['nome' => 'Porto Amboim', 'slug' => 'porto-amboim']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quilenda',
                    'slug' => 'quilenda',
                    'comunas' => [
                        ['nome' => 'Quilenda', 'slug' => 'quilenda'],
                        ['nome' => 'Quirimbo', 'slug' => 'quirimbo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quibala',
                    'slug' => 'quibala',
                    'comunas' => [
                        ['nome' => 'Quibala', 'slug' => 'quibala'],
                        ['nome' => 'Dala Cachibo', 'slug' => 'dala-cachibo'],
                        ['nome' => 'Cariango', 'slug' => 'cariango'],
                        ['nome' => 'Lonhe', 'slug' => 'lonhe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Seles',
                    'slug' => 'seles',
                    'comunas' => [
                        ['nome' => 'Seles', 'slug' => 'seles'],
                        ['nome' => 'Amboiva', 'slug' => 'amboiva'],
                        ['nome' => 'Botera', 'slug' => 'botera']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Sumbe',
                    'slug' => 'sumbe',
                    'comunas' => [
                        ['nome' => 'Sumbe', 'slug' => 'sumbe'],
                        ['nome' => 'Gungo', 'slug' => 'gungo'],
                        ['nome' => 'Gangula', 'slug' => 'gangula'],
                        ['nome' => 'Quicombo', 'slug' => 'quicombo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cahama',
                    'slug' => 'cahama',
                    'comunas' => [
                        ['nome' => 'Cahama', 'slug' => 'cahama'],
                        ['nome' => 'Otchinjau', 'slug' => 'otchinjau']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuanhama',
                    'slug' => 'cuanhama',
                    'comunas' => [
                        ['nome' => 'Ondjiva', 'slug' => 'ondjiva'],
                        ['nome' => 'Nehone Cafima', 'slug' => 'nehone-cafima'],
                        ['nome' => 'Evale', 'slug' => 'evale'],
                        ['nome' => 'Tchompolo Oximolo', 'slug' => 'tchompolo-oximolo'],
                        ['nome' => 'Môngwa', 'slug' => 'mongwa']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Curoca',
                    'slug' => 'curoca',
                    'comunas' => [
                        ['nome' => 'Oncócua', 'slug' => 'oncocua'],
                        ['nome' => 'Chitado', 'slug' => 'chitado']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuvelai',
                    'slug' => 'cuvelai',
                    'comunas' => [
                        ['nome' => 'Mupa', 'slug' => 'mupa'],
                        ['nome' => 'Mukolongodjo', 'slug' => 'mukolongodjo'],
                        ['nome' => 'Calonga', 'slug' => 'calonga'],
                        ['nome' => 'Cubati', 'slug' => 'cubati']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Namacunde',
                    'slug' => 'namacunde',
                    'comunas' => [
                        ['nome' => 'Namacunde', 'slug' => 'namacunde'],
                        ['nome' => 'Chiede', 'slug' => 'chiede']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ombadja',
                    'slug' => 'ombadja',
                    'comunas' => [
                        ['nome' => 'Humpe', 'slug' => 'humpe'],
                        ['nome' => 'Mucope', 'slug' => 'mucope'],
                        ['nome' => 'Naulila', 'slug' => 'naulila'],
                        ['nome' => 'Ombala yo Mungu', 'slug' => 'ombala-yo-mungu'],
                        ['nome' => 'Xangongo', 'slug' => 'xangongo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Longonjo',
                    'slug' => 'longonjo',
                    'comunas' => [
                        ['nome' => 'Lépi', 'slug' => 'lepi'],
                        ['nome' => 'Iava', 'slug' => 'iava'],
                        ['nome' => 'Chilata', 'slug' => 'chilata'],
                        ['nome' => 'Longonjo', 'slug' => 'longonjo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bailundo',
                    'slug' => 'bailundo',
                    'comunas' => [
                        ['nome' => 'Bimbe', 'slug' => 'bimbe'],
                        ['nome' => 'Bailundo', 'slug' => 'bailundo'],
                        ['nome' => 'Lunge', 'slug' => 'lunge'],
                        ['nome' => 'Luvemba', 'slug' => 'luvemba'],
                        ['nome' => 'Hengue', 'slug' => 'hengue']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chicala Choloanga',
                    'slug' => 'chicala-choloanga',
                    'comunas' => [
                        ['nome' => 'Sambo', 'slug' => 'sambo'],
                        ['nome' => 'Mbawe', 'slug' => 'mbawe'],
                        ['nome' => 'Chicala', 'slug' => 'chicala'],
                        ['nome' => 'Samboto', 'slug' => 'samboto']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mungo',
                    'slug' => 'mungo',
                    'comunas' => [
                        ['nome' => 'Mungo', 'slug' => 'mungo'],
                        ['nome' => 'Cambuengo', 'slug' => 'cambuengo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'londuimbale',
                    'slug' => 'londuimbale',
                    'comunas' => [
                        ['nome' => 'Londuimbali', 'slug' => 'londuimbali'],
                        ['nome' => 'Cumbira', 'slug' => 'cumbira'],
                        ['nome' => 'Galanga', 'slug' => 'galanga'],
                        ['nome' => 'Ussoque', 'slug' => 'ussoque'],
                        ['nome' => 'Alto Hama', 'slug' => 'alto-hama']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Tchindjenje',
                    'slug' => 'tchindjenje',
                    'comunas' => [
                        ['nome' => 'Chinjenje', 'slug' => 'chinjenje'],
                        ['nome' => 'Chiaca', 'slug' => 'chiaca']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ucuma',
                    'slug' => 'ucuma',
                    'comunas' => [
                        ['nome' => 'Ucuma', 'slug' => 'ucuma'],
                        ['nome' => 'Cacoma', 'slug' => 'cacoma'],
                        ['nome' => 'Mundundo', 'slug' => 'mundundo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cachiungo',
                    'slug' => 'cachiungo',
                    'comunas' => [
                        ['nome' => 'Chiumbo', 'slug' => 'chiumbo'],
                        ['nome' => 'Chinhama', 'slug' => 'chinhama'],
                        ['nome' => 'Cachiungo', 'slug' => 'cachiungo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caála',
                    'slug' => 'caala',
                    'comunas' => [
                        ['nome' => 'Caála', 'slug' => 'caala'],
                        ['nome' => 'Catata', 'slug' => 'catata'],
                        ['nome' => 'Calenga', 'slug' => 'calenga'],
                        ['nome' => 'Cuima', 'slug' => 'cuima']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ecunha',
                    'slug' => 'ecunha',
                    'comunas' => [
                        ['nome' => 'Quipeio', 'slug' => 'quipeio'],
                        ['nome' => 'Ecunha', 'slug' => 'ecunha']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Huambo',
                    'slug' => 'huambo',
                    'comunas' => [],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caconda',
                    'slug' => 'caconda',
                    'comunas' => [
                        ['nome' => 'Caconda', 'slug' => 'caconda'],
                        ['nome' => 'Gungue', 'slug' => 'gungue'],
                        ['nome' => 'Uaba', 'slug' => 'uaba'],
                        ['nome' => 'Cusse', 'slug' => 'cusse']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cacula',
                    'slug' => 'cacula',
                    'comunas' => [
                        ['nome' => 'Chituto', 'slug' => 'chituto'],
                        ['nome' => 'Viti Vivali', 'slug' => 'viti-vivali'],
                        ['nome' => 'Cacula', 'slug' => 'cacula'],
                        ['nome' => 'Tchicuaqueia', 'slug' => 'tchicuaqueia']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caluquembe',
                    'slug' => 'caluquembe',
                    'comunas' => [
                        ['nome' => 'Caluquembe', 'slug' => 'caluquembe'],
                        ['nome' => 'Calepi', 'slug' => 'calepi'],
                        ['nome' => 'Ngola', 'slug' => 'ngola']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Gambos',
                    'slug' => 'gambos',
                    'comunas' => [
                        ['nome' => 'Chimbemba', 'slug' => 'chimbemba'],
                        ['nome' => 'Chiange', 'slug' => 'chiange']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chibia',
                    'slug' => 'chibia',
                    'comunas' => [
                        ['nome' => 'Chibia', 'slug' => 'chibia'],
                        ['nome' => 'Jau', 'slug' => 'jau'],
                        ['nome' => 'Capunda Cavilongo', 'slug' => 'capunda-cavilongo'],
                        ['nome' => 'Quihita', 'slug' => 'quihita']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chicomba',
                    'slug' => 'chicomba',
                    'comunas' => [
                        ['nome' => 'Chicomba', 'slug' => 'chicomba'],
                        ['nome' => 'Cutenda', 'slug' => 'cutenda']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chipindo',
                    'slug' => 'chipindo',
                    'comunas' => [
                        ['nome' => 'Bambi', 'slug' => 'bambi'],
                        ['nome' => 'Chipindo', 'slug' => 'chipindo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuvango',
                    'slug' => 'cuvango',
                    'comunas' => [
                        ['nome' => 'Cuvango', 'slug' => 'cuvango'],
                        ['nome' => 'Galangue', 'slug' => 'galangue'],
                        ['nome' => 'Vicungo', 'slug' => 'vicungo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Humpata',
                    'slug' => 'humpata',
                    'comunas' => [
                        ['nome' => 'Humpata', 'slug' => 'humpata']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Jamba',
                    'slug' => 'jamba',
                    'comunas' => [
                        ['nome' => 'Dongo', 'slug' => 'dongo'],
                        ['nome' => 'Cassinga', 'slug' => 'cassinga'],
                        ['nome' => 'Jamba', 'slug' => 'jamba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lubango',
                    'slug' => 'lubango',
                    'comunas' => [
                        ['nome' => 'Lubango', 'slug' => 'lubango'],
                        ['nome' => 'Hoque', 'slug' => 'hoque'],
                        ['nome' => 'Arimba', 'slug' => 'arimba'],
                        ['nome' => 'Huila', 'slug' => 'huila']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Matala',
                    'slug' => 'matala',
                    'comunas' => [
                        ['nome' => 'Capelongo', 'slug' => 'capelongo'],
                        ['nome' => 'Matala', 'slug' => 'matala'],
                        ['nome' => 'Mulondo', 'slug' => 'mulondo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quilengues',
                    'slug' => 'quilengues',
                    'comunas' => [
                        ['nome' => 'Quilengues', 'slug' => 'quilengues'],
                        ['nome' => 'Impulo', 'slug' => 'impulo'],
                        ['nome' => 'Dinde', 'slug' => 'dinde']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quipungo',
                    'slug' => 'quipungo',
                    'comunas' => [
                        ['nome' => 'Quipungo', 'slug' => 'quipungo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Icolo-e-Bengo',
                    'slug' => 'icolo-e-bengo',
                    'comunas' => [
                        ['nome' => 'Cassoneca', 'slug' => 'cassoneca'],
                        ['nome' => 'Cabiri', 'slug' => 'cabiri'],
                        ['nome' => 'Bom Jesus', 'slug' => 'bom-jesus'],
                        ['nome' => 'Caculo Cahango', 'slug' => 'caculo-cahango'],
                        ['nome' => 'Quiminha', 'slug' => 'quiminha']
                    ],
                    'distritos' => [
                        ['nome' => 'Catete', 'slug' => 'catete'],
                        ['nome' => 'Bela Vista', 'slug' => 'bela-vista']
                    ]
                ],
                [
                    'nome' => 'Luanda',
                    'slug' => 'luanda',
                    'comunas' => [],
                    'distritos' => [
                        ['nome' => 'Sambizanga', 'slug' => 'sambizanga'],
                        ['nome' => 'Rangel', 'slug' => 'rangel'],
                        ['nome' => 'Maianga', 'slug' => 'maianga'],
                        ['nome' => 'Ingombota', 'slug' => 'ingombota'],
                        ['nome' => 'Samba', 'slug' => 'samba'],
                        ['nome' => 'Neves Bendinha', 'slug' => 'neves-bendinha'],
                        ['nome' => 'Ngola Kiluanje', 'slug' => 'ngola-kiluanje']
                    ]
                ],
                [
                    'nome' => 'Quiçama',
                    'slug' => 'quicama',
                    'comunas' => [
                        ['nome' => 'Muxima', 'slug' => 'muxima'],
                        ['nome' => 'Demba Chio', 'slug' => 'demba-chio'],
                        ['nome' => 'Quixinge', 'slug' => 'quixinge'],
                        ['nome' => 'Mumbondo', 'slug' => 'mumbondo'],
                        ['nome' => 'Caboledo', 'slug' => 'caboledo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cacuaco',
                    'slug' => 'cacuaco',
                    'comunas' => [
                        ['nome' => 'Cacuaco', 'slug' => 'cacuaco'],
                        ['nome' => 'Quicolo', 'slug' => 'quicolo'],
                        ['nome' => 'Funda', 'slug' => 'funda']
                    ],
                    'distritos' => [
                        ['nome' => 'Kikolo', 'slug' => 'kikolo'],
                        ['nome' => 'Mulenvos de Baixo', 'slug' => 'mulenvos-de-baixo'],
                        ['nome' => 'Sequele', 'slug' => 'sequele']
                    ]
                ],
                [
                    'nome' => 'Cazenga',
                    'slug' => 'cazenga',
                    'comunas' => [],
                    'distritos' => [
                        ['nome' => 'Cazenga', 'slug' => 'cazenga'],
                        ['nome' => 'Hoji ya Henda', 'slug' => 'hoji-ya-henda'],
                        ['nome' => '11 de Novembro', 'slug' => '11-de-novembro'],
                        ['nome' => 'Kima Kieza', 'slug' => 'kima-kieza'],
                        ['nome' => 'Tala Hadi', 'slug' => 'tala-hadi'],
                        ['nome' => 'Kalawenda', 'slug' => 'kalawenda']
                    ]
                ],
                [
                    'nome' => 'Viana',
                    'slug' => 'viana',
                    'comunas' => [
                        ['nome' => 'Calumbo', 'slug' => 'calumbo']
                    ],
                    'distritos' => [
                        ['nome' => 'Viana', 'slug' => 'viana'],
                        ['nome' => 'Estalagem', 'slug' => 'estalagem'],
                        ['nome' => 'Kikuxi', 'slug' => 'kikuxi'],
                        ['nome' => 'Baía', 'slug' => 'baia'],
                        ['nome' => 'Zango', 'slug' => 'zango'],
                        ['nome' => 'Vila Flôr', 'slug' => 'vila-flor']
                    ]
                ],
                [
                    'nome' => 'Belas',
                    'slug' => 'belas',
                    'comunas' => [
                        ['nome' => 'Camama', 'slug' => 'camama'],
                        ['nome' => 'Benfica', 'slug' => 'benfica'],
                        ['nome' => 'Vila Estoril', 'slug' => 'vila-estoril'],
                        ['nome' => 'Ilha do Mussulo', 'slug' => 'ilha-do-mussulo'],
                        ['nome' => 'Barra do Kwanza', 'slug' => 'barra-do-kwanza'],
                        ['nome' => 'Futungo de Belas', 'slug' => 'futungo-de-belas'],
                        ['nome' => 'Ramiro', 'slug' => 'ramiro']
                    ],
                    'distritos' => [
                        ['nome' => 'Quenguela', 'slug' => 'quenguela'],
                        ['nome' => 'Morro dos Veados', 'slug' => 'morro-dos-veados'],
                        ['nome' => 'Ramiros', 'slug' => 'ramiros'],
                        ['nome' => 'Vila Verde', 'slug' => 'vila-verde'],
                        ['nome' => 'Cabolombo', 'slug' => 'cabolombo'],
                        ['nome' => 'Kilamba', 'slug' => 'kilamba']
                    ]
                ],
                [
                    'nome' => 'Kilamba Kiaxi',
                    'slug' => 'kilamba-kiaxi',
                    'comunas' => [],
                    'distritos' => [
                        ['nome' => 'Golfe', 'slug' => 'golfe'],
                        ['nome' => 'Sapú', 'slug' => 'sapu'],
                        ['nome' => 'Palanca', 'slug' => 'palanca'],
                        ['nome' => 'Nova Vida', 'slug' => 'nova-vida']
                    ]
                ],
                [
                    'nome' => 'Talatona',
                    'slug' => 'talatona',
                    'comunas' => [
                        ['nome' => 'Mussulo', 'slug' => 'mussulo']
                    ],
                    'distritos' => [
                        ['nome' => 'Benfica', 'slug' => 'benfica'],
                        ['nome' => 'Futungo de Belas', 'slug' => 'futungo-de-belas'],
                        ['nome' => 'Lar do Patriota', 'slug' => 'lar-do-patriota'],
                        ['nome' => 'Talatona', 'slug' => 'talatona'],
                        ['nome' => 'Camama', 'slug' => 'camama'],
                        ['nome' => 'Cidade Universitária', 'slug' => 'cidade-universitaria']
                    ]
                ],
                [
                    'nome' => 'Cambulo',
                    'slug' => 'cambulo',
                    'comunas' => [
                        ['nome' => 'Luia', 'slug' => 'luia'],
                        ['nome' => 'Cachimo', 'slug' => 'cachimo'],
                        ['nome' => 'Canzar', 'slug' => 'canzar'],
                        ['nome' => 'Cambulo', 'slug' => 'cambulo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Capenda Camulemba',
                    'slug' => 'capenda-camulemba',
                    'comunas' => [
                        ['nome' => 'Capenda Camulemba', 'slug' => 'capenda-camulemba'],
                        ['nome' => 'Xinge', 'slug' => 'xinge']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caungula',
                    'slug' => 'caungula',
                    'comunas' => [
                        ['nome' => 'Caungula', 'slug' => 'caungula'],
                        ['nome' => 'Camaxili', 'slug' => 'camaxili']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Chitato',
                    'slug' => 'chitato',
                    'comunas' => [
                        ['nome' => 'Chitato', 'slug' => 'chitato'],
                        ['nome' => 'Luachimo', 'slug' => 'luachimo']
                    ],
                    'distritos' => [
                        ['nome' => 'Chitato', 'slug' => 'chitato'],
                        ['nome' => 'Dundo', 'slug' => 'dundo'],
                        ['nome' => 'Mussungue', 'slug' => 'mussungue']
                    ]
                ],
                [
                    'nome' => 'Cuango',
                    'slug' => 'cuango',
                    'comunas' => [
                        ['nome' => 'Cuango', 'slug' => 'cuango'],
                        ['nome' => 'Luremo', 'slug' => 'luremo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuílo',
                    'slug' => 'cuilo',
                    'comunas' => [
                        ['nome' => 'Cuilo', 'slug' => 'cuilo'],
                        ['nome' => 'Caluango', 'slug' => 'caluango']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lubalo',
                    'slug' => 'lubalo',
                    'comunas' => [
                        ['nome' => 'Lubalo', 'slug' => 'lubalo'],
                        ['nome' => 'Luangue', 'slug' => 'luangue'],
                        ['nome' => 'Muvuluege', 'slug' => 'muvuluege']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lucapa',
                    'slug' => 'lucapa',
                    'comunas' => [
                        ['nome' => 'Lucapa', 'slug' => 'lucapa'],
                        ['nome' => 'Capaia', 'slug' => 'capaia'],
                        ['nome' => 'Camissombo', 'slug' => 'camissombo'],
                        ['nome' => 'Xá Cassau', 'slug' => 'xa-cassau']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Lóvua',
                    'slug' => 'lovua',
                    'comunas' => [
                        ['nome' => 'Lucapa', 'slug' => 'lucapa'],
                        ['nome' => 'Capaia', 'slug' => 'capaia'],
                        ['nome' => 'Camissombo', 'slug' => 'camissombo'],
                        ['nome' => 'Xá Cassau', 'slug' => 'xa-cassau']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Xá-Muteba',
                    'slug' => 'xa-muteba',
                    'comunas' => [
                        ['nome' => 'Xá Muteba', 'slug' => 'xa-muteba'],
                        ['nome' => 'Iongo', 'slug' => 'iongo'],
                        ['nome' => 'Cassanje Calucala', 'slug' => 'cassanje-calucala']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cacolo',
                    'slug' => 'cacolo',
                    'comunas' => [
                        ['nome' => 'Xassengue', 'slug' => 'xassengue'],
                        ['nome' => 'Cucumbi', 'slug' => 'cucumbi'],
                        ['nome' => 'Alto Chicapa', 'slug' => 'alto-chicapa'],
                        ['nome' => 'Cacolo', 'slug' => 'cacolo']
                    ],
                    'distritos' => [],
                ],
                [
                    'nome' => 'Dala',
                    'slug' => 'dala',
                    'comunas' => [
                        ['nome' => 'Dala', 'slug' => 'dala'],
                        ['nome' => 'Luma Cassai', 'slug' => 'luma-cassai'],
                        ['nome' => 'Cazage', 'slug' => 'cazage']
                    ],
                    'distritos' => [],
                ],
                [
                    'nome' => 'Muconda',
                    'slug' => 'muconda',
                    'comunas' => [
                        ['nome' => 'Chiluage', 'slug' => 'chiluage'],
                        ['nome' => 'Cassai', 'slug' => 'cassai'],
                        ['nome' => 'Muriege', 'slug' => 'muriege'],
                        ['nome' => 'Muconda', 'slug' => 'muconda']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Saurimo',
                    'slug' => 'saurimo',
                    'comunas' => [
                        ['nome' => 'Saurimo', 'slug' => 'saurimo'],
                        ['nome' => 'Mona Quimbundo', 'slug' => 'mona-quimbundo'],
                        ['nome' => 'Sombo', 'slug' => 'sombo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cacuso',
                    'slug' => 'cacuso',
                    'comunas' => [
                        ['nome' => 'Cacuso', 'slug' => 'cacuso'],
                        ['nome' => 'Lombe', 'slug' => 'lombe'],
                        ['nome' => 'Quizenga', 'slug' => 'quizenga'],
                        ['nome' => 'Pungu a Ndongo', 'slug' => 'pungu-a-ndongo'],
                        ['nome' => 'Soqueco', 'slug' => 'soqueco']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Caombo',
                    'slug' => 'caombo',
                    'comunas' => [
                        ['nome' => 'Mbanji ya Ngola', 'slug' => 'mbanji-ya-ngola'],
                        ['nome' => 'Cahombo', 'slug' => 'cahombo'],
                        ['nome' => 'Cambo Suinginge', 'slug' => 'cambo-suinginge'],
                        ['nome' => 'Micanda', 'slug' => 'micanda']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Calandula',
                    'slug' => 'calandula',
                    'comunas' => [
                        ['nome' => 'Mbanji ya Ngola', 'slug' => 'mbanji-ya-ngola'],
                        ['nome' => 'Cahombo', 'slug' => 'cahombo'],
                        ['nome' => 'Cambo Suinginge', 'slug' => 'cambo-suinginge'],
                        ['nome' => 'Micanda', 'slug' => 'micanda']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cambundi-Catembo',
                    'slug' => 'cambundi-catembo',
                    'comunas' => [
                        ['nome' => 'Talamungongo', 'slug' => 'talamungongo'],
                        ['nome' => 'Cambundi Catembo', 'slug' => 'cambundi-catembo'],
                        ['nome' => 'Quitapa', 'slug' => 'quitapa'],
                        ['nome' => 'Dumba Cambango', 'slug' => 'dumba-cambango']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cangandala',
                    'slug' => 'cangandala',
                    'comunas' => [
                        ['nome' => 'Cangandala', 'slug' => 'cangandala'],
                        ['nome' => 'Bembo', 'slug' => 'bembo'],
                        ['nome' => 'Culamagia', 'slug' => 'culamagia'],
                        ['nome' => 'Caribo', 'slug' => 'caribo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuaba Nzogo',
                    'slug' => 'cuaba-nzogo',
                    'comunas' => [
                        ['nome' => 'Kiwaba Nzoji', 'slug' => 'kiwaba-nzoji'],
                        ['nome' => 'Mufuma', 'slug' => 'mufuma']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cunda-Dia-Baze',
                    'slug' => 'cunda-dia-baze',
                    'comunas' => [
                        ['nome' => 'Kunda dya Baze', 'slug' => 'kunda-dya-baze'],
                        ['nome' => 'Milando', 'slug' => 'milando'],
                        ['nome' => 'Lemba', 'slug' => 'lemba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Luquembo',
                    'slug' => 'luquembo',
                    'comunas' => [
                        ['nome' => 'Quimbango', 'slug' => 'quimbango'],
                        ['nome' => 'Capunda', 'slug' => 'capunda'],
                        ['nome' => 'Dombo wa Zanga', 'slug' => 'dombo-wa-zanga'],
                        ['nome' => 'Luquembo', 'slug' => 'luquembo'],
                        ['nome' => 'Cunga Palanga', 'slug' => 'cunga-palanga'],
                        ['nome' => 'Rimba', 'slug' => 'rimba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Malanje',
                    'slug' => 'malanje',
                    'comunas' => [
                        ['nome' => 'Malanje', 'slug' => 'malanje'],
                        ['nome' => 'Ngola Luiji', 'slug' => 'ngola-luiji'],
                        ['nome' => 'Cambaxe', 'slug' => 'cambaxe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Marimba',
                    'slug' => 'marimba',
                    'comunas' => [
                        ['nome' => 'Marimba', 'slug' => 'marimba'],
                        ['nome' => 'Cabombo', 'slug' => 'cabombo'],
                        ['nome' => 'Tembo Aluma', 'slug' => 'tembo-aluma']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Massango',
                    'slug' => 'massango',
                    'comunas' => [
                        ['nome' => 'Massango', 'slug' => 'massango'],
                        ['nome' => 'Quihuhu', 'slug' => 'quihuhu'],
                        ['nome' => 'Quinguengue', 'slug' => 'quinguengue']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mucari',
                    'slug' => 'mucari',
                    'comunas' => [
                        ['nome' => 'Catala', 'slug' => 'catala'],
                        ['nome' => 'Caculama', 'slug' => 'caculama'],
                        ['nome' => 'Caxinga', 'slug' => 'caxinga'],
                        ['nome' => 'Muquixe', 'slug' => 'muquixe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quela',
                    'slug' => 'quela',
                    'comunas' => [
                        ['nome' => 'Catala', 'slug' => 'catala'],
                        ['nome' => 'Caculama', 'slug' => 'caculama'],
                        ['nome' => 'Caxinga', 'slug' => 'caxinga'],
                        ['nome' => 'Muquixe', 'slug' => 'muquixe']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quirima',
                    'slug' => 'quirima',
                    'comunas' => [
                        ['nome' => 'Sautar', 'slug' => 'sautar'],
                        ['nome' => 'Quirima', 'slug' => 'quirima']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Alto Zambeze',
                    'slug' => 'alto-zambeze',
                    'comunas' => [
                        ['nome' => 'Nana Candundo', 'slug' => 'nana-candundo'],
                        ['nome' => 'Lumbala Caquengue', 'slug' => 'lumbala-caquengue'],
                        ['nome' => 'Cazombo', 'slug' => 'cazombo'],
                        ['nome' => 'Macondo', 'slug' => 'macondo'],
                        ['nome' => 'Caianda', 'slug' => 'caianda'],
                        ['nome' => 'Calunda', 'slug' => 'calunda'],
                        ['nome' => 'Lóvua', 'slug' => 'lovua']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bundas',
                    'slug' => 'bundas',
                    'comunas' => [
                        ['nome' => 'Lutembo', 'slug' => 'lutembo'],
                        ['nome' => 'Chiume', 'slug' => 'chiume'],
                        ['nome' => 'Lumbala Nguimbo', 'slug' => 'lumbala-nguimbo'],
                        ['nome' => 'Luvuei', 'slug' => 'luvuei'],
                        ['nome' => 'Ninda', 'slug' => 'ninda'],
                        ['nome' => 'Mussuma', 'slug' => 'mussuma'],
                        ['nome' => 'Sessa', 'slug' => 'sessa']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Camanongue',
                    'slug' => 'camanongue',
                    'comunas' => [
                        ['nome' => 'Camanongue', 'slug' => 'camanongue']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Léua',
                    'slug' => 'leua',
                    'comunas' => [
                        ['nome' => 'Léua', 'slug' => 'leua'],
                        ['nome' => 'Liangongo', 'slug' => 'liangongo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Luacano',
                    'slug' => 'luacano',
                    'comunas' => [
                        ['nome' => 'Luacano', 'slug' => 'luacano'],
                        ['nome' => 'Lago Dilolo', 'slug' => 'lago-dilolo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Moxico',
                    'slug' => 'moxico',
                    'comunas' => [
                        ['nome' => 'Luau', 'slug' => 'luau']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Luchazes',
                    'slug' => 'luchazes',
                    'comunas' => [
                        ['nome' => 'Cangombe', 'slug' => 'cangombe'],
                        ['nome' => 'Cassamba', 'slug' => 'cassamba'],
                        ['nome' => 'Tempué', 'slug' => 'tempue'],
                        ['nome' => 'Cangamba', 'slug' => 'cangamba'],
                        ['nome' => 'Muié', 'slug' => 'muie']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cameia',
                    'slug' => 'cameia',
                    'comunas' => [
                        ['nome' => 'Cameia', 'slug' => 'cameia']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Moxico',
                    'slug' => 'moxico',
                    'comunas' => [
                        ['nome' => 'Lucusse', 'slug' => 'lucusse'],
                        ['nome' => 'Cachipoque', 'slug' => 'cachipoque'],
                        ['nome' => 'Luena', 'slug' => 'luena'],
                        ['nome' => 'Muangai', 'slug' => 'muangai']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Moçâmedes',
                    'slug' => 'mocamedes',
                    'comunas' => [
                        ['nome' => 'Moçâmedes', 'slug' => 'mocamedes'],
                        ['nome' => 'Lucira', 'slug' => 'lucira'],
                        ['nome' => 'Bentiaba', 'slug' => 'bentiaba'],
                        ['nome' => 'Forte Santa Rita', 'slug' => 'forte-santa-rita']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Camucuio',
                    'slug' => 'camucuio',
                    'comunas' => [
                        ['nome' => 'Camucuio', 'slug' => 'camucuio'],
                        ['nome' => 'Mamué', 'slug' => 'mamue'],
                        ['nome' => 'Chingo', 'slug' => 'chingo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bibala',
                    'slug' => 'bibala',
                    'comunas' => [
                        ['nome' => 'Bibala', 'slug' => 'bibala'],
                        ['nome' => 'Caitou', 'slug' => 'caitou'],
                        ['nome' => 'Capangombe', 'slug' => 'capangombe'],
                        ['nome' => 'Lola', 'slug' => 'lola']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Virei',
                    'slug' => 'virei',
                    'comunas' => [
                        ['nome' => 'Virei', 'slug' => 'virei'],
                        ['nome' => 'Cainde', 'slug' => 'cainde']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Tômbua',
                    'slug' => 'tombua',
                    'comunas' => [
                        ['nome' => 'Baía dos Tigres', 'slug' => 'baia-dos-tigres'],
                        ['nome' => 'Iona', 'slug' => 'iona'],
                        ['nome' => 'Tômbwa', 'slug' => 'tombwa']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Uíge',
                    'slug' => 'uige',
                    'comunas' => [
                        ['nome' => 'Uíge', 'slug' => 'uige']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Alto Cauale',
                    'slug' => 'alto-cauale',
                    'comunas' => [
                        ['nome' => 'Cangola', 'slug' => 'cangola'],
                        ['nome' => 'Bengo', 'slug' => 'bengo'],
                        ['nome' => 'Caiongo', 'slug' => 'caiongo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Ambuíla',
                    'slug' => 'ambuila',
                    'comunas' => [
                        ['nome' => 'Nova Ambuíla', 'slug' => 'nova-ambuila'],
                        ['nome' => 'Quipedro', 'slug' => 'quipedro']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bembe',
                    'slug' => 'bembe',
                    'comunas' => [
                        ['nome' => 'Bembe', 'slug' => 'bembe'],
                        ['nome' => 'Lucunga', 'slug' => 'lucunga'],
                        ['nome' => 'Mabaia', 'slug' => 'mabaia']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Buengas',
                    'slug' => 'buengas',
                    'comunas' => [
                        ['nome' => 'Buenga Sul', 'slug' => 'buenga-sul'],
                        ['nome' => 'Nova Esperança', 'slug' => 'nova-esperanca'],
                        ['nome' => 'Cuilo Camboso', 'slug' => 'cuilo-camboso']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Bungo',
                    'slug' => 'bungo',
                    'comunas' => [
                        ['nome' => 'Bungo', 'slug' => 'bungo']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Milunga',
                    'slug' => 'milunga',
                    'comunas' => [
                        ['nome' => 'Macocola', 'slug' => 'macocola'],
                        ['nome' => 'Macolo', 'slug' => 'macolo'],
                        ['nome' => 'Milunga', 'slug' => 'milunga'],
                        ['nome' => 'Massau', 'slug' => 'massau']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Damba',
                    'slug' => 'damba',
                    'comunas' => [
                        ['nome' => 'Damba', 'slug' => 'damba'],
                        ['nome' => 'Nsosso', 'slug' => 'nsosso'],
                        ['nome' => 'Camatambo', 'slug' => 'camatambo'],
                        ['nome' => 'Lêmboa', 'slug' => 'lemboa'],
                        ['nome' => 'Petecusso', 'slug' => 'petecusso']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Maquela do Zombo',
                    'slug' => 'maquela-do-zombo',
                    'comunas' => [
                        ['nome' => 'Maquela do Zombo', 'slug' => 'maquela-do-zombo'],
                        ['nome' => 'Quibocolo', 'slug' => 'quibocolo'],
                        ['nome' => 'Béu', 'slug' => 'beu'],
                        ['nome' => 'Sacandica', 'slug' => 'sacandica'],
                        ['nome' => 'Cuilo Futa', 'slug' => 'cuilo-futa']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mucaba',
                    'slug' => 'mucaba',
                    'comunas' => [
                        ['nome' => 'Mucaba', 'slug' => 'mucaba'],
                        ['nome' => 'Uando Mucaba', 'slug' => 'uando-mucaba']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Negage',
                    'slug' => 'negage',
                    'comunas' => [
                        ['nome' => 'Dimuca', 'slug' => 'dimuca'],
                        ['nome' => 'Quisseque', 'slug' => 'quisseque'],
                        ['nome' => 'Negage', 'slug' => 'negage']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Puri',
                    'slug' => 'puri',
                    'comunas' => [
                        ['nome' => 'Puri', 'slug' => 'puri']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quimbele',
                    'slug' => 'quimbele',
                    'comunas' => [
                        ['nome' => 'Cuango', 'slug' => 'cuango'],
                        ['nome' => 'Icoca', 'slug' => 'icoca'],
                        ['nome' => 'Quimbele', 'slug' => 'quimbele'],
                        ['nome' => 'Alto Zaza', 'slug' => 'alto-zaza']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Quitexe',
                    'slug' => 'quitexe',
                    'comunas' => [
                        ['nome' => 'Quitexe', 'slug' => 'quitexe'],
                        ['nome' => 'Aldeia Viçosa', 'slug' => 'aldeia-vicosa'],
                        ['nome' => 'Cambamba', 'slug' => 'cambamba'],
                        ['nome' => 'Vista Alegre', 'slug' => 'vista-alegre']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Sanza Pombo',
                    'slug' => 'sanza-pombo',
                    'comunas' => [
                        ['nome' => 'Sanza Pombo', 'slug' => 'sanza-pombo'],
                        ['nome' => 'Cuilo Pombo', 'slug' => 'cuilo-pombo'],
                        ['nome' => 'Uamba', 'slug' => 'uamba'],
                        ['nome' => 'Alfândega', 'slug' => 'alfandega']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Songo',
                    'slug' => 'songo',
                    'comunas' => [
                        ['nome' => 'Songo', 'slug' => 'songo'],
                        ['nome' => 'Quivuenga', 'slug' => 'quivuenga']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Mbanza Congo',
                    'slug' => 'mbanza-congo',
                    'comunas' => [
                        ['nome' => 'Mbanza Kongo', 'slug' => 'mbanza-kongo'],
                        ['nome' => 'Luvo', 'slug' => 'luvo'],
                        ['nome' => 'Caluca', 'slug' => 'caluca'],
                        ['nome' => 'Madimba', 'slug' => 'madimba'],
                        ['nome' => 'Quiende', 'slug' => 'quiende'],
                        ['nome' => 'Calambata', 'slug' => 'calambata']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Soyo',
                    'slug' => 'soyo',
                    'comunas' => [
                        ['nome' => 'Soyo', 'slug' => 'soyo'],
                        ['nome' => 'Sumba', 'slug' => 'sumba'],
                        ['nome' => 'Pedra de Feitiço', 'slug' => 'pedra-de-feitico'],
                        ['nome' => 'Quêlo', 'slug' => 'quelo'],
                        ['nome' => 'Mangue Grande', 'slug' => 'mangue-grande']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Nzeto',
                    'slug' => 'nzeto',
                    'comunas' => [
                        ['nome' => 'Nzeto', 'slug' => 'nzeto'],
                        ['nome' => 'Quindeje', 'slug' => 'quindeje'],
                        ['nome' => 'Musserra', 'slug' => 'musserra'],
                        ['nome' => 'Quibala Norte', 'slug' => 'quibala-norte']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Cuimba',
                    'slug' => 'cuimba',
                    'comunas' => [
                        ['nome' => 'Cuimba', 'slug' => 'cuimba'],
                        ['nome' => 'Buela', 'slug' => 'buela'],
                        ['nome' => 'Serra da Canda', 'slug' => 'serra-da-canda'],
                        ['nome' => 'Luvaca', 'slug' => 'luvaca']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Nóqui',
                    'slug' => 'noqui',
                    'comunas' => [
                        ['nome' => 'Nóqui', 'slug' => 'noqui'],
                        ['nome' => 'Lufico', 'slug' => 'lufico'],
                        ['nome' => 'Mpala', 'slug' => 'mpala']
                    ],
                    'distritos' => []
                ],
                [
                    'nome' => 'Tomboco',
                    'slug' => 'tomboco',
                    'comunas' => [
                        ['nome' => 'Tomboco', 'slug' => 'tomboco'],
                        ['nome' => 'Quinsimba', 'slug' => 'quinsimba'],
                        ['nome' => 'Quinzau', 'slug' => 'quinzau']
                    ],
                    'distritos' => []
                ]
            ];

            foreach ($municipios as $mun) {
               $municipio = Municipio::select('id')->where('slug',$mun['slug'])->limit(1)->first();
                if (isset($municipio['id'])) {

                     foreach ($mun['distritos'] as $distrito) {
                            Distrito::create([
                                'nome' => $distrito['nome'],
                                'slug' => $distrito['slug'],
                                'municipio_id' => $municipio['id']
                            ]);
                        }

                }
            }
        }
    }
}
