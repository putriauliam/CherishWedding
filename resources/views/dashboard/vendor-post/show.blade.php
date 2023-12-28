@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">
    

    <form class="w-sm mx-auto" method="post" action="#" enctype="multipart/form-data">
        {{-- nama --}}
        <div class="mb-2">
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama
                Lengkap</label>
                <div>
                    <h1>{{ $vendor->name }}</h1>
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
                <h1>{{ $vendor->category->name }}</h1>
            </div>
        </div>
        {{-- kota --}}
        <div class="mb-2">
            <label for="city" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
            <div>
                <h1>{{ $vendor->city->name }}</h1>
            </div>
        </div>
        {{-- address --}}
        <div class="mb-2">
            <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
            <div>
                <h1>{{ $vendor->address }}</h1>
            </div>
            
        </div>
        {{-- koordinat maps --}}
        <div class="mb-2">
            <label for="koordinat_maps" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Koordinat Maps</label>
            <div>
                <h1>{{ $vendor->koordinat_maps }}</h1>
            </div>
            
        </div>
        {{-- Harga --}}
        <div class="mb-2">
            <label for="price" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
            <div>
                <h1>{{ currency_IDR($vendor->price) }}</h1>
            </div>
            
        </div>
        {{-- upload gambar --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Gambar</label>
            <div>
                @if($vendor->image)
            <div class="overflow-hidden mt-4 h-96" style="width: 877px;">
                <img src="{{ asset('storage/' . $vendor->image) }}"
                    alt="{{ $vendor->category->name }}"
                    class="img-fluid rounded-lg h-full w-full object-cover" >
            </div>
        @else
            <img src="https://source.unsplash.com/1200x1000?{{ $vendor->category->name }}"
                alt="{{ $vendor->category->name }}" class="img-fluid mt-3">
        @endif
            </div>
        </div>
        {{-- profil --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Profil</label>
            <div>
                @if($vendor->profil)
                <div style="overflow: hidden;">
                    <img src="{{ asset('storage/' . $vendor->profil) }}"
                        alt="{{ $vendor->profil }}" class="w-8 h-8 rounded-full">
                </div>
            @else
                <img src="{{ asset('storage/image/user.png' ) }}"
                    alt="{{ $vendor->category->name }}" class="w-8 h-8 rounded-full">
            @endif
            </div>
        </div>
        {{-- email --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Email</label>
            <div>
                <h1>{{ $vendor->email }}</h1>
            </div>
        </div>
        {{-- instagram --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Instagram</label>
            <div>
                <h1>{{ $vendor->instagram }}</h1>
            </div>
        </div>
        {{-- telp --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">No Telepon</label>
            <div>
                <h1>{{ $vendor->telp }}</h1>
            </div>
        </div>
        {{-- deskripsi --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="">Deskripsi Vendor</label>
            <div>
                <h1>{!! $vendor->detail !!}</h1>
            </div>
        </div>
        <div class="flex justify-center">
            <a href="/dataVendor" type="submit" class="text-center w-52 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>
        </div>
    </form>

</div>
@endsection
