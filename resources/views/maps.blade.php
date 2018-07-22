<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="{{ asset('/ammap/ammap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="flex-center position-ref full-height">
      <div class="content">
        @yield('main-content')
      </div>
    </div>
  </body>

  <script src="{{ asset('/ammap/ammap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('ammap/maps/js/usaLow.js') }}" type="text/javascript"></script>
  @stack('scripts')
</html>
