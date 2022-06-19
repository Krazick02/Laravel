<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //              nombre              
        Schema::create('users', function (Blueprint $table) {
            $table->id();// entero auto incrementable
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();// el atributo nullable se le debe asignar a todo los campos que puedan quedar vacios
            //TIME STAMP guarda fechas, sirve para verificar los correos electronicos
            $table->string('password');
            $table->rememberToken();// sirve para recordar la contraseña
            $table->timestamps();// esta guarda las actualizaciones o cambios created_at update_at
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
};
