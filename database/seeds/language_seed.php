<?php

use Illuminate\Database\Seeder;

class language_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("languages")->insert([
            [
                "id"         		=> 1,
                "name"              => "C",
            ],
             [
                "id"         		=> 2,
                "name"              => "C++",
                ],
                 [
                "id"         		=> 3,
                "name"              => "Java",
            ],
            
        ]);
    }
}
