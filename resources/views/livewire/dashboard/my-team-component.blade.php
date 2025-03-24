<div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div x-data="{
        activeTab: 'share',
        next: 1,
        activeTabTeam: 'team',
        showModal: false,
        countryCode: '+1'
    }">

        <header style="z-index: 100"
            class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-2 pl-7 pr-7">
            <div class="text-xl font-bold">
                <a href="/home">
                    <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}"
                        alt="">
                </a>
            </div>
            <div class="text-sm font-bold">
                <!-- Toggle Buttons -->
                <div class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 pr-1">
                    <button @click="activeTab = 'share'"
                        :class="activeTab === 'share' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                        Share
                    </button>
                    <button @click="activeTab = 'team'"
                        :class="activeTab === 'team' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                        Team Statistics
                    </button>
                </div>
                <div x-show="next!=1" class="flex  text-white rounded-full p-5 pl-2 pr-2">
                </div>

            </div>

            <nav class="flex space-x-4 relative" x-data="{ showLangModal: false }">
                <!-- Language Icon -->
                <img @click="showLangModal = true" style="width: 25px; cursor: pointer;"
                    src="https://www.betcasn.com/images/icon_lang.png" alt="">

                <!-- Language Modal -->
                <div x-show="showLangModal" @click.away="showLangModal = false"
                    class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg p-4 transform -translate-x-full transition-transform duration-300 ease-in-out"
                    :class="showLangModal ? 'translate-x-0' : '-translate-x-full'">
                    <h2 class="text-lg font-bold mb-4">Select Language</h2>
                    <ul>
                        <li class="p-2 hover:bg-gray-200 cursor-pointer">English</li>
                        <li class="p-2 hover:bg-gray-200 cursor-pointer">French</li>
                    </ul>
                    <!-- Close Button -->
                    <button @click="showLangModal = false" class="mt-4 p-2 bg-gray-300 rounded w-full">Close</button>
                </div>
            </nav>
        </header>

        <!-- Forms -->
        <div class="mt-20 flex bg-white">

            <!-- share Form -->
            <div x-show="activeTab == 'share'" class="p-6  w-full">
                <div class="flex flex-col items-center text-center px-4">
                    <!-- Title Section -->
                    <h1 class="text-3xl sm:text-4xl font-bold mb-3">
                        Share with your friends to <br>
                        get <span class="text-green-600">Commission</span>
                    </h1>
                    <span class="text-lg sm:text-xl">Share with your friends to get.</span>
                    <span class="text-lg sm:text-xl text-blue-500 cursor-pointer underline">View Rules</span>
                </div>

                <!-- Invite Link Section -->
                <div class="flex flex-col items-center text-center mt-10">
                    <h1 class="text-3xl sm:text-4xl font-bold mb-5">
                        Invite through link
                    </h1>
                </div>

                <!-- Input Fields -->
                <div class="flex justify-center mt-6 w-full px-4">
                    <div class="w-full max-w-md">
                        <!-- Link Input -->
                        <div class="relative w-full mb-4">
                            <label class="block text-lg font-semibold mb-2">Link</label>
                            <div class="relative">
                                <input type="text" value="https://www.betcasn.com/register?inviteCode=10134566"
                                    class="w-full p-3 border rounded-lg pr-10 text-sm sm:text-base">
                                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Invitation Code Input -->
                        <div class="relative w-full">
                            <label class="block text-lg font-semibold mb-2">Invitation Code</label>
                            <div class="relative">
                                <input type="text" value="10134566"
                                    class="w-full p-3 border rounded-lg pr-10 text-sm sm:text-base">
                                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="relative h-[600px] flex items-center justify-center">
                    <!-- Background Image -->

                    <img src="https://www.betcasn.com/images/finance/qrcode_bg.png" alt="Background Image"
                        class="absolute w-[700px] h-full rounded-lg">

                    <!-- QR Code -->
                    <div id="qrcode" class="bg-white/80 rounded-lg z-10 mt-10"></div>
                </div>
            </div>

            <!-- team Form -->
            <div x-show="activeTab == 'team'" class="p-6  w-full ">
                <div class="text-sm font-bold">
                    <!-- Toggle Buttons -->
                    <div class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 pr-1">
                        <button @click="activeTabTeam = 'team'"
                            :class="activeTabTeam === 'team' ? 'bg-white text-black shadow' : 'text-black'"
                            class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                            Team
                        </button>
                        <button @click="activeTabTeam = 'today'"
                            :class="activeTabTeam === 'today' ? 'bg-white text-black shadow' : 'text-black'"
                            class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                            Today
                        </button>
                        <button @click="activeTabTeam = 'month'"
                            :class="activeTabTeam === 'month' ? 'bg-white text-black shadow' : 'text-black'"
                            class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                            Month
                        </button>
                        <button @click="activeTabTeam = 'history'"
                            :class="activeTabTeam === 'history' ? 'bg-white text-black shadow' : 'text-black'"
                            class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 143px;">
                            History
                        </button>
                    </div>
                    <div x-show="activeTabTeam == 'team'" class="flex text-black rounded-full p-5 pl-2 pr-2">
                        <div style="width: 100%;"
                            class="mt-6 bg-black text-white p-6 rounded-lg shadow-lg relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div class="absolute inset-0 opacity-20">
                                <div
                                    class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-br from-gray-900 via-gray-800 to-black rounded-full">
                                </div>
                            </div>

                            <h2 class="text-lg font-semibold">Total Income</h2>

                            <div class="flex space-x-10 mt-4">
                                <div class="flex items-center space-x-2">
                                    <img src="https://cryptologos.cc/logos/tron-trx-logo.png" alt="TRX"
                                        class="w-6 h-6">
                                    <div>
                                        <p class="text-sm">TRX</p>
                                        <p class="text-lg font-bold">0</p>
                                        <p class="text-xs text-gray-400">Total Income</p>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="USDT"
                                        class="w-6 h-6">
                                    <div>
                                        <p class="text-sm">USDT</p>
                                        <p class="text-lg font-bold">0</p>
                                        <p class="text-xs text-gray-400">Total Income</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Levels -->
                            <div class="mt-10 space-y-4">
                                <p class="text-gray-400">Level 1 Member</p>
                                <p class="text-gray-300 text-lg">Level 2 Member</p>
                                <p class="text-gray-200 text-xl">Level 3 Member</p>
                            </div>

                            <!-- Mastercard Icon -->
                            <div class="absolute top-4 right-4">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/MasterCard_Logo.svg"
                                    alt="Mastercard" class="w-8 h-8">
                            </div>
                        </div>

                    </div>

                    <div x-show="activeTabTeam == 'today'" class="flex text-black rounded-full p-5 pl-2 pr-2">
                        <div class="w-full mx-auto mt-8">
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Recharge Today</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Withdrawal Today</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Bet Today</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="text-gray-600 font-semibold">Number of Registrations</h2>
                                <p class="text-lg font-bold text-black">0</p>
                            </div>
                        </div>

                    </div>

                    <div x-show="activeTabTeam == 'month'" class="flex text-black rounded-full p-5 pl-2 pr-2">
                        <div class="w-full mx-auto mt-8">
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Recharge Month</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Withdrawal Month</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Bet Month</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="text-gray-600 font-semibold">Number of Registrations This Month</h2>
                                <p class="text-lg font-bold text-black">0</p>
                            </div>
                        </div>

                    </div>

                    <div x-show="activeTabTeam == 'history'" class="flex text-black rounded-full p-5 pl-2 pr-2">
                        <div class="w-full mx-auto mt-8">
                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Recharge History</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Withdrawal History</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4 mb-4">
                                <h2 class="text-gray-600 font-semibold">Total Team Bet History</h2>
                                <p class="text-lg font-bold text-black">0 TRX / 0 USDT</p>
                            </div>

                            <div class="bg-white rounded-lg shadow p-4">
                                <h2 class="text-gray-600 font-semibold">Number of Registrations This History</h2>
                                <p class="text-lg font-bold text-black">0</p>
                            </div>
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

        @include('livewire.dashboard.float-icon-component')
        @include('livewire.dashboard.right-float-icon-component')

        <script>
            new QRCode(document.getElementById("qrcode"), {
                text: "https://yourwebsite.com",
                width: 200,
                height: 200,
                correctLevel: QRCode.CorrectLevel.H
            });
        </script>
    </div>
