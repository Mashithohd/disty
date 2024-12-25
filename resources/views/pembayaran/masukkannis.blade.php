<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pembayaran Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
      .dropdown-content {
        display: none;
      }
      .dropdown:hover .dropdown-content {
        display: block;
      }
    </style>
  </head>
  
  <!--Sidebar&Navbar-->
@include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">
     
      <main class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold">Pembayaran Siswa</h1>
          <nav class="text-gray-600">
            <a class="hover:underline" href="#"> Home </a>
            &gt;
            <span> Dashboard </span>
          </nav>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Transaksi Terakhir</h2>
            <table class="w-full">
              <thead>
                <tr class="bg-blue-600 text-white">
                  <th class="p-2">Pembayaran</th>
                  <th class="p-2">Tagihan</th>
                  <th class="p-2">Tanggal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-2">SPP TK NOVEMBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">04 November</td>
                </tr>
                <tr>
                  <td class="p-2">SPP TK OKTOBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">04 November</td>
                </tr>
                <tr>
                  <td class="p-2">SPP TK DESEMBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">04 November</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Pembayaran</h2>
            <div class="mb-4">
              <label class="block text-gray-700" for="total"> Total </label>
              <input class="border rounded p-2 w-full" id="total" type="text" value="Rp.0" />
            </div>
            <div class="mb-4">
              <label class="block text-gray-700" for="dibayar"> Dibayar </label>
              <input class="border rounded p-2 w-full" id="dibayar" type="text" value="Rp.0" />
            </div>
            <div>
              <label class="block text-gray-700" for="kembalian"> Kembalian </label>
              <input class="border rounded p-2 w-full bg-gray-200" id="kembalian" readonly="" type="text" />
            </div>
          </div>
          <div class="bg-white p-4 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Cek Bukti Pembayaran</h2>
            <div class="mb-4">
              <label class="block text-gray-700" for="tanggal"> Tanggal Transaksi </label>
              <input class="border rounded p-2 w-full" id="tanggal" type="date" value="2024-05-07" />
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded w-full">Cetak</button>
          </div>
        </div>
        <div class="bg-white p-4 rounded shadow mt-6">
          <h2 class="text-xl font-bold mb-4">Jenis Pembayaran</h2>
          <h3 class="text-lg font-semibold mb-2">Pembayaran</h3>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="bg-blue-600 text-white">
                  <th class="p-2">No</th>
                  <th class="p-2">Jenis Pembayaran</th>
                  <th class="p-2">Total Tagihan</th>
                  <th class="p-2">Dibayar</th>
                  <th class="p-2">Status</th>
                  <th class="p-2">Bayar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="p-2">1.</td>
                  <td class="p-2">SPP TK NOVEMBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 0</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">
                    <span class="bg-green-200 text-green-800 px-2 py-1 rounded"> Lunas </span>
                  </td>
                  <td class="p-2">
                    <button class="bg-blue-500 text-white px-4 py-1 rounded">Bayar</button>
                  </td>
                </tr>
                <tr>
                  <td class="p-2">2.</td>
                  <td class="p-2">SPP TK NOVEMBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 0</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">
                    <span class="bg-green-200 text-green-800 px-2 py-1 rounded"> Lunas </span>
                  </td>
                  <td class="p-2">
                    <button class="bg-blue-500 text-white px-4 py-1 rounded">Bayar</button>
                  </td>
                </tr>
                <tr>
                  <td class="p-2">3.</td>
                  <td class="p-2">SPP TK NOVEMBER-T.A. 2024/2025</td>
                  <td class="p-2">Rp. 0</td>
                  <td class="p-2">Rp. 475.000,00</td>
                  <td class="p-2">
                    <span class="bg-green-200 text-green-800 px-2 py-1 rounded"> Lunas </span>
                  </td>
                  <td class="p-2">
                    <button class="bg-blue-500 text-white px-4 py-1 rounded">Bayar</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
