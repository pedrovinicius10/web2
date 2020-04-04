<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id', 100);
            $table->string ('nome',100);
            $table->integer ('telefone', 10);
            $table->bigIncrements ('email', 30);
            $table->integer ('cep', 50);
            $table->bigIncrements ('logradouro');
            $table->string ('complemento',20);
            $table->integer ('bairro',10);
            $table->string ('uf', 10);
            $table->string ('municipio',20);
            $table->integer ('data de nascimento', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
