<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *el crear esta migracion permite editar un campo ya existente en una tabla
     *  php artisan make:migration cambiar_propiedades_to_users_table
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 150)->nullable()->change();//cambia  las propiedades del campo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 255)->nullable(false)->change();//regresa el campo a su estado original
        });
    }
};
