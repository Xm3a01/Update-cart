<?php

namespace App\Traits;
/**
 * This Trait  for return accept message 
 *
 */
trait Message
{
    public function errorMessage($message)
    {
        \Session::flash('error',$message);
    }

    public function successMessage($message)
    {
        \Session::flash('success',$message);
    }
}
