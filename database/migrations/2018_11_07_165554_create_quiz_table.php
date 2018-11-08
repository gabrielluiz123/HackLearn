<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{

      public function up()
    {
      Schema::create('quiz', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');

            $table->integer('status');

            $table->integer('id_difficulty')->unsigned();
            $table->foreign('id_difficulty')->references('id')->on('difficultys')->onUpdate('cascade');


            $table->integer('id_field')->unsigned();
            $table->foreign('id_field')->references('id')->on('fields')->onUpdate('cascade');

            $table->string('description');
            $table->integer('exp');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
}
