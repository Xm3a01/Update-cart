@extends('website.master')

@section('content')
<div class="site-section" id="about-section">
    <div class="container" style="margin-top:50px">
      <div class="row align-items-lg-center">
        <div class="col-md-6 mb-5 mb-lg-0 position-relative">
          <img src="{{asset('website/images/d8.jpg')}}" class="img-fluid" alt="Image">
            
          <div class="experience">
            <span class="year">Trusted products</span>
            <span class="caption">for 10 years</span>
          </div>
        </div>
        <div class="col-md-6 ml-auto">
          <h3 class="section-sub-title">{{ __('Technology company') }}</h3>
          <h2 class="section-title mb-3">{{ __('About Us') }}</h2>
          <p class="mb-4">{{ __('It is one of the leading companies specialized in technology, electronic systems, communications, and providing integrated solutions through a variety of products, consulting, technical and applied services, and research and development services using the best global technologies.') }}
          </p>
        <h4>{{ __('Our goals') }}</h4>
        <p> {{ __('Implementation of high-quality and professional projects') }}</p>
        <p> {{ __('Development of project management systems in institutions and society') }}</p>
        <p> {{ __('Training and qualification of professional and specialized work teams') }}</p>
      
        </div>
      </div>
    </div>
  </div>



  <div class="site-section border-bottom" id="team-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h3 class="section-sub-title">{{ __('Team') }}</h3>
          <h2 class="section-title mb-3">{{ __('Leadership') }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
          <div class="person text-center">
            <img src="{{asset('website/images/waled.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>‎Waleed Bakri Basheer</h3>
            <p class="position text-muted">{{ __('Co-Founder, President') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
          <div class="person text-center">
            <img src="{{asset('website/images/mustafa.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>Mustafa Abu-lgasim</h3>
            <p class="position text-muted">{{ __('Chief Technology Officer, CTO') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
          <div class="person text-center">
            <img src="{{asset('website/images/33.jpg')}}" alt="Image" class="img-fluid rounded w-75 mb-3">
            <h3>Winston Hodson</h3>
            <p class="position text-muted">{{ __('Marketing') }}</p>
            <ul class="ul-social-circle">
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url({{asset('website/images/ctv.jpg')}}); background-attachment: fixed; background-position: top;" data-aos="fade">
    <div class="container">

      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center">
          <h3 class="section-sub-title">{{ __('Special Promo') }}</h3>
          <h3 class="section-title text-white mb-4">{{ __('Adverticment') }}</h3>
          <p class="mb-5 lead">{{ __('With DAAM towers for monitoring, these towers are distinguished by accuracy, clarity, and coverage of large areas, as well as working with solar energy and batteries.') }}</p>
          <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
        </div>
      </div>

    </div>
  </div>

  
@endsection