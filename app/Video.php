<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model {

    public $fillable = ["title", 'commentable_id', 'commentable_type'];

    public $table = 'videos';
    public function commentable() {
        return $this->morphTo('App\Comment', 'commentable');
    }


}
