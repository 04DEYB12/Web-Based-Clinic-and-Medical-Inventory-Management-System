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
    <link href="../dist/output.css" rel="stylesheet">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
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
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .floating-shape {
            position: absolute;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .input-group:focus-within label {
            color: #16a34a;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(22, 163, 74, 0.3);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-600 via-green-700 to-green-800 min-h-screen flex items-center justify-center relative overflow-hidden">
    <!-- Floating Background Elements -->
    <div class="floating-shape w-64 h-64 bg-green-200 rounded-full top-10 left-10" style="animation-delay: 0s;"></div>
    <div class="floating-shape w-48 h-48 bg-green-200 rounded-full bottom-10 right-10" style="animation-delay: 2s;"></div>
    <div class="floating-shape w-32 h-32 bg-green-200 rounded-full top-1/2 left-1/4" style="animation-delay: 4s;"></div>
    
    <div class="glass-effect rounded-3xl shadow-2xl p-10 w-full max-w-md animate-fade-in-up relative z-10">
        <!-- Back Button -->
        <button onclick="goToLandingPage()" class="absolute top-6 left-6 text-gray-600 hover:text-green-600 transition-colors p-2">
            <i class="bx bx-arrow-back text-2xl"></i>
        </button>
        
        <!-- Logo and Title -->
        <div class="text-center mb-10 mt-4">
            <div class="relative inline-block mb-6">
                <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-500 rounded-full blur-lg opacity-50"></div>
                <img src="../assets/CMIMS_logo.png" alt="CMIMS Logo" class="relative w-24 h-24 rounded-full border-4 border-white shadow-lg">
            </div>
            <h2 class="text-4xl font-bold text-gray-800 mb-3">Welcome Back</h2>
            <p class="text-gray-600 text-lg">Login to your account</p>
        </div>

        <!-- Login Form -->
        <form class="space-y-6" onsubmit="event.preventDefault(); Login();">
            <div class="input-group">
                <label for="userid" class="block text-sm font-semibold text-gray-700 mb-3 transition-colors">
                    <i class='bx bx-user-circle mr-2'></i>User ID
                </label>
                <input 
                    type="text" 
                    id="userid" 
                    name="userid"
                    class="w-full px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all text-lg"
                    placeholder="Enter your user ID"
                    required
                >
            </div>

            <!-- Password Field -->
            <div class="input-group">
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-3 transition-colors">
                    <i class='bx bx-lock-alt mr-2'></i>Password
                </label>
                <div class="relative">
                    <input 
                        type="password" 
                        id="password" 
                        name="password"
                        class="w-full px-4 py-4 pr-14 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all text-lg"
                        placeholder="Enter your password"
                        required
                    >
                    <button 
                        type="button" 
                        id="togglePassword"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-green-600 focus:outline-none transition-colors"
                    >
                        <i id="eyeIcon" class="bx bx-show text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Forgot Password Link -->
            <div class="text-right">
                <a href="#" class="text-sm text-green-600 hover:text-green-700 font-semibold transition-colors">
                    Forgot your password?
                </a>
            </div>

            <!-- Login Button -->
            <button 
                type="submit"
                class="btn-primary w-full text-white font-bold py-4 rounded-xl text-lg transition-all duration-300"
            >
                <i class='bx bx-log-in-circle mr-2'></i>
                Login
            </button>
        </form>
    </div>

    <script src="../controller/toastNotification.js"></script>
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
                eyeIcon.className = 'bx bx-hide text-xl';
            } else {
                eyeIcon.className = 'bx bx-show text-xl';
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
                    window.location.href = data.redirect;
                } else {
                    showAlert(data.error, 'error');
                    document.getElementById('userid').value = '';
                    document.getElementById('password').value = '';
                }
            })
            .catch(error => {
                console.error('Error logging in:', error);
                showAlert('An error occurred while logging in: ' + error.message, 'error');
            });
        }
    </script>
</body>
</html>
