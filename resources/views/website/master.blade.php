<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.includes._header')
    <title>@yield('title')</title>
    @yield('styles')
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  @include('website.includes._navbar')

  @yield('content')

  @include('website.includes._footer')
  @include('website.includes._script')
  @yield('scripts')


</body>
</html>