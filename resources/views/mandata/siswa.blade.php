
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
    Siswa
   </h1>
   <div class="flex space-x-2">
    <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
     <i class="fas fa-plus mr-2">
     </i>
     <a href="addsiswa" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Tambah</a>
    </button>
     </i>
     <a href="uploadsiswa" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Upload</a>
    </button>
    <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
     <i class="fas fa-print mr-2">
     </i>
   </div>
  </div>
  <div class="overflow-x-auto">
   <table class="min-w-full bg-white">
    <thead>
     <tr>
      <th class="py-2 px-4 border-b">
       No
      </th>
      <th class="py-2 px-4 border-b">
       NIS
      </th>
      <th class="py-2 px-4 border-b">
       Nama
      </th>
      <th class="py-2 px-4 border-b">
       Kelas
      </th>
      <th class="py-2 px-4 border-b">
       Nama Ibu Kandung
      </th>
      <th class="py-2 px-4 border-b">
       Status
      </th>
      <th class="py-2 px-4 border-b">
       Aksi
      </th>
     </tr>
    </thead>
    <tbody>
     <tr>
      <td class="py-2 px-4 border-b text-center" colspan="7">
       Data Kosong
      </td>
     </tr>
    </tbody>
   </table>
  </div>
 </div>
</div>