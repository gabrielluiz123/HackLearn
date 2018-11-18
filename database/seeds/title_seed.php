<?php

use Illuminate\Database\Seeder;

class title_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titles")->insert([
            [
                "id"         		=> 1,
                "name"           	=> "Noob hacker",
                "description"		=> "Hacker iniciante, de 0 á 500 de exp",
            ],
           [
                "id"         		=> 2,
                "name"           	=> "Inicial hacker",
                "description"		=> "Hacker mediano, de 500 á 1000 de exp",
            ],
            [
                "id"         		=> 3,
                "name"           	=> "Senior hacker",
                "description"		=> "Hacker experiente, a partir de 1000 de exp",
            ],
        ]);
    }
}
