<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IndexRepository;

class ItemController extends Controller
{

    public $indexReo;

    public function __construct(IndexRepository $indexReo)
    {
        $this->indexReo = $indexReo;
    }

    public function index($id)
    {
        
        return view('website.products',['items' => $this->indexReo->allItems($id) , 'categories' => $this->indexReo->categories()]);
    }

    public function show($id)
    {
        return view('website.show',['product' => $this->indexReo->getItemsById($id) , 'categories' => $this->indexReo->categories()]);
    }
}
