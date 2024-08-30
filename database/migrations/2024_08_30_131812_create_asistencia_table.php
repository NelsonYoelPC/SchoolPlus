<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaTable extends Migration
{
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEstudiante')->constrained('estudiantes');
            $table->foreignId('idCurso')->constrained('cursos');
            $table->date('fecha');
            $table->enum('estado', ['presente', 'ausente', 'tardanza']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
}
