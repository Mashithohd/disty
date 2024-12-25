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
          Tahun Ajaran
         </h1>
         <div class="flex items-center">
          <input class="border border-gray-300 rounded px-4 py-2 mr-2" placeholder="Tahun Ajaran" type="text"/>
          <a href="tambahtahunajar" class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-800 ml-auto">+ Tambah</a>
         </div>
        </div>
        <div class="bg-white shadow-md rounded">
         <table class="min-w-full bg-white">
          <thead>
           <tr>
            <th class="py-2 px-4 border-b">
             No
            </th>
            <th class="py-2 px-4 border-b">
             Tahun Pelajaran
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
            <td class="text-center py-4" colspan="4">
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
