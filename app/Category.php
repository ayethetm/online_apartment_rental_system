<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=['name'];

    // Category can contain many itemlists(types of houses) 
    // (eg.condo,mini condo,etc )

      public function itemlists()
    {
        return $this->hasMany('App\Itemlist');
    }
}
