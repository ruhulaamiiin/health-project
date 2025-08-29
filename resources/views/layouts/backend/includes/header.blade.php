<!-- Header -->
<header class="sticky top-0 bg-white z-10 flex justify-between items-center h-16 p-4 border-b-2 border-gray-100">
    <div class="flex items-center">
        <button id="menu-button"
            class="md:hidden text-gray-500 hover:bg-gray-100 w-8 h-8 flex items-center justify-center rounded-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu-icon lucide-menu">
                <path d="M4 12h16" />
                <path d="M4 18h16" />
                <path d="M4 6h16" />
            </svg>
        </button>
    </div>
    <div class="flex items-center space-x-4">
        <!-- Notification dropdown -->
        <div class="relative">
            <button id="notification-button"
                class="relative w-8 h-8 flex items-center justify-center text-gray-600 hover:text-gray-800 rounded-full hover:bg-gray-100 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="">
                    <path d="M10.268 21a2 2 0 0 0 3.464 0" />
                    <path
                        d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326" />
                </svg>
                <span
                    class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full text-white text-xs flex items-center justify-center border-2 border-white">3</span>
            </button>
            <div id="notification-menu"
                class="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg py-2 opacity-0 invisible transition-opacity duration-200 z-20 border border-gray-200">
                <div class="px-4 py-2 text-sm font-bold text-gray-700">Notifications</div>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b border-gray-100 last:border-b-0">
                    <p class="font-semibold">New comment</p>
                    <p class="text-xs text-gray-500">John Doe commented on your post.</p>
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b border-gray-100 last:border-b-0">
                    <p class="font-semibold">Post published</p>
                    <p class="text-xs text-gray-500">Your post "Healthy Breakfast" is live.</p>
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b border-gray-100 last:border-b-0">
                    <p class="font-semibold">New user registered</p>
                    <p class="text-xs text-gray-500">A new user has registered on your blog.</p>
                </a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-center">
                    View all notifications
                </a>
            </div>
        </div>
        <!-- Profile dropdown -->
        <div class="relative">
            <button id="profile-button" class="flex items-center text-gray-600 cursor-pointer">
                @php
                    $user = auth()?->user();
                    $avatar = $user?->avatar ?? null;
                    $name = $user?->name ?? '';
                    $nameParts = explode(' ', trim($name));
                    if (count($nameParts) > 1) {
                        $initials = strtoupper(Str::substr($nameParts[0], 0, 1) . Str::substr($nameParts[1], 0, 1));
                    } else {
                        $initials = strtoupper(Str::substr($name, 0, 2));
                    }
                @endphp
                @if ($avatar)
                    <img src="{{ $avatar }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                @else
                    <span
                        class="border border-blue-500 w-8 h-8 rounded-full mr-2 bg-gray-300 flex items-center justify-center text-md font-bold text-gray-500">
                        {{ $initials }}
                    </span>
                @endif
                <div class="hidden md:inline-block text-left">
                    <span class="block text-sm font-semibold">{{ $name }}</span>
                    <span class="block text-xs text-gray-500 font-medium">{{ ucfirst($user?->role) }}</span>
                </div>
            </button>
            <div id="profile-menu"
                class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl py-2 opacity-0 invisible transition-all duration-200 z-20 transform scale-95 origin-top-right border border-gray-200">
                <a href="{{ route('profile.index') }}"
                    class="flex items-center px-4 py-2 border-b border-gray-100 hover:bg-gray-100">
                    @if ($avatar)
                        <img src="{{ $avatar }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                    @else
                        <span
                            class="border border-blue-500 w-8 h-8 rounded-full mr-2 bg-gray-300 flex items-center justify-center text-md font-bold text-gray-500">
                            {{ $initials }}
                        </span>
                    @endif
                    <div>
                        <p class="text-sm font-semibold text-gray-800">{{ $name }}</p>
                        <p class="text-xs text-gray-500">{{ ucfirst($user?->role) }}</p>
                    </div>
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 border-b border-gray-100">
                    <i data-lucide="settings" class="w-4 h-4 mr-2"></i>
                    Settings
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    <i data-lucide="log-out" class="w-4 h-4 mr-2"></i>
                    Sign out
                </a>
            </div>
        </div>
    </div>
</header>
