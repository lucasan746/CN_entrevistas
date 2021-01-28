<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acomp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_asociado');
            $table->foreign('id_asociado')->references('id')->on('entrevistas');
            $table->bigInteger("acomp_dni")->nullable();
            $table->string("acomp_nombre")->nullable();
            $table->string("acomp_apellido")->nullable();
            $table->string("acomp_fecha_nacimiento")->nullable();
            $table->integer("acomp_edad")->nullable();
            $table->integer("acomp_id_prospecto")->nullable();
            $table->string("acomp_estado_civil")->nullable();
            $table->string("acomp_profesion")->nullable();
            $table->bigInteger("acomp_celular")->nullable();
            $table->bigInteger("acomp_celular_alt")->nullable();
            $table->bigInteger("acomp_telefono")->nullable();
            $table->bigInteger("acomp_telefono_alt")->nullable();
            $table->string("acomp_email")->nullable();
            $table->string("acomp_email_alt")->nullable();
            $table->string("acomp_direccion")->nullable();
            $table->string("acomp_localidad")->nullable();
            $table->integer("acomp_cod_postal")->nullable();
            $table->string("acomp_pais")->nullable();
            $table->string("acomp_provincia")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acomp');
    }
}
