
@include('layouts.header')
<div class="flex">
@include('layouts.right-column')
<div class="w-full h-screen">
    <section class="bg-black text-white py-20 w-full h-screen">
        <div class="container flex justify-center w-4/5 mx-auto">
            <div class="w-3/4">
                <h1 class="text-2xl font-bold mb-6">Welcome to <span class="text-blue-500">GetRekt,</span>                 @php
                    $latestUser = \App\Models\CustomizeUsers::latest()->first();
                @endphp
                @if($latestUser)
                    <span class="text-gray-400 mr-2">{{ $latestUser->name }}</span>
                @endif</h1>
                <p class="text-l text-gray-400 mb-8">Customize your user to get the best experience.</p>

                <div class="flex flex-col">
                    <div class="flex gap-4 border-b-1 border-gray-200">
                        <button onclick="toggleContent('learnMore')" class="border-b-2 border-transparent hover:border-white text-white px-8 py-3 relative">
                            Learn More
                            <div class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 transition-transform origin-left" id="learnMoreUnderline"></div>
                        </button>
                        <button onclick="toggleContent('contactUs')" class="border-b-2 border-transparent hover:border-white text-white px-8 py-3 relative">
                            Contact Us
                            <div class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 transition-transform origin-left" id="contactUsUnderline"></div>
                        </button>
                    </div>
                    <div id="learnMore" class="mt-4 text-gray-400">
                        <div class="flex gap-4 p-4">
                            <div class="w-1/2">
                                <h2 class="text-l mb-2 text-blue-500">Learn More About Us</h2>
                                <p class="text-gray-400">GetRekt is a <span class="text-blue-500">platform</span> designed to help you customize and manage your user experience. We offer powerful tools and features to make your journey seamless and enjoyable.</p>
                            </div>
                            <div class="w-1/2 border-1 border-gray-600 rounded-md px-4 bg-gray-900">
                                <h2 class="text-sm mb-2 text-gray-400">terminal</h2>
                                <div class="border-1 border-gray-600 rounded-md p-2 bg-gray-700">
                                    <h2 class="text-sm text-blue-500">npm install tailwindcss @tailwindcss/postcss postcss</h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contactUs" class="hidden mt-4 text-gray-400">
                        <h2 class="text-xl mb-4 text-center">Contact Us</h2>
                        <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col gap-4 max-w-md mx-auto">
                            @csrf
                            <div class="flex flex-col gap-2">
                                <label for="name" class="text-gray-400">Name</label>
                                <input type="text" id="name" name="name" class="bg-gray-700 rounded-md p-2 text-white" required>
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <label for="email" class="text-gray-400">Gmail</label>
                                <input type="email" id="email" name="email" class="bg-gray-700 rounded-md p-2 text-white" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="age" class="text-gray-400">Age</label>
                                <input type="number" id="age" name="age" class="bg-gray-700 rounded-md p-2 text-white" required>
                            </div>

                            <div class="flex flex-col gap-2">
                                <label for="message" class="text-gray-400">Message</label>
                                <textarea id="message" name="message" rows="4" class="bg-gray-700 rounded-md p-2 text-white resize-none" required></textarea>
                            </div>

                            <button type="submit" class="bg-blue-500 text-white rounded-md p-2 hover:bg-blue-600 transition-colors duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                    <script>
                        function toggleContent(section) {
                            const learnMoreContent = document.getElementById('learnMore');
                            const contactUsContent = document.getElementById('contactUs');
                            const learnMoreUnderline = document.getElementById('learnMoreUnderline');
                            const contactUsUnderline = document.getElementById('contactUsUnderline');
                            
                            // Show learn more content by default
                            window.onload = function() {
                                learnMoreContent.classList.remove('hidden');
                                learnMoreUnderline.style.transform = 'scaleX(1)';
                            };
                            
                            if (section === 'learnMore') {
                                contactUsContent.classList.add('hidden');
                                learnMoreContent.classList.remove('hidden');
                                learnMoreUnderline.style.transform = 'scaleX(1)';
                                contactUsUnderline.style.transform = 'scaleX(0)';
                            } else {
                                learnMoreContent.classList.add('hidden');
                                contactUsContent.classList.remove('hidden');
                                contactUsUnderline.style.transform = 'scaleX(1)';
                                learnMoreUnderline.style.transform = 'scaleX(0)';
                            }
                        }

                        // Execute immediately when script loads
                        document.getElementById('learnMoreUnderline').style.transform = 'scaleX(1)';
                    </script>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
