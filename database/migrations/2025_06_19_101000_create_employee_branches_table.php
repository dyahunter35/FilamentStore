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
        Schema::create('employee_branches', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Employee::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->onDelete('cascade');
            $table->primary(['employee_id', 'branch_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empoloyee_branches');
    }
};
