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
    Kelulusan Siswa
   </h1>
   <div class="flex items-center">
    <span class="ml-2">
   </div>
  </div>
  <div class="mt-4">
   <div class="bg-red-500 text-white p-2 rounded">
    Warning...! Halaman ini digunakan untuk merubah status siswa menjadi lulus. Pastikan siswa yang diproses adalah SISWA KELAS AKHIR.
   </div>
   <div class="mt-4 flex space-x-4">
    <div class="flex-1">
     <label class="block text-gray-700" for="kelas">
      Pilih kelas
     </label>
     <select class="w-full p-2 border rounded mt-1" id="kelas">
      <option>
       -- Pilih Kelas --
      </option>
     </select>
     <div class="mt-4 flex space-x-2">
      <button class="bg-blue-500 text-white px-4 py-2 rounded">
       Proses Lulus
      </button>
      <button class="bg-red-500 text-white px-4 py-2 rounded">
       Batal Lulus
      </button>
     </div>
    </div>
    <div class="flex-1">
     <label class="block text-gray-700" for="data-kelulusan">
      Data Kelulusan
     </label>
     <table class="w-full mt-1 border rounded">
      <thead>
       <tr class="bg-gray-200">
        <th class="border px-2 py-1">
         No
        </th>
        <th class="border px-2 py-1">
         NIS
        </th>
        <th class="border px-2 py-1">
         Nama
        </th>
        <th class="border px-2 py-1">
         Status Kelulusan
        </th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="border px-2 py-1 text-center" colspan="4">
         Data Kosong
        </td>
       </tr>
      </tbody>
     </table>
    </div>
   </div>
  </div>
 </div>
</div>
</div>
</body>
</html>
