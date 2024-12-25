<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Jenis Pembayaran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <!-- Sidebar & Navbar -->
    @include('welcome')

    <!-- Main Content -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg mt-14">
            <!-- Header Section -->
            <div class="flex items-center justify-between mb-4">
                <h1 class="text-2xl font-bold">Edit Pos Bayar</h1>
            </div>

            <!-- Form Section -->
            <div class="bg-white p-6 rounded-lg shadow-lg w-full sm:w-1/2">
                <form>
                    <!-- Input Nama POS -->
                    <div class="mb-4">
                        <label for="namaPOS" class="block text-sm font-medium text-gray-700">Nama POS</label>
                        <input 
                            type="text" 
                            id="namaPOS" 
                            name="namaPOS" 
                            required 
                            class="border border-gray-300 rounded px-4 py-2 w-full"
                        />
                    </div>

                    <!-- Input Keterangan -->
                    <div class="mb-4">
                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                        <input 
                            type="text" 
                            id="keterangan" 
                            name="keterangan" 
                            required 
                            class="border border-gray-300 rounded px-4 py-2 w-full"
                        />
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end gap-4">
                        <button 
                            type="submit" 
                            class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
