<div>
    @include('livewire.dashboard.header-component')
    <div class="w-full mx-auto bg-white min-h-screen p-5">
        <!-- Profile Section -->
        <div class="mt-20 p-4 flex items-center space-x-4">
            <img src="{{ Auth::user()->image }}" class="w-12 h-12 rounded-full" alt="Profile">
            <div>
                <p class="font-bold text-lg">UID: {{ Auth::user()->uuid }}</p>
                <p class="text-gray-500 text-sm">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <div style="width: 100%;" class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div
                    class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                </div>
            </div>

            <h2 class="text-lg font-semibold">Total Income</h2>

            <div class="flex space-x-10 mt-4">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/images/tron-trx-logo.png') }}" alt="TRX" class="mb-5 w-6 h-6">
                    <div>
                        <p class="text-[20px]"><b>TRX</b></p>
                        <p class="text-lg font-bold">0</p>
                        {{-- <p class="text-xs text-gray-400">Total Income</p> --}}
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('assets/images/tether-usdt-logo.png') }}" alt="USDT" class="mb-5 w-6 h-6">
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg" alt="Mastercard"
                    class="w-8 h-8">
            </div>
        </div>


        <!-- Buttons -->
        <div class="grid grid-cols-3 gap-2 mx-4 mt-4">
            <a href="/recharge" wire:navigate
                class="p-2 bg-gray-50 rounded-lg flex flex-col items-center shadow-sm hover:bg-gray-100">
                <img class="h-8 w-8 sm:h-12 sm:w-12" src="https://www.betcasn.com/images/mine/recharge.png"
                    alt="Recharge">
                <span class="text-sm sm:text-lg mt-1">Recharge</span>
            </a>
            <a href="/withdrawl" wire:navigate
                class="p-2 bg-gray-50 rounded-lg flex flex-col items-center shadow-sm hover:bg-gray-100">
                <img class="h-8 w-8 sm:h-12 sm:w-12" src="https://www.betcasn.com/images/mine/withdraw.png"
                    alt="Withdraw">
                <span class="text-sm sm:text-lg mt-1">Withdraw</span>
            </a>
            <a href="/exchange" wire:navigate
                class="p-2 bg-gray-50 rounded-lg flex flex-col items-center shadow-sm hover:bg-gray-100">
                <img class="h-8 w-8 sm:h-12 sm:w-12" src="https://www.betcasn.com/images/mine/transfer.png"
                    alt="Flash Exchange">
                <span class="text-sm sm:text-lg mt-1">Flash Exchange</span>
            </a>
        </div>


        <!-- Menu Items -->
        <div class="mt-10 mx-4">
            <ul class="space-y-5 text-gray-700 text-[16px] sm:text-[20px]">
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/prizeWheel.png"
                        alt="">
                    <span>Prize Wheel</span>
                </li>
                <li>
                    <a href="/trade" wire:navigate class="flex items-center space-x-4">
                        <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/trade.png"
                            alt="">
                        <span>Trade</span>
                    </a>
                </li>
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/recharge_record.png"
                        alt="">
                    <span>Record</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/news.png"
                        alt="">
                    <span>News</span>
                </li>
                <li>
                    <a href="/setting" wire:navigate class="flex items-center space-x-4">
                        <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/setup.png"
                            alt="">
                        <span>Settings</span>
                    </a>
                </li>
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/language.png"
                        alt="">
                    <span>Language</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/rebate.png"
                        alt="">
                    <span>Send Red Packet</span>
                </li>
                <li class="flex items-center space-x-4">
                    <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/system.png"
                        alt="">
                    <span>Red Packet Password</span>
                </li>
                <li class="flex items-center space-x-4">
                    <a href="/exchange" wire:navigate class="flex items-center space-x-4">
                        <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/exchange.png"
                            alt="">
                        <span>Exchange</span>
                    </a>
                </li>
                <li>
                    <a href="/team" wire:navigate class="flex items-center space-x-4">
                        <img class="h-6 w-6 sm:h-8 sm:w-8" src="https://www.betcasn.com/images/mine/team.png"
                            alt="">
                        <span>My Team</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>

    @include('livewire.dashboard.float-icon-component')
    @include('livewire.dashboard.right-float-icon-component')
</div>
