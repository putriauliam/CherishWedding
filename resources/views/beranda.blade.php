<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css','resources/js/app.js')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
        <link rel="icon" href="{{ asset('storage/image/logo.png') }}">
        <title>BERANDA</title>
</head>

<body>

    <!-- navbar -->
    <section class="bg-center bg-no-repeat bg-blend-multiply"
        style="background-image: url('{{ asset('storage/image/wedding1.jpg') }}');">
        <nav class="bg-opacity-50 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('storage/image/logo.png') }}" class="h-10"
                        alt="Flowbite Logo" />
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
                            <a href="/"
                                class="block font-medium border-b-2 border-white-900 text-white active">BERANDA</a>
                        </li>
                        <li>
                            <a href="/vendor" class="block text-white md:hover:font-medium">VENDOR</a>
                        </li>
                        <li>
                            <a href="/tentang" class="block text-white md:hover:font-medium">TENTANG KAMI</a>
                        </li>
                        @Auth
                            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                                class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full md:me-0 text-white"
                                type="button">
                                <span class="sr-only">Open user menu</span>
                                {{-- <img class="w-8 h-8 me-2 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="user photo"> --}}
                                {{ auth()->user()->name }}
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownAvatarName"
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div class="font-medium ">{{ auth()->user()->username }}</div>
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
                                            <button type="submit"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logout</button>
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
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">In love's unity, navigating
                life's waves together, cherishing joys, overcoming trials, fostering an eternal journey filled with
                commitment and growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>
    <section class="text-center bg-white py-10">
        <h2 class="text-3xl font-semibold underline mb-20 mt-0">KATEGORI</h2>
        <div class="flex justify-center">
            <div class="grid grid-cols-2 lg:grid-cols-2 gap-4 max-w-3xl">
                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=1">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">MUA</h5>
                        </a>
                        <a href="/vendor?category%5B%5D=1">
                            <img class="p-8 rounded-t-lg" src="https://source.unsplash.com/1200x1200?makeup-wedding"
                                alt="makeup image" />
                        </a>
                    </div>
                </div>

                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=2">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Fotografer
                            </h5>
                        </a>
                        <a href="/vendor?category%5B%5D=2">
                            <img class="p-8 rounded-t-lg"
                                src="{{ asset('storage/image/Fotografer.png') }}"
                                alt="photographer image" />
                        </a>
                    </div>
                </div>
                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=3">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Venue</h5>
                        </a>
                        <a href="/vendor?category%5B%5D=3">
                            <img class="p-8 rounded-t-lg"
                                src="{{ asset('storage/image/Venue.png') }}" alt="venue image" />
                        </a>
                    </div>
                </div>
                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=4">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Catering</h5>
                        </a>
                        <a href="/vendor?category%5B%5D=4">
                            <img class="p-8 rounded-t-lg"
                                src="{{ asset('storage/image/Katering.png') }}"
                                alt="catering image" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="text-center bg-gray-100 py-10">
        <p class="text-lg text-gray-600">Tentang Kami</p>
        <h2 class="text-3xl font-semibold mb-2 mt-0">Kenapa Harus Memilih Kami?</h2>

        <div class="flex flex-col lg:flex-row items-center justify-center mt-8 ml-10">
            <div class="w-full lg:w-1/2 lg:order-last lg:text-left items-center ml-[95px]">
                <div class="max-w-md mt-5">
                    <h2 class="text-3xl font-semibold mb-2 text-center">Vendor Pernikahan Terlengkap</h2>
                    <p class="text-justify mt-6">
                        Cherish Wedding adalah pilihan yang sempurna untuk memenuhi segala kebutuhan pernikahan Anda,
                        menghadirkan pengalaman yang tak terlupakan dan sesuai dengan impian Anda. Berikut adalah
                        beberapa alasan mengapa Anda harus memilih Cherish Wedding untuk mencari venue, fotografer,
                        makeup, dan katering.
                    </p>
                    <!-- Tambahkan ikon-ikon di sini -->
                    <div class="flex mt-20 items-center justify-center">
                        <div class="mr-4 flex flex-col items-center">
                            <img src="{{ asset('storage/image/fast-time.png') }}" alt="Icon Cepat"
                                class="w-20 h-20 mr-4" />
                            <span class="text-xl font-semibold mb-1 mt-4">CEPAT</span>
                        </div>
                        <div class="mr-4 flex flex-col items-center">
                            <img src="{{ asset('storage/image/achievement.png') }}" alt="Icon"
                                class="w-20 h-20 mr-4">
                            <span class="text-xl font-semibold mb-1 mt-4">TERPERCAYA</span>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/image/magic-box.png') }}" alt="Icon Box"
                                class="w-20 h-20 mr-4">
                            <span class="text-xl font-semibold mb-1 mt-4">LENGKAP</span>
                        </div>
                    </div>
                    <!-- Akhir dari tambahan ikon-ikon -->
                </div>
            </div>
            <div class="w-1/2 lg:w-1/2 lg:order-first   items-center ml-[200px]">
                <img src="{{ asset('storage/image/venue.jpg') }}" alt="Cherish Wedding"
                    class="w-80 h-auto rounded-tl-full rounded-tr-full shadow-lg mt-5">
            </div>
        </div>
    </section>



    <section class="text-center bg-white py-10 mt-4 ">
        <p class="text-lg text-gray-600">Kategori</p>
        <h2 class="text-3xl font-semibold underline mb-20 mt-0">MAKE UP ARTIST</h2>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 justify-items-center">
            <!-- Kartu 1 -->
            <div
                class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                <!-- Konten Kartu 1 -->
                <!-- ... (Isi konten kartu sesuai dengan yang ada) ... -->
                <div
                    class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                    <!-- Konten Kartu -->
                    <a href="#" class="relative block">
                        <img class="p-4 sm:p-8 rounded-t-lg" src='https://source.unsplash.com/500x500/?makeup'
                            alt="makeup image" />
                        <div
                            class="absolute top-4 right-4 sm:top-8 sm:right-8 mt-1 sm:mt-2 mr-1 sm:mr-2 w-8 sm:w-10 h-8 sm:h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-4 sm:p-5">
                        <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                            <img class="w-12 h-12 sm:w-20 sm:h-20" src="img/putri.png" alt="PUTRI">
                        </div>
                        <div class="ml-3 sm:ml-4">
                            <p class="text-lg font-medium font-thin dark:text-white">
                                PUTRI AULIA MAULIDINA
                            </p>
                        </div>
                    </a>
                    <div class="mt-2 mb-4">
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">VENUE</p>
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">BANDUNG</p>
                    </div>
                </div>
            </div>
            <!-- Kartu 2 -->
            <div
                class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                <!-- Konten Kartu 2 -->
                <!-- ... (Isi konten kartu sesuai dengan yang ada) ... -->
                <div
                    class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                    <!-- Konten Kartu -->
                    <a href="#" class="relative block">
                        <img class="p-4 sm:p-8 rounded-t-lg" src='https://source.unsplash.com/500x500/?makeup'
                            alt="makeup image" />
                        <div
                            class="absolute top-4 right-4 sm:top-8 sm:right-8 mt-1 sm:mt-2 mr-1 sm:mr-2 w-8 sm:w-10 h-8 sm:h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-4 sm:p-5">
                        <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                            <img class="w-12 h-12 sm:w-20 sm:h-20" src="img/putri.png" alt="PUTRI">
                        </div>
                        <div class="ml-3 sm:ml-4">
                            <p class="text-lg font-medium font-thin dark:text-white">
                                PUTRI AULIA MAULIDINA
                            </p>
                        </div>
                    </a>
                    <div class="mt-2 mb-4">
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">VENUE</p>
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">BANDUNG</p>
                    </div>
                </div>
            </div>
            <!-- Kartu 3 -->
            <div
                class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                <!-- Konten Kartu 3 -->
                <!-- ... (Isi konten kartu sesuai dengan yang ada) ... -->
                <div
                    class="max-w-xs sm:max-w-sm bg-gray-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">
                    <!-- Konten Kartu -->
                    <a href="#" class="relative block">
                        <img class="p-4 sm:p-8 rounded-t-lg" src='https://source.unsplash.com/500x500/?makeup'
                            alt="makeup image" />
                        <div
                            class="absolute top-4 right-4 sm:top-8 sm:right-8 mt-1 sm:mt-2 mr-1 sm:mr-2 w-8 sm:w-10 h-8 sm:h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </div>
                    </a>
                    <a href="#" class="flex items-center p-4 sm:p-5">
                        <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                            <img class="w-12 h-12 sm:w-20 sm:h-20" src="img/putri.png" alt="PUTRI">
                        </div>
                        <div class="ml-3 sm:ml-4">
                            <p class="text-lg font-medium font-thin dark:text-white">
                                PUTRI AULIA MAULIDINA
                            </p>
                        </div>
                    </a>
                    <div class="mt-2 mb-4">
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">VENUE</p>
                        <p class="px-4 sm:px-4 flex text-lg font-medium font-thin dark:text-white">BANDUNG</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="footer bg-gray-100 dark:bg-gray-900">
        <div class="flex justify-between p-12">
            <!-- Resources -->
            <div class="justify-items-start">
                <ul class="text-gray-500 dark:text-gray-400 font-medium">
                    <li class="mb-2">
                        <a href="#" class="flex items-center">
                            <img src="{{ asset('storage/image/logo.png') }}" class="h-8 me-3"
                                alt="FlowBite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cherish
                                Wedding</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">CHERISH WEDDING © 2023</a>
                    </li>
                </ul>
            </div>
            <!-- Follow us -->
            <div class="">
                <ul class="font-medium">
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div
                                class="absolute w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="ml-12 mb-0">Jl. Dr. Setiabudi No. 193 Bandung</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div
                                class="absolute w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <p class="ml-12 mb-0">+62. 5555.5555.5555</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div
                                class="absolute w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <p class="ml-12 mb-0">Cherishwedding@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Navbar -->
            <div class="text-center">
                <h2 class="mb-3 font-normal text-gray-900 uppercase font-semibold dark:text-white">Beranda</h2>
                <h2 class="mb-3 font-normal text-gray-900 uppercase font-semibold dark:text-white">Vendor</h2>
                <h2 class="mb-3 font-normal text-gray-900 uppercase font-semibold dark:text-white">Tentang Kami</h2>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
