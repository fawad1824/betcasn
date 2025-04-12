<div>
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Team</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                {{-- <img style="width: 25px;" src="{{asset('assets/images/icon_history.webp')}}" alt=""> --}}
            </a>
        </div>
    </header>
    <main class="mt-20">
        <div x-data="{ activeTab: 'all', showModal: false, countryCode: '+1' }"> <!-- Wrap everything in one Alpine.js scope -->


            <!-- Toggle Buttons -->
            <div class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-2 pr-2">
                <button @click="activeTab = 'all'"
                    :class="activeTab === 'all' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                    All
                </button>
                <button @click="activeTab = 'level1'"
                    :class="activeTab === 'level1' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                    Level1
                </button>
                <button @click="activeTab = 'level2'"
                    :class="activeTab === 'level2' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                    level2
                </button>
                <button @click="activeTab = 'level3'"
                    :class="activeTab === 'level3' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                    level3
                </button>

            </div>


            <!-- Forms -->
            <div class="flex bg-white">
                <!-- all Form -->
                <div x-show="activeTab === 'all'" class="p-6 w-full">
                    <div style="width: 100%;height: 600px;border-radius: 42px;"
                        class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-20">
                            <div
                                class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                            </div>
                        </div>

                        <h2 class="text-4xl font-semibold"><span class="text-[#aaf13b]">Accumulate</span> Reward</h2>

                        <div class="flex space-x-10 mt-4">
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="TRX"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>TRX</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="USDT"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>USDT</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Levels -->
                        <div class="mt-10 text-black space-y-4">
                            <br><br><br><br>
                        </div>

                        <!-- Mastercard Icon -->
                        <div class="absolute top-4 right-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                alt="Mastercard" class="w-8 h-8">
                        </div>
                    </div>
                </div>

                <!-- level1 Form -->
                <div x-show="activeTab === 'level1'" class="p-6  w-full ">
                    <div style="width: 100%;height: 600px;border-radius: 42px;"
                        class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-20">
                            <div
                                class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                            </div>
                        </div>

                        <h2 class="text-4xl font-semibold"><span class="text-[#aaf13b]">Accumulate</span> Reward</h2>

                        <div class="flex space-x-10 mt-4">
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="TRX"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>TRX</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="USDT"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>USDT</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Levels -->
                        <div class="mt-10 text-black space-y-4">
                            <br><br><br><br>
                        </div>

                        <!-- Mastercard Icon -->
                        <div class="absolute top-4 right-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                alt="Mastercard" class="w-8 h-8">
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'level2'" class="p-6  w-full ">
                    <div style="width: 100%;height: 600px;border-radius: 42px;"
                        class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-20">
                            <div
                                class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                            </div>
                        </div>

                        <h2 class="text-4xl font-semibold"><span class="text-[#aaf13b]">Accumulate</span> Reward</h2>

                        <div class="flex space-x-10 mt-4">
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="TRX"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>TRX</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="USDT"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>USDT</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Levels -->
                        <div class="mt-10 text-black space-y-4">
                            <br><br><br><br>
                        </div>

                        <!-- Mastercard Icon -->
                        <div class="absolute top-4 right-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                alt="Mastercard" class="w-8 h-8">
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'level3'" class="p-6  w-full ">
                    <div style="width: 100%;height: 600px;border-radius: 42px;"
                        class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-20">
                            <div
                                class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                            </div>
                        </div>

                        <h2 class="text-4xl font-semibold"><span class="text-[#aaf13b]">Accumulate</span> Reward</h2>

                        <div class="flex space-x-10 mt-4">
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="TRX"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>TRX</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <img src="{{asset('assets/images/tron-trx-logo.png')}}" alt="USDT"
                                    class="mb-5 w-6 h-6">
                                <div>
                                    <p class="text-[20px]"><b>USDT</b></p>
                                    <p class="text-lg font-bold">0</p>
                                    {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                                </div>
                            </div>
                        </div>

                        <!-- Levels -->
                        <div class="mt-10 text-black space-y-4">
                            <br><br><br><br>
                        </div>

                        <!-- Mastercard Icon -->
                        <div class="absolute top-4 right-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                alt="Mastercard" class="w-8 h-8">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
