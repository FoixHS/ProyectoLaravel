<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosteosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posteos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('fecha')->useCurrent();
            $table->text('img');
            $table->text('estado');
            $table->text('tipo_animal');
            $table->unsignedBigInteger('user_id');
            $table->text('barrio');
            $table->text('raza');
            $table->longText('texto');
            $table->date('fecha');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('posteos');
    }
}
