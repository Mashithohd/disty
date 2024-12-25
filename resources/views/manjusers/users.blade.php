<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Managemet User</title>
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
    <!-- Title: User Management -->
    <h2 class="text-2xl font-semibold text-gray-900">User Management</h2>
</div>

<!--Tabel-->
<div class="bg-white p-4 rounded-lg shadow">
    <div class="p-4 flex flex-col gap-4">
        <!-- Container for Search Input and Add User Button -->
        <div class="flex items-center gap-4 ml-auto mb-4">
            <!-- Input Pencarian -->
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Search" 
                    class="border border-gray-300 rounded-md py-2 px-4 pr-10 w-64 focus:outline-none focus:ring-2 focus:ring-blue-800"
                />
            </div>

            <!-- Tombol Add User -->
            <a href="tambah" class="border px-4 py-2 rounded-md bg-green-600 text-white hover:bg-green-800 ml-auto">+ Tambah</a>
    
        </div>

        <!-- Tabel -->
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 relative overflow-x-auto shadow-md">
            <thead class="bg-blue-500 bg-opacity-100">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Role
                </th>
                <th scope="col" class="px-6 py-3 text-white">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Diah Ayu Pitaloka
                </th>
                <td class="px-6 py-4">
                    diahayu@student.com
                </td>
                <td class="px-6 py-4">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Online
                </td>
                <td class="px-6 py-4">
                    Student
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center gap-1">
                    <a href="edit" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                ✎
                            </a>
                            
                            <a href="delete" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                🗑️
                            </a>
                        </td>
                    </td>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Satrio Putro
                </th>
                <td class="px-6 py-4">
                    satrioput@guru.com
                </td>
                <td class="px-6 py-4">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    Online
                </td>
                <td class="px-6 py-4">
                    Guru
                </td>
                <td class="px-6 py-4">
                <div class="flex items-center gap-1">
                <a href="edit" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                ✎
                            </a>
                            
                            <a href="delete" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                🗑️
                            </a>
                        </td>
                    </td>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Dewianti
                </th>
                <td class="px-6 py-4">
                    dewianti2@gmail.com
                </td>
                <td class="px-6 py-4">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">

                    Off
                </td>
                <td class="px-6 py-4">
                    Orang tua
                </td>
                <td class="px-6 py-4">
                <div class="flex items-center gap-1">
                <a href="edit" class="bg-green-500 text-white px-2 py-1 rounded hover:bg-green-600 me-2">
                                ✎
                            </a>
                            
                            <a href="delete" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">
                                🗑️
                            </a>
                        </td>
                    </td>
                </td>
            </tr>
        </tbody>
    </table>
    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
    </nav>
</div>
