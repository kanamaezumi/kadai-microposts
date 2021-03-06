<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function favorited()
    {
        return $this->belongsToMany(User::class, 'favorites', 'fav_id', 'u_id')->withTimestamps();
    }//
}
