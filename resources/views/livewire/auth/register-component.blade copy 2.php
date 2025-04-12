<div>
    <header class="flex justify-between items-center border-b-2 border-gray-300 p-2 px-5">
        <!-- Left: Back/Close Icon -->
        <div class="text-xl font-bold">
            <button>
                @if ($steps == '1')
                    <img wire:click="backSteps(1)" class="w-6" src="https://www.betcasn.com/images/icon_close.png"
                        alt="Icon">
                @elseif ($steps == '2')
                    <img wire:click="backSteps(1)" class="w-6" src="{{ asset('assets/images/backicon.png') }}"
                        alt="Icon">
                @elseif ($steps == '3')
                    <img wire:click="backSteps(2)" class="w-6" src="{{ asset('assets/images/backicon.png') }}"
                        alt="Icon">
                @elseif ($steps == '4')
                    <img wire:click="backSteps(3)" class="w-6" src="{{ asset('assets/images/backicon.png') }}"
                        alt="Icon">
                @elseif ($steps == '5')
                    <img wire:click="backSteps(4)" class="w-6" src="{{ asset('assets/images/backicon.png') }}"
                        alt="Icon">
                @endif
            </button>

        </div>


        <!-- Center: Toggle Buttons -->
        <div class="text-sm font-bold">
            @if ($steps == '1')
                <div class="flex bg-gray-200 rounded-full p-1 w-40 mx-auto">
                    <button wire:click="setTab('email')"
                        class="flex-1 text-center px-4 py-2 text-sm font-medium rounded-full
                       {{ $activeTab === 'email' ? 'bg-white' : 'text-gray-500' }}">
                        Email
                    </button>
                    <button wire:click="setTab('phone')"
                        class="flex-1 text-center px-4 py-2 text-sm font-medium rounded-full
                       {{ $activeTab === 'phone' ? 'bg-white' : 'text-gray-500' }}">
                        Phone
                    </button>
                </div>
            @else
                <div class="flex rounded-full p-1 h-10 w-40 mx-auto">
                </div>
            @endif
        </div>

        <!-- Right: Language Selector -->
        <nav x-data="{ showLangModal: false }" class="relative">
            <img @click="showLangModal = !showLangModal" class="w-6 cursor-pointer"
                src="{{asset('assets/images/icon_lang.webp')}}" alt="Language">

            <!-- Language Modal -->
            <div x-show="showLangModal" @click.away="showLangModal = false"
                class="fixed right-0 top-0 h-full w-64 bg-white shadow-lg p-4 transition-transform transform
                   duration-300 ease-in-out"
                :class="showLangModal ? 'translate-x-0' : '-translate-x-full'">
                <h2 class="text-lg font-bold mb-4">Select Language</h2>
                <ul>
                    <li class="p-2 hover:bg-gray-200 cursor-pointer">English</li>
                    <li class="p-2 hover:bg-gray-200 cursor-pointer">French</li>
                </ul>
                <button @click="showLangModal = false" class="mt-4 p-2 bg-gray-300 rounded w-full">Close</button>
            </div>
        </nav>
    </header>



    <div class="flex bg-white mt-20">
        @if ($steps == '1')
            <div class="firststep w-full">
                <!-- Email Form -->
                @if ($activeTab == 'email')
                    <div class="p-6  w-full">
                        <main class="flex items-center justify-between">
                            <div class="flex-row">
                                <h1 class="text-5xl mb-2"><b>Register</b></h1>
                                <h3 class="text-xl mb-4 text-left">Email Register</h3>
                            </div>
                            <div class="flex">
                                <img src="https://www.betcasn.com/images/register_1.png" alt="Logo" class="w-48">
                            </div>
                        </main>
                        <div>
                            <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Email</h1>
                            <input type="email" wire:model="email" id="email" placeholder="Your Email"
                                class="w-full p-2 border rounded mb-2">

                            @error('email')
                                <span class="error text-red-500">{{ $message }}</span>
                            @enderror


                            <h1 class="text-sm mb-2"><span class="text-red-700">*</span> OTP</h1>
                            <div class="flex items-center space-x-2 border rounded">
                                <input type="text" wire:model="otp" placeholder="Please Your OTP"
                                    class="w-full p-2 border-none outline-none">
                                <button type="button" wire:click="otpSending"
                                    class="p-2 rounded text-black w-1/3 text-right">
                                    Get Verification Code
                                </button>
                            </div>

                            @error('otp')
                                <span class="error text-red-500">{{ $message }}</span>
                            @enderror

                            <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>
                            <button wire:click="step2"
                                class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                                Next Step
                            </button>
                        </div>
                    </div>
                @else
                    <!-- Phone Form -->
                    <div class="p-6  w-full ">
                        <main class="flex items-center justify-between">
                            <div class="flex-row">
                                <h1 class="text-5xl mb-2"><b>Register</b></h1>
                                <h3 class="text-xl  mb-4 text-left">Phone Register</h3>
                            </div>
                            <div class="flex">
                                <img src="https://www.betcasn.com/images/register_1.png" alt="Logo" class="w-48">
                            </div>
                        </main>
                        <div>
                            <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                            <div class="flex items-center space-x-2 border rounded">
                                <button @click="showModal = true" class=" p-2 rounded text-black">
                                    <span x-text="countryCode"></span>
                                </button>
                                <input type="text" x-model="emailPhone" @input="validateemailPhone"
                                    placeholder="Your Phone Number" class="w-full p-2 border-none outline-none">
                            </div>
                            <p class="error text-red-500" x-text="emailPhoneError"></p>

                            <h1 class="text-sm mt-2 mb-2"><span class="text-red-700">*</span> Password</h1>

                            <div class="flex items-center space-x-2 border rounded">
                                <input type="text" x-model="otp" @input="validateOTP"
                                    placeholder="Please Your OTP" class="w-full p-2 border-none outline-none">
                                <button @click="generateCode" type="button"
                                    class="p-2 rounded text-black w-1/3 text-right">
                                    Get Verification Code
                                </button>
                            </div>
                            <p class="error text-red-500" x-text="otpError"></p>

                            <h1 class="text-sm mt-5 mb-10"><a href="/forget">Forgot Password?</a></h1>
                            <button @click="submitForm(2)"
                                class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50"
                                :disabled="!isValid">
                                Next Step
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        @elseif ($steps == '2')
            <div class="w-full">
                <div class="p-6  w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Set your login password</h3>
                            <h3 class="text-xl mb-4 text-left">Password length 6-16 characters </h3>
                        </div>
                        <div class="flex">
                            <p><span>{{ $steps }}</span>/4</p>
                        </div>
                    </main>
                    <div>
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
                        <button wire:click="step3"
                            class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                            Next Step
                        </button>
                    </div>
                </div>
            </div>
        @elseif ($steps == '3')
            <div class="w-full">
                <div class="p-6 w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Set Withdrawal Password</h3>
                            <h3 class="text-xl mb-1 text-white text-left">Set Withdrawal Password</h3>
                        </div>
                        <div class="flex">
                            <p><span>{{ $steps }}</span>/4</p>
                        </div>
                    </main>
                    <div>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Login Password</h1>
                        <input type="password" wire:model="wlpassword" placeholder="Please enter password"
                            class="w-full p-2 border rounded mb-2">

                        {{-- @error('wlpassword')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror --}}

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Confirm Password</h1>
                        <input type="password" wire:model="wcppassword" placeholder="Please reenter password"
                            class="w-full p-2 border rounded mb-2">

                        {{-- @error('wcppassword')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror --}}

                        <button type="button" wire:click="step4"
                            class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                            Next Step
                        </button>
                    </div>
                </div>
            </div>
        @elseif ($steps == '4')
            <div class="w-full">
                <div class="p-6  w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Other Options</h3>
                            <h3 class="text-xl mb-1 text-white text-left">Set Withdrawal Password</h3>
                        </div>
                        <div class="flex">
                            <p><span>{{ $steps }}</span>/4</p>
                        </div>
                    </main>
                    <div>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                        <div class="flex items-center space-x-2 border rounded">
                            <button class=" p-2 rounded text-black">
                                <span></span>
                            </button>
                            <input wire:model="WhatsApp" type="phone" placeholder="Please enter your WhatsApp"
                                class="w-full p-2 border-none outline-none">

                        </div>

                        @error('WhatsApp')
                            <span class="error text-red-500">{{ $message }}</span>
                        @enderror

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Invitation Code</h1>
                        <input type="text" wire:model="code" placeholder="Please enter the invitation code"
                            class="w-full p-2 border rounded mb-2">
                        <button
                            wire:click="step5"class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50">
                            Register
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
