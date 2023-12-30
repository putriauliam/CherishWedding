@extends('layouts.main')

@section('container')
<div class="flex" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <div class="text-black mt-24 max-w-xl px-14 ">
        <h1 class="text-6xl font-semibold mb-4">Kisah Kami</h1>
        <p class="text-justify"> Dorongan kami dalam menciptakan Cherish Wedding berasal dari keinginan untuk membantu pasangan merencanakan pernikahan mereka dengan lebih lancar, kreatif, dan tanpa tekanan. Dari sinilah lahir sebuah platform yang menghubungkan pasangan dengan vendor-vendor terbaik, sambil tetap mempertahankan fokus pada keindahan, kreativitas, dan kepuasan pelanggan.</p>
    </div>

    <div class="xl:w-1/2 xl:absolute top-24 right-12">
        <img src="{{ asset('storage/image/team.png') }}" class="max-w-full h-auto">
    </div>   
</div>

{{-- Profil --}}
<div class="mt-24 text-center py-4" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <div>
        <h1 class="text-5xl font-bold mb-12">Profil Kami</h1>
        <div class="flex justify-between max-w-lg mx-auto grid grid-cols-2 gap-x-32">
            <div class="mb-3">
                <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-600 mb-2" src="{{ asset('storage/image/putri.png') }}">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Putri Aulia Maulidina</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 ">Direktur Utama</span>
            </div>
            <div class="mb-3">
                <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-600 mb-2" src="{{ asset('storage/image/putri.png') }}">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Rahma Aliaputri E</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400 ">Direktur Keuangan</span>
            </div>
            <div class="mb-3">
                <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-600 mb-2" src="{{ asset('storage/image/putri.png') }}">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Hafizh Faiz F</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Direktur SDM</span>
            </div>
            <div class="mb-3">
                <img class="h-auto max-w-full rounded-lg shadow-xl dark:shadow-gray-600 mb-2" src="{{ asset('storage/image/putri.png') }}">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Lita Yusdia Fatimah</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Direktur Teknologi dan Inovasi</span>
            </div>
        </div>
    </div>
</div>

{{-- Statistik --}}
<div class="p-2 bg-red-200 rounded-lg md:p-8 dark:bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <h1 class="text-5xl font-bold mt-8 mb-4 text-center">Statistik</h1>
    <dl class="grid max-w-screen-xl grid-cols-2 gap-8 p-4 mx-auto text-gray-900 sm:grid-cols-3 xl:grid-cols-6 dark:text-white sm:p-8">
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('storage/image/mitra.png') }}" alt="mitra" class="w-20 h-20" />
            <dt class="mb-2 text-3xl font-extrabold">{{ $totalVendor }}</dt>
            <dd class="text-gray-700 dark:text-gray-400">Mitra Vendor</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('storage/image/fotografer2.png') }}" alt="fotografer" class="w-20 h-20" />
            <dt class="mb-2 text-3xl font-extrabold">{{ $foto }}</dt>
            <dd class="text-gray-700 dark:text-gray-400">Fotografer</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('storage/image/catering.png') }}" alt="katering" class="w-20 h-20" />
            <dt class="mb-2 text-3xl font-extrabold">{{ $katering }}</dt>
            <dd class="text-gray-700 dark:text-gray-400">Katering</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
             <img src="{{ asset('storage/image/makeup.png') }}" alt="mua" class="w-20 h-20" />
            <dt class="mb-2 text-3xl font-extrabold">{{ $mua }}</dt>
            <dd class="text-gray-700 dark:text-gray-400">MUA</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
             <img src="{{ asset('storage/image/wedding.png') }}" alt="venue" class="w-20 h-20" />
            <dt class="mb-2 text-3xl font-extrabold">{{ $venue }}</dt>
            <dd class="text-gray-700 dark:text-gray-400">Venue</dd>
        </div>
        <div class="flex flex-col items-center justify-center">
             <img src="{{ asset('storage/image/pasangan.png') }}" alt="pasangan" class="w-20 h-20 mr-4" />
            <dt class="mb-2 text-3xl font-extrabold">90+</dt>
            <dd class="text-gray-700 dark:text-gray-400">Pasangan</dd>
        </div>
    </dl>
</div>

{{-- Ulasan --}}
<div class="p-10" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <h1 class="text-5xl font-bold mb-12 text-center">Apa Kata Mereka?</h1>
    <div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800">
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Sumber Terbaik untuk Pernikahan</h3>
                <p class="my-4">"CherishWedding memberikan panduan lengkap untuk pernikahan saya. Dengan informasi detail tentang vendor, saya dapat dengan cepat menemukan layanan yang sesuai dengan keinginan saya."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center ">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Sinta Dewi Cahaya</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400 ">Member BDG48</div>
                </div>
            </figcaption>    
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Platform Sempurna untuk Mencari Vendor Pernikahan</h3>
                <p class="my-4">"CherishWedding memberikan saya kemudahan dalam membandingkan setiap layanan. Sangat membantu bagi saya yang ingin menyusun pernikahan impian tanpa stres."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center ">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Indah Purnama</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Atlet Badminton</div>
                </div>
            </figcaption>    
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 md:rounded-es-lg md:border-b-0 md:border-e dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Panduan Komprehensif untuk Pernikahan</h3>
                <p class="my-4">"Terima kasih CherishWedding atas panduan yang sangat rinci! Informasi tentang vendor-vendor pernikahan sangat membantu. Setiap informasi sangat berguna untuk memilih yang terbaik sesuai dengan anggaran."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center ">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Budi Pratama Wijaya</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Youtuber</div>
                </div>
            </figcaption>    
        </figure>
        <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
            <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mengatasi Tantangan Calon Pengantin</h3>
                <p class="my-4">"CherishWedding berusaha mengatasi tantangan calon pengantin dengan menyediakan platform yang memudahkan mereka memilih vendor yang paling sesuai dengan preferensi dan anggaran mereka."</p>
            </blockquote>
            <figcaption class="flex items-center justify-center ">
                <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right ms-3">
                    <div>Rama Aditya Nugroho</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">Pemeran Film</div>
                </div>
            </figcaption>    
        </figure>
    </div>  
</div>

@endsection
