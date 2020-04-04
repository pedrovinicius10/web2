<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaProfessores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id', 100);
            $table->string ('nome',100);
            $table->integer ('matricula', 50);
            $table->integer ('cpf', 30);
            $table->integer ('telefone', 10);
            $table->bigIncrements ('email', 50);
            $table->integer ('cep', 10);
            $table->bigIncrements ('logradouro', 30);
            $table->string ('complemento',20);
            $table->string ('bairro', 20);
            $table->string ('uf', 10);
            $table->string ('municipio',50);
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
        Schema::dropIfExists('professores');
    }
}
