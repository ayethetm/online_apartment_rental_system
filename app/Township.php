<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
  protected $fillable=['townshipName'];

  // For a township can have many rental lists
  
  public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
