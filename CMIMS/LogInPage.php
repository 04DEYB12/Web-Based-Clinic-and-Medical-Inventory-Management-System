
<?php
session_start();
include_once("../model/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login - CMIMS</title>
    <link rel="icon" type="image/x-icon" href="../assets/CMIMS_logo.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fade-in-up {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-900 to-green-700 min-h-screen flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl p-8 w-full max-w-md animate-fade-in-up">
        <button onclick="goToLandingPage()" class="bg-green-600 hover:bg-green-700 text-white px-3 py-2 rounded-full transition-colors">
            <i class="bx bx-chevron-left text-xl"></i>
        </button>
        <!-- Logo and Title -->
        <div class="text-center mb-8">
            <img src="../assets/CMIMS_logo.png" alt="CMIMS Logo" class="w-20 h-20 mx-auto mb-4 rounded-full">
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Welcome Back</h2>
            <p class="text-gray-600">Login to your account</p>
        </div>

        <!-- Login Form -->
        <div class="space-y-6">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700 mb-2">
                    ID:
                </label>
                <input 
                    type="text" 
                    id="userid" 
                    name="userid"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent outline-none transition-all"
                    placeholder="Enter your ID"
                    required
                >
            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                    Password:
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-600 focus:border-transparent outline-none transition-all"
                        placeholder="Enter your password"
                        required
                    >
                    <button 
                        type="button" 
                        id="togglePassword"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none"
                    >
                        <svg id="eyeIcon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Forgot Password Link -->
            <div class="text-right">
                <a href="#" class="text-sm text-green-600 hover:text-green-700 font-medium transition-colors">
                    Forgot password?
                </a>
            </div>

            <!-- Login Button -->
            <button 
                onclick="Login()"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition-colors duration-200 transform hover:scale-105"
            >
                Login
            </button>
</div>
    </div>

    <script>
        function goToLandingPage() {
            window.location.href = "landingPage.php";
        }
        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            
            // Change icon based on password visibility
            if (type === 'text') {
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                `;
            } else {
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        });

        function Login() {
        const formData = new FormData();
        formData.append('action', 'login');
        formData.append('userid', document.getElementById('userid').value);
        formData.append('password', document.getElementById('password').value);

        fetch('../controller/UserFunctions.php', {
        method: 'POST',
        body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Refresh the user list to show updated Role
                // alert('Login successfully!');
                window.location.href = data.redirect;
            } else {
            alert(data.error);
            }
        })
        .catch(error => {
            console.error('Error logging in:', error);
            alert('An error occurred while logging in: ' + error.message);
        });
    }
    </script>
</body>
</html>