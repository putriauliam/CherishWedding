<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css','resources/js/app.js')
  <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
  <link rel="icon" href="img/logo.ico" type="image/x-icon">
  <title>VENDOR</title>
</head>
<body>
<!-- navbar -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="img/logo.png" class="h-10" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cherish Wedding</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-small flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block ">BERANDA</a>
        </li>
        <li>
          <a href="/vendor" class="block font-medium border-b-2 border-gray-900 ">VENDOR</a>
        </li>
        <li>
          <a href="/tentang" class="block">TENTANG KAMI</a>
        </li>
        <li>
          <a href="#" class="block text-red-500 font-medium py-0.5 px-2 border-2 border-red-600 rounded-md hover:bg-red-600 hover:text-white">MASUK</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>