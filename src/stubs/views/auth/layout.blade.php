<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body class="min-h-screen font-sans antialiased bg-gray-200 text-gray-800">
    <div id="app">
        <div class="flex items-center justify-center w-full py-4 md:py-8">
            <a href="/" class="text-3xl text-blue-500 hover:text-blue-600">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
      @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
