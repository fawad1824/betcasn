<div>

    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Withdraw</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt="">
            </a>
        </div>
    </header>


    <div
        class="w-full mx-auto mt-10 md:mt-20 mb-10 md:mb-20 bg-white shadow-lg rounded-lg p-6">
        <div class="space-y-4">
            <!-- Wallet Account -->
            <div>
                <label class="block text-gray-700 font-medium text-lg md:text-xl">Wallet Account</label>
                <div class="flex items-center p-3 border rounded-lg bg-gray-100">
                    <img src="https://cryptologos.cc/logos/tron-trx-logo.png" alt="TRX"
                        class="w-6 h-6 md:w-8 md:h-8">
                    <span class="ml-2 text-gray-700 font-bold text-lg md:text-xl">TRX</span>
                </div>
            </div>

            <!-- Withdrawal Address -->
            <div>
                <label class="block text-gray-700 font-medium text-lg md:text-xl">Withdrawal Address</label>
                <input type="text" placeholder="Please enter or paste the address"
                    class="w-full p-3 border rounded-lg bg-gray-100 text-gray-600 placeholder-gray-400">
            </div>

            <!-- Withdrawal Network -->
            <div>
                <label class="block text-gray-700 font-medium text-lg md:text-xl">Withdrawal Network</label>
                <div class="p-3 border rounded-lg bg-gray-100 text-gray-700 text-lg md:text-xl">TRX</div>
            </div>

            <!-- Fee Information -->
            <div class="flex justify-between items-center p-4 mb-4 text-sm md:text-base text-black rounded-lg bg-gray-50"
                role="alert">
                <div class="flex items-center">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="ml-2 text-lg md:text-xl">Fee</span>
                </div>
                <span class="text-red-500 text-lg md:text-xl">1 TRX</span>
            </div>

            <!-- Withdrawal Amount -->
            <div>
                <label class="block text-gray-700 font-medium text-lg md:text-xl">Withdrawal Amount</label>
                <div class="flex justify-between items-center p-3 text-lg md:text-xl border rounded-lg bg-gray-100">
                    <span class="text-gray-500">Available 0.0991</span>
                    <button class="text-blue-500 font-medium">Max</button>
                </div>
                <p class="text-sm text-red-500 mt-1">* <span class="text-black">Minimum withdrawal amount is 10</span>
                </p>
            </div>

            <!-- Remark Section -->
            <div class="border-t pt-4">
                <h3 class="font-semibold text-xl md:text-2xl text-gray-700 mb-2">Remark</h3>
                <ul class="list-disc pl-4 text-gray-600 space-y-2 text-base md:text-lg">
                    <li>Minimum withdrawal amount: 10 USDT (TRC20).</li>
                    <li>To ensure the safety of your funds, we will conduct a manual review of your withdrawal when your
                        account security strategy changes or your password is changed. Please be patient and wait for
                        our staff to contact you via phone or email.</li>
                    <li>If your withdrawal is not received within 10 minutes, please contact the management customer
                        service. (For a quick manual review)</li>
                    <li>Please ensure that your computer and browser are secure to prevent any information from being
                        tampered with or leaked.</li>
                </ul>
            </div>
        </div>
    </div>

    <br><br>

    <div class="fixed bottom-0 w-full bg-white border-t  justify-between items-center border-b-2 pl-7 pr-7">
        <div class="mt-4 flex justify-between text-[22px] text-red-500 font-medium">
            <span class="text-black">Receive Quantity</span>
            <span>0 TRX</span>
        </div>

        <button class="w-full bg-black text-white font-medium py-3 mt-4 rounded-lg mb-2">Confirm Withdrawal</button>
    </div>

</div>
