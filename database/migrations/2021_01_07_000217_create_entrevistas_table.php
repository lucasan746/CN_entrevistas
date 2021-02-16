<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrevistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrevistas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_asociado');
            $table->foreign('id_asociado')->references('id_prospecto')->on('prospecto');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string("es_cliente");
            $table->integer("nro_cliente")->nullable();
            $table->string("referente")->nullable();
            $table->string("procedencia")->nullable();
            $table->string("opc")->nullable();
            $table->string("liner")->nullable();
            $table->string("fecha")->nullable();
            $table->string("comentarios")->nullable();
            $table->string("estado")->default("Certificado Enviado");
            $table->string("pdf");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrevistas');
    }
}
