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
        <link rel="icon" href="{{ asset('storage/image/logo.png') }}">
        <title>Dashboard</title>

        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
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


    

    <div class="p-4 sm:ml-64">
        <h1 class="mb-4 text-2xl text-gray-900 dark:text-white font-semibold">
            <span>DATA VENDOR</span>
            <hr class="border-b-1 border-black mt-2">
        </h1>
        <div class="flex justify-between items-center">
            <div>
                <!-- Tambah Data Vendor -->
                <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                type="button">
                Tambah Data Vendor
                </button>
                <!-- Cetak Data Vendor -->
                <a href="/dashboard/cetak" target="_blank"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                type="button">
                Cetak Data Vendor
                </a>
            </div>
            <!-- live search -->
            <form action="/vendor">
                    <i class="absolute mt-3 ms-3 mr-4 fa-solid fa-magnifying-glass"></i>
                    <input type="search" name="search" placeholder="Cari Vendor"
                        class="bg-white h-10 pl-10 pr-5 rounded-full text-sm focus:outline-none"
                        value="{{ request('search') }}">
            </form>

        </div>




        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Form Data Vendor
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="card flex justify-center relative ">
                        <div href="#"
                            class=" block p-6 bg-white border border-gray-200 rounded-lg w-full shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <form class="w-sm mx-auto" method="POST" action="/dataVendor">
                                @csrf
                                <div class="mb-2">
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Vendor</label>
                                    <input type="text" placeholder="Masukan Nama Vendor" id="name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror">
                                        @error('name')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
                                    <input type="text" placeholder="Slug" id="slug" name="slug"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug') is-invalid @enderror"
                                        required>
                                        @error('slug')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <!-- option dropdown kategori -->
                                <div class="mb-2">
                                    <label for="text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                                    <!-- Dropdown menu -->
                                    <select id="category" name="category_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                        @foreach($categories as $category)
                                            @if(old('category_id') == $category->id)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                </option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    

                                </div>
                                <!-- option dropdown kota -->
                                <div class="mb-2">
                                    <label for="text"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                                    <!-- Dropdown menu -->
                                    <select id="city" name="city_id"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                        @foreach($cities as $city)
                                            @if(old('city_id') == $city->id)
                                                <option value="{{ $city->id }}" selected>{{ $city->name }}
                                                </option>
                                            @else
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    

                                </div>

                                <div class="mb-2">
                                    <label for="textfield"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                        Lengkap</label>
                                    <textarea type="text" placeholder="Tulis Alamat Lengkap" id="address" name="address"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('address') is-invalid @enderror"
                                        required></textarea>
                                        @error('address')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="koordinat_maps"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koordinat
                                        Alamat</label>
                                    <input type="text" id="koordinat_maps" name="koordinat_maps"
                                        placeholder="Masukkan koordinat peta"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('koordinat_maps') is-invalid @enderror"
                                        required>
                                        @error('koordinat_maps')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>

                                <div class="mb-2">
                                    <label for="price"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
                                    <input placeholder="IDR." type="number" id="price" name="price"
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('price') is-invalid @enderror"
                                        required>
                                        @error('price')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="image">Upload Gambar</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                        id="image" type="file" name="image" onchange="previewImage(this)">
                                        @error('image')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                    <div class="mt-2">
                                        <img id="image_preview" class="w-52 hidden max-w-full h-auto rounded-lg">
                                    </div>
                                </div>

                                <div class="mb-2">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="profil">Upload Profil</label>
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('profil') is-invalid @enderror"
                                        id="profil" type="file" name="profil" onchange="previewProfil(this)">
                                        @error('profil')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                    <div class="mt-2">
                                        <img id="profil_preview" class="w-52 hidden max-w-full h-auto rounded-lg">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" placeholder="Masukan Email" id="email" name="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                                        required>
                                        @error('email')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="instagram"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                                    <input type="text" placeholder="@instagram" id="instagram" name="instagram"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('instagram') is-invalid @enderror"
                                        required>
                                        @error('instagram')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="telp"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                        Telepon</label>
                                    <input placeholder="+62 XXX XXX XXXX" type="number" id="telp" name="telp"
                                        aria-describedby="helper-text-explanation"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('telp') is-invalid @enderror"
                                        required>
                                        @error('telp')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="textfield"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                                        Vendor</label>
                                        @error('detail')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                        <p>
                                            <input id="detail" type="hidden" name="detail" value="" required />
                                            <trix-editor input="detail" class="trix-content"></trix-editor>
                                        </p>
                                    
                                </div>
                                <div class="flex justify-center">
                                    <button type="submit" name="submit" value="Submit"
                                        class="w-52 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kirim</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- tabel -->


        <div class="mt-3 border relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Vendor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vendor as $v)
                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $v->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $v->image }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $v->city->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $v->category->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ currency_IDR($v->price) }}
                            </td>
                            <td class="px-6 py-4">
                                <button
                                    class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-blue-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                    <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                    </svg>
                                    <span class="sr-only">Icon description</span>
                                </button>
                                <button
                                    class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-green-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                    <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    <span class="sr-only">Icon description</span>
                                </button>
                                
                                <form action="/dashboard/delete" method="post" class="inline-flex">
                                    @method('delete')
                                    @csrf
                                    
                                    <button
                                    class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-red-600 rounded-full dark:bg-gray-700 dark:text-gray-300" onclick="return confirm('Are you sure?')">
                                    <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                        <path
                                            d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                    </svg>
                                    <span class="sr-only">delete</span>
                                </button>
                                </form>
                                {{-- <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="border text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Edit<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>
                    <div id="dropdownHover" class="relative z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" data-modal-target="default-modal" data-modal-toggle="default-modal" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus</a>
                            </li>
                        </ul>
                    </div> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mr-20 mb-5 mt-5">
            {{-- pagination --}}
            {{ $vendor->links('vendor.pagination.tailwind') }}
        </div>
        <!-- Dropdown menu -->


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js') }}">
    </script>
    <script>
        function previewImage(input) {
            const preview = document.getElementById('image_preview');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.classList.add('hidden');
            };

            // function previewProfil(input) {
            // const preview = document.getElementById('profil_preview');
            // const file = input.files[0];

            // if (file) {
            //     const reader = new FileReader();

            //     reader.onload = function (e) {
            //         preview.src = e.target.result;
            //         preview.classList.remove('hidden');
            //     };

            //     reader.readAsDataURL(file);
            // } else {
            //     preview.src = '';
            //     preview.classList.add('hidden');
            // }
        }

    </script>
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
        name.addEventListener('change', function () {
            fetch('/dashboard/vendor/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
        document.addEventListener('trix-file-accept', function (e) {
            e.preventDefault();
        });

    </script>
</body>

</html>
