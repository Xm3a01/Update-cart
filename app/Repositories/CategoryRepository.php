<?php

namespace App\Repositories;

use App\Category;
use App\SubCategory;
use App\Traits\Message;


class CategoryRepository 
{

    use Message;


    public function all()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return Category::findOrFail($id);
    }

    public function add($request)
    {
        Category::create([
            'ar_name' => $request->ar_name,
            'name' => $request->name
        ]);

        $this->successMessage('تم الحفظ بنجاح');

        return redirect()->route('categories.index');
    }


    public function update($request , $id)
    {
        $category = $this->getById($id);

        $category->name = $request->name;
        $category->ar_name = $request->ar_name;

        if($category->save()) {
            $this->successMessage('تم التعديل بنجاح');
            return redirect()->route('categories.index');
        }
    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        $this->successMessage('تم الحذف بنجاح');
        return redirect()->route('categories.index');
    
    }


}