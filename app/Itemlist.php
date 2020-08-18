<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemlist extends Model
{
	
     protected $fillable = ['name','photo','price','description','status','category_id','township_id'];

    //one to many relationship with Category
     public function category()
    {
        return $this->belongsTo('App\Category');
    }

    //one to many relationship with Township
    public function township()
    {
        return $this->belongsTo('App\Township');
    }

    //one to one relationship with Itemdetail
    public function itemdetail()
    {
        return $this->hasOne('App\Itemdetail');
    }



}
