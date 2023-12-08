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
<div class="container max-w-xs">
  <!-- filter -->
  <div class="filter">
      <a href="#"
          class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
          <div class="flex items-center justify-between">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FILTER</h5>
              <i class="fa-solid fa-filter" style="color: #c2c2c2;"></i>

          </div>
          <!-- garis -->
          <hr class="font-medium border-b-2 border-gray-900 my-5">
          <!-- kategori -->
          <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
              class="text-black shadow hover:bg-black-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              type="button">KATEGORI VENDOR<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
              </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownDefaultCheckbox"
              class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
              <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                  aria-labelledby="dropdownCheckboxButton">
                  <li>
                      <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                              checkbox</label>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center">
                          <input checked id="checkbox-item-2" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center">
                          <input id="checkbox-item-3" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-3"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                              checkbox</label>
                      </div>
                  </li>
              </ul>
          </div>
          <!-- kategori -->
          <button id="dropdownCheckboxButton" data-dropdown-toggle="dropdownDefaultCheckbox"
              class="text-black shadow hover:bg-black-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              type="button">KOTA<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m1 1 4 4 4-4" />
              </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownDefaultCheckbox"
              class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600">
              <ul class="p-3 space-y-3 text-sm text-gray-700 dark:text-gray-200"
                  aria-labelledby="dropdownCheckboxButton">
                  <li>
                      <div class="flex items-center">
                          <input id="checkbox-item-1" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-1"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                              checkbox</label>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center">
                          <input checked id="checkbox-item-2" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-2"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Checked state</label>
                      </div>
                  </li>
                  <li>
                      <div class="flex items-center">
                          <input id="checkbox-item-3" type="checkbox" value=""
                              class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="checkbox-item-3"
                              class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Default
                              checkbox</label>
                      </div>
                  </li>
              </ul>
          </div>

      </a>
  </div>
  </a>
</div>

<!-- card -->
<div class="card">
  </button>
  <button type="button"
      class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 me-2 mb-2">
      <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
          viewBox="0 0 18 19">
          <path fill-rule="evenodd"
              d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z"
              clip-rule="evenodd" />
      </svg>
</div>
</div>

{{-- <script>
  document.addEventListener('DOMContentLoaded', function () {
      const button = document.getElementById('dropdownCheckboxButton');
      const dropdown = document.getElementById('dropdownDefaultCheckbox');

      button.addEventListener('click', function () {
          dropdown.classList.toggle('hidden');
      });

      document.addEventListener('click', function (event) {
          if (!button.contains(event.target) && !dropdown.contains(event.target)) {
              dropdown.classList.add('hidden');
          }
      });
  });

</script> --}}

@endsection

