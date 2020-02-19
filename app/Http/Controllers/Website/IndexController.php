<?php

namespace App\Http\Controllers\Website;

use App\Item;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IndexRepository;

class IndexController extends Controller
{

    public $indexReo;

    public function __construct(IndexRepository $indexReo)
    {
        $this->indexReo = $indexReo;
    }

    public function index()
    {
        return view('website.index',['items' => $this->indexReo->index(),'categories' => $this->indexReo->categories()]);
    }

    public function contact()
    {
        return view('website.contact',['categories' => $this->indexReo->categories()]);
    }

    public function about()
    {
        return view('website.about',['categories' => $this->indexReo->categories()]);
    }

    public function product($category)
    {
        return view('website.categories',['sub_categories' => $this->indexReo->sub_categories($category) , 
         'categories' => $this->indexReo->categories()]);
    }
}
