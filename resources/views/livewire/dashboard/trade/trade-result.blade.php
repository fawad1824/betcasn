<div>
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Trade</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt=""> --}}
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
                <button @click="activeTab = 'trade'"
                    :class="activeTab === 'trade' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition">
                    Trade
                </button>
            </div>


            <!-- Forms -->
            <div class="flex bg-white">
                <!-- all Form -->
                <div x-show="activeTab === 'all'" class="p-6 w-full">
                    <div class="w-full bg-white p-6">
                        <div class="text-gray-700 text-sm font-medium border-b border-gray-100 pb-3">
                            <div class="w-full flex items-center justify-between">
                                <div>
                                    <p class="text-gray-500">Quantity</p>
                                    <p class="text-black font-semibold">0.0991 (TRX)</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-gray-500">Amount Type</p>
                                    <p class="text-black">income</p>
                                </div>
                            </div>
                            <div class="w-full flex items-center justify-between mt-2">
                                <div>
                                    <p class="text-gray-500">Time</p>
                                    <p class="text-black font-semibold">2025-02-27 20:46:45</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-gray-500">Source</p>
                                    <p class="text-black">Mining</p>
                                </div>
                            </div>
                        </div>


                        <div class="text-center text-gray-400 text-sm pt-4">
                            No More Items
                        </div>
                    </div>
                </div>

                <!-- trade Form -->
                <div x-show="activeTab === 'trade'" class="p-6  w-full ">
                    <div class="flex flex-col items-center justify-center text-center h-full mt-20">
                        <div class="flex flex-col items-center">
                            <div class="icons h-20 w-20">
                                <img src="{{ asset('assets/images/empty-image-default.png') }}" alt="">
                            </div>
                            <p class="text-2xl text-gray-400 mt-2">No Data Available</p>
                        </div>
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
                    <button @click="showModal = false"
                        class="w-full mt-2 bg-red-500 text-white p-2 rounded">Close</button>
                </div>
            </div>

        </div>
    </main>
</div>
