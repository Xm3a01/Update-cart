@extends('website.master')

@section('content')


  
 
  <div class="site-section bg-light" id="contact-section">
    <div class="container" style="margin-top:50px">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h3 class="section-sub-title">{{ __('Contact Form') }}</h3>
          <h2 class="section-title mb-3">{{ __('Get In Touch') }}</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-7 mb-5">

          

          <form action="#" class="p-5 bg-white">
            
            <h2 class="h4 text-black mb-5">{{ __('Contact Form') }}</h2> 

            <div class="row form-group">
              <div class="col-md-6 mb-3 mb-md-0">
                <label class="text-black" for="fname">{{ __('First Name') }}</label>
                <input type="text" id="fname" class="form-control rounded-0">
              </div>
              <div class="col-md-6">
                <label class="text-black" for="lname">{{ __('Last Name') }}</label>
                <input type="text" id="lname" class="form-control rounded-0">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="email">{{ __('Email') }}</label> 
                <input type="email" id="email" class="form-control rounded-0">
              </div>
            </div>

            <div class="row form-group">
              
              <div class="col-md-12">
                <label class="text-black" for="subject">{{ __('Subject') }}</label> 
                <input type="subject" id="subject" class="form-control rounded-0">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="message">{{ __('Message') }}</label> 
                <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
              </div>
            </div>


          </form>
        </div>
      
      </div>
      
    </div>
  </div>
@endsection