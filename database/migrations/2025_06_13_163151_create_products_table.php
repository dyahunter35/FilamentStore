<?php

use App\Models\Brand;
use App\Models\ProductCategory;
use App\Models\ProductUnit;
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
            $table->foreignIdFor(ProductCategory::class)->nullable();
            $table->foreignIdFor(Brand::class)->nullable();
            $table->foreignIdFor(ProductUnit::class,'unit_id')->nullable();
            $table->foreignIdFor(ProductCategory::class,'category_id')->nullable();
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
