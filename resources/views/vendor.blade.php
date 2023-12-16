@extends('layouts.main')

@section('container')
{{-- <h1 class="mb-3 text-center">{{ $title }}</h1> --}}

<!-- searchbar -->

<div class="max-w-screen-xl flex flex-wrap items-center justify-end mx-auto p-4">
    <div class="flex items-center justify-end p-4">
        <div class="relative text-gray-600">
            <form action="/vendor">
                {{-- <i class="absolute top-0 mt-3 ms-3 mr-4 fa-solid fa-magnifying-glass" style="color: #d1d1d1;"></i> --}}
                <input type="search" name="search" placeholder="Cari Vendor"
                    class="bg-white h-10 w-full pl-5 pr-5 rounded-full text-sm focus:outline-none"
                    value="{{ request('search') }}">
                <button type="submit" class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
    <button
        class="bg-gray-500 text-white  rounded-full p-2 py-1 hover:bg-red-600 focus:outline-none focus:ring focus:border-red-300">
        <i class="fa-solid fa-heart"></i>
    </button>

</div>


<!-- body -->
<div class="container flex flex row">
    <!-- filter -->
    <div class="filter ml-5">
        <div
            class="w-72 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex items-center justify-between">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FILTER</h5>
                <i class="fa-solid fa-filter" style="color: #c2c2c2;"></i>

            </div>
            <!-- garis -->
            <hr class="font-medium border-b-2 border-gray-900 my-5">
            <form action="/vendor" method="GET">
                <div class="flex flex-col">
                    <!-- filter check -->
                    <div>
                        <ul>
                            <li>
                                <h1>Kategori</h1>
                            </li>
                        </ul>
                        @foreach($categories as $category)
                            <ul>
                                <li class="flex flex-row items-center justify-between">
                                    <h1 class="pl-5">{{ $category->name }}</h1>
                                    <input type="checkbox" name="category[]" id="" value="{{ $category->id }}">
                                </li>
                            </ul>
                        @endforeach
                        <ul>
                            <li>
                                <h1>Kota</h1>
                            </li>
                        </ul>
                        @foreach($cities as $city)
                            <ul>
                                <li class="flex flex-row items-center justify-between">
                                    <h1 class="pl-5">{{ $city->name }}</h1>
                                    <input type="checkbox" name="city[]" id="" value="{{ $city->id }}">
                                </li>

                            </ul>
                        @endforeach
                    </div>
                    <!-- button -->
                    <button type="submit"
                        class="mt-5 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">TERAPKAN</button>
                </div>
            </form>
        </div>
    </div>
    <!-- card -->

    <!-- card -->
    <div class="">
        <h5 class="mb-2 ml-8 text-2xl font-bold tracking-tight text-gray-900">Semua Kategori</h5>

        @if($vendor->count())
            <div class="flex flex-row mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 flex flex-wrap">
                <!-- max-w-6xl -->
                <!-- SubCard -->
                @foreach($vendor as $v)
                    <div class="card w-44 bg-gray-200 mb-3 mr-2 relative block ">
                        <button
                            class="absolute right-2 mt-4 mr-2 w-7 h-7 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </button class="flex">

                        <a href="/detail/{{ $v->slug }}">
                            @if($v->image)
                                <img src="{{ asset('storage/image/' . $v->image) }}" alt="{{ $v->category->name }}"
                                    class="p-3 rounded-t-lg w-96 max-h-50">
                            @else
                                <img class="p-3 rounded-t-lg"
                                    src='https://source.unsplash.com/500x500/?{{ $v->category->name }}'
                                    alt="makeup image" />
                            @endif
                        </a>

                        <!-- profil vendor -->
                        <div class=" flex items-center">
                            @if($v->profil)
                                <div style="overflow: hidden;">
                                    <img src="{{ asset('storage/image/' . $v->profil) }}"
                                        alt="{{ $v->profil }}" class="ml-3 w-8 h-8 rounded-full justify-between">
                                </div>
                            @else
                                <img src="{{ asset('storage/image/profil-kosong.jpg' ) }}"
                                    alt="{{ $v->category->name }}"
                                    class="ml-3 w-8 h-8 rounded-full justify-between">
                            @endif
                            <p class="pl-2 text-sm font-thin">
                                <strong class="font-semibold text-gray-900 dark:text-white">{{ $v->name }}</strong>
                            </p>
                        </div>
                        <div class="ml-1">
                        </div>
                        <!-- kategori dan alamat vendor -->
                        <div class="mt-2 mb-4">
                            <p class="px-2 flex text-xs font-hard font-thin dark:text-white">
                                {{ $v->category->name }}
                            </p>
                            <p class="px-2 flex text-xs font-medium font-thin dark:text-white">{{ $v->city->name }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">No post found.</p>
        @endif
    </div>
</div>

{{-- pagination --}}
<div class="text-center">
    {{ $vendor->links() }}
</div>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
