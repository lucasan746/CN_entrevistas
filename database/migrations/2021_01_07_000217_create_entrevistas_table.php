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
            $table->bigInteger("dni");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("fecha_nacimiento");
            $table->integer("edad");
            $table->integer("id_prospecto");
            $table->string("estado_civil");
            $table->string("profesion");
            $table->bigInteger("celular");
            $table->bigInteger("celular_alt")->nullable();
            $table->bigInteger("telefono");
            $table->bigInteger("telefono_alt")->nullable();
            $table->string("email");
            $table->string("email_alt")->nullable();
            $table->string("direccion");
            $table->string("localidad");
            $table->integer("cod_postal");
            $table->string("pais");
            $table->string("provincia");
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
            $table->string("es_cliente");
            $table->integer("nro_cliente")->nullable();
            $table->string("referente")->nullable();
            $table->string("procedencia")->nullable();
            $table->string("opc")->nullable();
            $table->integer("liner")->nullable();
            $table->string("fecha")->nullable();
            $table->string("comentarios")->nullable();
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
