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
        Schema::create('Examenes', function (Blueprint $table) {
            $table->id('id_calificaciones');
            $table->foreignId('Asignaturas_id')->unsigned();
            $table->foreignId('Estudiantes_id')->unsigned();
            $table->foreignId('Periodo_id')->unsigned();
            $table->timestamps();
    
            $table->foreign('Estudiantes_id')->references('id')->on('Estudiantes')
            ->onDelete('cascade')->onUpdate('cascade');
    
            $table->foreign('Asignaturas_id')->references('id')->on('Asignaturas')
             ->onDelete('cascade')->onUpdate('cascade');

             $table->foreign('Periodo_id')->references('id')->on('Periodo')
             ->onDelete('cascade')->onUpdate('cascade');

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
