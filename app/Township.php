<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $fillable=['name'];

    // For a township can have many itemlists
    // For search by township name
    
    public function itemlists()
    {
        return $this->hasMany('App\Itemlist');
    }

}
