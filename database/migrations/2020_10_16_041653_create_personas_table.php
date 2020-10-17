<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('name', 55)->nullable();
            $table->string('apellido', 55)->nullable();
            $table->string('cedula', 30)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->string('telefono', 20)->nullable();
            $table->string('Foto')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
