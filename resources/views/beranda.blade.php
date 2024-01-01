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
    <section class="bg-center bg-no-repeat bg-blend-multiply" style="background-image: url('{{ asset('storage/image/CherishBanner.png') }}') ; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
        <nav class="bg-opacity-50 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('storage/image/logo.png') }}" class="h-10"
                        alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-700">Cherish Wedding</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-ex panded="false">
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
                                class="block font-medium border-b-2 border-gray-900 text-gray-900 active">BERANDA</a>
                        </li>
                        <li>
                            <a href="/vendor" class="block text-gray-900 md:hover:font-medium">VENDOR</a>
                        </li>
                        <li>
                            <a href="/tentang" class="block text-gray-900 md:hover:font-medium">TENTANG KAMI</a>
                        </li>
                        @Auth
                            <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
                                class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full md:me-0"
                                type="button">
                                <span class="sr-only">Open user menu</span>
                                @if(auth()->user()->image)
                                    <div style="overflow: hidden;">
                                        <img src="{{ asset('storage/image/' . auth()->user()->image) }}"
                                            alt="{{ auth()->user()->image }}" class="w-8 h-8 me-2 rounded-full">
                                    </div>
                                @else
                                    <img src="{{ asset('storage/image/user.png' ) }}"
                                        alt="{{ auth()->user()->name }}" class="w-8 h-8 me-2 rounded-full">
                                @endif
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
                                        <a href="/profil/{{ auth()->user()->id }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profil</a>
                                    </li>
                                </ul>
                                @if(auth()->user()->Type == 'admin')
                                    
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                    <li>
                                        <a href="/dashboard"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                </ul>
                                @endif
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf
                                            <button type="submit"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Keluar</button>
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
            @if(session()->has('success'))
        <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-green-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mr-24" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                </svg>  
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-100 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
        
        
        @if(session()->has('fail'))
        <div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-red-100 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800 mr-24" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
                </svg>
                <span class="sr-only">Error icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('fail') }}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-100 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
        @endif
            <h1 style="color:#FF5780" class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">
                Cherish Wedding</h1>
            <p class="mb-8 text-lg font-normal text-gray-600 lg:text-xl sm:px-16 lg:px-48"> Layanan yang menyediakan
                pengalaman penuh perhatian dan profesionalisme serta memudahkan perencanaan pernikahan anda.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            </div>
        </div>
    </section>

    <section class="text-center bg-white py-10" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <h2 class="text-3xl font-semibold mb-20 mt-30">Kategori</h2>
        <div class="flex justify-center">
            <div class="grid grid-cols-2 lg:grid-cols-2 gap-4 max-w-3xl">
                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=1">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">MUA</h5>
                        </a>
                        <a href="/vendor?category%5B%5D=1">
                            <img class="p-8 rounded-t-lg"
                                src="{{ asset('storage/image/MUA.jpg') }}" alt="makeup image" />
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
                                src="{{ asset('storage/image/venue3.png') }}" alt="venue image" />
                        </a>
                    </div>
                </div>
                <div class="bg-white col-span-1 row-span-1">
                    <div class="px-5 pb-5">
                        <a href="/vendor?category%5B%5D=4">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Katering</h5>
                        </a>
                        <a href="/vendor?category%5B%5D=4">
                            <img class="p-8 rounded-t-lg"
                                src="{{ asset('storage/image/foodie.png') }}"
                                alt="catering image" />
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="text-center bg-red-200 py-10">

        <h2 class="text-3xl font-semibold mb-20 mt-10" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Kenapa Harus Memilih Kami?</h2>

        <div class="flex items-center justify-start mt-8 " style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            <div class="mr-10 w-1/2 lg:w-1/2 lg:order-first flex justify-end items-center ">
                <img src="{{ asset('storage/image/venue.jpg') }}" alt="Cherish Wedding"
                    class="w-80 h-auto rounded-tl-full rounded-tr-full shadow-lg mt-5">
            </div>
            <div class="flex mr-40 lg:w-1/2 lg:order-last lg:text-left items-center">
                <div class="max-w-md mt-5">
                    <h2 class="text-3xl font-semibold mb-2 text-center">Vendor Pernikahan Terlengkap</h2>
                    <p class="text-justify mt-6" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                        Cherish Wedding adalah pilihan yang sempurna untuk memenuhi segala kebutuhan pernikahan anda,
                        menghadirkan pengalaman yang tak terlupakan dan sesuai dengan impian anda. Berikut adalah
                        beberapa alasan mengapa anda harus memilih Cherish Wedding untuk mencari venue, fotografer,
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
        </div>
    </section>



    <section class="block text-center bg-white py-10 mt-4 mb-20" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <h2 class="text-3xl font-semibold mb-20 mt-10" >Rekomendasi Untuk Anda</h2>
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 justify-items-center">
            <!-- Kartu 1 -->
            @foreach($rekomendasi as $rekomen)
                <div
                    class="max-w-xs sm:max-w-sm border  rounded-lg shadow dark:bg-red-200 dark:border-gray-700 relative">
                    <!-- Konten Kartu 1 -->
                    <!-- ... (Isi konten kartu sesuai dengan yang ada) ... -->
                    <div
                        class="max-w-xs sm:max-w-sm bg-gray-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 relative">

                        <!-- Konten Kartu -->

                        <a href="/detail/{{ $rekomen->slug }}">
                            @if($rekomen->image)
                                <img src="{{ asset('storage/' . $rekomen->image) }}"
                                    alt="{{ $rekomen->category->name }}" class="p-2 w-72 h-72 sm:p-4 rounded-t-lg object-cover">
                            @else
                                <img class="p-4 sm:p-8 rounded-t-lg"
                                    src='https://source.unsplash.com/500x500/?{{ $rekomen->category->name }}'
                                    alt="makeup image" />
                            @endif
                        </a>
                        <form action="/favorites/add" method="POST">
                            @csrf
                            <input type="hidden" name="vendor_id" id="favorit" value="{{ $rekomen->id }}">
                            <button type="submit"
                                class="absolute top-5 right-5 mt-1 sm:mt-2 mr-1 sm:mr-2 w-8 sm:w-10 h-8 sm:h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fas fa-heart text-black"></i>
                            </button class="flex">
                        </form>
                        <a href="/detail/{{ $rekomen->slug }}" class="flex items-center p-4 sm:p-5">

                            @if($rekomen->profil)
                                <div style="overflow: hidden;"
                                    class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                                    <img src="{{ asset('storage/' . $rekomen->profil) }}"
                                        alt="{{ $rekomen->profil }}" class="w-12 h-12 sm:w-20 sm:h-20">
                                </div>
                            @else
                                <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                                    <img src="{{ asset('storage/image/profil-kosong.jpg' ) }}"
                                        alt="{{ $rekomen->category->name }}" class="w-12 h-12 sm:w-20 sm:h-20">
                                </div>
                            @endif
                            <div class="ml-3 sm:ml-4">
                                <p class="text-lg font-normal dark:text-white">
                                    <strong>
                                        {{ $rekomen->name }}
                                    </strong>
                                </p>
                            </div>
                        </a>
                        <div class="mt-2 mb-4">
                            <p class="px-4 sm:px-4 flex text-lg font-normal dark:text-white">
                                {{ $rekomen->category->name }}</p>
                            <p class="px-4 sm:px-4 flex text-lg font-normal dark:text-white">
                                {{ $rekomen->city->name }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>


    <div class="footer bg-red-200" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <div class="flex justify-between p-12">
            <!-- Resources -->
            <div class="justify-items-start">
                <ul class="dark:text-gray-400 font-medium">
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
                            <p class="ml-12 mb-0 mt-2">Jl. Dr. Setiabudi No. 193 Bandung</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div
                                class="absolute w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fa-brands fa-whatsapp"></i>
                            </div>
                            <p class="ml-12 mb-0 mt-2">+62. 5555.5555.5555</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div
                                class="absolute w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <p class="ml-12 mb-0 mt-2">Cherishwedding@gmail.com</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Navbar -->
            <div class="text-center">
                <h2 class="mb-3 font-normal uppercase font-semibold dark:text-white"><a
                        href="/">Beranda</a></h2>
                <h2 class="mb-3 font-normal uppercase font-semibold dark:text-white"><a
                        href="/vendor">Vendor</a></h2>
                <h2 class="mb-3 font-normal uppercase font-semibold dark:text-white"><a
                        href="/tentang">Tentang Kami</a></h2>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
