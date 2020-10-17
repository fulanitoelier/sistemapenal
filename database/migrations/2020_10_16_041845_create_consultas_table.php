<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion')->nullable();
            $table->integer('total')->nullable();
            $table->integer('agravante')->nullable();
            $table->integer('atentuante')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('tipo_id')->nullable();
            $table->foreign('tipo_id')->references('id') ->on ('tipos')
            ->onUpdate('cascade')
            ->onDelate('cascade'); 
            $table->unsignedInteger('ley_id')->nullable();
            $table->foreign('ley_id')->references('id') ->on ('leyes')
            ->onUpdate('cascade')
            ->onDelate('cascade'); 
            $table->unsignedInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id') ->on ('personas')
            ->onUpdate('cascade')
            ->onDelate('cascade'); 
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
        Schema::dropIfExists('consultas');
    }
}
