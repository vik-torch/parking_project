<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Оплата парковки</title>
  </head>
  <body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
  </body>
</html>
