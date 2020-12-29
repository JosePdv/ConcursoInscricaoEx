<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('escolaridade');
            $table->integer('cargo');
            $table->date('data_nascimento');
            $table->integer('estado_civil');
            $table->char('sexo');
            $table->string('rg');
            $table->string('rg_org');
            $table->string('cpf');
            $table->string('nome_mae');
            $table->string('telefone', 20);
            $table->string('email', 200);
            $table->string('cep', 9);
            $table->string('uf', 2);
            $table->string('cidade', 128);
            $table->string('bairro', 128);
            $table->string('rua', 200);
            $table->integer('numero')->default(0);
            $table->string('complemento', 200)->nullable();
            $table->string('protocolo', 999)->nullable();
            $table->boolean('vagas_deficiencia');
            $table->string('tipo_deficiencia');
            $table->boolean('avaliado')->default(false);
            $table->boolean('aprovado')->default(false);
            $table->string('anexocpf');
            $table->string('anexorg');
            $table->string('anexocurriculum');
            $table->string('anexoescolaridade');
            $table->string('anexoconselho')->nullable();
            $table->string('anexograduacao')->nullable();
            $table->string('anexodoutorado')->nullable();
            $table->string('anexomestrado')->nullable();
            $table->string('anexoposgraduacao1')->nullable();
            $table->string('anexoposgraduacao2')->nullable();
            $table->string('anexoqualific1')->nullable();
            $table->string('anexoqualific2')->nullable();
            $table->string('anexoqualific3')->nullable();
            $table->string('anexoqualific4')->nullable();
            $table->string('anexoqualific5')->nullable();
            $table->string('anexoespe1')->nullable();
            $table->string('anexoespe2')->nullable();
            $table->string('anexoespe3')->nullable();
            $table->string('anexoespe4')->nullable();
            $table->string('anexolaudo')->nullable();
            $table->bigInteger('idRevisor')->nullable();
            $table->index('idRevisor');
            $table->date('dataAvaliacao')->nullable();
            $table->date('dataRevisao')->nullable();
            $table->bigInteger('id_avaliador')->nullable();
            $table->index('id_avaliador');
            $table->boolean('indeferido')->default(false)->default(0)->nullable();
            $table->string('descricaoIndeferido')->nullable();

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
        Schema::dropIfExists('formularios');
    }
}
