<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            [
                'name' => 'João Silva',
                'endereco' => 'Rua das Palmeiras, 120 - São Paulo/SP',
                'cpf' => '078.692.922-73',
                'contato' => '(41) 93761-2208'
            ],
            [
                'name' => 'Maria Oliveira',
                'endereco' => 'Avenida Atlântica, 4500 - Rio de Janeiro/RJ',
                'cpf' => '468.819.954-66',
                'contato' => '(83) 98888-4406'
            ],
            [
                'name' => 'Pedro Santos',
                'endereco' => 'Rua Sete de Setembro, 230 - Porto Alegre/RS',
                'cpf' => '352.942.409-98',
                'contato' => '(71) 91381-5276'
            ],
            [
                'name' => 'Ana Paula Ferreira',
                'endereco' => 'Rua XV de Novembro, 89 - Curitiba/PR',
                'cpf' => '007.714.451-13',
                'contato' => '(66) 92301-8668'
            ],
            [
                'name' => 'Lucas Almeida',
                'endereco' => 'Rua Bahia, 312 - Belo Horizonte/MG',
                'cpf' => '908.937.086-23',
                'contato' => '(87) 96462-2424'
            ],
            [
                'name' => 'Juliana Costa',
                'endereco' => 'Rua Frei Serafim, 900 - Teresina/PI',
                'cpf' => '396.767.718-48',
                'contato' => '(87) 97513-8490'
            ],
            [
                'name' => 'Marcos Lima',
                'endereco' => 'Rua Padre Cícero, 415 - Juazeiro do Norte/CE',
                'cpf' => '974.840.851-54',
                'contato' => '(66) 99418-7232'
            ],
            [
                'name' => 'Fernanda Rocha',
                'endereco' => 'Rua Getúlio Vargas, 501 - Manaus/AM',
                'cpf' => '317.764.523-05',
                'contato' => '(77) 92472-6923'
            ],
            [
                'name' => 'Ricardo Souza',
                'endereco' => 'Rua Goiás, 122 - Goiânia/GO',
                'cpf' => '741.813.602-10',
                'contato' => '(41) 91937-3086'
            ],
            [
                'name' => 'Patrícia Mendes',
                'endereco' => 'Rua Maranhão, 205 - São Luís/MA',
                'cpf' => '944.949.638-28',
                'contato' => '(95) 95080-5320'
            ],
            [
                'name' => 'Eduardo Nascimento',
                'endereco' => 'Rua José Bonifácio, 480 - Recife/PE',
                'cpf' => '007.063.652-40',
                'contato' => '(65) 92547-1914'
            ],
            [
                'name' => 'Camila Ribeiro',
                'endereco' => 'Rua do Sol, 390 - Natal/RN',
                'cpf' => '541.501.205-28',
                'contato' => '(81) 93805-7579'
            ],
            [
                'name' => 'Felipe Martins',
                'endereco' => 'Rua José de Alencar, 215 - Salvador/BA',
                'cpf' => '019.329.180-00',
                'contato' => '(94) 98027-4075'
            ],
            [
                'name' => 'Bianca Moreira',
                'endereco' => 'Rua das Flores, 123 - Florianópolis/SC',
                'cpf' => '859.740.473-62',
                'contato' => '(97) 92177-6650'
            ],
            [
                'name' => 'André Cardoso',
                'endereco' => 'Rua Pará, 22 - Campo Grande/MS',
                'cpf' => '502.588.205-27',
                'contato' => '(92) 93794-8089'
            ],
            [
                'name' => 'Larissa Castro',
                'endereco' => 'Avenida Goiás, 199 - Palmas/TO',
                'cpf' => '767.910.134-51',
                'contato' => '(99) 96878-2638'
            ],
            [
                'name' => 'Rafael Teixeira',
                'endereco' => 'Rua Tocantins, 44 - Porto Velho/RO',
                'cpf' => '049.957.601-21',
                'contato' => '(51) 91777-2767'
            ],
            [
                'name' => 'Tatiane Pires',
                'endereco' => 'Rua Belém, 98 - Belém/PA',
                'cpf' => '740.589.495-03',
                'contato' => '(88) 97253-5120'
            ],
            [
                'name' => 'Daniel Carvalho',
                'endereco' => 'Rua Acre, 52 - Boa Vista/RR',
                'cpf' => '357.283.791-09',
                'contato' => '(65) 99093-1602'
            ],
            [
                'name' => 'Aline Lopes',
                'endereco' => 'Rua Dom Bosco, 150 - Maceió/AL',
                'cpf' => '676.204.876-54',
                'contato' => '(97) 91528-3782'
            ],
            [
                'name' => 'Cássio Duarte',
                'endereco' => 'Rua Pernambuco, 210 - Vitória/ES',
                'cpf' => '840.329.331-38',
                'contato' => '(94) 92969-5172'
            ],
            [
                'name' => 'Renata Moura',
                'endereco' => 'Rua Santa Catarina, 300 - Cuiabá/MT',
                'cpf' => '739.721.799-01',
                'contato' => '(99) 94415-5023'
            ],
            [
                'name' => 'Luís Barbosa',
                'endereco' => 'Rua Brasília, 190 - Brasília/DF',
                'cpf' => '493.094.894-05',
                'contato' => '(86) 96511-9192'
            ],
            [
                'name' => 'Sônia Andrade',
                'endereco' => 'Rua São José, 250 - João Pessoa/PB',
                'cpf' => '819.489.371-23',
                'contato' => '(89) 92403-7856'
            ],
            [
                'name' => 'Carla Moreira',
                'endereco' => 'Rua das Palmeiras, 120 - São Paulo/SP',
                'cpf' => '701.498.073-41',
                'contato' => '(51) 92682-5519'
            ],
            [
                'name' => 'Tiago Ramos',
                'endereco' => 'Avenida Atlântica, 4500 - Rio de Janeiro/RJ',
                'cpf' => '595.861.296-40',
                'contato' => '(66) 97823-4591'
            ],
            [
                'name' => 'Gabriela Farias',
                'endereco' => 'Rua Sete de Setembro, 230 - Porto Alegre/RS',
                'cpf' => '715.840.661-05',
                'contato' => '(89) 98404-4200'
            ],
            [
                'name' => 'Leonardo Melo',
                'endereco' => 'Rua XV de Novembro, 89 - Curitiba/PR',
                'cpf' => '828.596.733-69',
                'contato' => '(71) 91738-6577'
            ],
            [
                'name' => 'Vanessa Lopes',
                'endereco' => 'Rua Bahia, 312 - Belo Horizonte/MG',
                'cpf' => '945.503.130-21',
                'contato' => '(95) 91990-9954'
            ],
            [
                'name' => 'Bruno Pinto',
                'endereco' => 'Rua Frei Serafim, 900 - Teresina/PI',
                'cpf' => '158.069.142-08',
                'contato' => '(93) 97695-3593'
            ],
            [
                'name' => 'Rita Gomes',
                'endereco' => 'Rua Padre Cícero, 415 - Juazeiro do Norte/CE',
                'cpf' => '319.277.709-55',
                'contato' => '(61) 92254-8253'
            ],
            [
                'name' => 'Fábio Rocha',
                'endereco' => 'Rua Getúlio Vargas, 501 - Manaus/AM',
                'cpf' => '453.512.424-86',
                'contato' => '(79) 91610-2783'
            ],
            [
                'name' => 'Célia Duarte',
                'endereco' => 'Rua Goiás, 122 - Goiânia/GO',
                'cpf' => '023.210.145-04',
                'contato' => '(63) 91631-8872'
            ],
            [
                'name' => 'Rodrigo Nunes',
                'endereco' => 'Rua Maranhão, 205 - São Luís/MA',
                'cpf' => '113.409.659-33',
                'contato' => '(67) 92775-6142'
            ],
            [
                'name' => 'Natália Lima',
                'endereco' => 'Rua José Bonifácio, 480 - Recife/PE',
                'cpf' => '916.399.444-51',
                'contato' => '(93) 91391-3290'
            ],
            [
                'name' => 'Marcelo Ribeiro',
                'endereco' => 'Rua do Sol, 390 - Natal/RN',
                'cpf' => '437.690.755-36',
                'contato' => '(88) 95040-1789'
            ],
            [
                'name' => 'Jéssica Souza',
                'endereco' => 'Rua José de Alencar, 215 - Salvador/BA',
                'cpf' => '413.736.551-27',
                'contato' => '(79) 96067-4098'
            ],
            [
                'name' => 'Diego Cardoso',
                'endereco' => 'Rua das Flores, 123 - Florianópolis/SC',
                'cpf' => '412.745.321-40',
                'contato' => '(66) 97244-4825'
            ],
            [
                'name' => 'Paula Menezes',
                'endereco' => 'Rua Pará, 22 - Campo Grande/MS',
                'cpf' => '363.384.997-12',
                'contato' => '(99) 95676-5968'
            ],
            [
                'name' => 'Henrique Duarte',
                'endereco' => 'Avenida Goiás, 199 - Palmas/TO',
                'cpf' => '050.489.491-96',
                'contato' => '(66) 96283-9384'
            ],
            [
                'name' => 'Marina Ferreira',
                'endereco' => 'Rua Tocantins, 44 - Porto Velho/RO',
                'cpf' => '691.572.862-72',
                'contato' => '(99) 96022-9483'
            ],
            [
                'name' => 'Thiago Costa',
                'endereco' => 'Rua Belém, 98 - Belém/PA',
                'cpf' => '275.972.635-54',
                'contato' => '(97) 98283-4783'
            ],
            [
                'name' => 'Patrícia Oliveira',
                'endereco' => 'Rua Acre, 52 - Boa Vista/RR',
                'cpf' => '202.040.061-80',
                'contato' => '(69) 97723-3705'
            ],
            [
                'name' => 'Anderson Lima',
                'endereco' => 'Rua Dom Bosco, 150 - Maceió/AL',
                'cpf' => '994.432.869-39',
                'contato' => '(74) 98332-2226'
            ],
            [
                'name' => 'Débora Santos',
                'endereco' => 'Rua Pernambuco, 210 - Vitória/ES',
                'cpf' => '989.779.981-82',
                'contato' => '(87) 91549-4456'
            ],
            [
                'name' => 'Sérgio Almeida',
                'endereco' => 'Rua Santa Catarina, 300 - Cuiabá/MT',
                'cpf' => '788.856.393-72',
                'contato' => '(41) 99968-7692'
            ],
            [
                'name' => 'Priscila Castro',
                'endereco' => 'Rua Brasília, 190 - Brasília/DF',
                'cpf' => '008.693.535-60',
                'contato' => '(87) 94029-7137'
            ],
            [
                'name' => 'Carlos Mendes',
                'endereco' => 'Rua São José, 250 - João Pessoa/PB',
                'cpf' => '767.558.703-07',
                'contato' => '(51) 97975-8162'
            ],
            [
                'name' => 'Elaine Barbosa',
                'endereco' => 'Rua das Palmeiras, 120 - São Paulo/SP',
                'cpf' => '900.383.845-31',
                'contato' => '(91) 99382-5238'
            ],
            [
                'name' => 'Felipe Rocha',
                'endereco' => 'Avenida Atlântica, 4500 - Rio de Janeiro/RJ',
                'cpf' => '535.232.955-05',
                'contato' => '(74) 97752-8969'
            ],
            [
                'name' => 'Simone Nogueira',
                'endereco' => 'Rua Sete de Setembro, 230 - Porto Alegre/RS',
                'cpf' => '468.738.017-47',
                'contato' => '(62) 95825-9637'
            ],
            [
                'name' => 'Gustavo Moreira',
                'endereco' => 'Rua XV de Novembro, 89 - Curitiba/PR',
                'cpf' => '998.607.058-95',
                'contato' => '(84) 98904-4932'
            ],
            [
                'name' => 'Tatiana Silva',
                'endereco' => 'Rua Bahia, 312 - Belo Horizonte/MG',
                'cpf' => '375.224.659-66',
                'contato' => '(51) 91761-9119'
            ],
            [
                'name' => 'Vitor Martins',
                'endereco' => 'Rua Frei Serafim, 900 - Teresina/PI',
                'cpf' => '009.969.539-14',
                'contato' => '(73) 91055-2052'
            ],
            [
                'name' => 'Letícia Souza',
                'endereco' => 'Rua Padre Cícero, 415 - Juazeiro do Norte/CE',
                'cpf' => '916.736.393-80',
                'contato' => '(73) 91009-6286'
            ],
            [
                'name' => 'Matheus Rocha',
                'endereco' => 'Rua Getúlio Vargas, 501 - Manaus/AM',
                'cpf' => '013.269.550-20',
                'contato' => '(95) 91990-4150'
            ],
            [
                'name' => 'Camila Lopes',
                'endereco' => 'Rua Goiás, 122 - Goiânia/GO',
                'cpf' => '318.557.855-44',
                'contato' => '(91) 91850-4516'
            ],
            [
                'name' => 'Paulo Ferreira',
                'endereco' => 'Rua Maranhão, 205 - São Luís/MA',
                'cpf' => '911.681.957-80',
                'contato' => '(71) 92766-5800'
            ],
            [
                'name' => 'Lúcia Andrade',
                'endereco' => 'Rua José Bonifácio, 480 - Recife/PE',
                'cpf' => '403.316.559-26',
                'contato' => '(63) 92923-6994'
            ],
            [
                'name' => 'Hugo Castro',
                'endereco' => 'Rua do Sol, 390 - Natal/RN',
                'cpf' => '926.593.341-02',
                'contato' => '(69) 98842-8279'
            ],
            [
                'name' => 'Adriana Nogueira',
                'endereco' => 'Rua José de Alencar, 215 - Salvador/BA',
                'cpf' => '021.119.163-90',
                'contato' => '(88) 99133-2521'
            ],
            [
                'name' => 'Caio Lima',
                'endereco' => 'Rua das Flores, 123 - Florianópolis/SC',
                'cpf' => '177.585.072-20',
                'contato' => '(96) 96698-2897'
            ],
            [
                'name' => 'Sandra Rocha',
                'endereco' => 'Rua Pará, 22 - Campo Grande/MS',
                'cpf' => '015.369.292-80',
                'contato' => '(95) 99279-3129'
            ],
            [
                'name' => 'Mauro Carvalho',
                'endereco' => 'Avenida Goiás, 199 - Palmas/TO',
                'cpf' => '798.296.925-90',
                'contato' => '(94) 96665-2672'
            ],
            [
                'name' => 'Júlia Souza',
                'endereco' => 'Rua Tocantins, 44 - Porto Velho/RO',
                'cpf' => '649.917.893-46',
                'contato' => '(21) 94250-8047'
            ],
            [
                'name' => 'Rodrigo Gomes',
                'endereco' => 'Rua Belém, 98 - Belém/PA',
                'cpf' => '798.880.006-08',
                'contato' => '(89) 94237-7795'
            ],
            [
                'name' => 'Beatriz Costa',
                'endereco' => 'Rua Acre, 52 - Boa Vista/RR',
                'cpf' => '108.265.693-31',
                'contato' => '(73) 92446-8550'
            ],
            [
                'name' => 'Marcos Ferreira',
                'endereco' => 'Rua Dom Bosco, 150 - Maceió/AL',
                'cpf' => '523.774.753-10',
                'contato' => '(62) 98800-5442'
            ],
            [
                'name' => 'Isabela Melo',
                'endereco' => 'Rua Pernambuco, 210 - Vitória/ES',
                'cpf' => '403.277.749-75',
                'contato' => '(51) 93813-9032'
            ],
            [
                'name' => 'Roberto Lima',
                'endereco' => 'Rua Santa Catarina, 300 - Cuiabá/MT',
                'cpf' => '155.415.005-16',
                'contato' => '(41) 91947-5331'
            ],
            [
                'name' => 'Rafaela Duarte',
                'endereco' => 'Rua Brasília, 190 - Brasília/DF',
                'cpf' => '293.074.497-91',
                'contato' => '(96) 91041-7489'
            ],
            [
                'name' => 'César Nunes',
                'endereco' => 'Rua São José, 250 - João Pessoa/PB',
                'cpf' => '569.839.234-05',
                'contato' => '(63) 98973-8014'
            ],
            [
                'name' => 'Aline Martins',
                'endereco' => 'Rua das Palmeiras, 120 - São Paulo/SP',
                'cpf' => '774.374.802-20',
                'contato' => '(82) 91161-1113'
            ],
            [
                'name' => 'Cláudio Barbosa',
                'endereco' => 'Avenida Atlântica, 4500 - Rio de Janeiro/RJ',
                'cpf' => '798.623.025-85',
                'contato' => '(85) 97116-1243'
            ],
            [
                'name' => 'Lara Ramos',
                'endereco' => 'Rua Sete de Setembro, 230 - Porto Alegre/RS',
                'cpf' => '642.701.577-04',
                'contato' => '(77) 92364-8042'
            ],
            [
                'name' => 'Ronaldo Oliveira',
                'endereco' => 'Rua XV de Novembro, 89 - Curitiba/PR',
                'cpf' => '942.587.552-90',
                'contato' => '(64) 96478-9284'
            ],
            [
                'name' => 'Flávia Santos',
                'endereco' => 'Rua Bahia, 312 - Belo Horizonte/MG',
                'cpf' => '759.882.159-39',
                'contato' => '(73) 91522-4444'
            ],
            [
                'name' => 'Igor Almeida',
                'endereco' => 'Rua Frei Serafim, 900 - Teresina/PI',
                'cpf' => '900.802.800-05',
                'contato' => '(51) 96682-3054'
            ],
            [
                'name' => 'Tatiane Mendes',
                'endereco' => 'Rua Padre Cícero, 415 - Juazeiro do Norte/CE',
                'cpf' => '475.375.858-30',
                'contato' => '(83) 95723-3904'
            ],
            [
                'name' => 'Vinícius Costa',
                'endereco' => 'Rua Getúlio Vargas, 501 - Manaus/AM',
                'cpf' => '477.429.405-58',
                'contato' => '(93) 96843-2250'
            ],
            [
                'name' => 'Cristina Ribeiro',
                'endereco' => 'Rua Goiás, 122 - Goiânia/GO',
                'cpf' => '628.308.089-83',
                'contato' => '(66) 96738-5166'
            ],
            [
                'name' => 'Edson Lima',
                'endereco' => 'Rua Maranhão, 205 - São Luís/MA',
                'cpf' => '694.110.532-11',
                'contato' => '(94) 92101-7214'
            ],
            [
                'name' => 'Paula Rocha',
                'endereco' => 'Rua José Bonifácio, 480 - Recife/PE',
                'cpf' => '873.581.364-46',
                'contato' => '(21) 93392-2761'
            ],
            [
                'name' => 'Murilo Silva',
                'endereco' => 'Rua do Sol, 390 - Natal/RN',
                'cpf' => '165.596.184-55',
                'contato' => '(64) 95940-5250'
            ],
            [
                'name' => 'Andréa Cardoso',
                'endereco' => 'Rua José de Alencar, 215 - Salvador/BA',
                'cpf' => '784.965.390-40',
                'contato' => '(21) 91866-8566'
            ],
            [
                'name' => 'Rogério Teixeira',
                'endereco' => 'Rua das Flores, 123 - Florianópolis/SC',
                'cpf' => '800.786.826-73',
                'contato' => '(71) 99562-8675'
            ],
            [
                'name' => 'Gabriel Nascimento',
                'endereco' => 'Rua Pará, 22 - Campo Grande/MS',
                'cpf' => '152.369.522-63',
                'contato' => '(31) 94834-6499'
            ],
            [
                'name' => 'Elaine Santos',
                'endereco' => 'Avenida Goiás, 199 - Palmas/TO',
                'cpf' => '701.988.032-06',
                'contato' => '(83) 95313-4988'
            ],
            [
                'name' => 'Felipe Andrade',
                'endereco' => 'Rua Tocantins, 44 - Porto Velho/RO',
                'cpf' => '340.586.208-62',
                'contato' => '(98) 92584-3268'
            ],
            [
                'name' => 'Camila Costa',
                'endereco' => 'Rua Belém, 98 - Belém/PA',
                'cpf' => '401.982.183-62',
                'contato' => '(86) 92251-1764'
            ],
            [
                'name' => 'Eduardo Melo',
                'endereco' => 'Rua Acre, 52 - Boa Vista/RR',
                'cpf' => '458.445.965-79',
                'contato' => '(75) 93552-7139'
            ],
            [
                'name' => 'Larissa Ribeiro',
                'endereco' => 'Rua Dom Bosco, 150 - Maceió/AL',
                'cpf' => '561.951.317-33',
                'contato' => '(96) 96940-3999'
            ],
            [
                'name' => 'Marcelo Nunes',
                'endereco' => 'Rua Pernambuco, 210 - Vitória/ES',
                'cpf' => '066.521.342-50',
                'contato' => '(99) 93530-5738'
            ],
            [
                'name' => 'Patrícia Carvalho',
                'endereco' => 'Rua Santa Catarina, 300 - Cuiabá/MT',
                'cpf' => '351.802.047-12',
                'contato' => '(77) 91496-7378'
            ],
            [
                'name' => 'Thiago Duarte',
                'endereco' => 'Rua Brasília, 190 - Brasília/DF',
                'cpf' => '708.136.960-03',
                'contato' => '(66) 96142-6585'
            ],
            [
                'name' => 'Sabrina Almeida',
                'endereco' => 'Rua São José, 250 - João Pessoa/PB',
                'cpf' => '891.053.410-94',
                'contato' => '(62) 97595-2513'
            ],
            [
                'name' => 'Daniela Souza',
                'endereco' => 'Rua das Palmeiras, 120 - São Paulo/SP',
                'cpf' => '623.759.665-89',
                'contato' => '(83) 97344-4566'
            ],
            [
                'name' => 'Alex Lima',
                'endereco' => 'Avenida Atlântica, 4500 - Rio de Janeiro/RJ',
                'cpf' => '355.236.371-81',
                'contato' => '(67) 94073-7630'
            ],
            [
                'name' => 'Renato Castro',
                'endereco' => 'Rua Sete de Setembro, 230 - Porto Alegre/RS',
                'cpf' => '403.014.930-81',
                'contato' => '(99) 92339-1890'
            ],
            [
                'name' => 'Carolina Mendes',
                'endereco' => 'Rua XV de Novembro, 89 - Curitiba/PR',
                'cpf' => '153.632.913-47',
                'contato' => '(98) 92860-2324'
            ],
        ];

        foreach ($clients as $client) {
            Client::create([
                'name' => $client['name'],
                'endereco' => $client['endereco'],
                'cpf' => $client['cpf'],
                'contato' => $client['contato']
            ]);
        }
    }
}
