<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Schema;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Schema::disableForeignKeyConstraints();

        $faker = Faker::create('pt_BR');

        $cores = [
            'preto', 'branco', 'vermelho', 'azul', 'verde', 'amarelo', 'cinza', 'prata', 'bege', 'laranja',
            'roxo', 'marrom', 'dourado', 'turquesa', 'rosa', 'vinho', 'creme', 'azul claro', 'verde limão', 'azul marinho'
        ];

        
        for ($i = 1; $i <= 1000; $i++) { 
            DB::table('vehicles')->insert([
                'vehicle_model_id' => rand(1, 82), // ID do modelo de veículo aleatório
                'placa' => strtoupper($faker->bothify('???-#?##')), // Placa no formato ABC-1234
                'renavam' => $faker->numerify('###########'), // RENAVAM com 11 dígitos
                'proprietario' => $faker->name, // Nome do proprietário
                'cor' => $cores[array_rand($cores)], // Cor do veículo
                'ano' => rand(2000, 2025), // Ano aleatório entre 2000 e 2025
                'user_id' => rand(1, 25), // ID do usuário aleatório
            ]);
        }

    }
}
