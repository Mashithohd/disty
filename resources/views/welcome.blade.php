<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MINI INDONESIA')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<script src="https://cdn.tailwindcss.com"></script>



<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="flex items-center justify-start">
        <a href="/#" class="flex ms-2">
          <img src="{{ asset('images/logo.png') }}" class="h-8 me-3" alt="FlowBite Logo" />
          <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">SchoolPay</span>
        </a>
      </div>

      <!-- Input Search -->
      <div class="flex-1 flex justify-center">
        <div class="relative w-full max-w-md">
          <input 
            type="text" 
            placeholder="Search" 
            class="w-full border border-gray-300 rounded-md py-2 px-4 pr-10 focus:outline-none focus:ring-2 focus:ring-blue-600"
          />
          <svg 
            class="absolute right-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400 pointer-events-none" 
            xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke="currentColor"
          >
            <path 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2" 
              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" 
            />
          </svg>
        </div>
      </div>

      <!-- Tombol Masuk -->
      <div>
        <button class="border px-4 py-2 rounded-md bg-blue-800 text-white hover:bg-blue-600">
          Masuk
        </button>
      </div>
    </div>
  </div>
</nav>


<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-[#022F6A] border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-[#022F6A] dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <!-- Profile Section -->
      <div class="flex items-center space-x-4 mb-5">
         <img src="{{ asset('images/profil.png') }}" class="w-10 h-10 rounded-full" alt="User Profile">
         <div class="text-sm text-white dark:text-white">
            <p class="font-semibold">John Doe</p>
            <p class="text-green-500 dark:text-green-400">Online</p>
         </div>
         <!-- Dropdown Icon -->
         <button class="p-2 text-gray-500 dark:text-gray-400 hover:bg-gray-400 dark:hover:bg-gray-700 rounded-full">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M5.293 5.293a1 1 0 011.414 0L10 8.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
         </button>
      </div>
      <!--menu sidebar-->
			<div class="flex flex-col flex-1 overflow-y-auto">
				<nav class="flex-1 px-2 py-4 bg-[#022F6A]">
					<a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 group">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 group-hover:transform group-hover:rotate-90" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16" />
						</svg>
						Dashboard
					</a>

					<!-- Pembayaran Siswa -->
					<a href="#" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700 group">
                    <div class="group">
                        <!-- Ikon Pertama: Profil Pengguna Tunggal -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="group-hover:hidden h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 9.75a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.5 19.125a8.625 8.625 0 0 1 15 0" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden group-hover:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 6.75h18a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75H3a.75.75 0 0 1-.75-.75V7.5a.75.75 0 0 1 .75-.75Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5h18M7.5 13.5h9" />
                        </svg>
                    </div>
						Pembayaran Siswa
					</a>

					<!-- Keuangan with subitems -->
					<div class="mb-2 relative group">
						<input type="checkbox" id="keuangan-toggle" class="hidden peer">
					
						<label for="keuangan-toggle"
							class="flex items-center px-12 py-2 mt-2 text-gray-100 hover:bg-gray-700 cursor-pointer w-full">
                            Keuangan
						</label>
					
						<!-- SVG Icons op hetzelfde niveau als input -->
						<!-- <div class="absolute left-4 top-2 transform #dis-translate-y-1/2 flex items-center text-white"> -->
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white group-hover:hidden h-6 w-6 mr-2 peer-checked:hidden transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h18a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 10.5h9m-4.5-3v6" />
                        </svg>


                                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white hidden group-hover:block peer-checked:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 18L10.5 9.75l4.5 4.5L20.25 6m0 0v4.5m0-4.5h-4.5" />
                        </svg>

						<!-- </div> -->
					
						<!-- Arrow Icon -->
						<svg xmlns="http://www.w3.org/2000/svg"
							class="h-4 w-4 ml-auto transition-transform transform peer-checked:rotate-180 absolute right-4 top-3 transform #dis--translate-y-1/2 text-white"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					
						<div class="hidden peer-checked:flex flex-col bg-white text-gray-800 mt-1 transition-all duration-300">
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Keterangan Pembayaran</a>
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Pos Keuangan</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Jenis Pembayaran</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Pos Pengeluaran</a>
						</div>
					</div>

                    <!-- Jurnal with subitems -->
					<div class="mb-2 relative group">
						<input type="checkbox" id="jurnal-toggle" class="hidden peer">
					
						<label for="jurnal-toggle"
							class="flex items-center px-12 py-2 mt-2 text-gray-100 hover:bg-gray-700 cursor-pointer w-full">
                            Jurnal Umum
						</label>
					
						<!-- SVG Icons op hetzelfde niveau als input -->
						<!-- <div class="absolute left-4 top-2 transform #dis-translate-y-1/2 flex items-center text-white"> -->
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white group-hover:hidden h-6 w-6 mr-2 peer-checked:hidden transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.5v15m7.5-15v15a2.25 2.25 0 0 1-2.25 2.25h-9A2.25 2.25 0 0 1 6 19.5v-15A2.25 2.25 0 0 1 8.25 2.25h9A2.25 2.25 0 0 1 19.5 4.5Z" />
                        </svg>

                                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white hidden group-hover:block peer-checked:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 3.487a1.125 1.125 0 0 1 1.588 0l2.063 2.063a1.125 1.125 0 0 1 0 1.588l-9.412 9.412a4.5 4.5 0 0 1-1.61 1.05l-3.172 1.1a.75.75 0 0 1-.955-.955l1.1-3.172a4.5 4.5 0 0 1 1.05-1.61l9.412-9.412ZM19.5 7.125 16.875 4.5m-2.25 7.875 1.875 1.875" />
                        </svg>

						<!-- </div> -->
					
						<!-- Arrow Icon -->
						<svg xmlns="http://www.w3.org/2000/svg"
							class="h-4 w-4 ml-auto transition-transform transform peer-checked:rotate-180 absolute right-4 top-3 transform #dis--translate-y-1/2 text-white"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					
						<div class="hidden peer-checked:flex flex-col bg-white text-gray-800 mt-1 transition-all duration-300">
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Pengeluaran</a>
						</div>
					</div>

                    <!-- Management with subitems -->
					<div class="mb-2 relative group">
						<input type="checkbox" id="management-toggle" class="hidden peer">
					
						<label for="management-toggle"
							class="flex items-center px-12 py-2 mt-2 text-gray-100 hover:bg-gray-700 cursor-pointer w-full">
                            Management Data
						</label>
					
						<!-- SVG Icons op hetzelfde niveau als input -->
						<!-- <div class="absolute left-4 top-2 transform #dis-translate-y-1/2 flex items-center text-white"> -->
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white group-hover:hidden h-6 w-6 mr-2 peer-checked:hidden transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3c4.418 0 8 1.343 8 3v12c0 1.657-3.582 3-8 3s-8-1.343-8-3V6c0-1.657 3.582-3 8-3Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 10c0 1.657 3.582 3 8 3s8-1.343 8-3M4 14c0 1.657 3.582 3 8 3s8-1.343 8-3" />
                        </svg>

                                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white hidden group-hover:block peer-checked:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 3.75h6v6h-6v-6Zm10.5 0h6v6h-6v-6Zm-10.5 10.5h6v6h-6v-6Zm10.5 0h6v6h-6v-6Z" />
                        </svg>

						<!-- </div> -->
					
						<!-- Arrow Icon -->
						<svg xmlns="http://www.w3.org/2000/svg"
							class="h-4 w-4 ml-auto transition-transform transform peer-checked:rotate-180 absolute right-4 top-3 transform #dis--translate-y-1/2 text-white"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					
						<div class="hidden peer-checked:flex flex-col bg-white text-gray-800 mt-1 transition-all duration-300">
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Tahun Ajaran</a>
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Kelas</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Siswa</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Kelulusan</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Kenaikan Kelas</a>



						</div>
					</div>
					
                    <!--Laporan with subitems -->
					<div class="mb-2 relative group">
						<input type="checkbox" id="laporan-toggle" class="hidden peer">
					
						<label for="laporan-toggle"
							class="flex items-center px-12 py-2 mt-2 text-gray-100 hover:bg-gray-700 cursor-pointer w-full">
                            Laporan
						</label>
					
						<!-- SVG Icons op hetzelfde niveau als input -->
						<!-- <div class="absolute left-4 top-2 transform #dis-translate-y-1/2 flex items-center text-white"> -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white group-hover:hidden h-6 w-6 mr-2 peer-checked:hidden transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 2.25h6c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125H9c-.621 0-1.125-.504-1.125-1.125v-1.5C7.875 2.754 8.379 2.25 9 2.25ZM4.5 6.75h15m-13.5 3h12c.621 0 1.125.504 1.125 1.125v9c0 .621-.504 1.125-1.125 1.125h-12c-.621 0-1.125-.504-1.125-1.125v-9c0-.621.504-1.125 1.125-1.125Z" />
                        </svg>

                                        
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="absolute top-2 left-4 text-white hidden group-hover:block peer-checked:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 9.75h3m-3 3h6m-9 5.625h10.5c.621 0 1.125-.504 1.125-1.125V7.2a1.125 1.125 0 0 0-.33-.795L15.6 2.955a1.125 1.125 0 0 0-.795-.33H6.75c-.621 0-1.125.504-1.125 1.125v14.25c0 .621.504 1.125 1.125 1.125Zm8.25-16.2V6c0 .621.504 1.125 1.125 1.125h2.25" />
                        </svg>

						<!-- </div> -->
					
						<!-- Arrow Icon -->
						<svg xmlns="http://www.w3.org/2000/svg"
							class="h-4 w-4 ml-auto transition-transform transform peer-checked:rotate-180 absolute right-4 top-3 transform #dis--translate-y-1/2 text-white"
							fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					
						<div class="hidden peer-checked:flex flex-col bg-white text-gray-800 mt-1 transition-all duration-300">
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Laporan Keuangan</a>
							<a href="#" class="block px-4 py-2 hover:bg-gray-200">Laporan Arus Kas</a>
						</div>
					</div>

                    <!-- informasi -->
					<a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6 mr-2 group-hover:hidden transition-transform duration-300 ease-in-out hover:scale-110">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7.5 8.25h9m-9 3h5.25M21 12c0 4.418-3.582 8-8 8a7.952 7.952 0 0 1-3.25-.684L3 20.25l1.934-5.762A7.952 7.952 0 0 1 4 12c0-4.418 3.582-8 8-8s8 3.582 8 8Z" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="hidden group-hover:block h-6 w-6 mr-2 transition-transform duration-300 ease-in-out hover:scale-110">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v3m0 4h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8Z" />
                    </svg>

                        Informasi
					</a>

                    <!-- pengaturan with subitems -->
					<div class="mb-2 relative group">
						<input type="checkbox" id="settings-toggle" class="hidden peer">

						<label for="settings-toggle"
							class="flex items-center px-12 py-2 mt-2 text-gray-100 hover:bg-gray-700 cursor-pointer w-full">
							Pengaturan
						</label>

						<!-- SVG Icons op hetzelfde niveau als input -->
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
							class="absolute top-2 left-4 text-white group-hover:hidden h-6 w-6 mr-2 peer-checked:hidden">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
						</svg>

						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
							class="absolute top-2 left-4 text-white hidden group-hover:block peer-checked:block h-6 w-6 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 0 1-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 8.684a2.548 2.548 0 1 1-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 0 1 6.336-4.486l-3.276 3.276a3.004 3.004 0 0 0 2.25 2.25l3.276-3.276c.256.565.398 1.192.398 1.852Z" />
							<path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008Z" />
						  </svg>
                    </div>


                    <!-- User -->
					<a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor" class="group-hover:hidden h-6 w-6 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round"
								d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="hidden group-hover:block h-6 w-6 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
						  </svg>
                        Management Pengguna
					</a>
                    </nav>
			    </div>    
</aside>

<div class="p-4 sm:ml-64">
   <div class="p-4 rounded-lg mt-14">
      @include('users')
   </div>
</div>






    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
