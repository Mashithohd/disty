<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>TailwindCSS | Jenis Pembayaran</title>
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
<div class="flex items-center justify-between mb-4">


<!-- Main Content -->
        <h2 class="text-2xl font-semibold text-gray-900">Jenis Pembayaran</h2>
        <div class="text-sm text-gray-600">
            <span>Home &gt; Dashboard</span>
        </div>
    </div>


    <div class="flex items-center justify-between mb-4">
    </div>




    <div class="bg-white p-4 rounded-lg shadow">
        <div class="mb-4 flex items-center justify-between">
            


            <!-- Fitur Search -->
            <div>
                <input type="text" placeholder="Cari..."
                    class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-200" />
            </div>
        </div>
        <div id="tambahModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h3 class="text-xl font-semibold mb-4">Tambah Jenis Pembayaran</h3>
                <form id="tambahForm">
                    <div class="mb-4">
                        <label for="namaPOS" class="block text-sm font-medium text-gray-700">Nama POS</label>
                        <input type="text" id="namaPOS" name="namaPOS" required
                            class="border border-gray-300 rounded px-4 py-2 w-full">
                    </div>
                    <div class="mb-4">
                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" required
                            class="border border-gray-300 rounded px-4 py-2 w-full">
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan
                        </button>


                        <button id="closeModal"
                            class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Kembali
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <div class="p-4 flex flex-col gap-4">
            <table class="table-auto w-full border-collapse border border-gray-200">


                <thead>
                    <tr class="bg-[#2372D9] text-white">
                        <th class="px-4 py-2 border border-gray-300">No</th>
                        <th class="px-4 py-2 border border-gray-300">Nama POS</th>
                        <th class="px-4 py-2 border border-gray-300">Nama Pembayaran</th>
                        <th class="px-4 py-2 border border-gray-300">Tipe</th>
                        <th class="px-4 py-2 border border-gray-300">Tahun</th>
                        <th class="px-4 py-2 border border-gray-300">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Baris Data -->
                    <tr class="bg-gray-50 hover:bg-gray-100">
                        <td class="px-4 py-2 border border-gray-300 text-center">1</td>
                        <td class="px-4 py-2 border border-gray-300">TPA LIBURAN</td>
                        <td class="px-4 py-2 border border-gray-300">TPA LIBURAN - T.A. 2024/2025</td>
                        <td class="px-4 py-2 border border-gray-300 text-center">Bebas</td>
                        <td class="px-4 py-2 border border-gray-300 text-center">2024/2025</td>
                        <td class="px-4 py-2 border border-gray-300 text-center">
                            <a href="edit" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                ✎
                            </a>
                            
                            <a href="delete" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                🗑️
                            </a>
                        </td>



                    </tr>
                    <!-- Tambahkan baris data lainnya di sini -->
                </tbody>
            </table>
        </div>
</main>


</div>

</body>
</html>