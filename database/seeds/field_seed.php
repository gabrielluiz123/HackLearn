<?php

use Illuminate\Database\Seeder;

class field_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("fields")->insert([
            [
                "id"         		=> 1,
                "name"              => "SQL Injection",
                "description"  		=> "ameaça de segurança que se aproveita de falhas em sistemas que interagem com bases de dados através de comandos SQL",
            ],
            [
                "id"         		=> 2,
                "name"              => "DDoS",
                "description"  		=> "Um ataque de negação de serviço, é uma tentativa de tornar os recursos de um sistema indisponíveis para os seus utilizadores.",
            ],
        ]);
    }
}
