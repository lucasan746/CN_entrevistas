<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_nombre');
            $table->string("user_apellido");
            $table->string('user_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("username");
            $table->string("user_gerencia");
            $table->string("user_rol");
            $table->string("user_fecha_nacimiento");
            $table->integer("user_telefono");
            $table->integer("user_telefono_alt");
            $table->integer("user_celular");
            $table->string("user_domicilio");
            $table->string("user_pais");
            $table->string("user_provincia");
            $table->string("user_ciudad");
            $table->string("user_origen");
            $table->boolean("user_estado");
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
