<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Carbon\Carbon;
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

        $cores = ["Vermelho", "Azul", "Verde", "Amarelo", "Roxo", "Laranja", "Rosa", "Preto", "Branco", "Cinza", "Marrom", "Bege", "Vinho", "Dourado", "Prata", "Turquesa", "Ciano", "Magenta", "Lilás", "Ameixa", "Oliva", "Creme", "Caramelo", "Azul", "Verde", "Verde", "Roxo", "Branco", "Cinza", "Preto"];

        
        for ($i = 1; $i <= 1000; $i++) { 
            DB::table('vehicles')->insert([
                'vehicle_model_id' => rand(1, DB::table('vehicles')->count()), // ID do modelo de veículo aleatório
                'placa' => strtoupper($faker->bothify('???-#?##')), // Placa no formato ABC-1234
                'renavam' => $faker->numerify('###########'), // RENAVAM com 11 dígitos
                'proprietario' => $faker->name, // Nome do proprietário
                'cor' => $cores[array_rand($cores)], // Cor do veículo
                'ano' => rand(2000, 2025), // Ano aleatório entre 2000 e 2025
                'client_id' => rand(1, DB::table('clients')->count()), // ID do usuário aleatório,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
