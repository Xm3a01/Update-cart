<?php

namespace App\Repositories;

use App\Ads;
use App\Category;
use App\SubCategory;
use App\Traits\Message;
use App\Traits\ImageProcessing;


class AdsRepository 
{
   use Message,ImageProcessing;

   public function all()
   {
       $ads = Ads::all();
       $ads->load('image');
       $categories = Category::all();

       return ['ads' => $ads, 'categories' => $categories];
   }


   public function add($request)
   {
       $ad = Ads::create([
           'ar_title' => $request->ar_title,
           'title' => $request->title,
           'ar_details' => $request->ar_details,
           'details' => $request->details
       ]);
       if($request->hasFile('image')) {
           $ad->image()->create(['url' => $this->addImage($request->image)]);
       }
       $this->successMessage('تم الحفظ بنجاح');
       return back();

   }

   public function getById($id)
   {
       return Ads::findOrFail($id);
   }

   public function update($request , $id)
   {
       $ad = Ads::findOrFail($id);

       $ad->ar_title = $request->ar_title;
       $ad->title = $request->title;
       $ad->ar_details = $request->ar_details;
       $ad->details = $request->details;
       if($ad->save()) {
           if($request->hasFile('image')){
           \Storage::delete($ad->image->url);
           $ad->image()->update(['url' => $this->addImage($request->image)]);
           }
           $this->successMessage('تم العديل بنجاح');
           return redirect()->route('ads.index');
       }
   }

   public function delete($id)
   {
     $ad = Ads::findOrFail($id);
     \Storage::delete($ad->image->url);
     $ad->delete();
     $this->successMessage('تم الحذف بنجاح');
     return back();
   }
}