<div class="w-[100%] h-screen">
    <header class="flex justify-between items-center border-b-2 border-gray-300 p-2 px-5">
        <!-- Left: Back/Close Icon -->
        <div class="text-xl font-bold">
            <button>

                <img wire:click="backSteps()" class="w-6" src="{{ asset('assets/images/backicon.png') }}" alt="Icon">
            </button>
        </div>


        <!-- Center: Toggle Buttons -->
        <div class="text-sm font-bold">

        </div>

        <!-- Right: Language Selector -->
        <nav class="relative">
            <img wire:click="toggleLanguageModal" class="w-6 cursor-pointer"
                src="{{ asset('assets/images/icon_lang.webp') }}" alt="Language">

            @if ($showLangModal)
                <div
                    class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg p-4 transition-transform transform duration-300 ease-in-out">
                    <h2 class="text-lg font-bold mb-4">Select Language</h2>
                    <ul>
                        <li wire:click="setLanguage('English')" class="p-2 hover:bg-gray-200 cursor-pointer">English
                        </li>
                        <li wire:click="setLanguage('French')" class="p-2 hover:bg-gray-200 cursor-pointer">French</li>
                    </ul>
                    <button wire:click="toggleLanguageModalClose"
                        class="mt-4 p-2 bg-gray-300 rounded w-full">Close</button>
                </div>
            @endif
        </nav>
    </header>


    <div class="flex bg-white mt-20">

        <div class="firststep w-full">
            <div class="p-6 w-full">
                <main class="flex items-center justify-between">
                    <div class="flex-row">
                        <h1 class="text-5xl mb-2"><b>{{ $title }}</b></h1>
                        <h3 class="text-xl mb-4">{{ $title1 }}</h3>
                        <h3 class="text-xl mb-4">{{ $title2 }}</h3>
                    </div>
                    <div class="flex">
                        <p><span>{{ $steps }}</span>/2</p>
                    </div>
                </main>
                @if ($steps == '1')
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Email</h1>
                    <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2"
                        placeholder="Your Email">

                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror



                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> OTP</h1>
                    <div class="flex items-center space-x-2 border rounded">
                        <input type="text" wire:model="otp" name="otp"
                            class="w-full p-2 border-none outline-none" placeholder="Enter OTP">

                        <button wire:click="otpSending" class="p-2 rounded text-black w-1/3 text-right">
                            Get Verification Code
                        </button>
                    </div>
                    @error('otp')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <button wire:click="step2" class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                        Next Step
                    </button>
                @endif

                @if ($steps == '2')
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Login Password</h1>
                    <input type="password" wire:model="lppassword" placeholder="Please enter password"
                        class="w-full p-2 border rounded mb-2">

                    @error('lppassword')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror

                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Confirm Password</h1>
                    <input type="password" wire:model="lcpassword" placeholder="Please re-enter password"
                        class="w-full p-2 border rounded mb-2">

                    @error('lcpassword')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                    <button wire:click="step3" class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                        Next Step
                    </button>
                @endif
            </div>
        </div>
    </div>


    {{-- @include('livewire.dashboard.float-icon-component') --}}
    @include('livewire.dashboard.right2-float-icon-component')

</div>
