<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{   
    use HasFactory,HasUuids;
    protected $fillable = ['id','title', 'description','url','user_id'];

    public function getUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}


