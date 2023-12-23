<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css','resources/js/app.js')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ asset('storage/image/logo.png') }}">
        <title>Dashboard</title>
</head>

<body>

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-300 dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="{{ asset('storage/image/logo.png') }}" class="h-10"
                            alt="Flowbite Logo" />
                        <span
                            class="self-center text-1xl font-semibold whitespace-nowrap text-black dark:text-white">Cherish
                            Wedding</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard"
                        class="mt-10 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 18">
                            <path
                                d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/dataVendor"
                        class="mt-5 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Data Vendor</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 flex justify-between items-center relative">
        <h1 class="mb-4 text-2xl text-gray-900 dark:text-white font-semibold">
            <span>DASHBOARD</span>
            <hr class="border-b-1 border-black absolute bottom-2 left-4 w-3/4 pb-2">
        </h1>
        <button type="button" class="flex items-center justify-between text-white bg-gray-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            <span>Keluar</span>
            <i class="fas fa-sign-out-alt ml-2"></i>
        </button>
    </div>

  <!-- Cards -->
    <div class="p-4 sm:ml-64">
        <h1 class="mb-15 mt-20 text-2xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-14 mb-20">
            <a href="#"
                class="block max-w-sm p-6 bg-blue-200 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/fotografer2.png') }}" alt="Icon"
                    class="h-20 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $foto }} Fotografer</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-green-400 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/makeup.png') }}" alt="Icon"
                    class="h-32 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $mua }} MUA</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-red-500 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/catering.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $katering }} Katering</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/wedding.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $venue }} Venue</p>
            </a>
        </div>
        <h1 class="mb-15 mt-20 text-2xl font-semibold">Entitas</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-14 mb-20">
            <a href="#"
                class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/users.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalUser }} User</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-blue-300 border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/admin-alt.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalVendor }} Vendor</p>
            </a>
        </div>
    </div>

</body>

</html>
