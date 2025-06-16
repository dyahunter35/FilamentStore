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
        Schema::create('product_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('symbol')->nullable();
            $table->string('abbreviation')->nullable();
            $table->enum('type', ['quantity', 'weight', 'volume', 'length', 'area'])->default('quantity');
            $table->text('description')->nullable();
            $table->boolean('base_unit')->default(false);
            $table->decimal('conversion_factor', 10, 4)->default(1.0);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_units');
    }
};
