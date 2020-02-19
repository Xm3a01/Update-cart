<?php

namespace App\Repositories;

use App\Category;
use App\SubCategory;
use App\Traits\Message;
use App\Traits\ImageProcessing;

class SubCategoryRepository
{
    use Message,ImageProcessing;


    public function all()
    {
        return SubCategory::all();
    }

    public function categories()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return SubCategory::findOrFail($id);
    }

    public function add($request)
    {
        $sub = SubCategory::create([
            'ar_name'     => $request->ar_name,
            'name'        => $request->name,
            'category_id' => $request->category_id
        ]);

        if($request->hasFile('photo')){
        $sub->image()->create(['url' => $this->addImage($request->photo)]);
        }

        $this->successMessage('تم الحفظ بنجاح');
        return redirect()->route('subcategories.index');
    }


    public function update($request , $id)
    {
        $subcategory = $this->getById($id);

        if($request->has('name')){$subcategory->name = $request->name;}
        if($request->has('ar_name')){$subcategory->ar_name = $request->ar_name;}
        if($request->has('category_id')){$subcategory->category_id = $request->category_id;}
        if($request->hasFile('photo')){ $this->deleteImage($subcategory->image->url);  $subcategory->image()->update(['url' => $this->addImage($request->photo)]);}
        if($subcategory->save()) {
            $this->successMessage('تم التعديل بنجاح');
            return redirect()->route('subcategories.index');
        }
    }

    public function delete($id)
    {
        $subcategory = SubCategory::findOrFail($id);
        
            $this->deleteImage($subcategory->image->url);
            $subcategory->delete();
            $subcategory->image->delete();
            $this->successMessage('تم الحذف بنجاح');
            return redirect()->route('subcategories.index');
        
    }
}