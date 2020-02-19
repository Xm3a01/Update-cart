@extends('website.master')

@section('content')
<div class="site-section" id="products-section"  style="margin-top: 3rem!important;">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-6 text-center">
         <h3 class="section-sub-title">{{ __(' Our Products') }}</h3>
          <h2 class="section-title mb-3">{{ __('Categoriess') }}</h2>
          <p>{{ __('We provide you with the best offers and products shop with DAAM') }} </p>

        </div>
      </div>
      <div class="row">
      @foreach ($sub_categories as $sub_category)  
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="product-item">
            <figure>
              <img src="{{asset(Storage::url($sub_category->image->url ?? ''))}}" alt="Image" class="img">
            </figure>
            <div class="px-4">
              <h3><a href="#">{{app()->getLocale() == 'ar' ? $sub_category->ar_name : $sub_category->name }}</a></h3>
              <div>
                <a href="{{route('categories.show', $sub_category->id)}}" class="btn btn-black btn-outline-black ml-1 rounded-0">{{ __('View') }}</a>
              </div>
            </div>
          </div>
        </div>
     @endforeach        
      </div>
    </div>
  </div>
@endsection