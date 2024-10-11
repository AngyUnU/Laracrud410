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
        Schema::create('Periodo', function (Blueprint $table) {
            $table->id();
            $table->string('Grado', 10)->nullable();
            $table->string('Grupo', 40)->nullable();
            $table->string('parcial', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
