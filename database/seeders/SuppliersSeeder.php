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
      [
        'name' => 'Auto Peças São Paulo',
        'cnpj' => '12.345.678/0001-90',
        'endereco' => 'Rua da Indústria, 123, SP, SP',
        'contato' => '(11) 98765-4321'
      ],
      [
        'name' => 'Peças e Serviços Ltda.',
        'cnpj' => '23.456.789/0001-01',
        'endereco' => 'Av. das Nações, 456, Rio de Janeiro',
        'contato' => '(21) 99876-5432'
      ],
      [
        'name' => 'Ferramentas e Equipamentos',
        'cnpj' => '34.567.890/0001-12',
        'endereco' => 'Praça da Liberdade, 789, BH, MG',
        'contato' => '(31) 95555-1234'
      ],
      [
        'name' => 'Auto Center Rio',
        'cnpj' => '45.678.901/0001-23',
        'endereco' => 'Rua do Mercador, 135, Porto Alegre',
        'contato' => '(51) 94444-3210'
      ],
      [
        'name' => 'Peças de Carro Brasília',
        'cnpj' => '56.789.012/0001-34',
        'endereco' => 'QSG 5 Bloco D, Brasília, DF',
        'contato' => '(61) 93333-4567'
      ],
      [
        'name' => 'Auto Peças Nordeste',
        'cnpj' => '67.890.123/0001-45',
        'endereco' => 'Rua João Batista, 678, Recife, PE',
        'contato' => '(81) 92222-3330'
      ],
      [
        'name' => 'Componentes Automotivos',
        'cnpj' => '78.901.234/0001-56',
        'endereco' => 'Rua dos Eventos, 234, Salvador, BA',
        'contato' => '(71) 91111-2220'
      ],
      [
        'name' => 'Peças e Acessórios RJ',
        'cnpj' => '89.012.345/0001-67',
        'endereco' => 'Av. Atlântica, 1000, Rio de Janeiro',
        'contato' => '(21) 90000-1111'
      ],
      [
        'name' => 'Auto Partes São Luís',
        'cnpj' => '90.123.456/0001-78',
        'endereco' => 'Avenida dos Holandeses, 345, SL, MA',
        'contato' => '(98) 98888-4444'
      ],
      [
        'name' => 'Fornecedor de Peças Ltda.',
        'cnpj' => '01.234.567/0001-89',
        'endereco' => 'Rua das Flores, 67, Curitiba, PR',
        'contato' => '(41) 97777-5555'
      ]
    ];

    foreach ($suppliers as $supplier) {
      Supplier::create([
        'name' => strtoupper($supplier['name']),
        'cnpj' => $supplier['cnpj'],
        'endereco' => $supplier['endereco'],
        'contato' => $supplier['contato'],
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);
    }
  }
}
