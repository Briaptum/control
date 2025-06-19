<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="right-column">
        @yield('content')
        <section class="right-column-section bg-black w-1/6 h-screen p-3">
            <div class="flex flex-col gap-3">
                <div class="bg-white w-full h-10 rounded-md p-2 min-h-32">
                    <h1 class="text-black">Right Column</h1>
                    <nav class="flex flex-col gap-2">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="bg-white w-full h-10 rounded-md">
                    <h1 class="text-black">Right Column</h1>
                </div>
                <div class="bg-white w-full h-10 rounded-md">
                    <h1 class="text-black">Right Column</h1>
                </div>
                <div class="bg-white w-full h-10 rounded-md"></div>
            </div>
        </section>
    </div>
</body>
</html>