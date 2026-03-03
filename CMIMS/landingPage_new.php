<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic & Medical Inventory Management System</title>
    <link rel="icon" type="image/x-icon" href="../assets/CMIMS_logo.png">
    <link href="../dist/output.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white shadow-md z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <div class="absolute inset-0 bg-green-400 rounded-full blur-lg opacity-50"></div>
                        <img src="../assets/CMIMS_logo.png" alt="CMIMS Logo" class="relative w-10 h-10 rounded-full border-2 border-white shadow-lg">
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-gray-800">CMIMS</h1>
                        <p class="text-xs text-gray-600">Clinic & Medical Inventory Management System</p>
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="#features" class="text-gray-600 hover:text-green-600 transition-colors">Features</a>
                    <a href="#about" class="text-gray-600 hover:text-green-600 transition-colors">About</a>
                    <button onclick="goToLoginPage()" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105">
                        <i class='bx bx-log-in-circle mr-2'></i>Log In
                    </button>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section class="pt-16 min-h-screen flex items-center relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-emerald-50">
        <!-- Background decoration -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-green-200 rounded-full opacity-20 animate-float"></div>
        <div class="absolute bottom-20 left-10 w-48 h-48 bg-emerald-200 rounded-full opacity-20 animate-float" style="animation-delay: 2s;"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in-up">
                    <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full mb-6">
                        <i class='bx bx-shield-check mr-2'></i>
                        <span class="text-sm font-semibold">Simplifying Health Management in Schools</span>
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Where <span class="gradient-text">Efficiency</span> Meets <span class="gradient-text">Healthcare</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Keep track of medicines, monitor stock levels, and ensure students' health needs are always met with an intelligent, automated inventory system.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button onclick="goToLoginPage()" class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <i class='bx bx-rocket mr-2'></i>Get Started
                        </button>
                        <a href="#features" class="border-2 border-green-600 text-green-600 hover:bg-green-600 hover:text-white px-8 py-4 rounded-xl transition-all duration-300">
                            <i class='bx bx-info-circle mr-2'></i>Learn More
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 mt-12">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600">500+</div>
                            <div class="text-sm text-gray-600">Schools Managed</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600">50K+</div>
                            <div class="text-sm text-gray-600">Students Tracked</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-green-600">99.9%</div>
                            <div class="text-sm text-gray-600">Uptime</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="relative z-10">
                        <img src="../assets/computer.png" alt="CMIMS Dashboard" class="rounded-2xl shadow-2xl w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600">Everything you need to manage your school clinic efficiently</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-capsule text-green-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Medicine Inventory</h3>
                    <p class="text-gray-600">Track stock levels, expiry dates, and automatically reorder medicines when supplies run low.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-user-check text-blue-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Student Health Records</h3>
                    <p class="text-gray-600">Maintain comprehensive health profiles, medical history, and treatment records for all students.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-bell text-purple-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Smart Alerts</h3>
                    <p class="text-gray-600">Receive notifications for low stock, expiry dates, and important health reminders.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-chart-line text-orange-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Analytics Dashboard</h3>
                    <p class="text-gray-600">Visualize health trends, medicine usage patterns, and clinic performance metrics.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-file text-red-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Report Generation</h3>
                    <p class="text-gray-600">Generate detailed reports for administration, compliance, and health department requirements.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-8 card-hover">
                    <div class="w-14 h-14 bg-indigo-100 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-shield text-indigo-600 text-2xl'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Secure & Compliant</h3>
                    <p class="text-gray-600">HIPAA-compliant data security with role-based access control and audit trails.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section id="about" class="py-20 bg-gradient-to-br from-green-50 to-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">Designed for Modern Schools</h2>
                    <p class="text-lg text-gray-600 mb-6">
                        CMIMS is specifically built for educational institutions to streamline clinic operations and ensure student well-being. Our intuitive platform helps school nurses and administrators manage health services efficiently.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-green-600 text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Easy to Use</h4>
                                <p class="text-gray-600">Intuitive interface designed for healthcare professionals</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-green-600 text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">Cloud-Based</h4>
                                <p class="text-gray-600">Access your clinic data anywhere, anytime</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class='bx bx-check-circle text-green-600 text-xl mt-1'></i>
                            <div>
                                <h4 class="font-semibold text-gray-900">24/7 Support</h4>
                                <p class="text-gray-600">Dedicated support team to help you succeed</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <img src="../assets/CMIMS_logo.png" alt="CMIMS Platform" class="rounded-2xl shadow-2xl w-full">
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="py-20 bg-green-600">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Ready to Transform Your School Clinic?</h2>
            <p class="text-xl text-green-100 mb-8">
                Join hundreds of schools already using CMIMS to streamline their healthcare operations.
            </p>
            <button onclick="goToLoginPage()" class="bg-white text-green-600 hover:bg-gray-100 px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg font-semibold">
                <i class='bx bx-rocket mr-2'></i>Get Started Today
            </button>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <img src="../assets/CMIMS_logo.png" alt="CMIMS Logo" class="w-8 h-8 rounded-full">
                        <h3 class="text-xl font-bold">CMIMS</h3>
                    </div>
                    <p class="text-gray-400">Clinic & Medical Inventory Management System for educational institutions.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#features" class="hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Security</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Support</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Legal</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Compliance</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2026 CMIMS. Developed by 3rd Year BSIT Students.</p>
            </div>
        </div>
    </footer>
    
    <script>
        function goToLoginPage() {
            window.location.href = "LogInPage.php";
        }
        
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>
