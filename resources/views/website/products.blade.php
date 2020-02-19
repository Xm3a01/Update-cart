@extends('website.master')

@section('content')
<div class="site-section" id="products-section"  style="margin-top: 3rem!important;">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
         <h3 class="section-sub-title">{{ __('Our Products') }}</h3>
          <h2 class="section-title mb-3">{{ __('Products') }}</h2>
          <p>{{ __('We provide you with the best offers and products shop with DAAM') }} </p>
        </div>
      </div>
      <div class="row">
      @foreach ($items as $item)  
      <div class="col-lg-3 col-md-6 mb-5">
        <div class="product-item">
          <figure>
            <img src="{{asset(Storage::url($item->image->url))}}" alt="Image" class="img-fluid">
          </figure>
          <div class="px-4">
            <h3><a href="#">{{app()->getLocale() == 'ar' ? $item->ar_item_name : $item->item_name }}</a></h3>
            <div class="mb-3">
              <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
              <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
            </div>
            <p class="mb-4">{!! app()->getLocale() == 'ar' ? $item->ar_description : $item->description !!}</p>
            <div>
              <a href="#" class="btn btn-black mr-1 rounded-0">{{ __('Cart') }}</a>
              <a href="{{Route('items.show', $item->id)}}" class="btn btn-black btn-outline-black ml-1 rounded-0">{{ __('View') }}</a>
            </div>
          </div>
        </div>
      </div>
     @endforeach        
      </div>
    </div>
  </div>
@endsection