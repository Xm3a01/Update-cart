<?php

namespace App\Repositories;

use App\Item;
use App\User;
use App\Traits\Message;


class AdminRepository {


    use Message;
    
    public function getUsers()
    {
        return  User::all();
    }

    public function getItems()
    {
        return  Item::all();
    }

    public function getAdminById($id)
    {
        return User::findOrFail($id);
    }

    public function create($request)
    {
         $item = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => \Hash::make($request->password),
    ]);
      $this->successMessage('تم الحفظ بنجاح');
      return redirect()->route('users.index');
    }
    
    public function update($request , $id)
    {
      $item = User::findOrFail($id);
        $item->name = $request->name;
        $item->email = $request->email;
        $item->password = \Hash::make($request->password);
      if($item->save()){
        $this->successMessage('تم التعديل بنجاح');
        return redirect()->route('users.index');
       }
    }
    
    public function delete($id) {
        $item = User::findOrFail($id);
        $item->delete();
         $this->successMessage('تم الحذف بنجاح');
        return redirect()->route('users.index');
    }


}