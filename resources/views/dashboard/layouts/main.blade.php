@php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css','resources/js/app.js')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet"
            href="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.css') }}">
        <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <link rel="icon" href="{{ asset('storage/image/logo.png') }}">
        <title>Cherish Wedding | {{ $title }}</title>
        @livewireStyles
</head>

    <body>   
        @include('dashboard.layouts.header')

        @include('dashboard.layouts.sidebar')
    
        @yield('container')
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
        <script src="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js') }}"></script>
    </body>


</html>