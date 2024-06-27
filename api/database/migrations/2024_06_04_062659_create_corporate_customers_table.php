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
        Schema::create('corporate_customers', function (Blueprint $table) {
            $table->id();
            $table->string('company_type');
            $table->string('company_name');
            $table->string('tax_id')->unique();
            $table->string('tckn')->nullable(); // Şahıs şirketi için zorunlu, kurumsal şirket için opsiyonel
            $table->string('authorized_person');
            $table->string('city');
            $table->string('district');
            $table->text('address');
            $table->string('contact_number');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_customers');
    }
};
