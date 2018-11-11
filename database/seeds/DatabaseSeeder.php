<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Model::unguard();

        $this->call(user_seed::class);
        $this->call(difficultys_seed::class);
        $this->call(field_seed::class);
        $this->call(quiz_seed::class);
        $this->call(quiz_answer_seed::class);

        Model::reguard();
    }
}
