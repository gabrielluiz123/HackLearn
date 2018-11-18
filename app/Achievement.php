<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
     protected $table = 'achievements';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
}
