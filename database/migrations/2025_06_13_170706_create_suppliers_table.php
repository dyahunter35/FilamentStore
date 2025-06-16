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
        Schema::create('suppliers', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('company');
            $table->string('contact_person')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('tax_number')->nullable();
            $table->string('payment_terms')->nullable();
            $table->decimal('credit_limit', 15, 2)->default(0.00);
            $table->enum('status', ['active', 'inactive', 'suspended'])->default('active');
            $table->text('address')->nullable();
            $table->string('email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
