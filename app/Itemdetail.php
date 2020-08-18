<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemdetail extends Model
{
    protected $fillable = ['itemlist_id','owner_id'];

    //For an item of itemlist should have only one itemdetail 
     public function itemlist()
    {
        return $this->belongsTo('App\Itemlist');
    }

    //For an itemdetail, owner should be one person
    public function owner()
    {
        return $this->belongsTo('App\Owner');
    }

    //For an itemdetail should have one rent
    public function rent()
    {
        return $this->hasOne('App\Rent');
    }


}
