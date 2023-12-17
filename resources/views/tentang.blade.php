@extends('layouts.main')

@section('container')
<div class="flex">
    <div class="text-black mt-32 max-w-xl px-10 ">
        <h1 class="text-6xl font-semibold mb-4">Kisah Kami</h1>
        <p> Dorongan kami dalam menciptakan Cherish Wedding berasal dari keinginan untuk membantu pasangan merencanakan pernikahan mereka dengan lebih lancar, kreatif, dan tanpa tekanan. Dari sinilah lahir sebuah platform yang menghubungkan pasangan dengan vendor-vendor terbaik, sambil tetap mempertahankan fokus pada keindahan, kreativitas, dan kepuasan pelanggan.</p>
    </div>

    <div class="xl:w-1/2 xl:absolute top-32 right-0">
        <img src="{{ asset('storage/image/team.png') }}" class="max-w-full h-auto">
    </div>   
</div>
    
<div class="mt-24 text-center bg-gray-100 dark:bg-gray-900 py-6 ">
    <div>
        <h1 class="text-5xl font-semibold mb-12">Profil Kami</h1>
        <div class="flex justify-between max-w-lg mx-auto grid grid-cols-2 gap-x-32">
            <div class="mb-6">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/image/putri.png') }}" alt="">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Rahma Aliaputri E</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 ">Visual Designer</span>
            </div>
            <div class="mb-6">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/image/putri.png') }}" alt="">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Rahma Aliaputri E</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 ">Visual Designer</span>
            </div>
            <div class="mb-6">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/image/putri.png') }}" alt="">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Hafizh Faiz F</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
            <div class="mb-6">
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/image/putri.png') }}" alt="">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Lita Yusdia Fatimah</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
            </div>
        </div>
    </div>
</div>
    
@endsection
