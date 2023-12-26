@extends('dashboard.layouts.main')

@section('container')

<div class="p-4 sm:ml-64">
    <h1 class="mb-4 text-2xl text-gray-900 dark:text-white font-semibold">
        <span>TAMBAH DATA VENDOR</span>
        <hr class="border-b-1 border-black mt-2">
    </h1>

    <form class="w-sm mx-auto" method="post" action="/dataVendor" enctype="multipart/form-data">
        @csrf
        {{-- nama --}}
        <div class="mb-2">
            <label for="name" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama
                Lengkap</label>
            <input type="text" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror"
                placeholder="Nama Lengkap" autofocus  value="{{ old('name') }}">
            @error('name')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- slug --}}
        <div class="mb-2">
            <label for="slug" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" id="slug" name="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug') is-invalid @enderror"
                placeholder="Slug"  value="{{ old('slug') }}">
            @error('slug')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- kategori --}}
        <div class="mb-2">
            <label for="category" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                <select id="category" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @foreach($categories as $category)
                    @if(old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}
                        </option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        {{-- kota --}}
        <div class="mb-2">
            <label for="city" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
                <select id="city" name="city_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @foreach($cities as $city)
                    @if(old('city_id') == $city->id)
                        <option value="{{ $city->id }}" selected>{{ $city->name }}
                        </option>
                    @else
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        {{-- address --}}
        <div class="mb-2">
            <label for="address" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat Lengkap</label>
            <input type="text" id="address" name="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('address') is-invalid @enderror"
                placeholder="Alamat Lengkap"  value="{{ old('address') }}">
            @error('address')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- koordinat maps --}}
        <div class="mb-2">
            <label for="koordinat_maps" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Koordinat Maps</label>
            <input type="text" id="koordinat_maps" name="koordinat_maps"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('koordinat_maps') is-invalid @enderror"
                placeholder="Koordinat Maps"  value="{{ old('koordinat_maps') }}">
            @error('koordinat_maps')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- Harga --}}
        <div class="mb-2">
            <label for="price" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
            <input type="text" id="price" name="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('price') is-invalid @enderror"
                placeholder="IDR." type="number"  value="{{ old('price') }}">
            @error('price')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- upload gambar --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Gambar</label>
            <input id="image" name="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror"  type="file" onchange="previewImage(this)" >
            @error('image')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <div class="mt-2">
                <img id="image_preview" class="img-preview w-52  max-w-full h-auto rounded-lg">
            </div>
        </div>
        {{-- profil --}}
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload Profil</label>
            <input id="profil" name="profil" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('profil') is-invalid @enderror"  type="file" onchange="previewProfil(this)" value="{{ old('profil') }}">
            @error('profil')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
            <div class="mt-2">
                <img id="profil_preview" class="profil-preview w-52  max-w-full h-auto rounded-lg">
            </div>
        </div>
        {{-- email --}}
        <div class="mb-2">
            <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror"
                placeholder="Email"  value="{{ old('email') }}">
            @error('email')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- instagram --}}
        <div class="mb-2">
            <label for="instagram" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
            <input type="text" id="instagram" name="instagram"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('instagram') is-invalid @enderror"
                placeholder="Instagram"  value="{{ old('instagram') }}">
            @error('instagram')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- telp --}}
        <div class="mb-2">
            <label for="telp" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">No Telepon</label>
            <input type="number" id="telp" name="telp"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('telp') is-invalid @enderror"
                placeholder="+62 XXX XXX XXXX"  value="{{ old('telp') }}">
            @error('telp')
                <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>
        {{-- deskripsi --}}
        <div class="mb-2">
            <label for="textfield"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                Vendor</label>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <p>
                    <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}" required />
                    <trix-editor input="detail" class="trix-content"></trix-editor>
                </p>
            
        </div>
        
      

        
        
        
        {{-- <div class="mb-2">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Vendor</label>
            <input type="text" placeholder="Masukan Nama Vendor" id="name" name="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
        <div class="mb-2">
            <label for="text"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug</label>
            <input type="text" placeholder="Slug" id="slug" name="slug"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('slug') is-invalid @enderror value="{{ old('slug') }}""
                >
                @error('slug')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <!-- option dropdown kategori -->
        <div class="mb-2">
            <label for="text"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
            <!-- Dropdown menu -->
            <select id="category" name="category_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @foreach($categories as $category)
                    @if(old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}
                        </option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            

        </div>
        <!-- option dropdown kota -->
        <div class="mb-2">
            <label for="text"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kota</label>
            <!-- Dropdown menu -->
            <select id="city" name="city_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @foreach($cities as $city)
                    @if(old('city_id') == $city->id)
                        <option value="{{ $city->id }}" selected>{{ $city->name }}
                        </option>
                    @else
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label for="textfield"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                Lengkap</label>
            <textarea type="text" placeholder="Tulis Alamat Lengkap" id="address" name="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('address') is-invalid @enderror " value="{{ old('address') }}"
                required></textarea>
                @error('address')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <div class="mb-2">
            <label for="koordinat_maps"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Koordinat
                Alamat</label>
            <input type="text" id="koordinat_maps" name="koordinat_maps"
                placeholder="Masukkan koordinat peta"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('koordinat_maps') is-invalid @enderror"
                required value="{{ old('koordinat_maps') }}">
                @error('koordinat_maps')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>

        <div class="mb-2">
            <label for="price"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga</label>
            <input placeholder="IDR." type="number" id="price" name="price"
                aria-describedby="helper-text-explanation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('price') is-invalid @enderror"
                required value="{{ old('price') }}">
                @error('price')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                for="image">Upload Gambar</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                id="image" type="file" name="image" onchange="previewImage(this)">
                @error('image')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            <div class="mt-2">
                <img id="image_preview" class="w-52 hidden max-w-full h-auto rounded-lg">
            </div>
        </div>

        <div class="mb-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                for="profil">Upload Profil</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('profil') is-invalid @enderror"
                id="profil" type="file" name="profil" onchange="previewProfil(this)">
                @error('profil')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
            <div class="mt-2">
                <img id="profil_preview" class="w-52 hidden max-w-full h-auto rounded-lg">
            </div>
        </div>
        <div class="mb-2">
            <label for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" placeholder="Masukan Email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror" value="{{ old('email') }}"
                required>
                @error('email')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <div class="mb-2">
            <label for="instagram"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
            <input type="text" placeholder="@instagram" id="instagram" name="instagram"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('instagram') is-invalid @enderror" value="{{ old('instagram') }}"
                required>
                @error('instagram')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <div class="mb-2">
            <label for="telp"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                Telepon</label>
            <input placeholder="+62 XXX XXX XXXX" type="number" id="telp" name="telp"
                aria-describedby="helper-text-explanation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('telp') is-invalid @enderror" value="{{ old('telp') }}"
                required>
                @error('telp')
                    <p class="invalid-feedback mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $message }}
                    </p>
                @enderror
        </div>
        <div class="mb-2">
            <label for="textfield"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi
                Vendor</label>
                @error('detail')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <p>
                    <input id="detail" type="hidden" name="detail" value="{{ old('detail') }}" required />
                    <trix-editor input="detail" class="trix-content"></trix-editor>
                </p>
            
        </div> --}}
        <div class="flex justify-center">
            <button type="submit"
                class="w-52 text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 mt-3 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kirim</button>
        </div>
    </form>

</div>
<script src="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script>

<script>
    function previewImage(input) {
        const preview = document.getElementById('image_preview');
        const file = input.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
            };

            reader.readAsDataURL(file);
        } else {
            preview.src = '';
            preview.classList.add('hidden');
        };

        
    }
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
    
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

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
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    name.addEventListener('change', function () {
        fetch('/dashboard/vendor/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug);
    });
    document.addEventListener('trix-file-accept', function (e) {
        e.preventDefault();
    });

</script>
    

    


@endsection