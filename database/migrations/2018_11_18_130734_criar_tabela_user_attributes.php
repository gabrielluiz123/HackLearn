<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUserAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_attributes', function (Blueprint $table) {
            
            $table->increments('id');

            $table->timestamps();

            $table->integer('id_user')->unsigned()->unique();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade');

            $table->string('question');
            $table->integer('exp');
            $table->integer('id_title');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('user_attributes');
    }
}
