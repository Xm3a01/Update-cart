<?php

namespace App\Traits;
/**
 * 
 */
trait ImageProcessing
{
    public function addImage($image)
    {
        $f = time().'.'.$image->getClientOriginalExtension();
        return  $image->storeAs('public/images' , $f);
    }

    public function deleteImage($image)
    {
        \Storage::delete($image);
    }
}
