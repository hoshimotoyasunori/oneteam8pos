<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'OneTeam') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!--bootstrap-->
    <!--CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">
    <!--<link href="{{ secure_asset('js/app.js') }}" rel="stylesheet">-->
    <!--<link href="css/carousel.css" rel="stylesheet">-->
 
  </head>

  <body>
    <header class="sticky-top">
      @yield('navbar')
    </header>
       
       
       <div class="container p-1">
         <!--<div class="row">-->
            @yield('content')
        <!--</div>-->
       </div>
       
       @yield('footer')
       <!-- JQuery -->
　　　　<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>