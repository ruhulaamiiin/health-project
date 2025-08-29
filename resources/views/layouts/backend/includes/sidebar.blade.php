<!-- Mobile menu backdrop -->
<div id="backdrop" class="fixed inset-0 bg-black opacity-50 z-30 hidden md:hidden"></div>

<!-- Sidebar -->
<aside id="sidebar"
    class="bg-blue-500 text-white w-64 fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition duration-300 ease-in-out z-30 shadow-lg">
    <div class="flex items-center h-16 border-b border-active px-4">
        <h1 class="text-2xl font-bold text-white">NijerShastho</h1>
    </div>
    <div
        class="h-[calc(100%-4rem)] overflow-y-auto space-y-2 px-2 scrollbar-thin scrollbar-thumb-green-600 scrollbar-track-green-400">
        <nav class="flex-1 mt-4" id="sidebar-nav">
            <div>
                <p class="px-4 text-[12px] text-white tracking-wider font-medium">Platform</p>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center py-2 px-4 rounded-lg text-white hover:bg-blue-700 mt-2 text-sm font-medium {{ request()->routeIs('dashboard') ? 'bg-blue-600' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-3">
                        <rect width="7" height="9" x="3" y="3" rx="1" />
                        <rect width="7" height="5" x="14" y="3" rx="1" />
                        <rect width="7" height="9" x="14" y="12" rx="1" />
                        <rect width="7" height="5" x="3" y="16" rx="1" />
                    </svg>
                    Dashboard
                </a>
            </div>
            <div class="mt-6">
                <p class="px-4 text-[12px] text-white tracking-wider font-medium">Categories</p>
                <a href="{{ route('category') }}"
                    class="flex items-center py-2 px-4 rounded-lg text-white mt-2 text-sm font-medium hover:bg-blue-700 {{ request()->routeIs('category') ? 'bg-blue-600' : '' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        class="mr-3" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-tag-icon lucide-tag">
                        <path
                            d="M12.586 2.586A2 2 0 0 0 11.172 2H4a2 2 0 0 0-2 2v7.172a2 2 0 0 0 .586 1.414l8.704 8.704a2.426 2.426 0 0 0 3.42 0l6.58-6.58a2.426 2.426 0 0 0 0-3.42z" />
                        <circle cx="7.5" cy="7.5" r=".5" fill="currentColor" />
                    </svg>
                    Category
                </a>
            </div>
            <div class="mt-6">
                <p class="px-4 text-[12px] text-white tracking-wider font-medium">Posts</p>
                <a href="#"
                    class="flex items-center py-2 px-4 rounded-lg text-white hover:bg-hover-active mt-2 text-sm font-medium hover:bg-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-3">
                        <path d="M15 18h-5" />
                        <path d="M18 14h-8" />
                        <path
                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0v-9a2 2 0 0 1 2-2h2" />
                        <rect width="8" height="4" x="10" y="6" rx="1" />
                    </svg>
                    All Posts
                </a>
                <a href="#"
                    class="flex items-center py-2 px-4 rounded-lg text-white hover:bg-hover-active mt-2 text-sm font-medium hover:bg-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-3">
                        <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                        <path
                            d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                    </svg>
                    Create New Post
                </a>
            </div>
        </nav>
    </div>
</aside>
