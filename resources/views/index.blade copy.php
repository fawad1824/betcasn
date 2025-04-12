<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BetCrown</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="bg-gray-100 flex flex-col min-h-screen">

    <header
        class="fixed top-0 w-full bg-white shadow-lg border-t flex justify-between items-center border-b-2 border-gray-300 p-3 pl-5 pr-5">
        <nav class="flex space-x-4 relative" x-data="{ showLangModal: false }">
            <!-- Language Icon -->
            <img @click="showLangModal = true" style="width: 25px; cursor: pointer;"
                src="{{asset('assets/images/icon_lang.webp')}}" alt="">

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

        <div class="text-xl font-bold">
            <img style="width: 25px;" src="https://www.betcasn.com/images/home/message.png" alt="">
        </div>
    </header>

    <main class="mt-20 w-[80%] m-5 mb-20">
        <div class="image">
            <img src="{{ asset('assets/banner.png') }}" alt="">
        </div>
        <div class="flex items-center justify-between w-[80%] m-auto mt-5 mb-5">
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
                    <img class="w-14 h-14" src="https://www.betcasn.com/images/home/daily_mining.png" alt="">
                    <p class="text-xs mt-2 font-medium">Daily Mining</p>
                </a>
            </div>
        </div>

        {{-- Announcements --}}
        <div class="w-full bg-gray-50 px-4 py-2 rounded-full flex items-center shadow-sm w-80 mt-10">
            <span class="text-gray-600 text-lg mr-2">
                <img class="h-5 w-5" src="https://www.betcasn.com/images/home/notice.png" alt="">
            </span>
            <div id="announcement" class="text-gray-800 font-medium overflow-hidden whitespace-nowrap">
                1080****96 Won 150 TRX
            </div>
        </div>

        <div class="games mt-10">
            <h2 class="text-2xl font-bold mb-4">Hot Game</h2>

            <div class="overflow-x-auto scrollbar-hide">
                <div class="flex">
                    <!-- Game Card 1 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 2 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 3 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 4 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 5 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

        <div class="games mt-10">
            <h2 class="text-2xl font-bold mb-4">Hot Game</h2>

            <div class="overflow-x-auto scrollbar-hide">
                <div class="flex">
                    <!-- Game Card 1 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 2 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 3 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 4 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

                    <!-- Game Card 5 -->
                    <div class="w-64 bg-[#f7f7f7] rounded-lg  overflow-hidden">
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

    </main>

    <!-- Bottom Navigation -->
    <footer class="fixed bottom-0 w-full bg-white shadow-lg border-t">
        <div class="flex justify-around py-3">
            <!-- Home -->
            <div class="flex flex-col items-center text-center">
                <a href="#" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/home_active.png" alt="">
                    <span class="text-xs font-bold">Home</span>
                </a>
            </div>

            <!-- Transaction -->
            <div class="flex flex-col items-center text-center">
                <a href="#" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/transaction.png" alt="">
                    <span class="text-xs">Transaction</span>
                </a>

            </div>

            <!-- My Team -->
            <div class="flex flex-col items-center text-center">
                <a href="#" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/finance.png" alt="">
                    <span class="text-xs">My Team</span>
                </a>
            </div>

            <!-- Help -->
            <div class="flex flex-col items-center text-center">
                <a href="#" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/help.png" alt="">
                    <span class="text-xs">Help</span>
                </a>
            </div>

            <!-- Mine -->
            <div class="flex flex-col items-center text-center">
                <a href="#" class="flex flex-col items-center text-center">
                    <img class="w-5 h-5" src="https://www.betcasn.com/images/tabbar/mine.png" alt="">
                    <span class="text-xs">Mine</span>
                </a>
            </div>
        </div>
    </footer>

    <div class="fixed text-right bottom-20 right-5 flex flex-col items-center space-y-3">

        <!-- Rotating Floating Button -->
        <a href="#">
            <img src="https://www.betcasn.com/images/prize.gif" alt="Rotating Button" class="w-20 h-20">
        </a>

        <!-- WhatsApp Button -->
        <a href="https://wa.me/+447543918264" target="_blank" class=" text-white p-1  ">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                class="w-12 h-12">
        </a>

        <!-- Telegram Button -->
        <a href="https://t.me/yourusername" target="_blank" class=" text-white p-1 ">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Telegram_logo.svg" alt="Telegram"
                class="w-8 h-8">
        </a>


    </div>

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
</body>

</html>
