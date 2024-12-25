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
    <div class="flex flex-col items-center justify-center min-h-screen bg-white py-10">
        <!-- Profile Section with Change Photo Feature -->
        <div class="relative w-32 h-32 rounded-full bg-gradient-to-tr from-blue-500 to-indigo-600 p-1 mb-8 shadow-lg">
            <img id="profile-img" src="{{ asset('images/profil.png') }}" alt="User Profile" class="w-full h-full rounded-full border-4 border-white shadow-md">
            
            <!-- Change Profile Button -->
            <input type="file" id="file-input" class="absolute bottom-0 right-0 mb-2 mr-2 opacity-0 cursor-pointer" onchange="previewImage(event)">
            <label for="file-input" class="absolute bottom-0 right-0 mb-2 mr-2 bg-blue-500 text-white p-2 rounded-full cursor-pointer hover:bg-blue-600 transition-all duration-300">
                <i class="fas fa-camera"></i> <!-- You can use an icon here -->
            </label>
        </div>

        <!-- Profile Form -->
        <form class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg border border-gray-200">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Profile Settings</h2>
            <!-- First Name and Phone Number -->
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="John" required />
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required />
                </div>
            </div>

            <!-- Aktor -->
            <div class="mb-6">
                <label for="aktro" class="block mb-2 text-sm font-medium text-gray-900">Aktor</label>
                <input type="aktor" id="aktor" aria-label="Administrator" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="Administrator" disabled>
            </div>

            <!-- Email Address -->
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email Address</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="john.doe@company.com" required />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <div class="relative">
                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="•••••••••" required />
                    <button type="button" onclick="togglePassword()" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zM12 4a8 8 0 00-8 8c0 1.38.44 2.65 1.18 3.68M12 4a8 8 0 018 8c0 1.38-.44 2.65-1.18 3.68"></path>
                        </svg>
                    </button>
                </div>
            </div>

        
          <!-- Forgot Password Link -->
<div class="mb-6">
<label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">Ubah Kata Sandi</label>
    <a href="#" onclick="togglePopup()" class="text-sm text-green-600 hover:text-green-700 font-semibold hover:underline bg-green-100 p-2 rounded-full transition duration-300">
        Ubah Kata Sandi
    </a>


<!-- Popup Modal -->
<div id="popup" class="fixed inset-0 flex justify-center items-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-xl font-semibold text-center mb-4">Ubah Kata Sandi</h2>
        <h2 class="text-sm font-medium text-center mb-4">Pastikan akun Anda menggunakan kata sandi yang panjang dan acak untuk tetap aman.</h2>
        <form>
            <label for="old-password" class="block mb-2">Kata Sandi Lama</label>
            <input type="password" id="old-password" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Masukkan kata sandi lama">
            <label for="new-password" class="block mb-2">Kata Sandi Baru</label>
            <input type="password" id="new-password" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Masukkan kata sandi baru">
            <label for="confirm-password" class="block mb-2">Konfirmasi Kata Sandi</label>
            <input type="password" id="confirm-password" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Konfirmasi kata sandi">
            <div class="flex justify-between">
                <button type="button" onclick="togglePopup()" class="text-sm text-gray-600 hover:text-gray-800 font-medium">Batal</button>
                <button type="submit" class="text-sm text-green-600 hover:text-green-700 font-medium">Simpan</button>
            </div>
        </form>
    </div>
</div>



            <!-- Submit Button -->
            <div class="flex justify-center mb-6">
        <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-6 py-3 text-center transition-all duration-300">Submit</button>
    </div>
</form>
    </div>
</div>


<script>
    // Function to preview the selected image
    function previewImage(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            // Update the profile image
            document.getElementById('profile-img').src = e.target.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        }
    }

  
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            // Change icon to "eye-slash" when password is visible
            eyeIcon.setAttribute('d', 'M15 12c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zM12 4a8 8 0 00-8 8c0 1.38.44 2.65 1.18 3.68M12 4a8 8 0 018 8c0 1.38-.44 2.65-1.18 3.68'); // Eye icon path (visible)
        } else {
            passwordInput.type = "password";
            // Change icon to "eye" when password is hidden
            eyeIcon.setAttribute('d', 'M15 12c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zM12 4a8 8 0 00-8 8c0 1.38.44 2.65 1.18 3.68M12 4a8 8 0 018 8c0 1.38-.44 2.65-1.18 3.68'); // Eye icon path (hidden)
        }
    }

    document.getElementById('changePasswordLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the link from navigating
    document.getElementById('popupModal').classList.remove('hidden'); // Show the popup
});

</script>
<!-- JavaScript to toggle the popup -->
<script>
    function togglePopup() {
        const popup = document.getElementById('popup');
        popup.classList.toggle('hidden');
    }
</script>
