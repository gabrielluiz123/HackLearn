<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizAnswersTable extends Migration
{
      public function up()
    {
   Schema::create('quiz_answers', function (Blueprint $table) {
            
            $table->increments('id');

            $table->timestamps();

            $table->integer('id_quiz')->unsigned();
            $table->foreign('id_quiz')->references('id')->on('quiz')->onUpdate('cascade');

            $table->string('ans_1');
            $table->string('ans_2');
            $table->string('ans_3');
            $table->string('ans_4');
            $table->integer('ans_c');


            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_answers');
    }
}
