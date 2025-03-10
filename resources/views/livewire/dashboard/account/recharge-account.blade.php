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
        <div class="flex flex-col items-center ">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=TEYQeSyop3fdMCsZh5LSNExtJcvf1WS36T"
                alt="QR Code" class="w-[250px] h-[250px] border p-10 rounded-lg">
        </div>

        <p class="text-black text-[22px]"><b>Recharge Address</b></p>
        <div class="flex items-center mt-3 mb-3 text-[22px] rounded-lg w-full justify-between">
            <span class="text-black truncate text-[22px] ">TEYQeSyop3fdMCsZh5LSNExtJcvf1WS36T</span>
            <button class="text-blue-500 text-sm">
                <img class="h-10 w-10" src="https://www.betcasn.com/images/copy.png" alt="">
            </button>
        </div>

        <div class="flex items-center mt-5 p-4 mb-4 text-sm text-black rounded-lg bg-gray-100 border-2" role="alert">
            <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium text-[15px]">This address only accepts TRX/USDT deposits</span>
            </div>
        </div>

        <div class="mt-4">
            <p class="text-black font-medium">Recharge Network</p>
            <div class=" mt-2 pt-5 pb-5 pl-5 rounded-lg text-black text-[20px] border-2"><b>TRX/TRC20</b></div>
        </div>

        <div class="mt-4 flex justify-end items-center text-red-500 text-[18px]">
            <span class="text-black">Didn't receive recharge?</span>
            <img class="ml-2 w-5 h-5" src="https://www.betcasn.com/images/reload.png" alt="Reload">
            <a href="#" class="ml-2 underline">Click to refresh balance</a>
        </div>

        <div class="mt-4 border-t pt-4">
            <h3 class="text-2xl font-semibold mb-2">Transaction Information</h3>
            <div class="text-1xl text-gray-600 space-y-1">
                <div class="flex justify-between">
                    <p>Minimum Recharge Amount:</p>
                    <span class="font-medium">1 TRX/USDT</span>
                </div>
                <div class="flex justify-between">
                    <p>Expected Arrival:</p>
                    <span class="font-medium">1 network confirmation</span>
                </div>
                <div class="flex justify-between">
                    <p>Expected Unlock:</p>
                    <span class="font-medium">1 network confirmation</span>
                </div>
            </div>
        </div>

        <div class="mt-4 border-t pt-4 text-gray-600 text-[16px]">
            <h3 class="font-semibold mb-2">Remark</h3>
            <ul class="list-disc pl-5 space-y-1">
                <li>Please do not deposit any non-TRC20-USDT assets to the above address, as they will not be retrieved.</li>
                <li>After depositing to the above address, you need to confirm the entire network node. The account will receive the funds after 1 network confirmation, and you can withdraw coins after 1 network confirmation. </li>
                <li>The minimum deposit amount is $1. Deposits less than the minimum amount will not be credited to the account and will be returned.</li>
                <li>Your deposit address will not change frequently, and you can continue to use it. If there are any changes, we will make our best effort to notify you via website announcements or emails.</li>
                <li>Please ensure that your computer and browser are secure to prevent any information from being tampered with or leaked.</li>
            </ul>
        </div>


    </div>
</div>
