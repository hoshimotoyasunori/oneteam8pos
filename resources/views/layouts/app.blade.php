<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>{{ config('app.name', 'Build-One') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!--bootstrap-->
    <!--CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ secure_asset('css/application.css') }}" rel="stylesheet">
    <!--<link href="{{ secure_asset('js/app.js') }}" rel="stylesheet">-->
    <!--<link href="{{ secure_asset('js/drow.js') }}" rel="stylesheet">-->
 

  </head>

  <body class="w-100">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <header class="sticky-top container-fuild w-75">
      @yield('navbar')
    </header>
    <!--// <main>-->
      <div class="container-fuild  w-75">
         
            @yield('content')
        
       </div>
     <!--</main>-->
       @yield('footer')
       
  </body>
</html>