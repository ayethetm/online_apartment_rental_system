<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = ['name','email','address','phone'];

    //Owner can have many rooms(itemdetail)
    //one to many relationship with Itemdetail
     public function itemdetails()
    {
        return $this->hasMany('App\Itemdetail');
    }

}
