
    <title>{{ app()->getLocale() == 'ar' ? 'DAAM | Selling' : 'DAAM | Selling' }} </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style --}}
   <link href="https://fonts.googleapis.com/css?family=El+Messiri&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('website/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    @if(app()->getLocale() == 'ar') 
     <link rel="stylesheet" href="{{asset('website/css/rtl.css')}}">
    @endif