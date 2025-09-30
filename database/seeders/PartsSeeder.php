<?php

namespace Database\Seeders;

use App\Models\Parts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = [
            ['name' => 'Filtro de Óleo', 'quantity' => 100, 'supplier_id' => 1],
            ['name' => 'Pastilha de Freio', 'quantity' => 150, 'supplier_id' => 1],
            ['name' => 'Pneu Aro 15', 'quantity' => 80, 'supplier_id' => 2],
            ['name' => 'Bateria 60Ah', 'quantity' => 50, 'supplier_id' => 2],
            ['name' => 'Correia Dentada', 'quantity' => 120, 'supplier_id' => 3],
            ['name' => 'Amortecedor Dianteiro', 'quantity' => 70, 'supplier_id' => 3],
            ['name' => 'Óleo de Motor 5W30', 'quantity' => 200, 'supplier_id' => 4],
            ['name' => 'Filtro de Ar', 'quantity' => 180, 'supplier_id' => 4],
            ['name' => 'Lâmpada de Farol', 'quantity' => 90, 'supplier_id' => 5],
            ['name' => 'Cabo de Vela', 'quantity' => 160, 'supplier_id' => 5],
            ['name' => 'Radiador', 'quantity' => 40, 'supplier_id' => 6],
            ['name' => 'Bico Injetor', 'quantity' => 110, 'supplier_id' => 6],
            ['name' => 'Mangueira de Arrefecimento', 'quantity' => 130, 'supplier_id' => 7],
            ['name' => 'Cilindro de Freio', 'quantity' => 60, 'supplier_id' => 7],
            ['name' => 'Escapamento', 'quantity' => 30, 'supplier_id' => 8],
            ['name' => 'Sensor de Estacionamento', 'quantity' => 50, 'supplier_id' => 8],
            ['name' => 'Filtro de Combustível', 'quantity' => 140, 'supplier_id' => 9],
            ['name' => 'Cinta de Freio', 'quantity' => 75, 'supplier_id' => 9],
            ['name' => 'Capa de Banco', 'quantity' => 200, 'supplier_id' => 10],
            ['name' => 'Tapete de Carro', 'quantity' => 150, 'supplier_id' => 10],
            ['name' => 'Óleo de Transmissão', 'quantity' => 90, 'supplier_id' => 1],
            ['name' => 'Filtro de Cabine', 'quantity' => 120, 'supplier_id' => 2],
            ['name' => 'Correia de Acessórios', 'quantity' => 100, 'supplier_id' => 3],
            ['name' => 'Cilindro Mestre', 'quantity' => 80, 'supplier_id' => 4],
            ['name' => 'Cabo de Embreagem', 'quantity' => 60, 'supplier_id' => 5],
            ['name' => 'Cabo de Acelerador', 'quantity' => 70, 'supplier_id' => 6],
            ['name' => 'Vela de Ignição', 'quantity' => 150, 'supplier_id' => 7],
            ['name' => 'Bico de Limpeza', 'quantity' => 40, 'supplier_id' => 8],
            ['name' => 'Cinta de Suspensão', 'quantity' => 90, 'supplier_id' => 9],
            ['name' => 'Cilindro de Roda', 'quantity' => 110, 'supplier_id' => 10],
            ['name' => 'Capa de Motor', 'quantity' => 30, 'supplier_id' => 1],
            ['name' => 'Filtro de Óleo Diesel', 'quantity' => 50, 'supplier_id' => 2],
            ['name' => 'Cabo de Bateria', 'quantity' => 80, 'supplier_id' => 3],
            ['name' => 'Cilindro de Freio Traseiro', 'quantity' => 60, 'supplier_id' => 4],
            ['name' => 'Cinta de Freio Dianteiro', 'quantity' => 70, 'supplier_id' => 5],
            ['name' => 'Cilindro de Freio Dianteiro', 'quantity' => 90, 'supplier_id' => 6],
            ['name' => 'Cinta de Freio Traseiro', 'quantity' => 100, 'supplier_id' => 7],
            ['name' => 'Cabo de Vela de Ignição', 'quantity' => 120, 'supplier_id' => 8],
            ['name' => 'Cilindro de Freio de Mão', 'quantity' => 40, 'supplier_id' => 9],
            ['name' => 'Cinta de Suspensão Traseira', 'quantity' => 50, 'supplier_id' => 10],
            ['name' => 'Capa de Volante', 'quantity' => 60, 'supplier_id' => 1],
            ['name' => 'Cilindro de Direção', 'quantity' => 70, 'supplier_id' => 2],
            ['name' => 'Cinta de Direção', 'quantity' => 80, 'supplier_id' => 3],
            ['name' => 'Cabo de Direção', 'quantity' => 90, 'supplier_id' => 4],
            ['name' => 'Cilindro de Direção Hidráulica', 'quantity' => 100, 'supplier_id' => 5],
            ['name' => 'Cinta de Direção Hidráulica', 'quantity' => 110, 'supplier_id' => 6],
            ['name' => 'Cabo de Direção Elétrica', 'quantity' => 120, 'supplier_id' => 7],
            ['name' => 'Cilindro de Direção Elétrica', 'quantity' => 130, 'supplier_id' => 8],
            ['name' => 'Cinta de Direção Elétrica', 'quantity' => 140, 'supplier_id' => 9],
            ['name' => 'Cabo de Direção Assistida', 'quantity' => 150, 'supplier_id' => 10],
            ['name' => 'Cilindro de Direção Assistida', 'quantity' => 160, 'supplier_id' => 1],
            ['name' => 'Cinta de Direção Assistida', 'quantity' => 170, 'supplier_id' => 2],
            ['name' => 'Cabo de Direção Hidráulica', 'quantity' => 180, 'supplier_id' => 3],
            ['name' => 'Cilindro de Direção Hidráulica', 'quantity' => 190, 'supplier_id' => 4],
            ['name' => 'Cinta de Direção Hidráulica', 'quantity' => 200, 'supplier_id' => 5],
            ['name' => 'Cabo de Direção Elétrica', 'quantity' => 210, 'supplier_id' => 6],
            ['name' => 'Cilindro de Direção Elétrica', 'quantity' => 220, 'supplier_id' => 7],
            ['name' => 'Cinta de Direção Elétrica', 'quantity' => 230, 'supplier_id' => 8],
            ['name' => 'Cabo de Direção Assistida', 'quantity' => 240, 'supplier_id' => 9],
            ['name' => 'Cilindro de Direção Assistida', 'quantity' => 250, 'supplier_id' => 10],
        ];

        foreach ($parts as $part) {
            Parts::create([
                'name' => $part['name'],
                'quantity' => $part['quantity'],
                'supplier_id' => $part['supplier_id'],
            ]);
        }
    }
}
