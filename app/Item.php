<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];


    public function image()
    {
        return $this->morphOne(Image::class , 'imageable');
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
