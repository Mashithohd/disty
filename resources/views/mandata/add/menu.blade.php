<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tambah Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  </head>
 
     <!--Sidebar&Navbar-->
  @include('welcome')

<!-- Main Content -->
<div class="p-4 sm:ml-64">
<div class="p-4 rounded-lg mt-14">
<div class="flex items-center justify-between mb-4">


<!-- Main Content -->
    <!-- Title: User Management -->
    <h2 class="text-2xl font-semibold text-gray-900">Tambah Siswa</h2>
</div>

<div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px">
    <li class="me-2">
        <a href="addsiswa" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-300 dark:hover:text-blue-300">Data Siswa</a>
    </li>
        <li class="me-2">
            <a href="addsekolah" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-300 dark:hover:text-blue-300">Data Sekolah</a>
        </li>
        <li class="me-2">
            <a href="addkeluarga" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-blue-600 hover:border-blue-300 dark:hover:text-blue-300">Data Keluarga</a>
        </li>
    </ul>
</div>