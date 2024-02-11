<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public $guarded = [];

    public $table = 'post';

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function commentable() {
        return $this->morphTo('App\Comment', 'commentable');
    }
}
