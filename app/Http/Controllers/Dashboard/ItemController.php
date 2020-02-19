<?php

namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ItemRepository;

class ItemController extends Controller
{
    //*************** THIS IS GOOD ********************/

    public $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }


    public function index()
    {
        return view('dashboard.products.index',['items' => $this->itemRepository->getItems() , 
                                       'subcategories' => $this->itemRepository->subcategories()]);      
    }

    public function store(ItemRequest $request)
    {
        return $this->itemRepository->addItem($request);
        
    }

    public function edit($id)
    {
        return view('dashboard.products.edit' , ['item' => $this->itemRepository->getItemById($id)
                                     ,'subcategories' => $this->itemRepository->subcategories()]);
    }

    public function update(ItemRequest $request , $id)
    {
        return $this->itemRepository->update($request , $id);
    }

    public function destroy($id)
    {
        return $this->itemRepository->delete($id);
    }
}
