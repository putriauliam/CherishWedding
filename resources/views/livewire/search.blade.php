<div>
    <div class="p-4 sm:ml-64">
        
        <div class="flex justify-between items-center" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
        <div class="flex space-x-4">
            <a href="/dataVendor/create" 
            class="flex items-center text-white bg-red-400 border border-gray-300 focus:outline-none font-semibold hover:bg-white hover:text-black focus:ring-4 focus:ring-gray-200 rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
            type="button">
                <span class="flex items-center justify-center mr-2">
                    <!-- Icon Tambah -->
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
                    </svg>
                </span>
                Tambah Data Vendor
            </a>
            
            <!-- Cetak Data Vendor -->
            <a href="/dashboard/cetak" target="_blank"
            class="flex items-center text-white bg-red-400 border border-gray-300 focus:outline-none hover:bg-white hover:text-black font-semibold  focus:ring-4 focus:ring-gray-200 rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
            type="button">
                <span class="flex items-center justify-center mr-2">
                    <!-- Icon Print -->
                    <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z"/>
                        <path d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"/>
                    </svg>
                </span>
                Cetak Data Vendor
            </a>
        </div>


            <!-- live search -->
            <div >
                    <i class="absolute mt-3 ms-3 mr-4 fa-solid fa-magnifying-glass"></i>
                    <input wire:model.lazy="search" type="text" id="search" name="search" placeholder="Cari Vendor" 
                        class="bg-white h-10 pl-10 pr-5 rounded-full text-sm focus:outline-none"  >
            </div>
        </div>
    

    
        <!-- tabel -->
    
    
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
        <div class="mt-3 border relative overflow-x-auto shadow-md sm:rounded-lg">
            <div class="data-table">
                <table class="data-tablee w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                    <thead class="text-xs text-white uppercase bg-red-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Vendor
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kota
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="content">
                        
                        @foreach($vendor as $v)
                        <tr
                        {{ $search }}
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $v->name }}
                                </th>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $v->image) }}" class="w-16 md:w-32 max-w-full max-h-full" alt="Apple Watch">
                                </td>
                                
                                <td class="px-6 py-4">
                                    {{ $v->city->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $v->category->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ currency_IDR($v->price) }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/dataVendor/{{ $v->slug}}/edit"
                                        class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-blue-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                        <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M7.418 17.861 1 20l2.139-6.418m4.279 4.279 10.7-10.7a3.027 3.027 0 0 0-2.14-5.165c-.802 0-1.571.319-2.139.886l-10.7 10.7m4.279 4.279-4.279-4.279m2.139 2.14 7.844-7.844m-1.426-2.853 4.279 4.279" />
                                        </svg>
                                        <span class="sr-only">edit</span>
                                    </a>
                                    <a href="/dataVendor/{{ $v->slug }}"
                                        class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-green-500 rounded-full dark:bg-gray-700 dark:text-gray-300">
                                        <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                        <span class="sr-only">show</span>
                                    </a>
                                    
                                    <form action="/dashboard/delete/{{ $v->id }}" method="post" class="inline-flex" id="detele">
                                        @method('delete')
                                        @csrf
                                        <button
                                        class="inline-flex items-center justify-center w-6 h-6 me-2 text-sm font-semibold text-gray-800 bg-red-600 rounded-full dark:bg-gray-700 dark:text-gray-300" onclick="return confirm('Apakah yakin ingin menghapus?')">
                                        <svg class="w-2.5 h-2.5 text-white" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                            <path
                                                d="M17 4h-4V2a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v2H1a1 1 0 0 0 0 2h1v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V6h1a1 1 0 1 0 0-2ZM7 2h4v2H7V2Zm1 14a1 1 0 1 1-2 0V8a1 1 0 0 1 2 0v8Zm4 0a1 1 0 0 1-2 0V8a1 1 0 0 1 2 0v8Z" />
                                        </svg>
                                        <span class="sr-only">delete</span>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    
            </div>
            <!-- Dropdown menu -->
        </div>
        <div class="mr-20 mb-5 mt-5" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
            {{-- pagination --}}
            {{ $vendor->links('vendor.pagination.tailwind') }}
        </div>
</div>
</div>
