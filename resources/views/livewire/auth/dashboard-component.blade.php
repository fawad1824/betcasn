<div class="w-[100%] h-screen">
    <div class="header bg-white">
        @include('livewire.dashboard.header-component')
    </div>

    <div class="-z-10">
        <div class="w-[90%] mx-auto pt-16 mb-20">
            @include('livewire.dashboard.slider-component')

            <div class="flex items-center justify-between w-[80%] m-auto mt-16 mb-5">
                <div class="flex flex-col items-center text-center">
                    <a href="#">
                        <img class="w-14 h-14" src="https://www.betcasn.com/images/home/btc_usdt.png" alt="">
                        <p class="text-xs mt-2 font-medium">BTC/USDT</p>
                    </a>

                </div>

                <div class="flex flex-col items-center text-center">
                    <a href="#">
                        <img class="w-14 h-14" src="https://www.betcasn.com/images/home/green_red.png" alt="">
                        <p class="text-xs mt-2 font-medium">WIN GO</p>
                    </a>
                </div>

                <div class="flex flex-col items-center text-center">
                    <a href="#">
                        <img class="w-14 h-14" src="https://www.betcasn.com/images/home/simulation.png" alt="">
                        <p class="text-xs mt-2 font-medium">Simulate</p>
                    </a>
                </div>

                <div class="flex flex-col items-center text-center">
                    <a href="#">
                        <img class="w-14 h-14" src="https://www.betcasn.com/images/home/daily_mining.png"
                            alt="">
                        <p class="text-xs mt-2 font-medium">Daily Mining</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-[80%] bg-gray-50 px-4 py-2 rounded-full flex items-center shadow-sm w-80 mt-10 m-auto">
            <span class="text-gray-600 text-lg mr-2">
                <img class="h-5 w-5" src="https://www.betcasn.com/images/home/notice.png" alt="">
            </span>
            <div id="announcement" class="text-gray-800 font-medium overflow-hidden whitespace-nowrap">
                1080****96 Won 150 TRX
            </div>
        </div>

        <div class="w-[80%] mx-auto p-4">
            <!-- Title -->
            <h2 class="text-2xl font-bold">Market</h2>

            <!-- Header Row -->
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 items-center gap-4 mt-4 text-gray-600 text-sm">
                <p class="col-span-1 font-medium">Project Name</p>
                <p class="col-span-2 md:col-span-3 text-right md:text-left">Latest Price (USDT)</p>
            </div>

            <!-- BTC Row -->
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 items-center gap-4 border-b py-3">
                <div class="flex items-center space-x-2 col-span-1">
                    <span class="flex items-center justify-center w-8 h-8 rounded-full border">
                        ₿
                    </span>
                    <span class="font-semibold">BTC</span>
                    <span class="text-gray-400 text-xs">/USDT</span>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('assets/images/image.png') }}" alt="BTC Chart" class="h-8 w-auto">
                </div>

                <div class="col-span-1 text-right">
                    <p class="font-bold text-black">84,148.27</p>
                    <p class="text-green-500 text-xs">+0.35%</p>
                </div>
            </div>

            <!-- ETH Row -->
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 items-right gap-4 border-b py-3">
                <div class="flex items-right space-x-2 col-span-1">
                    <span class="flex items-right justify-center w-8 h-8 rounded-full border">
                        △
                    </span>
                    <span class="font-semibold">ETH</span>
                    <span class="text-gray-400 text-xs">/USDT</span>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <img src="{{ asset('assets/images/image.png') }}" alt="BTC Chart" class="h-8 w-auto">
                </div>

                <div class="col-span-1 text-right">
                    <p class="font-bold text-black">2,293.51</p>
                    <p class="text-red-500 text-xs">-0.10%</p>
                </div>
            </div>
        </div>

        <div class="games w-[90%] mt-16 m-auto">
            <h2 class="text-2xl font-bold mb-4">Hot Game</h2>

            <div class="overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                <div class="flex gap-5 flex-nowrap">
                    <!-- Game Cards -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game1_bg.webp" alt="Game 1"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game1.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Oishi Delights</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game2_bg.webp" alt="Game 2"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game2.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Three Crazy Piggies</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game3_bg.webp" alt="Game 3"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game3.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Wings of Iguazu</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game4_bg.webp" alt="Game 4"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game4.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Yakuza Honor</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game5_bg.webp" alt="Game 5"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game5.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Shark Bounty</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="games w-[90%] mt-16 m-auto">
            <h2 class="text-2xl font-bold mb-4">Featured Game</h2>

            <div class="overflow-x-auto scrollbar-hide snap-x snap-mandatory">
                <div class="flex gap-5 flex-nowrap">
                    <!-- Game Cards -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game1_bg.webp" alt="Game 1"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game1.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Oishi Delights</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game2_bg.webp" alt="Game 2"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game2.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Three Crazy Piggies</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game3_bg.webp" alt="Game 3"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game3.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Wings of Iguazu</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game4_bg.webp" alt="Game 4"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game4.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Yakuza Honor</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>

                    <div class="w-64 bg-[#f7f7f7] rounded-lg overflow-hidden snap-center shrink-0">
                        <img src="https://www.betcasn.com/images/games/game5_bg.webp" alt="Game 5"
                            class="w-full h-40 object-cover">
                        <div class="p-3">
                            <div class="flex items-center gap-2">
                                <img src="https://www.betcasn.com/images/games/game5.webp" alt="Avatar"
                                    class="w-8 h-8 rounded-full border">
                                <h3 class="font-bold text-md">Shark Bounty</h3>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Aiden, the son of a renowned ocean hunter, has a
                                profound love for the sea that..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.dashboard.float-icon-component')
    @include('livewire.dashboard.right-float-icon-component')

    <script>
        const messages = [
            "1080****96 Won 150 TRX",
            "5023****21 Won 200 TRX",
            "7645****99 Won 500 TRX"
        ];

        let index = 0;

        function updateAnnouncement() {
            const announcement = document.getElementById("announcement");
            announcement.classList.add("opacity-0"); // Fade out

            setTimeout(() => {
                index = (index + 1) % messages.length; // Move to next message
                announcement.textContent = messages[index]; // Update text
                announcement.classList.remove("opacity-0"); // Fade in
            }, 500); // Wait before updating
        }

        setInterval(updateAnnouncement, 4000); // Change every 4 seconds
    </script>
</div>
