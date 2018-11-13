<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
     protected $table = 'quiz';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'id_user', 'status', 'id_difficulty', 'description', 'id_field', 'exp'];

        public function User()
    {
        return $this->belongsTo(User::class,'id_user');
    }
        public function Difficulty()
    {
        return $this->belongsTo(Difficulty::class,'id_difficulty');
    }
    
        public function Field()
    {
        return $this->belongsTo(Field::class,'id_fields');
    }
}
