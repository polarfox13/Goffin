<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goffin - Procrastination Assistant</title>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 flex items-center justify-center min-h-screen">
    <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
        <header class="bg-white dark:bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex">
                        <!-- Your logo or branding goes here -->
                    </div>
                    @if (Route::has('login'))
                    <div class="hidden sm:flex sm:items-center">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Sign Up
                        </a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </header>

        <main class="flex-1 flex flex-col items-center justify-center">
            <section class="bg-white dark:bg-gray-900 w-full">
                <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                    <img src="{{ asset('storage/MissGoffin_724x1024.png') }}" alt="Goffin Logo" class="mx-auto w-1/4">

                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Goffin</h1>
                    <div class="text-center">
                        <p class="mt-6 text-lg leading-8 text-gray-600">Goffin is a Procrastination Assistant. Waste your time with Miss Goffin.</p>
                      </div>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 mt-8">
                        <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800">
                            Get started
                                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                                <a href="#" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-70">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </section>

                </main>
               

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    creative-chaos.dev - 2023/24
                </footer>
            </div>

</body>
</html>
