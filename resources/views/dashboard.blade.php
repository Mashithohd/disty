<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<!--Sidebar&Navbar-->
@include('welcome')

        <!-- Main Content -->
        <div class="p-4 sm:ml-64">
   <div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">
    <!-- Title: User Management -->
    <h2 class="text-2xl font-semibold text-gray-900">Dashboard</h2>
</div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="flex items-center p-4 bg-blue-500 text-white rounded-lg">
                    <i class="fas fa-bell text-3xl mr-4"></i>
                    <div>
                        <h5 class="text-lg font-bold">Penerimaan Hari Ini</h5>
                        <p>Rp. 23.620.000</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-red-500 text-white rounded-lg">
                    <i class="fas fa-book text-3xl mr-4"></i>
                    <div>
                        <h5 class="text-lg font-bold">Pengeluaran Hari Ini</h5>
                        <p>Rp. 0</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-green-500 text-white rounded-lg">
                    <i class="fas fa-home text-3xl mr-4"></i>
                    <div>
                        <h5 class="text-lg font-bold">Total Penerimaan</h5>
                        <p>Rp. 23.620.000</p>
                    </div>
                </div>
                <div class="flex items-center p-4 bg-yellow-500 text-white rounded-lg">
                    <i class="fas fa-user text-3xl mr-4"></i>
                    <div>
                        <h5 class="text-lg font-bold">Siswa Aktif</h5>
                        <p>439</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <div class="col-span-2 bg-white p-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-bold">Informasi</h5>
                    <p class="text-gray-600 mt-2">Content here...</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h5 class="text-lg font-bold">Kalender</h5>
                    <hr class="my-2">
                    <p class="text-gray-600">...</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
