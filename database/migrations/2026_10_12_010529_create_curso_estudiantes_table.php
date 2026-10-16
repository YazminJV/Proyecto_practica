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
        Schema::create('curso_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estu')->constrained('estudiantes');
            $table->foreignId('id_curso')->constrained('cursos');
            $table->timestamp('fecha_inscripcion')->nullable();
            $table->unique('id_estu','id_curso');
            $table->integer('progreso')->unsigned()->default(0);
            $table->enum('inscripcion',['Activa', 'Pendiente', 'Cancelada', 'Inactiva'])->default('Inactiva');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_estudiantes');
    }
};
