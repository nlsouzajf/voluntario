<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
     protected $fillable = ['name', 'phone', 'email'];
    
    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }
    
    public function causes(){
        return $this->belongsToMany('App\Cause');
    }
}
