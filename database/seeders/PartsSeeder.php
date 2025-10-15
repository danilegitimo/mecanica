<?php

namespace Database\Seeders;

use App\Models\Parts;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $parts = [
      ["name" => "Filtro de Óleo"],
      ["name" => "Pastilha de Freio"],
      ["name" => "Pneu Aro 15"],
      ["name" => "Bateria 60Ah"],
      ["name" => "Correia Dentada"],
      ["name" => "Amortecedor Dianteiro"],
      ["name" => "Óleo de Motor 5W30"],
      ["name" => "Filtro de Ar"],
      ["name" => "Lâmpada de Farol"],
      ["name" => "Cabo de Vela"],
      ["name" => "Radiador"],
      ["name" => "Bico Injetor"],
      ["name" => "Mangueira de Arrefecimento"],
      ["name" => "Cilindro de Freio"],
      ["name" => "Escapamento"],
      ["name" => "Sensor de Estacionamento"],
      ["name" => "Filtro de Combustível"],
      ["name" => "Cinta de Freio"],
      ["name" => "Capa de Banco"],
      ["name" => "Tapete de Carro"],
      ["name" => "Óleo de Transmissão"],
      ["name" => "Filtro de Cabine"],
      ["name" => "Correia de Acessórios"],
      ["name" => "Cilindro Mestre"],
      ["name" => "Cabo de Embreagem"],
      ["name" => "Cabo de Acelerador"],
      ["name" => "Vela de Ignição"],
      ["name" => "Bico de Limpeza"],
      ["name" => "Cinta de Suspensão"],
      ["name" => "Cilindro de Roda"],
      ["name" => "Capa de Motor"],
      ["name" => "Filtro de Óleo Diesel"],
      ["name" => "Cabo de Bateria"],
      ["name" => "Cilindro de Freio Traseiro"],
      ["name" => "Cinta de Freio Dianteiro"],
      ["name" => "Cilindro de Freio Dianteiro"],
      ["name" => "Cinta de Freio Traseiro"],
      ["name" => "Cabo de Vela de Ignição"],
      ["name" => "Cilindro de Freio de Mão"],
      ["name" => "Cinta de Suspensão Traseira"],
      ["name" => "Capa de Volante"],
      ["name" => "Cilindro de Direção"],
      ["name" => "Cinta de Direção"],
      ["name" => "Cabo de Direção"],
      ["name" => "Cilindro de Direção Hidráulica"],
      ["name" => "Cinta de Direção Hidráulica"],
      ["name" => "Cabo de Direção Elétrica"],
      ["name" => "Cilindro de Direção Elétrica"],
      ["name" => "Cinta de Direção Elétrica"],
      ["name" => "Cabo de Direção Assistida"],
      ["name" => "Cilindro de Direção Assistida"],
      ["name" => "Cinta de Direção Assistida"],
      ["name" => "Cabo de Direção Hidráulica"],
      ["name" => "Cilindro de Direção Hidráulica"],
      ["name" => "Cinta de Direção Hidráulica"],
      ["name" => "Cabo de Direção Elétrica"],
      ["name" => "Cilindro de Direção Elétrica"],
      ["name" => "Cinta de Direção Elétrica"],
      ["name" => "Cabo de Direção Assistida"],
      ["name" => "Cilindro de Direção Assistida"]
    ];

    foreach ($parts as $part) {
      Parts::create([
        'name' => strtoupper($part['name']),
        'quantity' => rand(0, 10),
        'supplier_id' => rand( 1, DB::table('suppliers')->count() ),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);
    }
  }
}
