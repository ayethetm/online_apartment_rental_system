<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=['name'];

    // For each type can contain many rental lists(types of houses) 
    // (eg.condo,mini condo,etc )

    public function rental_lists()
    {
        return $this->hasMany('App\Rental_list');
    }
}
