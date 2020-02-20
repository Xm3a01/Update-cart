<?php

namespace App\Repositories;

use App\Item;
use App\Category;
use App\Description;
use App\SubCategory;
use App\Traits\Message;


class DescriptionRespository 
{

    use Message;

    public function all()
    {
        $descriptions = Description::all();
        $descriptions->load('item');
        $items = Item::all();
        return ['descriptions' => $descriptions , 'items' => $items];

    }

    public function create($request)
    {
        $description = new  Description();
        $description->ar_title = $request->ar_title;
        $description->title = $request->ar_title;
        $description->ar_details = $request->ar_details;
        $description->details = $request->details;
        $description->item_id = $request->item_id;

        if($description->save()) {
            $this->successMessage('تم الحفظ بنجاح');
            return back();
        }

    }

    public function getById($id)
    {
        return Description::findOrFail($id);
    }

    public function update($request , $id)
    {
        $description = Description::findOrFail($id);
        $description->ar_title = $request->ar_title;
        $description->title = $request->ar_title;
        $description->ar_details = $request->ar_details;
        $description->details = $request->details;
        $description->item_id = $request->item_id;

        if($description->save()) {
            $this->successMessage('تم التعديل بنجاح');
            return redirect()->route('descriptions.index');
        }
    }

    public function delete($id)
    {
        $description = Description::findOrFail($id);
        $description->delete();
        $this->successMessage('تم الحذف بنجاح');
        return back();
    }
}