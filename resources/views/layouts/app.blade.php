<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <title>{{config('app.name', 'Name nooooot found')}}</title>

    </head>
    <body>
      {{-- @include('inc.navbar') --}}
      <div class="container">
      </br>
     @yield('content')
      </div>
    </body>
</html>
