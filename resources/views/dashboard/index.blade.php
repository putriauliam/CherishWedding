@extends('dashboard.layouts.main')

@section('container')

    

  <!-- Cards -->
    <div class="p-4 sm:ml-64" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <h1 class="mb-15 text-2xl font-semibold">Kategori</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5">
            <a href="#"
                class="block max-w-sm p-6 bg-blue-100 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/fotografer2.png') }}" alt="Icon"
                    class="h-20 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $foto }} Fotografer</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-blue-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/makeup.png') }}" alt="Icon"
                    class="h-32 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $mua }} MUA</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-blue-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/catering.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $katering }} Katering</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-blue-400 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/wedding.png') }}" alt="Icon"
                    class="h-24 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $venue }} Venue</p>
            </a>
        </div>
        <h1 class="mb-15 text-2xl font-semibold">Entitas</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 my-5">
            <a href="#"
                class="block max-w-sm p-6 bg-pink-300 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/users.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalUser }} User</p>
            </a>
            <a href="#"
                class="block max-w-sm p-6 bg-pink-200 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 relative flex items-center">
                <img src="{{ asset('storage/image/admin-alt.png') }}" alt="Icon"
                    class="h-28 w-auto flex-shrink-0">
                <p class="font-bold text-xl dark:text-gray-400 ml-4">{{ $totalVendor }} Vendor</p>
            </a>
        </div>
    </div>
    @endsection
