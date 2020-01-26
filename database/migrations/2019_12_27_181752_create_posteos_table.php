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
            $table->timestamp('fecha');
            $table->text('img');
            $table->text('estado');
            $table->text('tipo_animal');
            $table->text('user_email');
            $table->unsignedBigInteger('user_id');
            $table->text('provincia');
            $table->text('raza');
            $table->longText('texto')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
