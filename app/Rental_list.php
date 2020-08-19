<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental_list extends Model
{
     protected $fillable = ['title','photo','monthly_fees','length','width','bedrooms','bathrooms','contact_phone_no','description','type_id','township_id','user_id'];


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

    // one to many relationship with User
    public function user()
    {
        return $this->belongsTo('App\User');
    }
     
}
