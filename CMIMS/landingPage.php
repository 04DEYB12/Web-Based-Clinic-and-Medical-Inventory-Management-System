<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic & Medical Inventory Management System</title>
    <link rel="icon" type="image/x-icon" href="../assets/CMIMS_logo.png">
    <link href="../dist/output.css" rel="stylesheet">
    <style>
        @keyframes fade-in-left {
            0% {
                opacity: 0;
                transform: translateX(-50px);
                filter: brightness(0.8);
            }
            100% {
                opacity: 0.85;
                transform: translateX(0);
                filter: brightness(1);
            }
        }
        .animate-fade-in-left {
            animation: fade-in-left 2s ease-out;
        }
    </style>
</head>
<body class="bg-green-900">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                
                <div class="flex items-center space-x-4">
                    <img src="../assets/CMIMS_logo.png" alt="CMIMS Logo" class="w-12 rounded-full">
                    <h1 class="text-xl font-bold text-green-700">CMIMS - Clinic & Medical Inventory Management System</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <button onclick="goToLoginPage()" class="bg-green-600 hover:bg-green-700 text-white px-10 py-2 rounded-full transition-colors">
                        Log In
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <main class="relative h-screen overflow-hidden">
        <!-- Full screen background image -->
        <div class="absolute inset-0">
            <img src="../assets/computer.png" alt="Computer" class="w-full h-full object-cover animate-fade-in-left opacity-85">
            <div class="absolute inset-0 bg-gradient-to-r from-green-900 to-transparent pointer-events-none"></div>
        </div>
        
        <!-- Content overlay -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="md:w-1/2">
                <h3 class="text-2xl font-bold text-white mb-4">Simplifying Health Management in Schools</h3>
                <h1 class="text-6xl font-bold text-white mb-4">Where Effiency Meets Reliable Medical Care</h1>
                <p class="text-xl text-white mb-6">Keep track of medicines, monitor stock levels, and ensure students' health needs are always met with an intelligent, automated inventory system.</p>
                <button onclick="goToLoginPage()" class="bg-white hover:bg-gray-100 text-green-800 px-10 py-3 rounded-full transition-colors font-semibold">
                Get Started
            </button>
        </div>
    </main>
</body>
<script>
    function goToLoginPage() {
        window.location.href = "LogInPage.php";
    }
</script>
</html>