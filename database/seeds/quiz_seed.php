<?php

use Illuminate\Database\Seeder;

class quiz_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("quiz")->insert([
            [
                "id"         		=> 1,
                "name"              => "SQL Injection 1",
                "id_user"			=> 2,
                "status"			=> 1,
                "id_difficulty"		=> 1,
                "description"  		=> "Quiz sobre SQL Injection dificuldade facil",
                "id_field"			=> 1,
                "exp"               => 100,
            ],
            [
                "id"         		=> 2,
                "name"              => "SQL Injection 2",
                "id_user"			=> 3,
                "status"			=> 1,
                "id_difficulty"		=> 2,
                "description"  		=> "Quiz sobre SQL dificuldade medio",
                "id_field"			=> 1,
                "exp"               => 150,
            ],
            [
            	"id"         		=> 3,
                "name"              => "DDoS 1",
                "id_user"			=> 2,
                "status"			=> 1,
                "id_difficulty"		=> 1,
                "description"  		=> "Quiz sobre DDoS dificuldade facil",
                "id_field"			=> 2,
                "exp"               => 150,
            ],
            [
            	"id"         		=> 4,
                "name"              => "DDoS 2",
                "id_user"			=> 3,
                "status"			=> 1,
                "id_difficulty"		=> 2,
                "description"  		=> "Quiz sobre DDoS dificuldade facil",
                "id_field"			=> 2,
                "exp"               => 200,
            ],
        ]);
    }
}
