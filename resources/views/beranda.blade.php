<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css','resources/js/app.js')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
        <link rel="icon" href="img/logo.png">
        <title>BERANDA</title>
</head>

<body>
    <!-- navbar -->
    <section class="bg-center bg-no-repeat bg-blend-multiply" style="background-image: url('/img/wedding1.jpg');">
        <nav class="bg-opacity-50 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="img/logo.png" class="h-10" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Cherish Wedding</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="font-small flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-opacity-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/" class="block font-medium border-b-2 border-white-900 text-white">BERANDA</a>
                        </li>
                        <li>
                            <a href="/vendor" class="block text-white ">VENDOR</a>
                        </li>
                        <li>
                            <a href="/tentang" class="block text-white">TENTANG KAMI</a>
                        </li>
                        @Auth
                    <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                        class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 text-white"
                        type="button">
                        <span class="sr-only">Open user menu</span>
                        {{-- <img class="w-8 h-8 me-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="user photo"> --}}
                            {{ auth()->user()->name }}
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownAvatarName"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div class="font-medium ">{{ auth()->user()->name }}</div>
                        </div>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                            <li>
                              <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
                              </form>      
                            </li>
                        </ul>              
                    </div>
                @else
                    <li>
                        <a href="/login"
                            class="block text-red-500 font-medium py-0.5 px-2 border-2 border-red-600 rounded-md hover:bg-red-600 hover:text-white">MASUK</a>
                    </li>
                @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Cherish Wedding</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>

    <p class="text-3xl text-gray-900 underline dark:text-white text-center font-bold mt-10 mb-9">Kategori</p>

    <!--Card Kategori-->
    <div class="flex justify-center">
        <div class="grid grid-cols-2 lg:grid-cols-2 gap-4 max-w-3xl">
            <div class="bg-white col-span-1 row-span-1">
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">MUA</h5>
                    </a>
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src='https://source.unsplash.com/800x1000/?makeup'
                            alt="makeup image" />
                    </a>
                </div>
            </div>

            <div class="bg-white col-span-1 row-span-1">
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Fotografer</h5>
                    </a>
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src='https://source.unsplash.com/800x1000/?photography'
                            alt="photographer image" />
                    </a>
                </div>
            </div>

            <div class="bg-white col-span-1 row-span-1">
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Venue</h5>
                    </a>
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src='https://source.unsplash.com/1500x1200/?venue'
                            alt="venue image" />
                    </a>
                </div>
            </div>

            <div class="bg-white col-span-1 row-span-1">
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Catering</h5>
                    </a>
                    <a href="#">
                        <img class="p-8 rounded-t-lg" src='https://source.unsplash.com/500x500/?catering'
                            alt="catering image" />
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
