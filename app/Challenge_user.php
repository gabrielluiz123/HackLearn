<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge_user extends Model
{
    protected $table = 'challenge_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'id_challenge'];
}