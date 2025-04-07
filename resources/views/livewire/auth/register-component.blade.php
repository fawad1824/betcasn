<div>
    <header class="flex justify-between items-center border-b-2 border-gray-300 p-2 px-5">
        <!-- Left: Back/Close Icon -->
        <div class="text-xl font-bold">
            <button>
                @if ($steps == '1')
                    <img wire:click="backSteps(1)" class="w-6" src="https://www.betcasn.com/images/icon_close.png"
                        alt="Icon">
                @elseif ($steps == '2')
                    <img wire:click="backSteps(1)" class="w-6"
                        src="{{ asset('assets/images/backicon.png') }}" alt="Icon">
                @elseif ($steps == '3')
                    <img wire:click="backSteps(2)" class="w-6"
                        src="{{ asset('assets/images/backicon.png') }}" alt="Icon">
                @elseif ($steps == '4')
                    <img wire:click="backSteps(3)" class="w-6"
                        src="{{ asset('assets/images/backicon.png') }}" alt="Icon">
                @endif
            </button>
        </div>

        <!-- Center: Toggle Buttons -->
        <div class="text-sm font-bold">
            @if ($steps == '1')
                <div class="flex bg-gray-200 rounded-full p-1 w-40 mx-auto">
                    <button wire:click="setTab('email')"
                        class="flex-1 text-center px-4 py-2 text-sm font-medium rounded-full {{ $activeTab === 'email' ? 'bg-white' : 'text-gray-500' }}">
                        Email
                    </button>
                    <button wire:click="setTab('phone')"
                        class="flex-1 text-center px-4 py-2 text-sm font-medium rounded-full {{ $activeTab === 'phone' ? 'bg-white' : 'text-gray-500' }}">
                        Phone
                    </button>
                </div>
            @endif
        </div>

        <!-- Right: Language Selector -->
        <nav class="relative">
            <img wire:click="toggleLanguageModal" class="w-6 cursor-pointer"
                src="https://www.betcasn.com/images/icon_lang.png" alt="Language">

            @if ($showLangModal)
                <div
                    class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg p-4 transition-transform transform duration-300 ease-in-out">
                    <h2 class="text-lg font-bold mb-4">Select Language</h2>
                    <ul>
                        <li wire:click="setLanguage('English')" class="p-2 hover:bg-gray-200 cursor-pointer">English
                        </li>
                        <li wire:click="setLanguage('French')" class="p-2 hover:bg-gray-200 cursor-pointer">French</li>
                    </ul>
                    <button wire:click="toggleLanguageModal" class="mt-4 p-2 bg-gray-300 rounded w-full">Close</button>
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
                    @if ($steps == '2' || $steps == '3' || $steps == '4')
                        <div class="flex">
                            <p><span>{{ $steps }}</span>/4</p>
                        </div>
                    @endif
                </main>
                @if ($steps == '1')
                    @if ($activeTab == 'email')
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Email</h1>
                        <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2"
                            placeholder="Your Email">

                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    @elseif ($activeTab == 'phone')
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                        <div class="flex items-center space-x-2 bg-gray-200 border rounded">
                            <button wire:click="openModel()" class=" p-2 rounded text-black">
                                <span class="text-sm">+{{ $countryCode }}</span>
                            </button>
                            <input type="text" wire:model="phone" placeholder="Your Phone Number"
                                class="w-full p-2 border-none outline-none">
                        </div>
                        @error('phone')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    @endif


                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> OTP</h1>
                    <div class="flex items-center space-x-2 border rounded">
                        <input type="text" wire:model="otp" class="w-full p-2 border-none outline-none"
                            placeholder="Enter OTP">
                        <button wire:click="otpSending" class="p-2 rounded text-black w-1/3 text-right">
                            Get Verification Code
                        </button>
                    </div>
                    @error('otp')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror

                    <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>
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

                @if ($steps == '3')
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Withdraw Password</h1>
                    <input type="password" wire:model="wlpassword" placeholder="Please enter password"
                        class="w-full p-2 border rounded mb-2">

                    @error('wlpassword')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror

                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Withdraw Confirm Password</h1>
                    <input type="password" wire:model="wcppassword" placeholder="Please reenter password"
                        class="w-full p-2 border rounded mb-2">

                    @error('wcppassword')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror

                    <button type="button" wire:click="step4"
                        class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                        Next Step
                    </button>
                @endif
                @if ($steps == '4')
                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                    <div class="flex items-center space-x-2 bg-gray-200 border rounded">
                        <button wire:click="openModel()" class=" p-2 rounded text-black">
                            <span class="text-sm">+{{ $countryCode }}</span>
                        </button>
                        <input type="text" wire:model="whatsapp" placeholder="Your whatsapp Number"
                            class="w-full p-2 border-none outline-none">
                    </div>

                    @error('whatsapp')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror

                    <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Invitation Code</h1>
                    <input type="text" wire:model="code" placeholder="Please enter the invitation code"
                        class="w-full p-2 border rounded mb-2">
                    <button wire:click="step5"class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                        Register
                    </button>
                @endif
            </div>
        </div>


        @if ($countryCodeModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end" x-cloak>
                <div class="bg-white w-full p-4 rounded-t-lg">
                    <h2 class="text-lg font-bold mb-4">Select Country</h2>
                    <button wire:click="selectPhone(+1)" class="block w-full text-left p-2 hover:bg-gray-200">🇺🇸
                        United States (+1)</button>
                    <button wire:click="selectPhone(+92)" class="block w-full text-left p-2 hover:bg-gray-200">🇵🇰
                        Pakistan (+92)</button>
                    <button wire:click="closeModelCountry()"
                        class="w-full mt-2 bg-red-500 text-white p-2 rounded">Close</button>
                </div>
            </div>
        @endif

    </div>
</div>
