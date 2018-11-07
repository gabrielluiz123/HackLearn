<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
   public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->string('description');

            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
