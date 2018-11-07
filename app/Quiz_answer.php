<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_answer extends Model
{
        protected $table = 'quiz_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_quiz', 'ans_1', 'ans_2', 'ans_3', 'ans_4', 'ans_c'];
}
