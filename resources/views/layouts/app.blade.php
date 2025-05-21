<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ config('app.name', 'Laravel Breeze') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex h-screen">

    @include('layouts.sidebar')

    <div class="flex-1 flex flex-col">

      @include('layouts.navbar')

      <main class="flex-1 p-6 overflow-auto">
        @yield('content')
      </main>

    </div>

  </div>

</body>
</html>
