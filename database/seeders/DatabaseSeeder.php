<?php

namespace Database\Seeders;

use Database\Seeders\Services as ServicesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

  /**
   * Seed the application's database.
   */
  public function run(): void {

    // Se, e somente se, não haver nada na tabela.
    if ( DB::table('vehicle_models')->count() <= 0 ) {
      $this->call(VehiclesModelsSeeder::class);
    }

    // Se, e somente se, não haver nada na tabela
    if ( DB::table('services')->count() <= 0 ) {
      $this->call(ServicesSeeder::class);
    }

    // Se, e somente se, não haver nada na tabela
    if ( DB::table('clients')->count() <= 0 ) {
      $this->call(ClientSeeder::class);
    }

    if ( DB::table('suppliers')->count() <= 0 ) {
      $this->call(SuppliersSeeder::class);
    }

    if ( DB::table('parts')->count() <= 0 ) {
      $this->call(PartsSeeder::class);
    }

    if ( DB::table('vehicles')->count() <= 0 ) {
      $this->call(VehiclesSeeder::class);
    }
  }

}
