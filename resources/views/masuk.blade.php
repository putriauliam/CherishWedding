<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css','resources/js/app.js')
  <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
  <link rel="icon" href="img/logo.png">
  <title>Masuk</title>
</head>
<body class="h-screen overflow-hidden">
<div class="bg-cover bg-center h-screen" style="background-image: url('img/banner.jpg');"> 
  <div class="flex justify-center rounded-3xl">
    <div class="block max-w-sm p-6 bg-white bg-opacity-80 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 w-96 mt-20">
      <h1 class="text-center mb-2 text-2xl tracking-tight text-gray-900 dark:text-white">MASUK</h1>
      <form class="max-w-sm mx-auto">
        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@example.com" required>
        </div>
        <div class="mb-5">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi</label>
          <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="flex flex-col justify-center items-center">
        <button type="button" class=" text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">MASUK</button>
        <p class="py-1.5">Atau Masuk Dengan</p>
        <a href="#"><img class="w-20" src="img/google.png" alt=""></a>

        </div>
      </form>
    </div>
</div>
</div>
</body>
</html>