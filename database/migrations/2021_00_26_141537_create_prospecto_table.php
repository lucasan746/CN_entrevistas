<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProspectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospecto', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->unsignedBigInteger("id_prospecto")->unique();
            $table->timestamps();
            $table->bigInteger("dni");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("fecha_nacimiento");
            $table->integer("edad");
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prospecto');
    }
}
