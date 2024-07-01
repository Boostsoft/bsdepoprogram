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
        Schema::create('shelves', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_name');
            $table->string('block');
            $table->string('shelf');
            $table->timestamps();

            // `warehouse_name` alanı ile `warehouse` tablosundaki `name` sütununa referans
            $table->foreign('warehouse_name')->references('name')->on('warehouse');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shelves');
    }
};
