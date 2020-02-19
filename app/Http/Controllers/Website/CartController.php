<?php

namespace App\Http\Controllers\Website;

use Cart;
use App\Item;
use App\CartRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $items = Cart::getContent();
        $date = date('Y/M/d');
        return view('test' , compact(['items' ,'date']));
    }

    public function add($id)
    {
       $item = Item::findOrFail($id);
       $item_name = app()->getLocale() == 'ar' ? $item->ar_item_name : $item->item_name;
       Cart::add($item->id , $item_name , $item->price , 1);
       return back();
    }

    public function delete()
    {
       
        foreach (Cart::getContent() as $value) {
            // $cart = CartRegister::whereItem_id($value->id)->first();
            // if($cart) {
            //     $cart->quantity =+ $value->quantity ;
            //     $cart->total = ($value->price * $value->quantity);
            //     $cart->save();
            // } else {
                CartRegister::create([
                    'name' => $value->name,
                    'item_id' => $value->id,
                    'price' => $value->price,
                    'quantity' => $value->quantity,
                    'total' => ($value->price * $value->quantity)
                ]);
        }

       Cart::clear();
       return 0;
    }

    public function update(Request $request , $id)
    {
        Cart::update($id, array(
            'quantity' => $request->quantity,
          ));
       return back();
    }

    public function remove($id)
    {
       Cart::remove($id);
       return back();
    }
}
