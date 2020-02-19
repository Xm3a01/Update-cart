<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $guarded =[];

    public function image()
    {
       return  $this->morphOne(Image::class,'imageable');
    }
}
