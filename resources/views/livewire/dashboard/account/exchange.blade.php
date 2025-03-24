<div>
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Flash Exchange</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt="">
            </a>
        </div>
    </header>


    <main>
        <div class="w-full  md:full lg:w-full mx-auto rounded-lg bg-white p-6">
            <h2 class="mb-4 text-center text-xl md:text-2xl font-semibold">Flash Exchange</h2>

            <!-- Exchange Box -->
            <div class="mx-auto w-full rounded-lg bg-gray-100 p-4 shadow-md">
                <div class="flex items-center justify-between rounded-lg p-4">
                    <div class="flex flex-col">
                        <div class="flex items-center space-x-2 font-bold">
                            <span class="text-gray-600 w-10">From</span>
                            <img src="https://cryptologos.cc/logos/tron-trx-logo.png?v=025" alt="TRX"
                                class="h-6 w-6 md:h-8 md:w-8" />
                            <span class="font-bold">TRX</span>
                        </div>
                        <div class="ml-2 h-5 border-l-2 border-gray-300"></div>
                        <div class="flex items-center space-x-2 font-bold">
                            <span class="text-gray-600  w-10">To</span>
                            <img src="https://cryptologos.cc/logos/tether-usdt-logo.png?v=025" alt="USDT"
                                class="h-6 w-6 md:h-8 md:w-8" />
                            <span class="font-bold">USDT</span>
                        </div>
                    </div>
                    <button class="rounded-full p-2 transition hover:bg-gray-300">
                        <img class="h-8 w-8 md:h-8 md:w-8" src="https://www.betcasn.com/images/mine/transfer.png"
                            alt="" />
                    </button>
                </div>
            </div>

            <!-- Receive Quantity (Fixed Alignment) -->
            <div class="mt-10 w-full mx-auto">
                <label class="block text-gray-700 font-medium text-lg md:text-xl mb-2">Receive Quantity</label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2">
                    <input type="text" placeholder="Max Exchange Amount 0.0218"
                        class="flex-1 bg-transparent border-none outline-none text-gray-500 text-lg md:text-xl"
                        readonly>
                </div>
                <div class="flex justify-between mt-2">
                    <span class="text-gray-700">USDT</span>
                    <button class="text-blue-500 font-medium hover:underline">Max</button>
                </div>
            </div>

            <!-- Info Section -->
            <div class="space-y-1 text-base md:text-lg text-gray-600 mt-7">
                <p class="text-black">* Flash Exchange Rate: 1 : 0.2207</p>
                <p class="text-black">* Minimum withdrawal amount is 10</p>
                <p class="text-black">* Maximum withdrawal amount is 9999</p>
            </div>
        </div>

        <!-- Fixed Bottom Section -->
        <div
            class="fixed bottom-0 w-full bg-white border-t p-5 md:p-6 flex flex-col md:flex-row md:justify-between md:items-center">
            <div class="flex justify-between text-lg md:text-2xl text-red-500 font-medium">
                <span class="text-black">Payment Amount</span>
                <span>0 TRX</span>
            </div>

            <button class="w-full md:w-auto bg-black text-white font-medium py-3 mt-4 md:mt-0 rounded-lg md:px-10">
                Confirm Withdrawal
            </button>
        </div>



    </main>
</div>
