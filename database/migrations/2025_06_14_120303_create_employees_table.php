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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->unique();
            $table->string('department');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('hire_date')->nullable();
            $table->text('address')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->string('name');
            $table->string('position');
            $table->decimal('salary', 15, 2);
            $table->text('contact_info')->nullable();
            $table->enum('status', ['active', 'inactive','terminated'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
