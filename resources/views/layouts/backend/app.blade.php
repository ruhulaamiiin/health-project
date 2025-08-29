<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');

        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>

</head>

<body class="bg-green-50 h-screen md:overflow-hidden overflow-auto">
    <div class="relative h-full md:flex">
        @include('layouts.backend.includes.sidebar')


        <!-- Main content -->
        <div class="flex-1 flex flex-col md:ml-64 overflow-y-auto" style="height: 100vh;">
            @include('layouts.backend.includes.header')

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden bg-gray-50 p-6 scrollbar-thin">
                @yield('page-title')
                @yield('content')
            </main>
        </div>
    </div>

    @vite(['resources/js/app.js'])

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById("menu-button");
            const sidebar = document.getElementById("sidebar");
            const backdrop = document.getElementById("backdrop");
            const sidebarNav = document.getElementById("sidebar-nav");

            const profileButton = document.getElementById("profile-button");
            const profileMenu = document.getElementById("profile-menu");

            const notificationButton = document.getElementById("notification-button");
            const notificationMenu = document.getElementById("notification-menu");

            function openSidebar() {
                sidebar.classList.remove("-translate-x-full");
                backdrop.classList.remove("hidden");
            }

            function closeSidebar() {
                sidebar.classList.add("-translate-x-full");
                backdrop.classList.add("hidden");
            }

            menuButton.addEventListener("click", (e) => {
                e.stopPropagation();
                openSidebar();
            });

            backdrop.addEventListener("click", closeSidebar);
            sidebarNav.addEventListener("click", (e) => {
                if (e.target.closest("a") && window.innerWidth < 768) {
                    closeSidebar();
                }
            });

            function setupDropdown(button, menu) {
                button.addEventListener("click", (e) => {
                    e.stopPropagation();
                    // Close all other dropdowns first
                    closeAllDropdowns(menu);
                    menu.classList.toggle("opacity-0");
                    menu.classList.toggle("invisible");
                    menu.classList.toggle("scale-95");
                    menu.classList.toggle("scale-100");
                });
            }

            function closeAllDropdowns(excludeMenu = null) {
                if (profileMenu !== excludeMenu) {
                    profileMenu.classList.add("opacity-0");
                    profileMenu.classList.add("invisible");
                    profileMenu.classList.add("scale-95");
                    profileMenu.classList.remove("scale-100");
                }
                if (notificationMenu !== excludeMenu) {
                    notificationMenu.classList.add("opacity-0");
                    notificationMenu.classList.add("invisible");
                }
            }

            setupDropdown(profileButton, profileMenu);
            setupDropdown(notificationButton, notificationMenu);

            document.addEventListener("click", (event) => {
                // Close dropdowns if click is outside of them
                if (
                    !profileButton.contains(event.target) &&
                    !profileMenu.contains(event.target)
                ) {
                    profileMenu.classList.add("opacity-0");
                    profileMenu.classList.add("invisible");
                    profileMenu.classList.add("scale-95");
                    profileMenu.classList.remove("scale-100");
                }
                if (
                    !notificationButton.contains(event.target) &&
                    !notificationMenu.contains(event.target)
                ) {
                    notificationMenu.classList.add("opacity-0");
                    notificationMenu.classList.add("invisible");
                }
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
