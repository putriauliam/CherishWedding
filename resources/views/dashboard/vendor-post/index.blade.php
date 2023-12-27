@extends('dashboard.layouts.main')

@section('container')
@livewire('search')    


@livewireScripts
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js') }}">
    </script>
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
        };

        var element = document.getElementById('search');
        element.dispatchEvent(new Event('input'));

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
