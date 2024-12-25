<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Pos Bayar</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="">
<style>
</style>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>






  <!--Sidebar&Navbar-->
  @include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">


<!-- Main Content -->





        <h2 class="text-2xl font-semibold text-gray-900">Pos bayar</h2>
        <div class="text-sm text-gray-600">
            <span>Home &gt; Dashboard</span>
        </div>
    </div>
    <div class="bg-white p-4 rounded-lg shadow">
        <div class="mb-4 flex items-center justify-between">
            <!-- Tombol Tambah -->
            <button id="tambahBtn" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                + Tambah
            </button>


            <!-- Fitur Search -->
            <div>
                <input type="text" placeholder="Cari..."
                    class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-blue-200" />
            </div>
        </div>
        <div id="tambahModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                <h3 class="text-xl font-semibold mb-4">Tambah Jenis Pos Pembayaran</h3>
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


        <div class="mt-6 overflow-x-auto">
            <table class="min-w-full bg-gray-50">
                <thead>
                    <tr class="bg-[#2372D9] text-white">
                        <th class="py-2 px-4 text-left">No</th>
                        <th class="py-2 px-4 text-left">Nama POS</th>
                        <th class="py-2 px-4 text-left">Keterangan</th>
                        <th class="py-2 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4">1</td>
                        <td class="py-2 px-4">TPA LIBURAN</td>
                        <td class="py-2 px-4">TPA</td>
                        <td class="py-2 px-4">
                            <a href="editpos" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                    ✎
                                </a>
                                
                                <a href="delete" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                    🗑️
                                </a>
                            </td>
                        </td>                       
                     </td>
                    </tr>
                    <!-- Tambahkan baris lain di sini -->
                </tbody>
            </table>
        </div>
        </section>
</main>
</main>
<script>
    const tambahBtn = document.getElementById('tambahBtn');
    const tambahModal = document.getElementById('tambahModal');
    const closeModal = document.getElementById('closeModal');
    const tambahForm = document.getElementById('tambahForm');


    tambahBtn.addEventListener('click', () => {
        tambahModal.classList.remove('hidden');
    });


    // Sembunyikan modal saat tombol "X" diklik
    closeModal.addEventListener('click', () => {
        tambahModal.classList.add('hidden');
    });


    tambahForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const namaPOS = document.getElementById('namaPOS').value;
        const keterangan = document.getElementById('keterangan').value;
        console.log('Nama POS:', namaPOS);
        console.log('Keterangan:', keterangan);
        tambahModal.classList.add('hidden');
    });
</script>
</body>


</html>