<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function photos(){
    	return $this->morphMany(Photo::class, 'imageable');
    }
}
