<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent_ads_owner extends Model
{
    protected $fillable = ['name','photo','phone','address',
    'user_id'];

    //Each user can post many rentals 
    public function rental_lists()
    {
        return $this->hasMany('App\Rental_list');
    }
    //one to one relationship with user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
