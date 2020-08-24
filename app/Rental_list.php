<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental_list extends Model
{
    protected $fillable = ['title','photo','monthly_fees','length','width','bedrooms','bathrooms','contact_phone_no','description','type_id','township_id','owner_id'];


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
    public function rent_ads_owner()
    {
        return $this->belongsTo('App\Rent_ads_owner');
    }
}
