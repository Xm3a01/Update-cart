<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DescriptionRequest;
use App\Repositories\DescriptionRespository;

class DescriptionController extends Controller
{
    private $description = [];
    private $des;

    public function __construct(DescriptionRespository  $des)
    {
        $this->des = $des;
        $this->description = $this->des->all();
    }
   
    public function index()
    {
        return view('dashboard.descriptions.index' ,['descriptions' => $this->description['descriptions'] ,'items' => $this->description['items']]);
    }

 

    public function store(DescriptionRequest $request)
    {
        return $this->des->create($request);
    }

    public function edit($id)
    {
        return view('dashboard.descriptions.edit' , ['description' => $this->des->getById($id) , 'items' => $this->description['items']]);
    }

    public function update(DescriptionRequest $request, $id)
    {
        return $this->des->update($request , $id);
    }

    public function destroy($id)
    {
        return $this->des->delete($id);
    }
}
