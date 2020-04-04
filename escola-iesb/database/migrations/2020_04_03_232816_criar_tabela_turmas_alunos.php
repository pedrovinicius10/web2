<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaTurmasAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('turma_id');
            $table->bigInteger('aluno_id');
            $table->foreing ('turma_id')-> references ('id') -> on ('turmas_alunos');
            $table->foreing ('professor_id')-> references ('id') -> on ('turmas_alunos');
            $table ->integer('semestre',10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas_alunos');
    }
}
