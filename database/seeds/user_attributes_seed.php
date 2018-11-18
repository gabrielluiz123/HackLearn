<?php

use Illuminate\Database\Seeder;

class user_attributes_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table("user_attributes")->insert([
            [
                "id"         		=> 1,
                "id_user"           => 1,
                "exp"				=> 400,
                "id_title"			=> 1,
            ],
           [
                "id"         		=> 2,
                "id_user"           => 2,
                "exp"				=> 800,
                "id_title"			=> 2,
            ],
            [
                "id"         		=> 3,
                "id_user"           => 3,
                "exp"				=> 1100,
                "id_title"			=> 3,
            ],
            [
                "id"         		=> 4,
                "id_user"           => 4,
                "exp"				=> 100,
                "id_title"			=> 1,
            ],
        ]);
    }
}
