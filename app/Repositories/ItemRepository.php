<?php 

namespace App\Repositories;

use App\Item;
use App\SubCategory;
use App\Traits\Message;
use App\Traits\ImageProcessing;


class ItemRepository {

   use Message,ImageProcessing;


   public function getItems()
   { 
       return Item::paginate(20);
   }

   public function subcategories()
    {
        return SubCategory::all();
    }

   public function addItem($request)
   {
    $item = Item::create([
        'item_name' => $request->item_name,
        'ar_item_name' => $request->ar_item_name,
        'price' => $request->price,
        'phone1' => $request->phone1,
        'phone2' => $request->phone2,
        'description' => $request->description,
        'ar_description' => $request->ar_description,
        'detil_description' => $request->detil_description,
        'ar_detil_description' => $request->ar_detil_description,
        'sub_category_id' => $request->sub_category_id
    ]);
    if($request->hasFile('photo')){
      $item->image()->create(['url' => $this->addImage($request->photo)]);
    }
      $this->successMessage('تم الحفظ بنجاح');
      return redirect()->route('products.index');
   }

   public function getItemByID($id)
   {
       return Item::findOrFail($id);
   }

   public function update($request , $id)
   {
        $item =  Item::findOrFail($id);
        $item->item_name = $request->item_name;
        $item->ar_item_name = $request->ar_item_name;
        $item->price = $request->price;
        $item->phone1 = $request->phone1;
        $item->phone2 = $request->phone2;
        $item->description = $request->description;
        $item->ar_description = $request->ar_description;
        $item->sub_category_id = $request->sub_category_id;

        if($item->save()) {
            if($request->hasFile('photo')){
               $this->deleteImage($item->image->url);
                $item->image()->update(['url' => $this->addImage($request->photo)]);
            $this->successMessage('تم التعديل بنجاح');
        } else {
            $this->errorMessage('حدثه خطاء اثناء التعديل');
        }
    }
    return redirect()->route('products.index');
   }

   public function delete($id)
   {
       $item = Item::findOrFail($id);
      $this->deleteImage($item->image->url);
       $item->delete();
       $item->image->delete();
       $this->successMessage('تم الحذف بنجاح');

       return back();

   }
}