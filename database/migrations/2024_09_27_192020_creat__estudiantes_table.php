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
        Schema::create('Estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Estudiantes', 50)->nullable();
            $table->string('Appellidos_estudiante', 40)->nullable();
            $table->string('programa', 40)->nullable();
            $table->integer('Matricula')->unsigned()->default(12);
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
