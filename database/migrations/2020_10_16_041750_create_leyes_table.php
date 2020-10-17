<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeyesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leyes', function (Blueprint $table) {
            $table->increments ('id');
            $table->integer('codigo');
            $table->string('descripcion',1000);
            $table->unsignedInteger('tipo_id')->nullable();
            $table->foreign('tipo_id')->references('id') ->on ('tipos')
            ->onUpdate('cascade')
            ->onDelate('cascade'); 
            $table->integer('extra')->nullable();
            $table->integer('min')->nullable();
            $table->integer('max')->nullable();
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
        Schema::dropIfExists('leyes');
    }
}
