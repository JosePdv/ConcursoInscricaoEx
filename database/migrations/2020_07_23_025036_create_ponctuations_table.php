<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePonctuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ponctuations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('formulario_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('formulario_id')->references('id')->on('formularios');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('ax_cpf')->default(true);
            $table->boolean('ax_org')->default(true);
            $table->boolean('ax_curriculum')->default(true);
            $table->boolean('ax_escolaridade')->default(true);
            $table->boolean('ax_conselho')->default(true);
            $table->boolean('ax_graduacao')->default(true);
            $table->boolean('ax_doutorado')->default(true);
            $table->boolean('ax_mestrado')->default(true);
            $table->boolean('ax_posgraduacao1')->default(true);
            $table->boolean('ax_posgraduacao2')->default(true);
            $table->boolean('ax_qualific1')->default(true);
            $table->boolean('ax_qualific2')->default(true);
            $table->boolean('ax_qualific3')->default(true);
            $table->boolean('ax_qualific4')->default(true);
            $table->boolean('ax_qualific5')->default(true);
            $table->boolean('ax_espe1')->default(true);
            $table->boolean('ax_espe2')->default(true);
            $table->boolean('ax_espe3')->default(true);
            $table->boolean('ax_espe4')->default(true);
            $table->boolean('ax_laudo')->default(true);
            $table->float('ponc_graduacao')->default(0);
            $table->float('ponc_doutorado')->default(0);
            $table->float('ponc_mestrado')->default(0);
            $table->float('ponc_posgraduacao1')->default(0);
            $table->float('ponc_posgraduacao2')->default(0);
            $table->float('ponc_qualific1')->default(0);
            $table->float('ponc_qualific2')->default(0);
            $table->float('ponc_qualific3')->default(0);
            $table->float('ponc_qualific4')->default(0);
            $table->float('ponc_qualific5')->default(0);
            $table->float('ponc_espe1')->default(0);
            $table->float('ponc_espe2')->default(0);
            $table->float('ponc_espe3')->default(0);
            $table->float('ponc_espe4')->default(0);
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
        Schema::dropIfExists('ponctuations');
    }
}
