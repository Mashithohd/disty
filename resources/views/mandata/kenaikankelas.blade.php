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
        <div class="bg-white shadow-md rounded p-4">
         <div class="flex justify-between items-center border-b pb-2 mb-4">
          <h1 class="text-xl font-semibold">
           Kenaikan Kelas
          </h1>
          <div class="text-sm text-gray-500">
           Home &gt; Kenaikan Kelas
          </div>
         </div>
         <div class="bg-red-500 text-white p-2 rounded mb-4">
          Warning! Jika ada siswa yang telah dibuatkan tagihan dan dipindah kelasnya melalui halaman ini, maka tagihan tetap ada di kelas sebelumnya!
         </div>
         <div class="flex items-center mb-4">
          <div class="flex-1">
           <label class="block text-sm font-medium text-gray-700" for="kelas">
            Pilih kelas
           </label>
           <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="kelas" name="kelas">
            <option>
             -- Pilih Kelas --
            </option>
           </select>
          </div>
          <div class="ml-4">
           <label class="block text-sm font-medium text-gray-700" for="ke-kelas">
            Ke Kelas
           </label>
           <select class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="ke-kelas" name="ke-kelas">
            <option>
             -- Ke Kelas --
            </option>
           </select>
          </div>
          <button class="ml-4 mt-6 bg-orange-500 text-white px-4 py-2 rounded">
           Proses Pindah/Naik Kelas
          </button>
         </div>
         <table class="min-w-full bg-white">
          <thead>
           <tr>
            <th class="px-4 py-2 border">
             No
            </th>
            <th class="px-4 py-2 border">
             NIS
            </th>
            <th class="px-4 py-2 border">
             Nama
            </th>
            <th class="px-4 py-2 border">
             Kelas
            </th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td class="text-center py-4" colspan="4">
             Data Kosong
            </td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>