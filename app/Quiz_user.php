<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_user extends Model
{
    protected $table = 'quiz_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_quiz', 'id_user', 'question_c', 'question_t'];
}
