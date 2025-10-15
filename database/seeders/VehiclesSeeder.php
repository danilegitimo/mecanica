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
  public function run(): void {

    Schema::disableForeignKeyConstraints();

    $faker = Faker::create('pt_BR');

    $cores = ["Vermelho", "Azul", "Verde", "Amarelo", "Roxo", "Laranja", "Rosa", "Preto", "Branco", "Cinza", "Marrom", "Bege", "Vinho", "Dourado", "Prata", "Turquesa", "Ciano", "Magenta", "Lilás", "Ameixa", "Oliva", "Creme", "Caramelo", "Azul", "Verde", "Verde", "Roxo", "Branco", "Cinza", "Preto"];

    for ($i=1; $i <= 100; $i++) {
      Vehicle::create([
        'vehicle_model_id' => rand(1, DB::table('vehicles')->count()),
        'placa' => strtoupper($faker->bothify('???-#?##')),
        'renavam' => $faker->numerify('###########'),
        'proprietario' => mb_strtoupper($faker->name),
        'cor' => $cores[array_rand($cores)],
        'ano' => rand(1990, 2026),
        'client_id' => floor(rand(1, DB::table('clients')->count())),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);
    }
    
  }
}
