<?php

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
        Schema::table('vehicles', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('vehicle_models', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('services', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('order_services', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('order_parts', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('vehicles', 'deleted_at');
        Schema::dropColumns('vehicles_models', 'deleted_at');
        Schema::dropColumns('services', 'deleted_at');
        Schema::dropColumns('order_services', 'deleted_at');
        Schema::dropColumns('order_parts', 'deleted_at');
    }
};
