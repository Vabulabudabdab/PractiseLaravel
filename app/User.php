<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    public $fillable = ["email", 'password', 'username'];

    public $table = 'users';


    public function posts() {
        return $this->hasMany('App\Post');
    }

}

