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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('stock_code');
            $table->string('name');
            $table->string('product_brand');
            $table->string('part_type');
            $table->string('unit');
            $table->string('car_type');
            $table->string('photo');
            $table->timestamps();

            $table->foreign('product_brand')->references('name')->on('product_brands');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
