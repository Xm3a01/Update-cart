<?php

namespace App\Repositories;

use App\Item;
use App\Category;
use App\SubCategory;

class IndexRepository  
{

    public function index()
    {
        $items = Item::all();
        $items->load('image');
        return $items;
    }

    public function allItems($id)
    {
       $category = SubCategory::findOrFail($id);
        $items = $category->items;
        return $items;
    }

    public function categories()
    {
        return  Category::all();
    }

    public function sub_categories($id)
    {
        $category = Category::findOrFail($id);
        $category->load('sub_categories');

        return $category->sub_categories;
    }

    public function getItemsById($id)
    {
        return Item::findOrFail($id);
    }
    
}
