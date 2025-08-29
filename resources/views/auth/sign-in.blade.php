<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    @vite(['resources/css/app.css', 'resources/css/toastr.css'])
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', ui-sans-serif, system-ui, sans-serif;
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-green-100 via-green-50 to-white flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl p-8 md:p-10">
        <h2 class="text-3xl font-bold text-green-600 mb-2 text-center">Sign In</h2>
        <p class="text-gray-500 mb-4 text-center">Welcome back! Please enter your credentials.</p>
        <form method="POST" action="{{ route('sign-in') }}" class="space-y-6">
            @if ($errors->has('error_message'))
                <div class="mb-4 flex justify-center">
                    <div class="w-full bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative flex items-start gap-2" role="alert">
                        <svg class="w-5 h-5 mt-1 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-1.414-1.414A9 9 0 105.636 18.364l1.414-1.414A7 7 0 1118.364 5.636z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01" />
                        </svg>
                        <div>
                            <span class="block text-sm">{{ $errors->first('error_message') }}</span>
                        </div>
                    </div>
                </div>
            @endif
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input id="email" name="email" type="email" required autofocus
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-200 focus:border-green-400 outline-none transition"
                    placeholder="you@example.com" value="{{ old('email') }}">
                @error('email')
                    <span class="text-[11px] text-red-500 mt-1 flex items-center gap-1 font-medium">
                        <svg class="w-3 h-3 text-red-400 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                            stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01" />
                        </svg>
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <div class="relative">
                    <input id="password" name="password" type="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-200 focus:border-green-400 outline-none transition pr-10"
                        placeholder="Your password">
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 px-3 flex items-center text-gray-400 hover:text-green-500 focus:outline-none cursor-pointer"
                        tabindex="-1">
                        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-between">
                {{-- <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox text-green-500 rounded mr-2">
                    <span class="text-sm text-gray-600">Remember me</span>
                </label> --}}
                <a href="#" class="text-sm text-green-500 hover:underline">Forgot password?</a>
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-background hover:bg-hover-active text-white font-bold rounded-lg shadow transition cursor-pointer">Sign
                In</button>
        </form>
        <p class="mt-8 text-center text-sm text-gray-500">Don't have an account? <a href="#"
                class="text-background hover:underline">Sign up</a></p>
    </div>

    @vite(['resources/js/app.js'])
    <script>
        // Password visibility toggle
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        let visible = false;
        togglePassword.addEventListener('click', function() {
            visible = !visible;
            passwordInput.type = visible ? 'text' : 'password';
            eyeIcon.innerHTML = visible ?
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.956 9.956 0 012.042-3.362m3.087-2.968A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.956 9.956 0 01-4.293 5.411M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3l18 18" />` :
                `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />`;
        });
    </script>
</body>

</html>
