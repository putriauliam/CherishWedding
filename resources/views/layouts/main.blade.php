<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css','resources/js/app.js')
  @vite(['resources/css/app.css','resources/js/app.js'])
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
  <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
  <link rel="icon" href="img/logo.png">
</head>
<body>

@include('partials.navbar')

<div class="container .mt-1">
  @yield('container')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>