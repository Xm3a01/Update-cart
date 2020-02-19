    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 ">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0" >
              <span class="mr-3"><a href="tel://+249912345678" > <span class="d-none d-lg-inline-block text-black"> 249912345678(+)</span><span class="icon-envelope mr-2" style="position: relative; top: 2px; margin-right:10px"></span></a></span>
              <span><a href="info@domain.com"><span class="d-none d-lg-inline-block text-black"> info@domain.com</span><span class="icon-phone mr-2" style="position: relative; top: 2px;"></span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>

   

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target site-mobile-menu2" role="banner" style="background-color:DARKSLATEBLUE"  ><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

      <div class="container"  style="background-color:SKYBLUE;width:100%">
        <div class="row align-items-center"  style="background-color:DARKSLATEBLUE">
          
          <div class="col-6 col-xl-2" style="background-color:DARKSLATEBLUE">
              <a class="navbar-brand float-left" data-wow-duration="1s" data-wow-delay="1s" href="/">
                  <img src="{{asset('website/images/lodaam.png')}}" class="m-2" alt="mk n" width="50%" sizes="" srcset="" style="margin:auto"> </a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block" style="background-color:DARKSLATEBLUE" id="head">
            <nav class="site-navigation position-relative text-left" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" id="nav">
                <li ><a href="/store" class="nav-link" style="color:white">{{ __('Home') }}</a></li>
                {{-- <li><a href="#blog-section" class="nav-link" style="color:white">{{ __('Blog') }}</a></li> --}}
                  <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                   {{ __('Products') }} 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $category)   
                     <a class="dropdown-item" href="{{route('products',$category)}}"> {{app()->getLocale() == 'ar' ? $category->ar_name : $category->name}} </a>
                  @endforeach
              </div>
            </li>

                <li><a href="{{route('about')}}" class="nav-link" style="color:white">{{ __('About') }} </a></li>
                <li><a href="{{route('contact')}}" class="nav-link" style="color:white">{{ __('Contact Us') }}</a></li>
                <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
                   {{ __('Language') }} 
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="{{route('lang' ,'ar')}}"> Arabic </a>
                  <a class="dropdown-item" href="{{route('lang' ,'en')}}"> English </a>
              </div>
            </li>

             <li class="nav-item active">
               
              <a class="nav-link"  href="{{route('cart.items')}}"> <span style="color:wheat; font-size:20px" class="icon-shopping-cart"></span> <span style="color:red">( {{Cart::getTotalQuantity()}} )</span> </a>
            </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>