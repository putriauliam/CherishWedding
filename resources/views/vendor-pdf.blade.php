<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	@vite('resources/css/app.css', 'resources/js/app.js')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <script src="https://kit.fontawesome.com/6b738b2603.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{ asset('storage/image/logo.png') }}">

    {{-- leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan vendor cherish wedding</h4>
	</center>
 

    

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Vendor
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kategori
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kota
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No Hp
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                        Email
                    </th> --}}
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($vendor as $p)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i++}}
                    </th>
                    <td class="px-6 py-4">
                        {{$p->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$p->category->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$p->city->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$p->address}}
                    </td>
                    <td class="px-6 py-4">
                        {{$p->telp}}
                    </td>
                    {{-- <td class="px-6 py-4">
                        {{$p->email}}
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
</body>
</html>