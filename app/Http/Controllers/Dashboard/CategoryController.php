<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{

    public $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }
  
    public function index()
    {
       return view('dashboard.categories.index',['categories' => $this->category->all()]);
    }

    
    public function store(CategoryRequest $request)
    {
        return $this->category->add($request);
    }

  
    public function edit($id)
    {
        return view('dashboard.categories.edit',['category' => $this->category->getById($id)]);
    }

    
    public function update(CategoryRequest $request, $id)
    {
        return $this->category->update($request , $id);
    }

    public function destroy($id)
    {
        return $this->category->delete($id);
    }
}
