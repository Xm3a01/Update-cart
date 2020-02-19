<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\AdsRequest;
use App\Repositories\AdsRepository;
use App\Http\Controllers\Controller;

class AdsController extends Controller
{
    public $array = [];
    private $ads; 

    public function __construct(AdsRepository $ads)
    {
        $this->ads = $ads;
    }
    
    public function index()
    {
        $this->array = $this->ads->all();
        return view('dashboard.ads.index',['ads' => $this->array['ads']]);
    }

    public function store(AdsRequest $request)
    {
        return $this->ads->add($request);
    }

    public function edit($id)
    {
        return view('dashboard.ads.edit',['ad' => $this->ads->getById($id)]);
    }

    public function update(AdsRequest $request, $id)
    {
        return $this->ads->update($request , $id);
    }

    public function destroy($id)
    {
        return $this->ads->delete($id);
    }
}
