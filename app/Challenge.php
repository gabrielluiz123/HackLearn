<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
     protected $table = 'challenges';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'content', 'exp'];
}
