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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vehicle_name');
            $table->enum('petrol', ['pertalite', 'solar', 'pertamax', 'pertamax_turbo']);
            $table->string('plate');
            $table->string('vehicle_color');
            $table->enum('vehicle_type', ['motor', 'mobil', 'truck']);
            $table->integer('vehicle_seat');
            $table->bigInteger('vehicle_price');
            $table->date('vehicle_year');
            $table->integer('vehicle_engine');
            $table->integer('vehicle_doors');
            $table->enum('vehicle_transmision', ['manual', 'automatic']);
            $table->string('vehicle_merk');
            $table->enum('vehicle_status', ['tersedia', 'disewa', 'maintenance', 'tidak_tersedia', 'sudah_dibooking']);
            $table->string('vehicle_image');
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
