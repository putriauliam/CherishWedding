<div class="p-4 sm:ml-64 flex justify-between items-center relative" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
    <h1 class=" text-2xl text-gray-900 dark:text-white font-semibold">
        <span>{{ $title }}</span>
    </h1>
    <form action="/logout" method="post">
        @csrf
        <button type="submit" class="flex items-center justify-between text-white bg-red-800 hover:bg-gray-500 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
            <span>Keluar</span>
            <i class="fas fa-sign-out-alt ml-2"></i>
        </button>
    </form>
<hr class="border-b-1 border-black absolute bottom-2 w-full mt-2">
</div>