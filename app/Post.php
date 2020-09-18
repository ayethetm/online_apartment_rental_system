<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','photo','monthly_fees','length','width','bedrooms','bathrooms','description','type_id','township_id','user_id'];


    //one to many relationship with Type
     public function type()
    {
        return $this->belongsTo('App\Type');
    }

    //one to many relationship with Township
    public function township()
    {
        return $this->belongsTo('App\Township');
    }

    // one to many relationship with Rent_ads_owner
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
