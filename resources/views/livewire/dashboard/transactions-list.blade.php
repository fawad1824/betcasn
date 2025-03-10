<div>
    <div x-data="{ activeTab: 'close' }">
        <header style="z-index: 100"
            class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-4 pl-7 pr-7">
            <nav class="flex space-x-5 relative" x-data="{ showLangModal: false }">
                <a href="/transactions" wire:navigate>
                    <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}"
                        alt="">
                </a>
            </nav>
            <div class="flex space-x-2">
                <h1 class="text-2xl"><b>Records</b></h1>
            </div>

            <div class="text-xl font-bold flex space-x-2">

            </div>
        </header>

        <div class="mt-20 text-sm font-bold">
            <div class="w-full flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 pr-1">
                <button @click="activeTab = 'close'"
                    :class="activeTab === 'close' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                    Close
                </button>
                <button @click="activeTab = 'transaction'"
                    :class="activeTab === 'transaction' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                    Transaction
                </button>
                <button @click="activeTab = 'statistics'"
                    :class="activeTab === 'statistics' ? 'bg-white text-black shadow' : 'text-black'"
                    class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                    Statistics
                </button>
            </div>

            <div x-show="activeTab === 'close'" class="p-6  w-full ">
                <div class="flex flex-col items-center justify-center text-center h-full">
                    <div class="flex flex-col items-center">
                        <div class="icons h-20 w-20">
                            <img src="{{ asset('assets/images/empty-image-default.png') }}" alt="">
                        </div>
                        <p class="text-2xl text-gray-400 mt-2">No Data Available</p>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'transaction'" class="p-6  w-full ">
                <div class="flex flex-col items-center justify-center text-center h-full">
                    <div class="flex flex-col items-center">
                        <div class="icons h-20 w-20">
                            <img src="{{ asset('assets/images/empty-image-default.png') }}" alt="">
                        </div>
                        <p class="text-2xl text-gray-400 mt-2">No Data Available</p>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'statistics'" class="p-6  w-full ">
                <div class="flex flex-col items-center justify-center text-center h-full">
                    <div class="flex flex-col items-center">
                        <div class="icons h-20 w-20">
                            <img src="{{ asset('assets/images/empty-image-default.png') }}" alt="">
                        </div>
                        <p class="text-2xl text-gray-400 mt-2">No Data Available</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
