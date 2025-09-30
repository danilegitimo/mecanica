<?php

namespace Database\Seeders;

use App\Models\Service;
use Database\Seeders\Services as ServicesSeeder;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

  /**
   * Seed the application's database.
   */
  public function run(): void {
    if ( DB::table('vehicle_models')->count() <= 0 ) {
      $this->call(VehiclesModelsSeeder::class);
    }

    if ( DB::table('users')->count() <= 1 ) {
      $this->call(UsersOrClients::class);
    }

    if ( DB::table('services')->count() <= 0 ) {
      $this->call(ServicesSeeder::class);
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
