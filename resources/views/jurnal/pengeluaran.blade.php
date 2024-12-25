<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Jurnal Pengeluaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <script>
      function toggleDropdown(id) {
        document.getElementById(id).classList.toggle("hidden");
      }
    </script>
  </head>
 
<!--Sidebar&Navbar-->
@include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">


<!-- Main Content -->
    <!-- Title: User Management -->
    <h2 class="text-2xl font-semibold text-gray-900">Jurnal Pengeluaran</h2>
</div>

<!--Tabel-->
<div class="bg-white p-4 rounded-lg shadow">
    <div class="p-4 flex flex-col gap-4">
        <!-- Container for Search Input and Add User Button -->
        <div class="flex items-center gap-4 ml-auto mb-4">
            <!-- Input Pencarian -->
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Search" 
                    class="border border-gray-300 rounded-md py-2 px-4 pr-10 w-64 focus:outline-none focus:ring-2 focus:ring-blue-800"
                />
            </div>

            <!-- Tombol Add User -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-900" type="button">
                + Tambah
            </button>
        </div>

        <!-- Tabel -->
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 relative overflow-x-auto shadow-md">
            <thead class="bg-blue-500 bg-opacity-100">
            <tr>
                <th scope="col" class="px-6 py-3 text-white">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Pengeluaran (Rp.)
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    24/08/02
                </td>
                <td class="px-6 py-4">
                    -
                </td>
                <td class="px-6 py-4">
                    $200
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-1">
                    <a href="#" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                ✎
                            </a>
                            
                            <a href="#" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                🗑️
                            </a>
                        </td>
                    </div>
                    </td>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Pengeluaran
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
           <!-- Modal Body -->
<form class="p-4 md:p-5">
    <!-- Input Datepicker -->
    <div class="relative max-w-sm mb-4">
        <label for="datepicker-orientation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
            Jumlah Rupiah
        </label>
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input 
            id="datepicker-orientation" 
            datepicker 
            datepicker-orientation="bottom right" 
            type="text" 
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
            placeholder="Select date"
        />
    </div>

    <!-- Input Fields -->
    <div class="grid gap-4 mb-6 grid-cols-2">
        <div class="col-span-2 sm:col-span-1">
            <label for="ket" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Keterangan
            </label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                placeholder="Type product name" 
                required
            />
        </div>
        <div class="col-span-2 sm:col-span-1">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Jumlah Rupiah
            </label>
            <input 
                type="number" 
                name="price" 
                id="price" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
                placeholder="2999" 
                required
            />
        </div>
    </div>

    <!-- Buttons -->
    <div class="flex justify-between items-center">
        <!-- Button Tambah Baris -->
        <button 
            type="add" 
            class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"/>
            </svg>
            Tambah Baris
        </button>

        <!-- Button Simpan -->
        <button 
            type="submit" 
            class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Simpan
        </button>
    </div>
</form>


            </form>
        </div>
    </div>
</div> 

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>

