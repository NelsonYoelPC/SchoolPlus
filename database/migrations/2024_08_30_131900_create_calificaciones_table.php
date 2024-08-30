<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalificacionesTable extends Migration
{
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idEstudiante')->constrained('estudiantes');
            $table->foreignId('idCurso')->constrained('cursos');
            $table->decimal('nota', 5, 2)->check('nota between 0 and 20');
            $table->date('fechaEvaluacion');
            $table->text('observacion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
