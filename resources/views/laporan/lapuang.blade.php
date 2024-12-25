<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Laporan Keuangan</title>
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
    <!-- Title -->
    <h2 class="text-2xl font-semibold text-gray-900">Laporan Keuangan</h2>
</div>

<!-- Tabel -->
<div class="bg-white p-4 rounded-lg shadow">
    <div class="p-4 flex flex-col gap-4">
        <div class="flex items-center gap-4 mb-4">
            <div id="date-range-picker" date-rangepicker class="flex items-center">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                </div>
                <span class="mx-2 text-gray-500">to</span>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </div>
                    <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                </div>
            </div>

            <button class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-800">
                Filter
            </button>
            <!-- Tombol Export Excel -->
<button id="exportButton" class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-800">
    Export Excel
</button>

<!-- Modal -->
<div id="exportModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-md shadow-lg p-6 w-96">
        <h3 class="text-xl font-semibold mb-4">Konfirmasi Export Excel</h3>
        <p class="mb-4">Apakah Anda yakin ingin mengekspor data ke Excel?</p>
        <div class="flex justify-end">
            <button id="cancelButton" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md mr-2">Batal</button>
            <button id="confirmExport" class="bg-green-600 text-white px-4 py-2 rounded-md">Export</button>
        </div>
    </div>
</div>


        </div>
        <div>
            <div>
        <form>
<div class="md-4">
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="bg-blue-500 bg-opacity-100">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg text-white">
                    No
                </th>
                <th scope="col" class="px-6 py-3  text-white">
                    Tanggal
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Pemasukan
                </th>
                <th scope="col" class="px-6 py-3  text-white">
                    Pengeluaran
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg text-white">
                    keterangan
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    1
                </th>
                <td class="px-6 py-4">
                    22/12/02
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    $0
                </td>
                <td class="px-6 py-4">
                    didapatkan dari..........
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>

        </form>
    </div>
</div>



<!-- Skrip untuk menampilkan dan menyembunyikan modal -->
<script>
    const exportButton = document.getElementById('exportButton');
    const exportModal = document.getElementById('exportModal');
    const cancelButton = document.getElementById('cancelButton');
    const confirmExport = document.getElementById('confirmExport');

    // Menampilkan modal saat tombol diklik
    exportButton.addEventListener('click', () => {
        exportModal.classList.remove('hidden');
    });

    // Menyembunyikan modal jika tombol batal diklik
    cancelButton.addEventListener('click', () => {
        exportModal.classList.add('hidden');
    });

    // Menangani konfirmasi export (misalnya dengan redirect ke halaman export atau menjalankan fungsi)
    confirmExport.addEventListener('click', () => {
        // Tambahkan logika export Excel di sini
        console.log('Mengekspor data ke Excel...');
        // Menyembunyikan modal setelah konfirmasi
        exportModal.classList.add('hidden');
    });
</script>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
