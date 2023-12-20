@extends('layouts.main')

@section('container')

<div class="mb-5">
    <div class="bg-red-800 h-32 mb-20" style="background-image: url('storage/image/banner.jpg');">
        <div class="h-10">
        </div>
        <div class="flex justify-center">

            <img class="h-40 w-40 rounded-full border border-gray-900" src="storage/image/putri.png" alt="">
        </div>
    </div>
    <div class="namaProfil">
        <h1 class="font-bold text-center text-2xl mb-2">Nama</h1>
        <!-- Follow us -->
        <div class="flex justify-center">
            <ul class="font-medium flex">
                <li class="">
                    <div class="flex items-center">
                        <div class=" w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                        <i class="fa-solid fa-user"></i>
                        </div>
                        <p class="pl-1">Negan Smith</p>
                    </div>
                </li>
                <li class="">
                    <div class="pl-3 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p class="pl-1">+62. 5555.5555.5555</p>
                    </div>
                </li>
                <li class="">
                    <div class="pl-3 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p class="pl-1">Cherishwedding@gmail.com</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<hr class="border-t-2 border-gray-500">
<div class="flex mt-8">
    <!-- filter -->
    <div class="filter ml-5 mr-5">
        <div
            class="w-72 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <div class="flex items-center justify-between">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FILTER</h5>
                <i class="fa-solid fa-filter" style="color: #c2c2c2;"></i>

            </div>
            <!-- garis -->
            <hr class="font-medium border-b-2 border-gray-900 my-5">
            <form action="/vendor" method="GET">
                <div class="flex flex-col ">
                    <!-- filter check -->
                    <div>
                        <ul>
                            <li>
                                <h1 class=""><strong>Kategori</strong></h1>
                            </li>
                        </ul>
                            <ul>
                                <li class="flex flex-row items-center justify-between">
                                    <h1 class="pl-5"></h1>
                                    <input type="checkbox" name="category[]" id="" value="">
                                </li>
                            </ul>
                        <ul>
                            <li>
                                <h1><strong>Kota</strong></h1>
                            </li>
                        </ul>
                            <ul>
                                <li class="flex flex-row items-center justify-between">
                                    <h1 class="pl-5"></h1>
                                    <input type="checkbox" name="city[]" id="" value="">
                                </li>

                            </ul>
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
        
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Disukai<i class="ml-2 fa-brands fa-gratipay"></i></h5>


            <div class="flex flex-row mx-auto w-full max-w-screen-xl p-4lg:py-8 flex flex-wrap">

                <!-- SubCard -->
                    <div class="card w-44 bg-gray-200 mb-3 mr-2 relative block">
                        <form action="/favorites/add" method="POST">

                            <input type="hidden" name="vendor_id" id="favorit" value="">
                            <button
                                type="submit" class="absolute right-2 mt-4 mr-2 w-7 h-7 flex items-center justify-center rounded-full bg-white border border-gray-200" id="favorit">
                                <i class="fas fa-heart text-black"></i>
                            </button class="flex">
                        </form>

                        <div>

                            <div class="overflow-hidden">
                                <img src="storage/image/banner.jpg" alt="" class="p-3 rounded-t-lg h-44 w-44 object-cover">
                            </div>
                        </div>

                        <!-- profil vendor -->
                        <a  href="">
                            <div class=" flex items-center">

                                    <div style="overflow: hidden;">
                                        <img src="storage/image/putri.png" alt="" class="ml-3 mr-2 w-8 h-8 rounded-full justify-between">
                                    </div>

                                <p class="ml-1 text-sm font-thin">
                                    <strong class="font-semibold text-gray-900 dark:text-white">Judul </strong>
                                </p>
                            </div>
                            <!-- kategori dan alamat vendor -->
                            <div class="mt-2 mb-4">
                                <p class="px-2 flex text-xs font-hard font-thin dark:text-white">
                                    kategori
                                </p>
                                <p class="px-2 flex text-xs font-medium font-thin dark:text-white">
                                    kota
                                </p>
                                </div>
                            </div>
                        </a>
            </div>
    </div>
</div>
@endsection