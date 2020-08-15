<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['date','itemdetail_id','user_id'];

    // one to many relationship with User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // one to one relationship with Itemdeail
    public function itemdetail()
    {
        return $this->belongsTo('App\Itemdetail');
    }



}
