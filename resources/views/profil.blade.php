@extends('layouts.main')

@section('container')

<div class="mb-5">
    <div class="h-32 mb-20 max-w-full" style="background-image: url('https://source.unsplash.com/2090x800/');">
        <div class="h-10">
        </div>

         <!-- Struktur konten dengan gambar, tombol edit, dan modal -->
         <div class="flex justify-center items-center">
            <div class="relative">
                {{-- <img class="h-40 w-40 rounded-full" src="{{ asset('storage/image/user.png') }}" alt=""> --}}
                @if($user->image)
                <div style="overflow: hidden;">
                    <img src="{{ asset('storage/image/' . $user->image) }}"
                        alt="{{ $user->image }}" class="h-40 w-40 rounded-full ">
                </div>
            @else
                <img src="{{ asset('storage/image/user.png' ) }}"
                    alt="{{ $user->name }}" class="h-40 w-40 rounded-full ">
            @endif

                <div class="absolute bottom-2 right-2">
                    <button id="editButton" class="bg-gray-200 p-1 rounded-full">
                        <i class="fas fa-edit text-gray-600 fa-lg"></i>
                    </button>
                </div>
            </div>
            <!-- Modal -->
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-28 bottom-28 right-64 left-64 z-50 w-full md:max-w-[calc(100%-2rem)] max-h-full ">
                <div class="relative p-4 w-max max-h-full ml-[400px] mt-[100px]">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Tutup</span>
                        </button>
                        <div class="p-4 md:p-5 mb-2">
                            <h3 class="mb-5 text-lg font-bold dark:text-gray-400">Foto Profil</h3>
                            <div class="p-4 md:p-5 text-center">
                                <!-- Tombol dengan ikon -->
                                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" data-modal-hide="popup-modal" type="button" class="text-gray-800 bg-white focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-400 font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                    <i class="fas fa-edit mr-2"></i>Edit
                                </button>
                                @if($user->image)
                                <button data-modal-hide="popup-modal" type="button" class="text-gray-800 bg-white focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-400 font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                    <i class="fas fa-trash-alt mr-2"></i>Hapus
                                </button>
                                @else
                                <button data-modal-hide="popup-modal" type="button" class="hidden text-gray-800 bg-white focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-400 font-semibold px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                    <i class="fas fa-trash-alt mr-2"></i>Hapus
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Perbarui photo profil
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2">
                        <form class="w-sm mx-auto" method="post" action="/profil{{ $user->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') 
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Profil</label>
                        <input type="hidden" name="oldImage" value="{{ $user->image }}">
                        @if($user->image)
                        <img src="{{ asset('storage/image/' . $user->image) }}" class="profil-preview img-fluid mb-3 w-52  max-w-full h-auto rounded-lg d-block">
                        @else
                        <img class="profil-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <input id="profil" name="profil" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('profil') is-invalid @enderror"  type="file" onchange="previewProfil()" value="{{ $user->image }}">
                        @error('profil')
                            <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="mt-2">
                            <img id="profil_preview" class="w-52 hidden max-w-full h-auto rounded-lg">
                        </div>

                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Perbarui photo profil
                        </button>
                        </form>
                    </div>
                    
                </div>
                
            </form>
        </div>
    </div>
