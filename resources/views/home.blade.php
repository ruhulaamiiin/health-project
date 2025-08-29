<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NijerShastho | Health Tips | Healthy Life Ideas</title>
    @vite(['resources/css/app.css'])
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400-700;700&display=swap");

        body {
            font-family: "Poppins", sans-serif;
        }

        .search-modal {
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .search-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .search-input {
            transform: translateY(-20px);
            transition: all 0.3s ease;
        }

        .search-modal.active .search-input {
            transform: translateY(0);
        }

        .esc-button {
            background-color: #f3f4f6;
            color: #6b7280;
            border-radius: 4px;
            padding: 2px 6px;
            font-size: 12px;
            font-weight: -500;
            border: 1px solid #e5e7eb;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .esc-button:hover {
            background-color: #e5e7eb;
            color: #4b5563;
        }
    </style>

</head>

<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold text-green-600">
                    <a href="#">Nijershastho</a>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-gray-700 hover:text-green-500">Home</a>
                    <a href="articles.html" class="text-gray-700 hover:text-green-500">Articles</a>
                    <a href="about.html" class="text-gray-700 hover:text-green-500">About</a>
                    <a href="#" class="text-gray-700 hover:text-green-500">Contact</a>
                    <button id="open-search"
                        class="text-gray-700 hover:text-green-500 focus:outline-none flex text-xs border rounded-full px-2 py-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="ml-2 hover:text-green-500">Search...</span>
                    </button>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="open-search-mobile" class="text-gray-800 focus:outline-none mr-4">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    <button id="menu-btn" class="text-gray-800 focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div id="mobile-menu-container" class="fixed inset-0 z-50 hidden">
                <!-- Overlay -->
                <div id="mobile-menu-overlay" class="absolute inset-0 bg-black bg-opacity-50"></div>

                <!-- Menu -->
                <div id="mobile-menu"
                    class="absolute inset-y-0 left-0 w-4/5 max-w-xs bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-6">
                            <div class="text-2xl font-bold text-green-600">
                                <a href="#">Nijershastho</a>
                            </div>
                            <button id="close-menu-btn" class="text-gray-800 focus:outline-none">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Home</a>
                        <a href="articles.html" class="block text-gray-700 hover:text-green-500 py-2">Articles</a>
                        <a href="about.html" class="block text-gray-700 hover:text-green-500 py-2">About</a>
                        <a href="#" class="block text-gray-700 hover:text-green-500 py-2">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-background text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold leading-tight">
                Your Journey to a Healthier Life Starts Here
            </h1>
            <p class="mt-4 text-lg md:text-xl">
                Discover trusted health information, tips, and resources to help you
                live your best life.
            </p>
            <a href="#"
                class="mt-8 inline-block bg-white text-green-500 font-bold px-8 py-4 rounded-full hover:bg-gray-200">Explore
                Articles</a>
        </div>
    </section>

    <!-- Featured Articles -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">
                Featured Articles
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=250&q=80"
                        alt="Healthy Eating" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            The Benefits of a Balanced Diet
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Learn how a balanced diet can improve your physical and mental
                            well-being with these simple nutrition guidelines.
                        </p>
                        <a href="article.html" class="text-green-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>
                <!-- Article 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=250&q=80"
                        alt="Fitness" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            10 Simple Exercises for a Morning Boost
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Start your day with these easy exercises to boost your energy
                            and mood without needing any equipment.
                        </p>
                        <a href="#" class="text-green-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>
                <!-- Article 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1530026186672-2cd00ffc50fe?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&h=250&q=80"
                        alt="Mental Health" class="w-full h-48 object-cover" />
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">
                            Mindfulness and Meditation for Stress Relief
                        </h3>
                        <p class="text-gray-700 mb-4">
                            Discover how mindfulness techniques can help you manage daily
                            stress and improve your focus and productivity.
                        </p>
                        <a href="#" class="text-green-500 font-semibold hover:underline">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="bg-gray-100 py-20">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">
                Stay Updated with Our Newsletter
            </h2>
            <p class="text-gray-700 mb-8">
                Get the latest health tips and articles delivered straight to your
                inbox every week.
            </p>
            <form class="max-w-md mx-auto">
                <div class="flex items-center">
                    <input type="email" class="w-full px-4 py-3 bg-white rounded-l-full focus:outline-none"
                        placeholder="Enter your email" />
                    <button type="submit"
                        class="bg-background text-white px-8 py-3 rounded-r-full hover:bg-green-700">
                        Subscribe
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-bold mb-4 md:mb-0">Nijershastho</div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-green-300">Privacy Policy</a>
                    <a href="#" class="hover:text-green-300">Terms of Service</a>
                    <a href="#" class="hover:text-green-300">Contact Us</a>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-6 pt-6 text-center md:text-left">
                <p>&copy; 2025 Nijershastho. All rights reserved.</p>
                <div class="flex justify-center md:justify-start space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Search Modal -->
    <div id="search-modal" class="search-modal fixed inset-0 bg-black/50 z-50 flex items-start justify-center pt-20">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-2xl mx-4">
            <div class="relative p-4">
                <button id="close-search"
                    class="absolute right-4 top-4 flex items-center space-x-2 text-gray-500 hover:text-gray-700">
                    <span class="esc-button">Esc</span>
                </button>
                <div class="search-input">
                    <div class="flex items-center border-b-2 border-green-500 py-1 mt-6">
                        <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <input type="text" class="w-full outline-none text-md" placeholder="Search articles..."
                            autofocus />
                    </div>
                    <div class="mt-4 text-gray-500 text-sm">
                        <p>Type to search health articles, tips, and resources</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite(['resources/js/app.js'])

    <script type="module" src="{{ asset('js/home.js') }}"></script>
</body>

</html>
