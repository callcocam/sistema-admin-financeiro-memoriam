<!DOCTYPE html>
<html lang="{{ $page['language'] ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ url('/') }}">
        <meta name="description" content="{{ $page['description'] }}">
        <title>{{ $page['title'] }}</title>        
        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
        @livewireStyles
    </head>
    <body>
    <div class="flex justify-center items-center h-screen bg-gray-200 px-6">
                  {{ $slot }}
        @livewireScripts
      <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </body>
</html>