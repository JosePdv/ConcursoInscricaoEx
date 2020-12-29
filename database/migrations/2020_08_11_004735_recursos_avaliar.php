<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecursosAvaliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('recurso', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formulario_id')->unsigned();
            $table->unsignedBigInteger('avaliador_id')->unsigned()->nullable();
            $table->foreign('formulario_id')->references('id')->on('formularios');
            $table->foreign('avaliador_id')->references('id')->on('users');
            $table->string('recurso', '500');
            $table->boolean('recurso_aceito')->default(0);
            $table->boolean('recurso_editado')->default(0);
            $table->date('data_verificacao_recurso')->nullable();
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
        Schema::dropIfExists('recursos');
    }
}
