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
        <section class="right-column-section w-1/6 min-w-64 bg-black h-screen p-3 border-r-2 border-gray-200">
            <div class="flex flex-col gap-3">
                <div class="bg-white w-full rounded-md p-2 min-h-32">
                    <div class="flex items-center gap-2 mb-4">
                        <img src="{{ asset('images/star.png') }}" alt="star" class="w-4 h-4">
                        <h1 class="text-gray-600 text-l font-bold">Getting started</h1>
                    </div>
                    <nav class="flex flex-col gap-2">
                        <ul class="flex flex-col gap-2 ml-4">
                            <li class="flex items-center gap-2"><img src="{{ asset('images/home.png') }}" alt="Home" class="w-4 h-4"><a href="/">Home</a></li>
                            <li class="flex items-center gap-2"><img src="{{ asset('images/info-button.png') }}" alt="Home" class="w-4 h-4"><a href="/about">About</a></li>
                            <li class="flex items-center gap-2"><img src="{{ asset('images/user.png') }}" alt="Home" class="w-4 h-4"><a href="/users">Users</a></li>
                            <li class="flex items-center gap-2"><img src="{{ asset('images/phone.png') }}" alt="Home" class="w-4 h-4"><a href="/contact">Contact</a></li>
                            

                        </ul>
                    </nav>
                </div>
                <div class= "w-full rounded-md p-2 border-l-2 border-gray-200">
                    <h1 class="text-gray-400 text-l font-bold">customize your model</h1>
                        <form class="flex flex-col gap-3 mt-4" action="{{ route('customize-user.store') }}" method="POST">
                        @csrf
                        <div class="flex flex-col">
                            <label for="name" class="text-gray-400 text-sm mb-1">Name</label>
                            <input type="text" id="name" name="name" class="bg-gray-700 rounded-md p-2 text-white" required>
                        </div>

                        <div class="flex flex-col">
                            <label for="age" class="text-gray-400 text-sm mb-1">Age</label>
                            <input type="number" id="age" name="age" class="bg-gray-700 rounded-md p-2 text-white" required>
                        </div>

                        <div class="flex flex-col">
                            <label for="ethnicity" class="text-gray-400 text-sm mb-1">Ethnicity</label>
                            <select id="ethnicity" name="ethnicity" class="bg-gray-700 rounded-md p-2 text-white cursor-pointer" required>
                                <option value="">Select ethnicity</option>
                                <option value="asian">Asian</option>
                                <option value="black">Black</option>
                                <option value="hispanic">Hispanic</option>
                                <option value="white">White</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white rounded-md p-2 mt-2 hover:bg-blue-600 cursor-pointer">
                            Save Changes
                        </button>
                    </form>
                    
                    @if(session('success'))
                        <div id="success-alert" class="mt-3 p-3 bg-green-500 text-white rounded-md text-sm flex justify-between items-center">
                            <span>{{ session('success') }}</span>
                            <button onclick="dismissAlert()" class="text-white hover:text-gray-200 text-lg">&times;</button>
                        </div>
                        <script>
                            setTimeout(function() {
                                dismissAlert();
                            }, 3000);
                            
                            function dismissAlert() {
                                const alert = document.getElementById('success-alert');
                                if (alert) {
                                    alert.style.transition = 'opacity 0.5s ease-out';
                                    alert.style.opacity = '0';
                                    setTimeout(function() {
                                        alert.remove();
                                    }, 500);
                                }
                            }
                        </script>
                    @endif
                </div>



                <div class="bg-white w-full rounded-md p-2 border-l-2 border-gray-200">
                    <h1 class="text-gray-400 text-l font-bold">Search History</h1>
                    <div class="flex flex-col gap-2 mt-4">
                        <div class="flex items-center gap-2">
                            <img src="{{ asset('images/search.png') }}" alt="search" class="w-4 h-4">
                            <h1 class="text-gray-400 text-sm">Search 1</h1>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</body>
</html>