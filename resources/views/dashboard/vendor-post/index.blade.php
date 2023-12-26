@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">
    <h1 class="mb-4 text-2xl text-gray-900 dark:text-white font-semibold">
        <span>DATA VENDOR</span>
        <hr class="border-b-1 border-black mt-2">
    </h1>
    <div class="flex justify-between items-center">
        <div>
            <!-- Tambah Data Vendor -->
            {{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal"
            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
            type="button">
            Tambah Data Vendor
            </button> --}}
            <a href="/dataVendor/create" 
            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
            type="button">
            Tambah Data Vendor
            </a>
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
    {{-- <div id="default-modal" tabindex="-1" aria-hidden="true"
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
    </div> --}}

    <!-- tabel -->


    <div class="mt-3 border relative overflow-x-auto shadow-md sm:rounded-lg">
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
                            <a href=""
                                class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-blue-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                </svg>
                                <span class="sr-only">Icon description</span>
                            </a>
                            <a href="/dataVendor/{{ $v->slug }}"
                                class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-green-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                </svg>
                                <span class="sr-only">show</span>
                            </a>
                            
                            <form action="/dashboard/delete/{{ $v->id }}" method="post" class="inline-flex" id="detele">
                                @method('delete')
                                @csrf
                                <button
                                class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-red-600 rounded-full dark:bg-gray-700 dark:text-gray-300" onclick="return confirm('Apakah yakin ingin menghapus?')">
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
@endsection
