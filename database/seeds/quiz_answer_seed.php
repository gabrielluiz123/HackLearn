<?php

use Illuminate\Database\Seeder;

class quiz_answer_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("quiz_answers")->insert([
            [
                "id"         		=> 1,
                "id_quiz"           => 1,
                "ans_1"  			=> "Firewalls",
                "ans_2"             => "Banco de dados",
                "ans_3" 			=> "Camada de enlace",
                "ans_4"				=>"Camada de rede",
                "ans_C"				=> 2,
            ],
            [
                "id"         		=> 2,
                "id_quiz"			=> 2,
                "ans_1"             => "Filtros de ip na rede",
                "ans_2"  			=> "Utilizar views",
                "ans_3"             => "prepared statment em cada execução no sgbd",
                "ans_4" 			=> "Utilizar bancos de dados nao relacionais",
                "ans_c"				=> 3,
            ],
              [
                "id"         		=> 3,
                "id_quiz"			=> 3,
                "ans_1"             => "IDS (intrusion detection systems)",
                "ans_2"  			=> "TCP Dump",
                "ans_3"             => "Bot Nets",
                "ans_4" 			=> "Banco de dados",
                "ans_c"				=> 3,
            ],
             [
                "id"         		=> 4,
                "id_quiz"			=> 4,
                "ans_1"             => "IDS (intrusion detection systems)",
                "ans_2"  			=> "TCP Dump",
                "ans_3"             => "Honeypot",
                "ans_4" 			=> "Banco de dados",
                "ans_c"				=> 3,
            ],
        ]);
    }
}
