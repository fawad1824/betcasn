<div>
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-5 pl-7 pr-7">
        <nav class="flex space-x-5 relative" x-data="{ showLangModal: false }">
            <!-- Language Icon -->
            <img @click="showLangModal = true" style="width: 25px; cursor: pointer;"
                src="https://www.betcasn.com/images/icon_lang.png" alt="">

            <!-- Language Modal -->
            <div style="--tw-space-x-reverse: initial;" x-show="showLangModal" @click.away="showLangModal = false"
                class="fixed left-0 top-0 h-full w-64 bg-white shadow-lg p-4 transform transition-transform duration-300 ease-in-out z-[9999]"
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
            <a href="#">
                <img style="width: 25px;" src="https://www.betcasn.com/images/home/message.png" alt="">
            </a>
        </div>
    </header>
</div>
