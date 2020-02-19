<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LocaleController extends Controller
{
    public function index($locale)
    {
        \Session::put('locale', $locale);
        return redirect()->back();
    }
}
