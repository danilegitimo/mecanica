<?php

use App\Models\VehicleManufacturer;
use App\Models\VehicleModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  /**
   * Run the migrations.
   */
  public function up(): void {

    Schema::create('fuels', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->timestamps();
    });

    Schema::create('vehicle_manufacturers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->timestamps();
    });

    Schema::create('vehicle_models', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(VehicleManufacturer::class)->constrained(
        table: 'vehicle_manufacturers'
      );
      $table->string('name');
      $table->timestamps();
    });

    Schema::create('vehicle_model_versions', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(VehicleModel::class)->constrained(
        table: 'vehicle_models'
      );
      $table->string('name');
      $table->timestamps();
    });

    Schema::create('vehicles', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(VehicleModel::class)->constrained();
      $table->string('owner_cpf_cnpj');
      $table->date('year')->nullable();
      $table->string('chassi')->nullable();
      $table->string('color')->nullable();
      $table->string('plate')->nullable()->unique();
      $table->string('renavam')->nullable()->unique();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists(['fuels', 'vehicle_manufacturers', 'vehicle_model_versions', 'vehicles']);
  }

};
