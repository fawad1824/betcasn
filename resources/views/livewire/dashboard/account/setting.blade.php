<div>
    <header style="z-index: 100"
        class="fixed top-0 w-full bg-white border-t flex justify-between items-center border-b-2  p-3 pl-7 pr-7">
        <nav class="flex space-x-5 relative">
            <a href="/mine" wire:navigate>
                <img style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}" alt="">
            </a>
        </nav>
        <div class="flex space-x-2">
            <h1 class="text-2xl"><b>Setting</b></h1>
        </div>

        <div class="text-xl font-bold flex space-x-2">
            <a class="flex  space-x-2" href="/record-recharge">
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/info.png" alt=""> --}}
                {{-- <img style="width: 25px;" src="https://www.betcasn.com/images/icon_history.png" alt=""> --}}
            </a>
        </div>
    </header>

    <div class="w-full mx-auto bg-white min-h-screen">
        <!-- Header -->
        <div class="flex items-center justify-center py-4 border-b">
            <button class="absolute left-4 text-gray-500 text-xl">&larr;</button>
            <h2 class="text-lg font-semibold">Settings</h2>
        </div>

        <!-- Settings List -->
        <div class="divide-y text-[20px]">
            <!-- Avatar -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Avatar</span>

                <a class="flex" href="/mine" wire:navigate>
                    <img src="https://www.betcasn.com/images/avatar/1.png" alt="Avatar"
                        class="w-10 h-10 rounded-full">
                    <img class="transform scale-x-[-1]" style="width: 25px; cursor: pointer;" src="{{ asset('assets/images/backicon.png') }}"
                        alt="">
                </a>
            </div>

            <!-- Name -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Name</span>
                <span class="text-gray-500">fawad.fa3</span>
            </div>

            <!-- Gender -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Gender</span>
                <span class="text-gray-500">Unknown</span>
            </div>

            <!-- Email -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Email</span>
                <span class="text-gray-500">faw******@yopmail.com</span>
            </div>

            <!-- Phone Number -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Phone Number</span>
                <span class="text-gray-500">+92-3159445761</span>
            </div>

            <!-- Withdrawal Address -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Withdrawal Address</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Login Password -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Change Login Password</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Withdrawal Password -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Change Withdrawal Password</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Download App -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Download App</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>
        </div>

        <!-- Logout Button -->
        <div class="mt-10 bottom-0 left-0 right-0 bg-black text-white text-center py-4 cursor-pointer">
            Log Out
        </div>
    </div>

</div>
