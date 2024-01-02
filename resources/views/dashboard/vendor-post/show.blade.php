@extends('dashboard.layouts.main')

@section('container')
<div class="p-4 sm:ml-64">

    

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead style="background-color:rgb(249, 128, 128)" class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="text-white px-6 py-3">
                        Judul
                    </th>
                    <th scope="col" class="text-white px-6 py-3">
                        Data
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- nama --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="name" class="">Nama Vendor</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->name }}</h1>
                    </td>
                </tr>
                {{-- kategori --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="category" class="">Kategori</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->category->name }}</h1>
                    </td>
                </tr>
                {{-- kota --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="city" class="">Kota</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->city->name }}</h1>
                    </td>
                </tr>
                {{-- address --}}
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="address" class="">Alamat Lengkap</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->address }}</h1>
                    </td>
                </tr>
                {{-- koordinat maps --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="koordinat_maps" class="">Koordinat Maps</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->koordinat_maps }}</h1>
                    </td>
                </tr>
                {{-- harga --}}
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label for="harga" class="">Harga</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ currency_IDR($vendor->price) }}</h1>
                    </td>
                </tr>
                {{-- Upload Gambar --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="image">Upload Gambar</label>
                    </th>
                    <td class="px-6 py-4">
                    <div>
                    @if($vendor->image)
                    <div class="overflow-hidden mt-4" style="width: 400px;">
                        <img src="{{ asset('storage/' . $vendor->image) }}"
                            alt="{{ $vendor->category->name }}"
                            class="img-fluid rounded-lg h-full w-full object-cover" >
                    </div>
                    @else
                        <img src="https://source.unsplash.com/1200x1000?{{ $vendor->category->name }}"
                            alt="{{ $vendor->category->name }}" class="img-fluid mt-3">
                    @endif
                        </div>
                    </td>
                </tr>
                {{-- Profil --}}
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="image">Upload Profil</label>
                    </th>
                    <td class="px-6 py-4">
                    <div>
                    @if($vendor->profil)
                    <div style="overflow: hidden;">
                        <img src="{{ asset('storage/' . $vendor->profil) }}"
                            alt="{{ $vendor->profil }}" class="w-40 h-40 rounded-full">
                    </div>
                    @else
                        <img src="{{ asset('storage/image/user.png' ) }}"
                            alt="{{ $vendor->category->name }}" class="w-40 h-40 rounded-full">
                    @endif
                    </div>
                    </td>
                </tr>
                {{-- koordinat maps --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="email">Email</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->email }}</h1>
                    </td>
                </tr>
                {{-- Instagram --}}
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="instagram">Instagram</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->instagram }}</h1>
                    </td>
                </tr>
                {{-- Telp --}}
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="no_telp">No Telepon</label>
                    </th>
                    <td class="px-6 py-4">
                        <h1>{{ $vendor->telp }}</h1>
                    </td>
                </tr>
                {{-- Deskripsi --}}
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <label class="" for="deskripsi_vendor">Deskripsi</label>
                    </th>
                    <td class="px-6 py-4">
                        <div>
                            <h1 style="width:full">{!! $vendor->detail !!}</h1>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


            <div class="mb-2">

            </div>
            <div class="flex justify-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                <a href="/dataVendor" type="submit" class="text-center w-52 text-white bg-red-400 border border-gray-300 focus:outline-none hover:bg-white hover:text-black focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
