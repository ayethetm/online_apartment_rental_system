<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
     protected $fillable = ['name','photo','address','user_id'];

    //one to one relationship with user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
