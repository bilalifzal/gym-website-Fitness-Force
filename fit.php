<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Force Pro | #1 Gym Management Software</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><defs><linearGradient id='grad' x1='0%' y1='0%' x2='100%' y2='100%'><stop offset='0%' style='stop-color:%23bf50c4;stop-opacity:1' /><stop offset='100%' style='stop-color:%23d946ef;stop-opacity:1' /></linearGradient></defs><rect width='100' height='100' rx='20' fill='white'/><path d='M30 35 L70 35 L70 65 L30 65 Z M20 25 L30 25 L30 75 L20 75 Z M70 25 L80 25 L80 75 L70 75 Z' fill='url(%23grad)'/></svg>">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }
        
        /* --- BRAND COLORS --- */
        :root {
            --primary: #bf50c4;
            --primary-dark: #a243a7;
        }

        /* Smooth Scroll */
        html { scroll-behavior: smooth; }

        /* Marquee Animation */
        .marquee-container { overflow: hidden; white-space: nowrap; }
        .marquee-content { display: inline-block; animation: marquee 25s linear infinite; }
        @keyframes marquee { 0% { transform: translateX(100%); } 100% { transform: translateX(-100%); } }

        /* Gradient Text */
        .brand-gradient-text {
            background: linear-gradient(to right, #bf50c4, #d946ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Button Gradient */
        .btn-gradient {
            background: linear-gradient(to right, #bf50c4, #a855f7);
            color: white;
        }
        .btn-gradient:hover {
            background: linear-gradient(to right, #a243a7, #9333ea);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(191, 80, 196, 0.3);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 overflow-x-hidden">

    <div class="bg-black text-white py-2 text-xs md:text-sm font-bold tracking-widest border-b border-gray-800">
        <div class="marquee-container">
            <div class="marquee-content">
                <span class="text-fuchsia-400">★ SPECIAL OFFER:</span> GET 20% OFF ANNUAL PLANS &nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp; 🚀 LATEST UPDATE: BIOMETRIC LOGIN ADDED &nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp; 🏆 RATED #1 GYM SOFTWARE IN PAKISTAN &nbsp;&nbsp;&nbsp; • &nbsp;&nbsp;&nbsp; 📞 24/7 SUPPORT AVAILABLE
            </div>
        </div>
    </div>

    <nav class="bg-white sticky top-0 z-50 shadow-md backdrop-blur-md bg-opacity-95">
        <div class="container mx-auto flex justify-between items-center py-4 px-6 md:px-12">
            
            <a href="#" class="flex items-center gap-2">
                <img src="Vector.png" alt="Fitness Force Pro" class="h-7 md:h-7 object-contain"> 
            </a>

            <div class="hidden lg:flex items-center gap-8 font-semibold text-sm uppercase tracking-wide text-gray-600">
                <a href="#about" class="hover:text-fuchsia-600 transition">About</a>
                <a href="#features" class="hover:text-fuchsia-600 transition">Features</a>
                <a href="#pricing" class="hover:text-fuchsia-600 transition">Pricing</a>
                <a href="#reviews" class="hover:text-fuchsia-600 transition">Reviews</a>
            </div>

            <div class="hidden lg:flex items-center gap-6">
                <a href="https://wa.me/923147569736" target="_blank" class="flex items-center gap-2 font-bold text-gray-800 hover:text-green-600 transition group">
                    <div class="w-9 h-9 rounded-full bg-green-100 group-hover:bg-green-500 group-hover:text-white transition flex items-center justify-center shadow-sm">
                        <i class="fab fa-whatsapp text-xl"></i>
                    </div>
                    <span>+92 314 7569736</span>
                </a>
                
                <a href="https://fitnessforcepro.com/Test/FitnessForceProSetup.exe" class="btn-gradient px-6 py-2.5 rounded-full shadow-lg transition font-bold text-sm tracking-wide">
                    DOWNLOAD APP
                </a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden text-2xl text-gray-800 focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 absolute w-full shadow-xl">
            <div class="flex flex-col p-6 space-y-4 font-semibold text-center">
                <a href="#about" class="hover:text-fuchsia-600 py-2 border-b border-gray-100">About</a>
                <a href="#features" class="hover:text-fuchsia-600 py-2 border-b border-gray-100">Features</a>
                <a href="#pricing" class="hover:text-fuchsia-600 py-2 border-b border-gray-100">Pricing</a>
                <a href="#reviews" class="hover:text-fuchsia-600 py-2 border-b border-gray-100">Reviews</a>
                
                <a href="https://wa.me/923147569736" class="text-green-500 py-2 flex justify-center items-center gap-2">
                    <i class="fab fa-whatsapp"></i> +92 314 7569736
                </a>
                
                <a href="https://drive.google.com/uc?export=download&id=1KN5ajsunLHwX7eJjCxFUZ9JOBOs1RqVr" class="btn-gradient py-3 rounded-full font-bold">
                    DOWNLOAD APP
                </a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex flex-col lg:flex-row items-center px-6 md:px-12 lg:px-16 py-12 gap-12 bg-white relative overflow-hidden">
        
        <div class="lg:w-1/2 space-y-6 relative z-10" data-aos="fade-right">
            <div class="inline-block bg-purple-50 text-purple-700 px-4 py-1.5 rounded-full text-xs font-bold mb-2 border border-purple-100 shadow-sm">
                🚀 NEW VERSION 2.0 IS LIVE
            </div>
            <h1 class="text-5xl md:text-6xl font-extrabold leading-tight text-gray-900">
                Automate Your Gym <br>
                <span class="brand-gradient-text">Increase Profits</span>
            </h1>
            <p class="text-lg text-gray-500 leading-relaxed max-w-lg">
                The all-in-one CRM for gyms in Pakistan. Manage members, fees, and attendance with a single click. Designed for peace of mind.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <a href="#pricing" class="btn-gradient px-8 py-4 rounded-xl shadow-xl font-bold text-center text-lg">
                    View Pricing
                </a>
                <a href="https://wa.me/923147569736" target="_blank" class="border-2 border-gray-200 text-gray-700 font-bold px-8 py-4 rounded-xl hover:border-fuchsia-500 hover:text-fuchsia-600 transition flex items-center justify-center gap-2 text-lg">
                    <i class="fab fa-whatsapp"></i> Chat Now
                </a>
            </div>
        </div>

        <div class="lg:w-1/2 relative" data-aos="fade-left">
            <div class="relative z-10">
                <img src="m.jpeg" alt="Dashboard" class="rounded-2xl shadow-2xl border-4 border-white w-full relative z-10 transform hover:scale-[1.01] transition duration-500">
                <img src="3dots.png" alt="App" class="absolute -bottom-10 -left-6 md:-left-10 w-32 md:w-56 rounded-3xl shadow-2xl border-4 border-black z-20">
                <img src="grp.jpeg" alt="Feature" class="absolute -top-6 -right-1 w-28 md:w-44 rounded-lg shadow-2xl border-4 border-white z-20 hidden md:block transform hover:scale-105 transition">
                <img src="admin.png" alt="Feature" data-aos="fade-left" data-aos-delay="800" class="absolute -bottom-6 -right-4 w-24 md:w-24 h-36 md:h-44 object-cover object-top rounded-lg shadow-2xl border-4 border-white z-20 hidden md:block transform hover:scale-105 transition">
                
                <div class="absolute top-100 -right-16 bg-white p-3 md:p-4 rounded-xl shadow-xl animate-bounce hidden md:block z-30 border border-gray-100">
                    <div class="flex items-center gap-3">
                        <div class="bg-green-100 p-2 rounded-full"><i class="fas fa-arrow-up text-green-600"></i></div>
                        <div>
                            <p class="text-xs text-gray-500">Monthly Revenue</p>
                            <p class="font-bold text-lg">+24%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-fuchsia-200 rounded-full opacity-20 blur-3xl -z-10"></div>
        </div>
    </section>

    <section class="bg-black text-white py-14">
        <div class="container mx-auto px-6 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div data-aos="fade-up">
                <div class="text-4xl font-bold text-fuchsia-500 mb-1">500+</div>
                <div class="text-gray-400 text-sm uppercase tracking-widest font-medium">Gyms Trusted</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-4xl font-bold text-fuchsia-500 mb-1">150k</div>
                <div class="text-gray-400 text-sm uppercase tracking-widest font-medium">Members</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="text-4xl font-bold text-fuchsia-500 mb-1">99%</div>
                <div class="text-gray-400 text-sm uppercase tracking-widest font-medium">Uptime</div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300">
                <div class="text-4xl font-bold text-fuchsia-500 mb-1">24/7</div>
                <div class="text-gray-400 text-sm uppercase tracking-widest font-medium">Support</div>
            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Powerful Features</h2>
                <div class="w-16 h-1.5 bg-purple-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up">
                    <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-purple-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Manage Members</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Add, edit, and search member profiles instantly. Keep their photos and data in one place.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-file-invoice-dollar text-2xl text-pink-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Fee Records</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Track who has paid and who is pending. View detailed revenue reports instantly.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-blue-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-print text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Auto Print Slips</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Generate and print professional receipts for your members instantly.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up">
                    <div class="w-14 h-14 bg-green-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-fingerprint text-2xl text-green-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Finger Print Attendence</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Secure your gym with fingerprint scanners. Only paid members can enter.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-yellow-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-sms text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Auto SMS & WhatsApp</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Send automated fee reminders, birthday wishes, and alerts.</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100 hover:-translate-y-2 transition duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-red-100 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-headset text-2xl text-red-600"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Priority Support</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">Get dedicated support via WhatsApp whenever you face an issue.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-24 bg-white">
        <div class="container mx-auto px-6 text-center">
            
            <div class="mb-12" data-aos="fade-down">
                <h2 class="text-4xl font-bold mb-3">Simple Pricing</h2>
                <p class="text-gray-500">One clear plan for your complete gym management.</p>
            </div>

            <div class="max-w-4xl mx-auto" data-aos="zoom-in">
                <div class="bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden relative">
                    <div class="absolute top-0 w-full h-2 bg-gradient-to-r from-purple-500 to-pink-500"></div>

                    <div class="p-8 md:p-14">
                        <div class="mb-8">
                            <span class="text-6xl font-bold text-gray-900">Rs 5,000</span>
                            <span class="text-xl text-gray-400 font-medium">/ month</span>
                        </div>

                        <div class="flex flex-col md:flex-row justify-center items-center gap-6 md:gap-16 mb-12 border-t border-b border-gray-100 py-10">
                            
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-purple-100 rounded-2xl flex items-center justify-center text-purple-600 text-2xl shadow-sm">
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <div class="text-left">
                                    <span class="block font-bold text-xl text-gray-800">Desktop App</span>
                                    <span class="text-sm text-gray-500">Admin Control</span>
                                </div>
                            </div>

                            <div class="hidden md:block w-px h-16 bg-gray-200"></div>

                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-pink-100 rounded-2xl flex items-center justify-center text-pink-600 text-2xl shadow-sm">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="text-left">
                                    <span class="block font-bold text-xl text-gray-800">Mobile App</span>
                                    <span class="text-sm text-gray-500">For Members</span>
                                </div>
                            </div>

                        </div>

                        <a href="https://wa.me/923147569736" target="_blank" class="inline-block btn-gradient font-bold text-xl px-12 py-5 rounded-full shadow-xl transform hover:-translate-y-1 transition duration-300 mb-8">
                            SUBSCRIBE NOW
                        </a>
                        
                        <div class="flex flex-col items-center justify-center mb-4">
                            <img src="QR.jpeg" alt="Scan QR Code" class="w-32 h-32 md:w-40 md:h-40 object-contain border-4 border-gray-100 rounded-xl shadow-md p-2 bg-white">
                            <p class="text-xs text-black-600 mt-2" style="font-size:14px;">Scan to  Download Member Mobile App</p>
                        </div>

                        <p class="mt-4 text-sm text-gray-400">Includes free updates & support.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
<section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-16" data-aos="fade-down">
                <h2 class="text-4xl font-bold mb-4">Who Uses Fitness Force?</h2>
                <div class="w-20 h-1.5 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full"></div>
                <p class="mt-4 text-gray-500">Tailored solutions for every type of fitness business.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                
                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-dumbbell text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Fitness Clubs</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Complete management for memberships, equipment tracking, and daily attendance logs.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-glass-cheers text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Social Clubs</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Track member check-ins, monthly dues, and guest visits effortlessly.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-swimmer text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Swimming Pools</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Manage lane bookings, swimming lessons, and seasonal memberships.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-basketball-ball text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sports Complex</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Handle multi-sport facility scheduling for courts, fields, and events.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-bolt text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Crossfit Gyms</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Schedule WODs, track athlete performance, and manage group classes.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-spa text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Yoga Studios</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Seamless class scheduling for mindfulness sessions and instructor management.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-music text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Zumba Classes</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Manage high-energy group batches, attendance, and payment cycles.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-fist-raised text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Martial Arts</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Track student belt progression, attendance, and grading fees.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-user-clock text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Personal Trainers</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Manage individual client appointments, diet plans, and progress reports.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Dance Studios</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Organize batches, manage choreographer schedules, and event fees.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-heartbeat text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Rehab Centers</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Securely store patient history, schedule therapy sessions, and billing.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-purple-300 shadow-2xl h-72 flex flex-col justify-between" data-aos="fade-up" data-aos-delay="300">
                    <div>
                        <div class="w-14 h-14 bg-purple-600 shadow-sm rounded-xl flex items-center justify-center mb-4">
                            <i class="fas fa-building text-white text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Corporate Gyms</h3>
                        <p class="text-sm text-gray-500 leading-relaxed">Exclusive access control for employees and wellness program tracking.</p>
                    </div>
                    <div class="w-8 h-1 bg-purple-500 rounded-full"></div>
                </div>

            </div>
        </div>
    </section>

    <section id="gallery" class="py-24 bg-black text-white">
        <div class="container mx-auto px-6">
            
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-down">
                <span class="text-[#f5b700]">Classic</span> Design
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                
                <div class="overflow-hidden rounded-xl cursor-pointer opacity-80 hover:opacity-100 transition duration-500 shadow-lg border border-transparent hover:border-[#f5b700]" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover hover:scale-110 transition duration-700">
                </div>
                
                <div class="overflow-hidden rounded-xl cursor-pointer opacity-80 hover:opacity-100 transition duration-500 shadow-lg border border-transparent hover:border-[#f5b700]" data-aos="zoom-in" data-aos-delay="100">
                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover hover:scale-110 transition duration-700">
                </div>
                
                <div class="overflow-hidden rounded-xl cursor-pointer opacity-80 hover:opacity-100 transition duration-500 shadow-lg border border-transparent hover:border-[#f5b700]" data-aos="zoom-in" data-aos-delay="200">
                    <img src="https://images.unsplash.com/photo-1599058945522-28d584b6f0ff?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover hover:scale-110 transition duration-700">
                </div>
                
                <div class="overflow-hidden rounded-xl cursor-pointer opacity-80 hover:opacity-100 transition duration-500 shadow-lg border border-transparent hover:border-[#f5b700]" data-aos="zoom-in" data-aos-delay="300">
                    <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=600&q=80" class="w-full h-64 object-cover hover:scale-110 transition duration-700">
                </div>

            </div>
        </div>
    </section><section id="reviews" class="py-24 bg-white relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute top-20 left-0 w-80 h-80 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob"></div>
            <div class="absolute top-20 right-0 w-80 h-80 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-40 animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            
            <div class="text-center mb-20" data-aos="fade-down">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 text-gray-900 tracking-tight">Client Success Stories</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-purple-500 to-pink-500 mx-auto rounded-full shadow-lg"></div>
                <p class="mt-6 text-lg text-gray-500 max-w-2xl mx-auto">See what gym owners across Pakistan are saying about Fitness Force.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                // 1. API URL
                $url = 'https://fitnessforcepro.com/Test/getAllReviews.php';

                // 2. Fetch Data
                $jsonData = @file_get_contents($url);
                $response = json_decode($jsonData, true);

                // 3. Check & Display
                if ($response && isset($response['data']) && !empty($response['data'])) {
                    
                    $reviews = $response['data']; 
                    $count = 0; 
                    
                    foreach ($reviews as $review) {
                        // Data Mapping
                        $name = !empty($review['owner_name']) ? htmlspecialchars($review['owner_name']) : 'Gym Owner';
                        $text = !empty($review['review']) ? htmlspecialchars($review['review']) : 'No review provided.';
                        $gym  = !empty($review['gym_name']) ? htmlspecialchars($review['gym_name']) : 'Fitness Center';
                        
                        // Auto Image
                        $imgIndex = ($count % 15) + 1; 
                        $image = "https://randomuser.me/api/portraits/men/$imgIndex.jpg";
                        
                        // Animation Delay
                        $delay = $count * 100; 
                        ?>
                        
                        <div class="group bg-white rounded-[2rem] p-8 border-2 border-gray-200 hover:border-purple-500 transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 flex flex-col h-full relative" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                            
                            <div class="absolute top-8 right-8 text-6xl text-gray-100 font-serif leading-none group-hover:text-purple-100 transition duration-500 select-none">
                                ”
                            </div>

                            <div class="flex items-center gap-4 mb-6 relative z-10">
                                <div class="relative">
                                    <img src="<?php echo $image; ?>" class="w-16 h-16 rounded-full border-2 border-white shadow-md object-cover">
                                    <div class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white rounded-full"></div>
                                </div>
                                <div>
                                    <h4 class="font-bold text-lg text-gray-900 group-hover:text-purple-700 transition duration-300"><?php echo $name; ?></h4>
                                    <p class="text-sm text-gray-500 font-medium uppercase tracking-wide"><?php echo $gym; ?></p>
                                </div>
                            </div>

                            <div class="relative z-10">
                                <p class="text-gray-600 leading-relaxed text-lg italic font-light">
                                    "<?php echo $text; ?>"
                                </p>
                            </div>
                            
                            <div class="mt-auto pt-6 opacity-0 group-hover:opacity-100 transition duration-500">
                                <div class="w-12 h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                            </div>
                        </div>

                        <?php
                        $count++;
                    }
                } else {
                    // Fallback
                    echo '<div class="col-span-3 text-center py-12 bg-gray-50 rounded-3xl border border-gray-200">
                            <i class="fas fa-spinner fa-spin text-3xl text-purple-300 mb-4"></i>
                            <p class="text-gray-500">Connecting to live database...</p>
                          </div>';
                }
                ?>
            </div>
        </div>
    </section>
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                
                <div class="lg:w-1/2" data-aos="fade-right">
                    <div class="inline-block border-b-2 border-fuchsia-500 text-fuchsia-600 font-bold uppercase tracking-widest mb-4">Our Story</div>
                    <h2 class="text-4xl font-bold mb-6">Empowering Fitness Businesses Since 2024</h2>
                    <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                        Fitness Force started in the heart of <strong>Faisalabad</strong> with a simple mission: to replace messy paper registers with smart technology.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg">
                        Today, we serve over <strong>500+ gyms across Pakistan</strong>. Our software is built by local developers who understand the market needs, ensuring stability, ease of use, and 100% data security.
                    </p>
                </div>

                <div class="lg:w-1/2 grid grid-cols-2 gap-4" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1593079831268-3381b0db4a77?auto=format&fit=crop&w=600&q=80" class="rounded-2xl shadow-lg mt-12 border-4 border-gray-100">
                   <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?auto=format&fit=crop&w=800&q=80" class="rounded-2xl shadow-lg mb-12 border-4 border-gray-100 object-cover h-64 w-full">
                </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download-section" class="py-24 bg-gray-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-600 rounded-full filter blur-[120px] opacity-20"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-pink-600 rounded-full filter blur-[120px] opacity-20"></div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" data-aos="zoom-in">Ready to Modernize Your Gym?</h2>
            <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto">
                Download the full <strong>Fitness Force Desktop Application</strong> for Windows.
            </p>

            <div class="bg-gray-800 inline-block p-10 rounded-3xl border border-gray-700 shadow-2xl mb-12 transform hover:scale-105 transition duration-500" data-aos="fade-up">
                <div class="flex items-center gap-6 mb-8 justify-center border-b border-gray-700 pb-6">
                    <i class="fab fa-windows text-6xl text-blue-500"></i>
                    <div class="text-left">
                        <div class="text-2xl font-bold text-white">Fitness Force v2.0</div>
                        <div class="text-sm text-gray-400">For Windows 10 & 11 (64-bit)</div>
                    </div>
                </div>
                
              <a href="https://drive.google.com/uc?export=download&id=1KN5ajsunLHwX7eJjCxFUZ9JOBOs1RqVr" class="block btn-gradient text-xl font-bold px-12 py-5 rounded-full shadow-[0_0_20px_rgba(192,38,211,0.5)] mb-4">
    <i class="fas fa-download mr-3"></i> DOWNLOAD .EXE INSTALLER
</a>
                <p class="text-xs text-gray-500 mt-3">File size: 45MB • 100% Virus Free • Instant Setup</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 text-sm text-gray-500 max-w-3xl mx-auto border-t border-blue-800 pt-8">
                <div><strong class="text-white block mb-1">OS</strong>Windows 10, 11</div>
                <div><strong class="text-white block mb-1">RAM</strong>Minimum 4GB</div>
                <div><strong class="text-white block mb-1">Storage</strong>500MB Free Space</div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 text-white pt-20 pb-10 border-t border-blue-800">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                
                <div class="space-y-6">
                    <a href="#" class="flex items-center gap-2">
                        <img src="Vector.png" alt="Fitness Force" class="h-8 brightness-0 invert"> 
                    </a>
                    <p class="text-gray-400 text-sm leading-7">
                        Fitness Force is Pakistan's leading gym management solution. We combine classic reliability with modern technology.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded bg-gray-800 flex items-center justify-center hover:bg-fuchsia-600 transition"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-10 h-10 rounded bg-gray-800 flex items-center justify-center hover:bg-fuchsia-600 transition"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-10 h-10 rounded bg-gray-800 flex items-center justify-center hover:bg-fuchsia-600 transition"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-6 text-white uppercase tracking-wider">Company</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li><a href="#about" class="hover:text-fuchsia-500 transition">About Us</a></li>
                        <li><a href="#features" class="hover:text-fuchsia-500 transition">Features</a></li>
                        <li><a href="#pricing" class="hover:text-fuchsia-500 transition">Pricing</a></li>
                        <li><a href="#" class="hover:text-fuchsia-500 transition">Privacy Policy</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-6 text-white uppercase tracking-wider">Contact</h4>
                    <ul class="space-y-4 text-gray-400 text-sm">
                        <li class="flex items-start gap-3"><i class="fas fa-map-marker-alt text-fuchsia-500 mt-1"></i><span>Sargodha, Punjab, Pakistan</span></li>
                           <li class="flex items-start gap-3"><i class="fas fa-user text-fuchsia-500 mt-1"></i><span>Flutter developer : Haider Ali</span></li>
                        <li class="flex items-center gap-3"><i class="fab fa-whatsapp text-fuchsia-500"></i><a href="https://wa.me/923147569736" class="hover:text-white">+92 314 7569736</a></li>
                        <li class="flex items-center gap-3"><i class="fas fa-envelope text-fuchsia-500"></i><span>support@fitnessforce.pk</span></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-lg mb-6 text-white uppercase tracking-wider">Instagram</h4>
                    <div class="grid grid-cols-3 gap-2">
                        <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1599058945522-28d584b6f0ff?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                        <img src="https://images.unsplash.com/photo-1576678927484-cc907957088c?auto=format&fit=crop&w=150&q=80" class="rounded opacity-70 hover:opacity-100 transition cursor-pointer">
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-gray-500 text-sm">
                <p>&copy; 2026 Fitness Force Pro. All Rights Reserved.</p>
                <p>Designed And Developed  <i class="fas fa-heart text-red-500"></i> by Bilal Ifzal</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, offset: 50, once: true });

        // Mobile Menu Logic
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    </script>
</body>
</html>