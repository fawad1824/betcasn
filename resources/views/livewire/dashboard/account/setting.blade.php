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

    <div class="w-full  md:full lg:w-full mx-auto bg-white min-h-screen shadow-lg rounded-lg">
        <!-- Header -->
        <div class="flex items-center justify-center py-4 border-b relative">
            <button class="absolute left-4 text-gray-500 text-2xl">&larr;</button>
            <h2 class="text-lg font-semibold">Settings</h2>
        </div>

        <!-- Settings List -->
        <div class="divide-y text-base">
            <!-- Avatar -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Avatar</span>
                <a class="flex items-center space-x-2" href="/mine" wire:navigate>
                    <img src="https://www.betcasn.com/images/avatar/1.png" alt="Avatar"
                        class="w-10 h-10 rounded-full">
                    <img class="w-6 transform scale-x-[-1]" src="{{ asset('assets/images/backicon.png') }}"
                        alt="">
                </a>
            </div>

            <!-- Name -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Name</span>
                <span class="text-gray-500">{{ Auth::user()->name }}</span>
            </div>

            <!-- Gender -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Gender</span>
                <span class="text-gray-500">{{ Auth::user()->gender ?? 'Unknown' }}</span>
            </div>

            <!-- Email -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Email</span>
                <span class="text-gray-500">{{ Auth::user()->email }}</span>
            </div>

            <!-- Phone Number -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Phone Number</span>
                <span class="text-gray-500">{{ Auth::user()->phone }}</span>
            </div>

            <!-- Withdrawal Address -->
            <div class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Withdrawal Address</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Login Password -->
            <div class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Change Login Password</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Withdrawal Password -->
            <div class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Change Withdrawal Password</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Download App -->
            <div class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Download App</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>
        </div>

        <!-- Logout Button -->
        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
            @csrf
            <div onclick="document.getElementById('logoutForm').submit();"
                class="mt-10 bottom-0 left-0 right-0 bg-black text-white text-center py-4 cursor-pointer">
                Log Out
            </div>
        </form>

    </div>


</div>