</div>
        </div>
            <script>
                const editButton = document.querySelector('#editButton');
                const modal = document.querySelector('#popup-modal');

                editButton.addEventListener('click', () => {
                    modal.classList.toggle('hidden');
                });

                const closeButton = document.querySelector('[data-modal-hide="popup-modal"]');
                closeButton.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });
            </script>
        </div>
    </div>
    
    <div class="namaProfil">
        <h1 class="font-bold text-center text-2xl mb-2">{{ $user->name }}</h1>
        <!-- Follow us -->
        <div class="flex justify-center mb-2">
            <ul class="font-medium flex">
                <li class="">
                    <div class="flex items-center">
                        <div class=" w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                        <i class="fa-solid fa-user"></i>
                        </div>
                        <p class="pl-1">{{ $user->username }}</p>
                    </div>
                </li>
                {{-- <li class="">
                    <div class="pl-3 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p class="pl-1">+62. 5555.5555.5555</p>
                    </div>
                </li> --}}
                <li class="">
                    <div class="pl-3 flex items-center">
                        <div class="w-10 h-10 flex items-center justify-center bg-gray-300 rounded-full border border-gray-200">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p class="pl-1">{{ $user->email }}</p>
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
            <form action="/profil/{{ $user->id }}" method="GET">
                <div class="flex flex-col ">
                    <!-- filter check -->
                    <div>
                        <ul>
                            <li>
                                <h1 class=""><strong>Kategori</strong></h1>
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
                                <h1><strong>Kota</strong></h1>
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
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"> Disukai<i class="ml-2 fa-brands fa-gratipay"></i></h5>
        {{-- allert --}} 
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
        @if($favoriteVendors->count())
        <div class="flex flex-row mx-auto w-full max-w-screen-xl p-4lg:py-8 flex flex-wrap">
                @foreach ($favoriteVendors as $item)
                <!-- SubCard -->
                    <div class="card w-44 bg-gray-200 mb-3 mr-2 relative block">
                        <form action="/favorites/delete" method="POST">
                            @method('delete')
                            @csrf
                            <input type="hidden" name="vendor_id" id="favorit_hapus" value="{{ $item->id }}">
                            <button onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                                type="submit" class="absolute right-2 mt-4 mr-2 w-7 h-7 flex items-center justify-center rounded-full bg-white border border-gray-200" id="favorit">
                                <svg class="w-[15px] h-[15px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z"/>
                                  </svg>
                            </button class="flex">
                        </form>
                        <div>
                            <a href="/detail/{{ $item->slug }}">
                            <div class="overflow-hidden">
                                @if($item->image)
                            <div class="overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->category->name }}"
                                    class="p-3 rounded-t-lg h-44 w-44 object-cover">

                            </div>
                            @else
                                <img class="p-3 rounded-t-lg"
                                    src='https://source.unsplash.com/500x500/?{{ $v->category->name }}'
                                    alt="makeup image" />
                            @endif
                            </div>
                        </a>
                        </div>

                        <!-- profil vendor -->
                        <a  href="/detail/{{ $item->slug }}">
                            <div class=" flex items-center">

                                    <div style="overflow: hidden;">
                                        @if($item->profil)
                                    <div style="overflow: hidden;">
                                        <img src="{{ asset('storage/' . $item->profil) }}"
                                            alt="{{ $item->profil }}" class="ml-3 mr-2 w-8 h-8 rounded-full justify-between">
                                    </div>
                                @else
                                    <img src="{{ asset('storage/image/profil-kosong.jpg' ) }}"
                                        alt="{{ $item->profil }}"
                                        class="ml-3 mr-2 w-8 h-8 rounded-full justify-between">
                                @endif
                                    </div>

                                <p class="ml-1 text-sm font-thin">
                                    <strong class="font-semibold text-gray-900 dark:text-white">{{ $item->name }} </strong>
                                </p>
                            </div>
                            <!-- kategori dan alamat vendor -->
                            <div class="mt-2 mb-4">
                                <p class="px-2 flex text-xs font-hard font-thin dark:text-white">
                                    {{ $item->category->name }}
                                </p>
                                <p class="px-2 flex text-xs font-medium font-thin dark:text-white">
                                    {{ $item->city->name }}
                                </p>
                                </div>
                            </div>
                        </a>
                        @endforeach
            </div>
            @else
            <p class="text-center fs-4">Tidak ada vendor yang disukai</p>
        @endif
    </div>

</div>
<script>
    function previewProfil() {
        const image = document.querySelector('#profil');
        const imgPreview = document.querySelector('.profil-preview');
    
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection