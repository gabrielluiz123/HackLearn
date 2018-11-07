<?php

use Illuminate\Database\Seeder;

class difficultys_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table("difficultys")->insert([
            [
                "id"         		=> 1,
                "description"  		=> "facil",
            ],
            [
                "id"         		=> 2,
                "description"  		=> "medio",
            ],
             [
                "id"         		=> 3,
                "description"  		=> "dificil",
            ],
        ]);
    }
}
