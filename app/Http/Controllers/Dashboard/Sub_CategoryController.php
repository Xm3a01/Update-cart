<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use App\Repositories\SubCategoryRepository;

class Sub_CategoryController extends Controller
{

    public $sub_category;

    public function __construct(SubCategoryRepository $sub_category)
    {
        $this->sub_category = $sub_category;
    }
    
    public function index()
    {
        return view('dashboard.sub_categories.index',['subcategories' => $this->sub_category->all() ,
                  'categories' => $this->sub_category->categories()]);
    }

   
  
    public function store(SubCategoryRequest $request)
    {
         return $this->sub_category->add($request);
    }

    
    public function edit($id)
    {
        return view('dashboard.sub_categories.edit', ['subcategory' =>  $this->sub_category->getById($id) , 
                   'categories' => $this->sub_category->categories()]);
    }

   
    public function update(Request $request, $id)
    {
        return $this->sub_category->update($request , $id);
    }
    
    public function destroy($id)
    {
        return $this->sub_category->delete($id);
    }
}
