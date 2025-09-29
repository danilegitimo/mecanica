<?php

use App\Models\User;
use App\Models\VehicleModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(VehicleModel::class);
            $table->foreignIdFor(User::class)->nullable();
            $table->string('placa');
            $table->string('renavam');
            $table->string('proprietario')->nullable();
            $table->string('cor');
            $table->string('ano');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
