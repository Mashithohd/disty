<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>TailwindCSS | Dashboard</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>


<script src="https://cdn.tailwindcss.com"></script>






 <!--Sidebar&Navbar-->
 @include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">

    <div class="flex-1 p-6">
       
         <div class="flex justify-between items-center border-b pb-2 mb-4">
     <h1 class="text-2xl font-bold">
      Kelas
     </h1>
    <!-- Tombol Add User -->
    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-900" type="button">
                + Tambah
            </button>

    </div>
    <div class="bg-white shadow-md rounded p-4">
     <div class="flex justify-between items-center mb-4">
      <div class="flex items-center">
       <i class="fas fa-chevron-right mx-2">
       </i>
      </div>
      <div>
       <input class="block px-4 py-2 hover:bg-gray-200" placeholder="Kelas" type="text"/>
      </div>
     </div>
     <table class="w-full text-left">
      <thead>
       <tr>
        <th class="border-b p-2">
         No
        </th>
        <th class="border-b p-2">
         Nama Kelas
        </th>
        <th class="border-b p-2">
         ID Kelas
        </th>
        <th class="border-b p-2">
         Aksi
        </th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="border-b p-2" colspan="4">
         Data Kosong
        </td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </body>
</html>

<!-- Main modal -->
<div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Kelas
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
<div class="p-4">
    <form class="space-y-4">
        <!-- Nama Kelas Input -->
        <div class="flex flex-col">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kelas</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Contoh : X A" required="">
        </div>

        <!-- Buttons Section -->
        <div class="flex justify-between gap-4">
            <!-- Tambah Baris Button -->
            <button type="button" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>
                Tambah Baris
            </button>

            <!-- Simpan Button -->
            <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Simpan
            </button>
        </div>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js"></script>
