<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $suppliers = [
            ['name' => 'Auto Peças São Paulo', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Peças e Acessórios Brasil', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Mecânica e Peças Ltda', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Center do Sul', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Peças Automotivas Nordeste', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Acessórios e Serviços Ltda', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Auto Peças do Norte', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Mecânica e Acessórios', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Peças e Serviços do Oeste', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
            ['name' => 'Auto Peças e Serviços', 'cnpj' => '01.234.567/0001-89', 'contato' => '(41) 90123-4567'],
            ['name' => 'Fornecedora de Peças Automotivas', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Acessórios Automotivos Brasil', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Peças e Serviços do Brasil', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Peças e Acessórios', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Mecânica e Peças do Sul', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Fornecedora de Acessórios', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Peças Automotivas do Norte', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Auto Center do Brasil', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Mecânica e Acessórios do Oeste', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
            ['name' => 'Peças e Serviços do Sul', 'cnpj' => '01.234.567/0001-89', 'contato' => '(41) 90123-4567'],
            ['name' => 'Fornecedora de Peças e Acessórios', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Acessórios Automotivos do Brasil', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Peças e Serviços Automotivos', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Peças e Serviços do Sul', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Mecânica e Acessórios do Nordeste', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Fornecedora de Peças do Norte', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Peças e Acessórios do Oeste', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Auto Center e Peças', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Mecânica e Fornecedora de Acessórios', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
            ['name' => 'Peças Automotivas e Serviços', 'cnpj' => '01.234.567/0001-89', 'contato' => '(41) 90123-4567'],
            ['name' => 'Fornecedora de Acessórios e Peças', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Acessórios e Peças do Brasil', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Peças e Serviços do Nordeste', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Peças e Acessórios do Sul', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Mecânica e Fornecedora do Norte', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Fornecedora de Peças e Acessórios do Oeste', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Peças Automotivas e Acessórios', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Auto Center e Fornecedora', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Mecânica e Peças do Brasil', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
            ['name' => 'Peças e Serviços do Sul', 'cnpj' => '01.234.567/0001-89', 'contato' => '(41) 90123-4567'],
            ['name' => 'Fornecedora de Acessórios e Peças do Nordeste', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Acessórios e Peças do Brasil', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Peças e Serviços Automotivos do Norte', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Peças e Acessórios do Sul', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Mecânica e Fornecedora de Acessórios do Oeste', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Fornecedora de Peças e Acessórios do Centro-Oeste', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Peças Automotivas e Serviços do Nordeste', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Auto Center e Fornecedora de Peças', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Mecânica e Acessórios do Brasil', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
            ['name' => 'Peças e Serviços do Sul', 'cnpj' => '01.234.567/0001-89', 'contato' => '(41) 90123-4567'],
            ['name' => 'Fornecedora de Acessórios e Peças do Norte', 'cnpj' => '12.345.678/0001-90', 'contato' => '(11) 91234-5678'],
            ['name' => 'Acessórios e Peças do Nordeste', 'cnpj' => '23.456.789/0001-01', 'contato' => '(21) 92345-6789'],
            ['name' => 'Peças e Serviços do Centro-Oeste', 'cnpj' => '34.567.890/0001-12', 'contato' => '(31) 93456-7890'],
            ['name' => 'Auto Peças e Acessórios do Norte', 'cnpj' => '45.678.901/0001-23', 'contato' => '(41) 94567-8901'],
            ['name' => 'Mecânica e Fornecedora de Acessórios do Sul', 'cnpj' => '56.789.012/0001-34', 'contato' => '(51) 95678-9012'],
            ['name' => 'Fornecedora de Peças e Acessórios do Brasil', 'cnpj' => '67.890.123/0001-45', 'contato' => '(61) 96789-0123'],
            ['name' => 'Peças Automotivas e Serviços do Oeste', 'cnpj' => '78.901.234/0001-56', 'contato' => '(71) 97890-1234'],
            ['name' => 'Auto Center e Fornecedora de Acessórios', 'cnpj' => '89.012.345/0001-67', 'contato' => '(81) 98901-2345'],
            ['name' => 'Mecânica e Acessórios do Nordeste', 'cnpj' => '90.123.456/0001-78', 'contato' => '(91) 99012-3456'],
        ];

        $enderecos = [
  'Rua Haddock Lobo, 595 - Cerqueira César, São Paulo/SP - 01414-001',
  'Avenida Atlântica, 1702 - Copacabana, Rio de Janeiro/RJ - 22021-001',
  'Rua das Flores, 80 - Centro, Curitiba/PR - 80020-010',
  'Avenida Afonso Pena, 1500 - Centro, Belo Horizonte/MG - 30130-003',
  'Rua dos Andradas, 1234 - Centro Histórico, Porto Alegre/RS - 90020-008',
  'Avenida Beira-Mar, 2500 - Meireles, Fortaleza/CE - 60165-121',
  'Rua Frei Serafim, 980 - Centro, Teresina/PI - 64000-020',
  'Avenida Getúlio Vargas, 455 - Funcionários, Goiânia/GO - 74101-020',
  'Rua João Pessoa, 300 - Centro, Recife/PE - 50020-010',
  'Avenida Litorânea, 2100 - Calhau, São Luís/MA - 65071-377'
];

$total = count($enderecos) - 1;

        foreach ($suppliers as $supplier) {
            Supplier::create([
                'name' => $supplier['name'],
                'cnpj' => $supplier['cnpj'],
                'endereco' => $enderecos[rand(0, $total)],
                'contato' => $supplier['contato'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
