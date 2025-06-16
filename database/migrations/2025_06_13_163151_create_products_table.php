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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained('branches')->cascadeOnDelete();
            $table->string('name');
            $table->text('description')->nullable();
            $table->foreignId('brand')->constrained('brands')->cascadeOnDelete();
            $table->foreignId('unit')->constrained('product_units')->cascadeOnDelete();
            $table->decimal('price', 8, 2);
            $table->decimal('cost', 8, 2);
            $table->integer('quantity')->default(0);
            $table->integer('reorder_point')->nullable();
            $table->json('serial_numbers')->nullable();
            $table->enum('status', ['active', 'inactive', 'discontinued'])->default('active');
            $table->string('sku')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
