@extends('layouts.main')

@section('container')

<div class="flex justify-center mt-11 ">
    <!-- title -->
    <div class=" flex flex-col vendorPreview  max-w-4xl mr-12 ml-20">
        <div class="title flex justify-between">
            <div class="flex">
                @if($vendor->profil)
                    <div style="overflow: hidden;">
                        <img src="{{ asset('storage/image/' . $vendor->profil) }}"
                            alt="{{ $vendor->profil }}" class="ml-3 w-16 h-16 rounded-full">
                    </div>
                @else
                    <img src="{{ asset('storage/image/profil-kosong.jpg' ) }}"
                        alt="{{ $vendor->category->name }}" class="ml-3 w-16 h-16 rounded-full">
                @endif
                <div class="pl-3">
                    {{-- <p class="font-bold" alt="nama jasa">Wedding Fotografi</p> --}}
                    <p class="font-medium  mt-2" alt="nama vendor"><strong>{{ $vendor->name }}</strong></p>
                    <p alt="kategori vendor">{{ $vendor->category->name }}</p>
                </div>
            </div>
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
            <div class="flex items-center mr-3">
                <form action="/favorites/add" method="POST">
                @csrf
                <input type="hidden" name="vendor_id" id="favorit" value="{{ $vendor->id }}">
                <button
                    class="hover:bg-red-700 flex items-center justify-center p- w-14 h-14 rounded-full bg-gray-500 border border-gray-200">
                    <svg class="w-7 h-7 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"/>
                      </svg>
                </button>
                </form>
            </div>
        </div>
        @if($vendor->image)
            <div class="overflow-hidden mt-4 h-96" style="width: 877px;">
                <img src="{{ asset('storage/image/' . $vendor->image) }}"
                    alt="{{ $vendor->category->name }}"
                    class="img-fluid rounded-lg h-full w-full object-cover" >
            </div>
        @else
            <img src="https://source.unsplash.com/1200x1000?{{ $vendor->category->name }}"
                alt="{{ $vendor->category->name }}" class="img-fluid mt-3">
        @endif
        <div class="my-14">
            <h1 class="font-bold">Deskripsi</h1>
            <p style="width: 746.61px;">{!! $vendor->detail !!}</p>

        </div>
        <h1 class="font-bold">Lokasi</h1>
        <div id="map" style="height:500px; width:600px"class="max-w-full mb-20"></div>
    </div>
    
    <!-- contactInfo -->
    <div class="detailContact m-5 ">
        <div href="#" class=" p-6 bg-white border border-gray-200 rounded-lg shadow">
            <div class="judulContact flex w-64">
                @if($vendor->profil)
                    <div style="overflow: hidden;">
                        <img src="{{ asset('storage/image/' . $vendor->profil) }}"
                            alt="{{ $vendor->profil }}" class="w-8 h-8 rounded-full">
                    </div>
                @else
                    <img src="{{ asset('storage/image/profil-kosong.jpg' ) }}"
                        alt="{{ $vendor->category->name }}" class="w-8 h-8 rounded-full">
                @endif
                <h1 class="ml-3"><strong>{{ $vendor->name }}</strong></h1>
            </div>
            <div class="kategoriLokasi flex">
                <p>{{ $vendor->category->name }}</p>
                <p class="mx-2">|</p>
                <p>{{ $vendor->city->name }}</p>
            </div>
            <h1 class="font-semibold">Harga</h1>
            <p>Mulai dari {{ currency_IDR($vendor->price) }}</p>
            <div class="">
                <ul class="font-medium">
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <p class="ml-12 mb-0">{{ $vendor->telp }}</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <p class="ml-12 mb-0">{{ $vendor->email }}</p>
                        </div>
                    </li>
                    <li class="mb-4 flex items-center">
                        <div class="relative flex items-center">
                            <div class="absolute w-10 h-10 flex items-center justify-center rounded-full">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <p class="ml-12 mb-0">{{ $vendor->instagram }}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script>
    
    var slug = '{{ $vendor->slug }}';
    console.log(slug);

    $.ajax({
                type: 'GET',
                url: '/maps/'+ slug,
                // data: {id:id},
                success: function (data){
                    console.log(data);
                    var map = L.map('map').setView(JSON.parse("["+data+"]"), 16);
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                    var marker = L.marker(JSON.parse("["+data+"]")).addTo(map);
                },
                error: function(){
                    alert('There was an error loading the data.');
                }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
