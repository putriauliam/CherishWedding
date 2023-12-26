@extends('dashboard.layouts.main')

@section('container')

    <div class="p-4 sm:ml-64 flex justify-between items-center relative">
            <h1 class=" text-2xl text-gray-900 dark:text-white font-semibold">
                <span>DASHBOARD</span>
            </h1>
        <button type="button" class="flex items-center justify-between text-white bg-gray-600 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            <span>
                <a href="#">
                Keluar
                </a>
            </span>
            <i class="fas fa-sign-out-alt ml-2"></i>
        </button>
        <hr class="border-b-1 border-black absolute bottom-2 w-full mt-2">
    </div>

  <!-- Cards -->
    <div class="p-4 sm:ml-64">
        <h1 class="mb-15 text-2xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5">
            <a href="#"
                class="block max-w-sm p-6 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/fotografer2.png') }}" alt="Icon"
                    class="h-20 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $foto }} Fotografer</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-green-400 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/makeup.png') }}" alt="Icon"
                    class="h-32 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $mua }} MUA</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-red-500 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/catering.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $katering }} Katering</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-yellow-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/wedding.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $venue }} Venue</p>
            </a>
        </div>
        <h1 class="mb-15 text-2xl font-semibold">Entitas</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5">
            <a href="#"
                class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/users.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalUser }} User</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-blue-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/admin-alt.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalVendor }} Vendor</p>
            </a>
        </div>
    </div>
    @endsection
