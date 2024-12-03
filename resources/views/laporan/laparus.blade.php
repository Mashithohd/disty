<div class="flex items-center justify-start mb-4">
    <!-- Title -->
    <h2 class="text-2xl font-semibold text-gray-900">Laporan Arus Kas</h2>
</div>

<!-- Tabel -->
<div class="bg-white p-4 rounded-lg shadow">
    <div class="p-4 flex flex-col gap-4">
        <div class="flex items-center gap-4 mb-4">
            <!-- Tahun Ajaran -->
            <div class="flex flex-col">
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Ajaran</label>
                <select id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Tahun Ajaran</option>
                    <option value="a">2019/2020</option>
                    <option value="b">2020/2021</option>
                    <option value="c">2021/2022</option>
                    <option value="d">2022/2023</option>
                </select>
            </div>

            <!-- Kelas -->
            <div class="flex flex-col">
                <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Kelas</label>
                <select id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-40 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kelas</option>
                    <option value="a">VIIA</option>
                    <option value="b">VIIB</option>
                    <option value="c">VIIC</option>
                    <option value="d">VIID</option>
                </select>
            </div>

            <!-- Tombol Filter -->
            <div class="flex items-center mt-6">
                <button class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-800">
                    Filter
                </button>
            </div>
        </div>
        <!-- Data Table -->
        <table class="w-full table-auto border-collapse">
            <thead class="bg-blue-500 bg-opacity-100">
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 text-white">Tanggal</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 text-white">Keterangan</th>
                    <th class="px-4 py-2 text-left text-sm font-medium text-gray-700 text-white">Jenis</th>
                    <th class="px-4 py-2 text-right text-sm font-medium text-gray-700 text-white">Nominal</th>
            </thead>
    <!-- Example Data -->
    <tr class="border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">2024-12-01</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Pembayaran SPP</td>
                    <td class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Pemasukan</td>
                    <td class="px-4 py-2 text-sm text-gray-700 text-right">Rp 500,000</td>
                </tr>
                <!-- Example Data -->
                <tr class="border-b">
                    <td class="px-4 py-2 text-sm text-gray-700">2024-12-12</td>
                    <td class="px-4 py-2 text-sm text-gray-700">Pembayaran SPP</td>
                    <td class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                    Pengeluaran</td>
                    <td class="px-4 py-2 text-sm text-gray-700 text-right">Rp 400,000</td>
                </tr>
</div>
