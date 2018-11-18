<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_attribute extends Model
{
     protected $table = 'user_attributes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_user', 'exp', 'title'];

        public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }
}
