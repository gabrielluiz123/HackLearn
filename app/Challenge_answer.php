<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge_answer extends Model
{
    protected $table = 'challenge_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'id_challenge', 'status', 'answer', 'language_id'];
}
