<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * el echo de escribir php artisan make:migration create_cursos_table
     * hace que la migracion ya tenga los metodos up y down
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {

            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('category');
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
        Schema::dropIfExists('cursos');
    }
};
