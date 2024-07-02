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
            $table->string('plate');
            $table->string('chassis');
            $table->string('segment');
            $table->string('brand');
            $table->string('model');
            $table->string('fuel_type');
            $table->string('transmission_type'); // şanzıman tipi
            $table->string('registration_no'); // tescil no
            $table->string('color');
            $table->date('inspection_date'); // muayene tarihi
            $table->string('customer_type');
            $table->string('customer');
            $table->string('license'); // ruhsat
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
