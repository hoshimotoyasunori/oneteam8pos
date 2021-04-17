<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  Public function user()
  {
    return $this->belongsTo('App\User');
  }
  
  //hasMany設定
  public function likes()
  {
    return $this->hasMany('App\Like');
  }
  
  Public function likedBy($user)
  {
    return Like::where('user_id', $user->id)->where('post_id', $this->id);
  }
  
  //hasMany設定
  public function comments()
  {
    return $this->hasMany('App\Comment');
  }
  
}
