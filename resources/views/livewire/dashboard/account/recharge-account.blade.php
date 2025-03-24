<div>

    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative" x-data="{ showLangModal: false }">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Recharge</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt="">
            </a>
        </div>
    </header>



    <div class="mt-20 w-full text-[20px] mx-auto bg-white shadow-lg rounded-lg p-6">
        <div class="flex flex-col items-center">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=TEYQeSyop3fdMCsZh5LSNExtJcvf1WS36T"
                alt="QR Code" class="w-40 h-40 sm:w-56 sm:h-56 border p-4 rounded-lg">
        </div>

        <p class="text-black text-lg font-bold mt-4">Recharge Address</p>
        <div class="flex items-center mt-2 text-lg rounded-lg bg-gray-100 p-3 w-full">
            <span class="text-black truncate">TEYQeSyop3fdMCsZh5LSNExtJcvf1WS36T</span>
            <button class="ml-2 text-blue-500">
                <img class="h-8 w-8" src="https://www.betcasn.com/images/copy.png" alt="Copy">
            </button>
        </div>

        <div class="flex items-center mt-5 p-3 text-sm text-black rounded-lg bg-gray-100 border" role="alert">
            <svg class="shrink-0 w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 1 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="font-medium text-[15px]">This address only accepts TRX/USDT deposits</span>
        </div>

        <div class="mt-4">
            <p class="text-black font-medium">Recharge Network</p>
            <div class="mt-2 p-3 rounded-lg bg-gray-100 text-black text-lg border">TRX/TRC20</div>
        </div>

        <div class="mt-4 flex justify-between items-center text-red-500 text-sm">
            <span class="text-black">Didn't receive funds?</span>
            <div class="flex">
                <img class="ml-2 w-5 h-5" src="https://www.betcasn.com/images/reload.png" alt="Reload">
                <a href="#" class="ml-2 underline">Refresh Balance</a>
            </div>
        </div>

        <div class="mt-4 border-t pt-4">
            <h3 class="text-xl font-semibold mb-2">Transaction Info</h3>
            <div class="text-gray-600 space-y-2 text-sm">
                <div class="flex justify-between">
                    <p>Min Recharge:</p>
                    <span class="font-medium">1 TRX/USDT</span>
                </div>
                <div class="flex justify-between">
                    <p>Expected Arrival:</p>
                    <span class="font-medium">1 network confirmation</span>
                </div>
                <div class="flex justify-between">
                    <p>Unlock Time:</p>
                    <span class="font-medium">1 network confirmation</span>
                </div>
            </div>
        </div>

        <div class="mt-4 border-t pt-4 text-gray-600 text-[16px]">
            <h3 class="font-semibold mb-2">Remark</h3>
            <ul class="list-disc pl-5 space-y-1">
                <li>Please do not deposit any non-TRC20-USDT assets to the above address, as they will not be retrieved.
                </li>
                <li>After depositing to the above address, you need to confirm the entire network node. The account will
                    receive the funds after 1 network confirmation, and you can withdraw coins after 1 network
                    confirmation. </li>
                <li>The minimum deposit amount is $1. Deposits less than the minimum amount will not be credited to the
                    account and will be returned.</li>
                <li>Your deposit address will not change frequently, and you can continue to use it. If there are any
                    changes, we will make our best effort to notify you via website announcements or emails.</li>
                <li>Please ensure that your computer and browser are secure to prevent any information from being
                    tampered with or leaked.</li>
            </ul>
        </div>


    </div>
</div>
