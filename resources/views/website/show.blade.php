@extends('website.master')


@section('content')
<div class="site-section bg-light" style="margin-top: 3rem!important;">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
          <h3 class="section-sub-title">{{ __('Awesome Products') }}</h3>
          <h2 class="section-title mb-3">{{ __('Product Specification') }}</h2>
          <p>{{ __('With DAAM we give you the world in your hands') }}  </p>
        </div>
      </div>
      <div class="bg-white py-4 mb-4">
        <div class="row mx-4 my-4 product-item-2 align-items-start">
          <div class="col-md-6 mb-5 mb-md-0">
            <img src="{{asset(Storage::url($product->image->url))}}" alt="Image" class="img-fluid">
          </div>
         
          <div class="col-md-5 ml-auto product-title-wrap">
            <span class="number">{{$product->id}}</span>
            <h3 class="text-black mb-4 font-weight-bold">{{app()->getLocale() == 'ar' ? $product->ar_item_name : $product->item_name }}</h3>
            <div class="mb-4">
               <div class="well well-lg"> {!! app()->getLocale() == 'ar' ? $product->ar_detil_description : $product->detil_description !!}
              </div>
              </div>
            
            <div class="mb-4"> 
              <h3 class="text-black font-weight-bold h5">{{ __('Price:') }}</h3>
              <div class="price">{{$product->price}} SDG</div>
            </div>
            <p>
              <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">{{ __('View Details') }}</a>
              <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">{{ __('Add To Cart') }} </a>
            </p>
          </div>
        </div>
      </div>

    </div>
</div>    
@endsection