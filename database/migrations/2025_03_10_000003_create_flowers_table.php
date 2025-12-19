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
        Schema::create('flowers', function (Blueprint $table) {
            $table->id();
            $table->string('flower_name', 64);
            $table->unsignedInteger('flower_remains'); // неотрицательное целое
            $table->unsignedInteger('flower_price');   // неотрицательное целое
            $table->string('picture_url')->nullable(); // может быть пустым
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flowers');
        Schema::dropIfExists('compositions');
    }
};
