<div x-data="{ activeTab: 'recharge' }">
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative" x-data="{ showLangModal: false }">
            <a href="/recharge" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Record</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            {{-- <a class="flex  space-x-2" href="/withdrawals-list">
                <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt="">
            </a> --}}
        </div>
    </header>

    <div class="mt-20 text-sm font-bold">
        <div class="w-[90%] mx-auto flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 ml-20">
            <button @click="activeTab = 'recharge'"
                :class="activeTab === 'recharge' ? 'bg-white text-black shadow' : 'text-black'"
                class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                recharge
            </button>
            <button @click="activeTab = 'withdrawal'"
                :class="activeTab === 'withdrawal' ? 'bg-white text-black shadow' : 'text-black'"
                class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                withdrawal
            </button>
        </div>

        <div class="mt-20">
            <div x-show="activeTab === 'recharge'" class="p-6  w-full ">
                <div class="flex flex-col items-center justify-center text-center h-full">
                    <div class="flex flex-col items-center">
                        <div class="icons h-20 w-20">
                            <img src="{{ asset('assets/images/empty-image-default.png') }}" alt="">
                        </div>
                        <p class="text-2xl text-gray-400 mt-2">No Data Available</p>
                    </div>
                </div>
            </div>

            <div x-show="activeTab === 'withdrawal'" class="p-6  w-full ">
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
</div>
