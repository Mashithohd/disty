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
     <h1 class="text-2xl font-bold">
       Tambah Tahun Ajaran
      </h1>
      <div class="text-sm text-gray-500">
       <a class="hover:underline" href="#">
        Home
       </a>
       /
       <a class="hover:underline" href="Tahunajaran.html">
        Tahun Pelajaran
       </a>
       / Tambah Tahun Ajaran
      </div>
     </div>
     <form>
      <div class="mb-4">
       <label class="block text-gray-700" for="tahun_awal">
        Tahun Pelajaran *
       </label>
       <input class="w-full p-2 border rounded mt-1" id="tahun_awal" placeholder="Tahun Awal" type="text"/>
      </div>
      <div class="mb-4">
       <input class="w-full p-2 border rounded mt-1" id="tahun_akhir" placeholder="Tahun Akhir" type="text"/>
      </div>
      <div class="mb-4">
       <label class="block text-gray-700">
        Keterangan
       </label>
       <div class="flex items-center mt-1">
        <input class="mr-2" id="aktif" name="keterangan" type="radio"/>
        <label class="mr-4" for="aktif">
         Aktif
        </label>
        <input class="mr-2" id="tidak_aktif" name="keterangan" type="radio"/>
        <label for="tidak_aktif">
         Tidak Aktif
        </label>
       </div>
      </div>
      <p class="text-sm text-gray-500 mb-4">
       *) Kolom wajib diisi.
      </p>
      <div class="flex justify-end">
      <a href="tahunajar" class="bg-green-500 text-white px-4 py-2 rounded mr-2 hover:bg-green-600">
            Simpan
        </a>

       <button class="bg-blue-500 text-white px-4 py-2 rounded" type="button">
        Batal
       </button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
