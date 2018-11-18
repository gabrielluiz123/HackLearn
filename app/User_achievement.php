<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_achievement extends Model
{
     protected $table = 'User_achievements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'id_achievement'];
}
