<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Edit Jenis Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<!--Sidebar&Navbar-->
@include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">
    <!-- Main Content -->
    <div class="flex-1 p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Edit Jenis Pembayaran</h1>
            <nav class="text-gray-600">
                <a class="hover:underline" href="#">Home</a>
                &gt;
                <a class="hover:underline" href="#">Keuangan</a>
                &gt;
                <span>Jenis Pembayaran</span>
            </nav>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <form>
                <div class="mb-4">
                    <label class="block text-gray-700" for="pos">POS</label>
                    <select class="w-full p-2 border rounded" id="pos">
                        <option>Pilih POS</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="tahun-ajaran">Tahun Ajaran</label>
                    <select class="w-full p-2 border rounded" id="tahun-ajaran">
                        <option>Pilih Tahun Ajaran</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700" for="tipe">Tipe</label>
                    <select class="w-full p-2 border rounded" id="tipe">
                        <option>Pilih Tipe Pembayaran</option>
                        <option>Bulanan</option>
                        <option>Bebas</option>
                    </select>
                </div>
                <div class="mb-4">
                    <p class="text-gray-700">*) Kolom wajib diisi</p>
                </div>
                <div class="flex justify-end">
                    <button class="bg-green-500 text-white p-2 rounded mr-2" type="submit">Simpan</button>
                    <button class="bg-blue-500 text-white p-2 rounded mr-2" type="button">Batal</button>
                    <button class="bg-red-500 text-white p-2 rounded" type="button">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>