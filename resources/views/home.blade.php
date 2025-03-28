<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Betcrown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>

    <div x-data="{ activeTab: 'email', showModal: false, countryCode: '+1' }"> <!-- Wrap everything in one Alpine.js scope -->
        <header class="flex justify-between items-center border-b-2 border-gray-300 p-2 pl-5 pr-5">
            <div class="text-xl font-bold">
                <img style="width: 25px;" src="https://www.betcasn.com/images/icon_close.png" alt="">
            </div>
            <div class="text-sm font-bold">
                <!-- Toggle Buttons -->
                <div class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-2 pr-2">
                    <button @click="activeTab = 'email'"
                        :class="activeTab === 'email' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                        Email
                    </button>
                    <button @click="activeTab = 'phone'"
                        :class="activeTab === 'phone' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                        Phone
                    </button>
                </div>
            </div>

            <nav class="flex space-x-4 relative" x-data="{ showLangModal: false }">
                <!-- Language Icon -->
                <img @click="showLangModal = true" style="width: 25px; cursor: pointer;"
                    src="https://www.betcasn.com/images/icon_lang.png" alt="">

                <!-- Language Modal -->
                <div x-show="showLangModal" @click.away="showLangModal = false"
                    class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg p-4 transform -translate-x-full transition-transform duration-300 ease-in-out"
                    :class="showLangModal ? 'translate-x-0' : '-translate-x-full'">
                    <h2 class="text-lg font-bold mb-4">Select Language</h2>
                    <ul>
                        <li class="p-2 hover:bg-gray-200 cursor-pointer">English</li>
                        <li class="p-2 hover:bg-gray-200 cursor-pointer">French</li>
                    </ul>
                    <!-- Close Button -->
                    <button @click="showLangModal = false" class="mt-4 p-2 bg-gray-300 rounded w-full">Close</button>
                </div>
            </nav>
        </header>

        <!-- Forms -->
        <div class="flex bg-white mt-20">
            <!-- Email Form -->
            <div x-show="activeTab === 'email'" class="p-6 w-full">
                <main class="flex items-center justify-between">
                    <div class="flex-row">
                        <h1 class="text-3xl"><b>Login</b></h1>
                        <h3 class="text-xl mb-4 text-left">Email Login</h3>
                    </div>
                    <div class="flex">
                        <img src="https://www.betcasn.com/images/register_1.png" alt="Logo" class="w-48">
                    </div>
                </main>
                <div>
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Email</h1>
                    <input type="email" placeholder="Your Email" class="w-full p-2 border rounded mb-2">
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Password</h1>
                    <input type="password" placeholder="Password" class="w-full p-2 border rounded mb-2">
                    <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>
                    <button class="w-full bg-black text-white p-2 rounded mt-3">Login</button>
                </div>
            </div>

            <!-- Phone Form -->
            <div x-show="activeTab === 'phone'" class="p-6  w-[70%] ">
                <main class="flex items-center justify-between">
                    <div class="flex-row">
                        <h1 class="text-3xl"><b>Login</b></h1>
                        <h3 class="text-xl  mb-4 text-left">Phone Login</h3>
                    </div>
                    <div class="flex">
                        <img src="https://www.betcasn.com/images/register_1.png" alt="Logo" class="w-48">
                    </div>
                </main>
                <div>
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                    <div class="flex items-center space-x-2 border rounded">
                        <button @click="showModal = true" class="bg-gray-200 p-2 rounded text-black">
                            <span x-text="countryCode"></span>
                        </button>
                        <input type="text" placeholder="Your Phone Number"
                            class="w-full p-2 border-none outline-none">
                    </div>
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Password</h1>
                    <input type="password" placeholder="Password" class="w-full p-2 border rounded mb-2">
                    <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>
                    <button class="w-full bg-black text-white p-2 rounded mt-3">Login</button>
                </div>
            </div>
        </div>

        <!-- Country Code Modal -->
        <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-end" x-cloak>
            <div class="bg-white w-full p-4 rounded-t-lg">
                <h2 class="text-lg font-bold mb-4">Select Country</h2>
                <button @click="countryCode = '+1'; showModal = false"
                    class="block w-full text-left p-2 hover:bg-gray-200">🇺🇸 United States (+1)</button>
                <button @click="countryCode = '+92'; showModal = false"
                    class="block w-full text-left p-2 hover:bg-gray-200">🇵🇰 Pakistan (+92)</button>
                <button @click="showModal = false" class="w-full mt-2 bg-red-500 text-white p-2 rounded">Close</button>
            </div>
        </div>

    </div>

    <div class="flex-row mt-20 text-center">
        <h1 class="text-sm">Don't have an account yet?</h1>
        <h3 class="text-sm mb-4"><b><a href="/v1/register">Register</a></b></h3>
    </div>


    <div class="fixed text-right bottom-20 right-5 flex flex-col items-center space-y-3">


        <!-- WhatsApp Button -->
        <a href="https://wa.me/+447543918264" target="_blank" class=" text-white p-1  ">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                class="w-12 h-12">
        </a>

        <!-- Telegram Button -->
        <a href="https://t.me/yourusername" target="_blank" class=" text-white p-1 ">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram"
                class="w-8 h-8">
        </a>


    </div>

</body>

</html>
