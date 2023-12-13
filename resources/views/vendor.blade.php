@extends('layouts.main')

@section('container')
<!-- searchbar -->
<div class="max-w-screen-xl flex flex-wrap items-center justify-end mx-auto p-4">
  <div class="flex items-center justify-end p-4">
      <div class="relative text-gray-600">
          <i class="absolute top-0 mt-3 ms-3 mr-4 fa-solid fa-magnifying-glass" style="color: #d1d1d1;"></i>
          <input type="search" name="search" placeholder="Cari Vendor"
              class="bg-white h-10 pl-10 pr-5 rounded-full text-sm focus:outline-none">
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
            <div class="flex flex-col">
    
            <!-- filter check -->
            <div>
                <ul>
                    <li>
                        <h1>Kategori</h1>
                    </li>
                </ul>
                <ul>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Fotografer</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Mua</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Katering</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Venue</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                </ul>
                <ul>
                    <li>
                        <h1>Kota</h1>
                    </li>
                </ul>
                <ul>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Bandung</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Cimahi</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Lembang</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                    <li class="flex flex-row items-center justify-between">
                        <h1 class="pl-5">Rancaekek</h1>
                        <input type="checkbox" name="" id="">
                    </li>
                </ul>
            </div>
                <!-- button -->
                <button type="button" class="mt-5 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">TERAPKAN</button>

            </div>
        </div>
    </div>
        <!-- card -->
        <div class="">
        <h5 class="mb-2 ml-8 text-2xl font-bold tracking-tight text-gray-900">Semua Kategori</h5>
        <div class="flex flex-row mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 flex flex-wrap justify-between">
            <!-- max-w-6xl -->
                <!-- SubCard -->
                <div class="card w-44 bg-gray-200 mb-3 mr-2 relative block">
                        <div class="absolute right-2 mt-4 mr-2 w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </div>
                            <img class="p-3 rounded-t-lg" src='https://source.unsplash.com/500x500/?makeup' alt="makeup image" />
                            <a href="#" class="flex items-center px-5"></a>
                        <!-- profil vendor -->
                        <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                            <img class="w-8 h-8" src="img/putri.png" alt="PUTRI">
                        </div>
                        <div class="ml-1">
                            <p class="text-xs font-thin">
                                Sewa venue Bojongsoang
                            </p>
                        </div>
                    <div class="mt-2 mb-4">
                        <p class="px-2 flex text-xs font-hard font-thin dark:text-white">VENUE</p>
                        <p class="px-2 flex text-xs font-medium font-thin dark:text-white">BANDUNG</p>
                    </div>
                </div>
        </div>
    </div>
</div>
    <!-- card -->
    <div class="">
        <h5 class="mb-2 ml-8 text-2xl font-bold tracking-tight text-gray-900">Semua Kategori</h5>
        <div class="flex flex-row mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8 flex flex-wrap justify-between">
            <!-- max-w-6xl -->
                <!-- SubCard -->
                <div class="card w-44 bg-gray-200 mb-3 mr-2 relative block">
                        <div class="absolute right-2 mt-4 mr-2 w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200">
                            <i class="fas fa-heart text-black"></i>
                        </div>
                            <img class="p-3 rounded-t-lg" src='https://source.unsplash.com/500x500/?makeup' alt="makeup image" />
                            <a href="#" class="flex items-center px-5"></a>
                        <!-- profil vendor -->
                        <div class="flex-shrink-0 rounded-full overflow-hidden border-2 border-gray-200">
                            <img class="w-8 h-8" src="img/putri.png" alt="PUTRI">
                        </div>
                        <div class="ml-1">
                            <p class="text-xs font-thin">
                                Sewa venue Bojongsoang
                            </p>
                        </div>
                    <div class="mt-2 mb-4">
                        <p class="px-2 flex text-xs font-hard font-thin dark:text-white">VENUE</p>
                        <p class="px-2 flex text-xs font-medium font-thin dark:text-white">BANDUNG</p>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection