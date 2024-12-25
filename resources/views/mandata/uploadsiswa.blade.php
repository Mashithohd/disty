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
       Import Data Siswa
      </h1>
      <div class="text-gray-500">
       <a class="hover:text-blue-500" href="#">
        Home
       </a>
       &gt;
       <span>
        Import Data Siswa
       </span>
      </div>
     </div>
     <div>
      <h2 class="text-lg font-semibold mb-2">
       Petunjuk Singkat
      </h2>
      <p class="mb-4">
       Penginputan data Siswa bisa dilakukan dengan mengcopy data dari file Ms. Excel. Format file excel harus sesuai kebutuhan aplikasi. Silahkan download formatnya
       <a class="text-blue-500" href="#">
        disini
       </a>
      </p>
      <h3 class="text-md font-semibold mb-2">
       CATATAN :
      </h3>
      <p class="mb-4">
       1. Pengisian jenis data TANGGAL diisi dengan format YYYY-MM-DD Contoh 2017-12-21
       <br/>
       2. Cara ubah : blok semua tanggal pilih format cell di excel ganti dengan format date pilih yang tahunnya di depan
      </p>
      <textarea class="w-full p-2 border rounded mb-4" placeholder="Copy data yang akan dimasukkan dari file excel, dan paste disini" rows="5"></textarea>
      <div class="flex justify-end">
       <button class="bg-gray-500 text-white px-4 py-2 rounded mr-2">
        Import
       </button>
       <button class="bg-blue-500 text-white px-4 py-2 rounded">
        Kembali
       </button>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>