<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pembayaran Siswa</title>
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

        <!-- Main content -->
        <div class="p-4 sm:ml-64">
   <div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">
        <div class="flex-1 p-6">
          <div class="p-6">
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-xl font-bold">Pembayaran Siswa</h2>
              <div class="text-gray-600">Home &gt; Dashboard</div>
            </div>
            <div class="bg-white p-4 rounded shadow">
              <h3 class="font-bold mb-4">Filter Data Pembayaran Siswa</h3>
              <div class="flex items-center">
                <div class="mr-6">
                  <label class="block mb-2" for="tahun-ajaran"> Tahun Ajaran </label>
                  <select class="border rounded p-2" id="tahun-ajaran">
                    <option>2024/2025</option>
                  </select>
                </div>
                <div>
                  <label class="block mb-2" for="nis-siswa"> Cari Siswa </label>
                  <div class="flex">
                    <input class="border rounded-l p-2" id="nis-siswa" placeholder="NIS Siswa" type="text" />
                    <a href="masukkannis" class="bg-green-500 text-white px-4 py-2 rounded-r hover:bg-green-600 focus:ring-4 focus:ring-green-300">
                        Cari
                    </a>
                    </div>
                  <a class="text-blue-500 mt-2 block"> Data Siswa </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>