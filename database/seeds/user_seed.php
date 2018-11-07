<?php

use Illuminate\Database\Seeder;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table("users")->insert([
            [
                "id"         		=> 1,
                "name"              => "Gabriel Luiz",
                "email"  			=> "gabriel@gmail.com",
                "type"              => 1,
                "password" 			=> bcrypt(123456),
            ],
            [
                "id"         		=> 2,
                "name"              => "Henrique Rodrigues",
                "email"  			=> "Henrique@gmail.com",
                "type"              => 2,
                "password" 			=> bcrypt(123456),
            ],
             [
                "id"         		=> 3,
                "name"              => "Michael",
                "email"  			=> "Michael@gmail.com",
                "type"              => 2,
                "password" 			=> bcrypt(123456),
            ],
            [
                "id"         		=> 4,
                "name"              => "Andre Beraldo",
                "email"  			=> "Andre@gmail.com",
                "type"              => 2,
                "password" 			=> bcrypt(123456),
            ],
        ]);
    }
}
