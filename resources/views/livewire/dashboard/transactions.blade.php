<div x-data="{ showModal: false, type: 'USDT' }">
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>

    <!-- Header -->
    <style>
        button.p-2.border.rounded-lg.text-center.transition-all.duration-300.w-full.bg-white.text-black.border-gray-300 {
            height: 66px;
        }
    </style>

    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-5 pl-7 pr-7">
        <nav class="flex space-x-5 relative" x-data="{ showLangModal: false }">
            <a href="/home" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>BTC/USDT</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/transactions-list">
                <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt="">
                <img style="width: 25px;" src="{{asset('assets/images/icon_history.webp')}}" alt="">
            </a>
        </div>
    </header>

    <!-- Page Layout -->
    <div class="mt-20 mb-20 container mx-auto p-4 grid grid-cols-1 md:grid-cols-3 gap-4">

        <!-- Left: BTC Chart -->
        <div class="md:col-span-3 bg-white p-4 rounded-lg shadow-md">
            <div class="tradingview-widget-container">
                <div id="tradingview_chart" class="h-96"></div>
            </div>
            <script>
                new TradingView.widget({
                    "container_id": "tradingview_chart",
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "1",
                    "theme": "light",
                    "style": "1",
                    "locale": "en",
                    "toolbar_bg": "#f1f3f6",
                    "enable_publishing": false,
                    "hide_legend": true,
                    "autosize": true
                });
            </script>
        </div>

        <!-- Right: Order History -->
        <!-- Order History Table -->
        <div class="md:col-span-3 bg-white p-4 rounded-lg shadow-md overflow-x-auto">
            <h2 class="text-lg font-semibold mb-2">Order History</h2>
            <table class="w-full border-collapse border border-gray-300 text-xs sm:text-sm">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-1 sm:px-2 py-1 whitespace-nowrap">Order #</th>
                        <th class="border border-gray-300 px-1 sm:px-2 py-1 whitespace-nowrap">Amount</th>
                        <th class="border border-gray-300 px-1 sm:px-2 py-1 whitespace-nowrap">Result</th>
                        <th class="border border-gray-300 px-1 sm:px-2 py-1 whitespace-nowrap">Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td class="border border-gray-300 px-1 sm:px-2 py-2">1120250381244</td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-2 text-green-600">86353.52</td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-2">
                            <span class="bg-red-500 text-white px-1 py-1 rounded text-xs sm:text-sm">Small</span>
                            <span class="bg-blue-500 text-white px-1 py-1 rounded text-xs sm:text-sm">Double</span>
                        </td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-1">17:43:00</td>
                    </tr>
                    <tr class="text-center">
                        <td class="border border-gray-300 px-1 sm:px-2 py-2">1120250381243</td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-2 text-green-600">86357.02</td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-2">
                            <span class="bg-red-500 text-white px-1 py-1 rounded text-xs sm:text-sm">Small</span>
                            <span class="bg-blue-500 text-white px-1 py-1 rounded text-xs sm:text-sm">Single</span>
                        </td>
                        <td class="border border-gray-300 px-1 sm:px-2 py-1">17:42:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Footer with Full-Width Button -->
    <footer class="mt-20 w-full fixed bottom-0 w-full bg-white shadow-lg border-t">
        <div class="flex justify-center py-3">
            <button @click="showModal = true"
                class="w-full text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-3">
                Buy
            </button>
        </div>
    </footer>

    <!-- Modal Background Overlay -->
    <div x-show="showModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-end"
        @click.away="showModal = false" x-transition.opacity>

        <!-- Full-Width Scrollable Modal -->
        <div x-show="showModal" x-cloak x-transition:enter="transform transition ease-in-out duration-300"
            x-transition:enter-start="translate-y-full opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transform transition ease-in-out duration-300"
            x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-full opacity-0"
            class="w-full bg-white p-6 rounded-t-lg shadow-lg max-h-[80vh] overflow-y-auto min-h-[70vh] relative">

            <!-- Close Button (X) -->
            <button @click="showModal = false"
                class="absolute top-4 right-4 text-2xl font-bold text-gray-700 hover:text-black transition-all">
                &times;
            </button>

            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <span class="text-lg font-semibold">BTC/USDT</span>
            </div>

            <!-- Options -->
            <div class="grid grid-cols-3 gap-4 my-4" x-data="{ selected: null }">
                <template
                    x-for="(option, index) in [
                { name: 'Big', value: 1.95 }, { name: 'Small', value: 1.95 },
                { name: 'Single', value: 1.95 }, { name: 'Double', value: 1.95 },
                { name: 'Big Single', value: 3.8 }, { name: 'Small Single', value: 3.8 },
                { name: 'Big Double', value: 3.8 }, { name: 'Small Double', value: 3.8 }
            ]"
                    :key="index">
                    <button @click="selected = index"
                        :class="selected === index ? 'bg-gray-100 text-black border-green-400' :
                            'bg-white text-black border-gray-300'"
                        class="p-3 border rounded-lg text-center transition-all duration-300 w-full flex flex-col items-center justify-center">
                        <span class="text-base font-semibold" x-text="option.name"></span>
                        <span class="text-sm text-gray-500" x-text="option.value"></span>
                    </button>
                </template>
            </div>

            <!-- Currency Selection -->
            <div class="my-4">
                <p class="font-semibold text-2xl mb-2">Currency Type</p>
                <div class="flex gap-4 items-center">
                    <label class="flex items-center space-x-2">
                        <input @click="type = 'USDT'" type="radio" name="currency" class="form-radio text-black"
                            checked>
                        <span class="text-lg">USDT</span>
                    </label>
                    <label class="flex items-center space-x-2">
                        <input @click="type = 'TRX'" type="radio" name="currency" class="form-radio text-black">
                        <span class="text-lg">TRX</span>
                    </label>
                </div>
            </div>

            <!-- Order Amount -->
            <div class="my-4">
                <p class="font-semibold text-2xl mb-2">Amount</p>
                <div class="flex items-center gap-2">
                    <input type="number" class="w-full p-3 border rounded-lg text-lg" placeholder="Enter Amount">
                    <button class="px-4 py-2 bg-black text-white rounded-lg text-lg">All</button>
                </div>
            </div>

            <!-- Total Bet & Amount -->
            <div class="my-4">
                <p class="font-semibold text-2xl">Total Bet:
                    <span class="font-semibold text-sm">0 <span x-text="type"></span></span>
                </p>
                <p class="font-semibold text-2xl">Total Amount:
                    <span class="font-semibold text-sm">0.0991 <span x-text="type"></span></span>
                </p>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4 my-4">
                <button @click="selected = null" class="w-full py-3 border rounded-lg text-lg">Clear</button>
                <button class="w-full py-3 bg-black text-white rounded-lg text-lg">Confirm</button>
            </div>

        </div>

    </div>


    @include('livewire.dashboard.right-float-icon-component')

</div>
