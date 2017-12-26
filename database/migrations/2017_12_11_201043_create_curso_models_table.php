<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo', 200);
            $table->string('carga', 100);
            $table->string('requisito', 120);
            $table->longText('objetivo');
            $table->text('conteudo');
            $table->string('image', 100);
            $table->string('categoria', 100);
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
        Schema::drop('curso_models');
    }
}
