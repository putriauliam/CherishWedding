@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">
    <h1 class="mb-4 text-2xl text-gray-900 dark:text-white font-semibold">
        <span>DATA VENDOR</span>
        <hr class="border-b-1 border-black mt-2">
    </h1>

    <form class="w-sm mx-auto" method="post" action="#" enctype="multipart/form-data">
        {{-- nama --}}
        <div class="mb-2">
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama
                Lengkap</label>
                <div>
                    <h1>Data nama</h1>
                </div>          
        </div>
        {{-- slug --}}
        <div class="mb-2">
            <label for="slug" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- kategori --}}
        <div class="mb-2">
            <label for="category" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- kota --}}
        <div class="mb-2">
            <label for="city" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- address --}}
        <div class="mb-2">
            <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
            <div>
                <h1>Data</h1>
            </div>
            
        </div>
        {{-- koordinat maps --}}
        <div class="mb-2">
            <label for="koordinat_maps" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Koordinat Maps</label>
            <div>
                <h1>Data</h1>
            </div>
            
        </div>
        {{-- Harga --}}
        <div class="mb-2">
            <label for="price" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
            <div>
                <h1>Data</h1>
            </div>
            
        </div>
        {{-- upload gambar --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Gambar</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- profil --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Profil</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- email --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Email</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- instagram --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Instagram</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- telp --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">No Telepon</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        {{-- deskripsi --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Deskripsi Vendor</label>
            <div>
                <h1>Data</h1>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="/dataVendor" type="submit" class="text-center w-52 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>
        </div>
    </form>

</div>
@endsection
