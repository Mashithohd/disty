<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-white font-poppins">
    <div class="relative w-full h-screen overflow-hidden">
        <!-- Background Shapes -->
        <div class="absolute w-[20vw] h-[35vh] -top-[20vh] right-0 rotate-[42.54deg] bg-[#6ba5f2]"></div>
        <div class="absolute w-[25vw] h-[25vw] -left-10 bottom-0 bg-[#94bdf2] rounded-full"></div>

        <!-- Main Containers -->
        <div class="absolute w-[1307px] h-[500px] top-24 left-16 bg-white rounded-t-lg"></div>
        <div class="absolute w-[505px] h-[490px] top-12 left-16 bg-[#064ba6] rounded-t-lg"></div>

        <!-- Left Panel Content -->
        <div class="absolute top-[353px] left-[140px] text-white text-[40px] font-bold font-poppins text-center">SELAMAT DATANG</div>
        <div class="absolute top-[410px] left-[138px] text-white text-[20px] font-semibold font-poppins text-center">Di Website Sistem Pembayaran Sekolah</div>
        <img
            class="absolute top-[130px] left-[220px] w-[200px] h-[200px]"
            src="{{ asset('images/logo.png') }}" alt="Logo"
        />

        <!-- Login Panel -->
        <div class="absolute top-[105px] left-[640px] text-[#064ba6] text-[40px] font-bold font-montserrat">Login</div>
        <div class="absolute top-[170px] left-[640px] text-[#9a9a9a] text-[14px] font-normal font-montserrat text-center">Gunakan email Anda untuk pembayaran</div>

        <!-- Login Form -->
        <form class="absolute top-[200px] left-[620px] w-[507px] p-6 space-y-6 bg-white  rounded-lg">
            <div class="flex flex-col ">
                <label for="email" class="text-sm font-medium text-gray-900 mb-2">Email Address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 placeholder-gray-500" placeholder="john.doe@company.com" required />
            </div>

            <div class="flex flex-col ">
                <label for="password" class="text-sm font-medium text-gray-900 mb-2">Password</label>
                <div class="relative">
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 placeholder-gray-500" placeholder="•••••••••" required />
                    <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zM12 4a8 8 0 00-8 8c0 1.38.44 2.65 1.18 3.68M12 4a8 8 0 018 8c0 1.38-.44 2.65-1.18 3.68"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Forgot Password Link Above Button -->
            <div class="text-center text-[#373737] text-[14px] font-semibold font-montserrat underline cursor-pointer">
                <a href="#popup-modal" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="hover:text-[#064ba6]">
                    Lupa kata sandi?
                </a>


            <!-- Forgot Password Modal -->
            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Masukkan email untuk reset kata sandi</h3>
                            
                            <form action="#" method="POST">
                                <input type="email" class="w-full mb-4 p-2 text-gray-700 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan email" required>
                                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center">
                                    Kirim Permintaan
                                </button>
                            </form>
                            
                            <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="dashboard" class="w-full bg-[#064ba6] text-white py-3 rounded-lg font-semibold hover:bg-[#053c7e] transition duration-200 block text-center">
                Login
            </a>


        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const eyeIcon = document.getElementById("eye-icon");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.setAttribute("stroke", "green");
            } else {
                passwordField.type = "password";
                eyeIcon.setAttribute("stroke", "currentColor");
            }
        }
    </script>
    <!-- Modal Toggle Script -->
<script>
    const modal = document.getElementById('popup-modal');
    const modalToggle = document.querySelectorAll('[data-modal-toggle="popup-modal"]');
    const modalHide = document.querySelectorAll('[data-modal-hide="popup-modal"]');
    
    modalToggle.forEach((btn) => {
        btn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
    });
    
    modalHide.forEach((btn) => {
        btn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
</script>
    </body>
</html>
