<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')
    <header class="bg-black text-white p-4 border-b-1 border-gray-500">
        <div class="container mx-auto flex justify-between items-center w-3/4">
            <a href="/"><h1 class="text-3xl font-bold underline">Logo</h1></a>
            <div class="hidden md:flex">
                <input type="text" placeholder="Search" class="rounded-md p-2 border-b-2 border-white focus:outline-none focus:border-black">
                <button class="bg-white text-black rounded-md p-2 cursor-pointer">Search</button>
            </div>
            <nav class="gap-4 items-center hidden md:flex">
                <ul class="flex gap-6">
                    <li><a href="/" class="hover:text-blue-300 transition-colors duration-300">Home</a></li>
                    <li><a href="/about" class="hover:text-blue-300 transition-colors duration-300">About</a></li>
                    <li><a href="/contact" class="hover:text-blue-300 transition-colors duration-300">Contact</a></li>
                </ul>
                <a href="https://github.com/"><img src="{{ asset('images/github2.png') }}" alt="Logo" class="w-10 h-10 cursor-pointer"></a>
            </nav>
            <div class="md:hidden flex items-center">
                <button class="text-white cursor-pointer w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </header>
</body>
</html>