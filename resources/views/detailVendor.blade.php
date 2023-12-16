@extends('layouts.main')

@section('container')

<div class="flex justify-center mt-11">
    <div class="flex flex-col vendorPreview  max-w-4xl mr-12">
        <!-- title -->
        <div class="title flex justify-between">
            <div class="flex">
                <img class="ml-3 w-16 h-16 rounded-full" src="img/putri.png" alt="">
                <div class="pl-3">
                    <p class="font-bold" alt="nama jasa">Wedding Fotografi</p>
                    <p class="font-medium" alt="nama vendor">Fotocraft Studio</p>
                    <p alt="kategori vendor">Fotografi</p>
                </div>
            </div>
            <div class="flex items-center mr-3">
                <button class="hover:bg-red-200 flex items-center justify-center p- w-14 h-14 rounded-full bg-gray-300 border border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" height="30" width="30" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                </button>

            </div>
        </div>
        <img class="h-3/4 w-2xl rounded-lg mt-4" src="img/wedding1.jpg" alt="image description">
    </div>
    <!-- contactInfo -->
    <div class="detailContact m-5">        
        <div href="#" class=" p-6 bg-white border border-gray-200 rounded-lg shadow">
            <div class="judulContact flex w-64">
                <img class="w-8 h-8 rounded-full" src="img/putri.png" alt="">
                <h1 class="ml-3">Wedding Fotografi</h1>
            </div>
            <div class="kategoriLokasi flex">
                <p>Fotografi</p>
                <p class="mx-2">|</p>
                <p>Bandung</p>
            </div>
            <h1 class="font-semibold">Harga</h1>
            <p>Mulai dari IDR 5,800,000</p>
            <div class="">
                    <ul class="font-medium">
                                <li class="mb-4 flex items-center">
                                    <div class="relative flex items-center">
                                        <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                            <p class="ml-12 mb-0">+62. 5555.5555.5555</p>
                                    </div>
                                </li>
                                <li class="mb-4 flex items-center">
                                    <div class="relative flex items-center">
                                        <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <p class="ml-12 mb-0">Cherishwedding@gmail.com</p>
                                    </div>
                                </li>
                                <li class="mb-4 flex items-center">
                            <div class="relative flex items-center">
                                <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <p class="ml-12 mb-0">Cherishwedding</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection