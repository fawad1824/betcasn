<div class="mt-20 z-index: 100" x-data="{ isOpen: false }">
    <br><br><br>
    <!-- Bottom Navigation -->
    <footer class="fixed bottom-0 w-full bg-white shadow-lg border-t">
        <div class="flex justify-around py-3">
            <!-- Home -->
            <div class="flex flex-col items-center text-center">
                <a href="/home" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/home_active.png" alt="">
                    <span class="text-xs font-bold">Home</span>
                </a>
            </div>

            <!-- Transaction -->
            <div class="flex flex-col items-center text-center">
                <a href="/transactions" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/transaction.png" alt="">
                    <span class="text-xs">Transaction</span>
                </a>

            </div>

            <!-- My Team -->
            <div class="flex flex-col items-center text-center">
                <a href="/myteam" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/finance.png" alt="">
                    <span class="text-xs">My Team</span>
                </a>
            </div>

            <!-- Help -->
            <div class="flex flex-col items-center text-center">
                <a href="#" @click="isOpen = true" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/help.png" alt="">
                    <span class="text-xs">Help</span>
                </a>
            </div>

            <!-- Mine -->
            <div class="flex flex-col items-center text-center">
                <a href="/mine" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/mine.png" alt="">
                    <span class="text-xs">Mine</span>
                </a>
            </div>
        </div>
    </footer>

    <!-- Chat Modal -->
    <div x-show="isOpen" @click.away="isOpen = false"
        class="fixed bottom-4 left-4 w-80 bg-gray-900 rounded-xl shadow-lg">
        <div class="flex items-center justify-between px-4 py-3 bg-black text-white rounded-t-xl">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('assets/images/80.png') }}" class="w-8 h-8 rounded-full" alt="Logo">
                <div>
                    <h2 class="font-bold text-sm">Betcasn <span class="text-green-400">●</span></h2>
                    <p class="text-xs text-gray-400">Typically replies in a few minutes</p>
                </div>
            </div>
            <button @click="isOpen = false" class="text-white text-xl">×</button>
        </div>

        <div class="bg-gray-800 h-[400px] p-4 text-center text-white">
            <p class="text-sm pt-20">We are online</p>
            <p class="text-xs text-gray-400">Typically replies in a few minutes</p>
            <button class="mt-4 text-red-400 font-bold">Start Conversation →</button>
        </div>

        <div class="text-center p-2 text-xs text-gray-400 bg-gray-900 rounded-b-xl">
            Powered by Chatwoot
        </div>
    </div>
</div>
