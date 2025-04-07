<div x-data="registerForm()">

    @if (Auth::check())
        <script>
            window.location.href = "{{ route('home') }}"; // Redirect to the dashboard
        </script>
    @endif
    <script src="{{ asset('assets/js/register.js') }}"></script>
    <div x-data="{ activeTab: 'email', next: 1, showModal: false, countryCode: '+1' }">
        <header class="flex justify-between items-center border-b-2 border-gray-300 p-2 pl-5 pr-5">
            <div class="text-xl font-bold">
                <img x-show="next==1" style="width: 25px;" src="https://www.betcasn.com/images/icon_close.png"
                    alt="">
                <img x-show="next==2" @click="next = '1'; showModal = false" style="width: 25px;"
                    src="{{ asset('assets/images/backicon.png') }}" alt="">
                <img x-show="next==3" @click="next = '2'; showModal = false" style="width: 25px;"
                    src="{{ asset('assets/images/backicon.png') }}" alt="">
                <img x-show="next==4" @click="next = '3'; showModal = false" style="width: 25px;"
                    src="{{ asset('assets/images/backicon.png') }}" alt="">
            </div>
            <div class="text-sm font-bold">
                <!-- Toggle Buttons -->
                <div x-show="next==1" class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 pr-1">
                    <button @click="activeTab = 'email'"
                        :class="activeTab === 'email' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                        Email
                    </button>
                    <button @click="activeTab = 'phone'"
                        :class="activeTab === 'phone' ? 'bg-white text-black shadow' : 'text-black'"
                        class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                        Phone
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
        <div class="flex bg-white mt-20">
            <div x-show="next == 1" class="firststep w-full">
                <!-- Email Form -->
                <div x-show="activeTab === 'email'" class="p-6  w-full">
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
                        <input type="email" id="email" x-model="email" @input="validateEmail" placeholder="Your Email"
                            class="w-full p-2 border rounded mb-2">
                        <p class="error text-red-500" x-text="emailError"></p>


                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> OTP</h1>
                        <div class="flex items-center space-x-2 border rounded">
                            <input type="text" x-model="otp" @input="validateOTP" placeholder="Please Your OTP"
                                class="w-full p-2 border-none outline-none">
                            <button onclick="generateCode()" type="button"
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

                <!-- Phone Form -->
                <div x-show="activeTab === 'phone'" class="p-6  w-full ">
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
                            <input type="text" x-model="otp" @input="validateOTP" placeholder="Please Your OTP"
                                class="w-full p-2 border-none outline-none">
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
            </div>

            <div x-show="next == 2" class="w-full">
                <div class="p-6  w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Set your login password</h3>
                            <h3 class="text-xl mb-4 text-left">Password length 6-16 characters </h3>
                        </div>
                        <div class="flex">
                            <p><span x-text="next"></span>/4</p>
                        </div>
                    </main>
                    <div>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Login Password</h1>
                        <input type="password" x-model="lpassword" @input="validateLpasswordL"
                            placeholder="Please enter password" class="w-full p-2 border rounded mb-2">

                        <p class="error text-red-500" x-text="lpasswordError"></p>

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Confirm Password</h1>
                        <input type="password" x-model="cpassword" @input="validateLpasswordC"
                            placeholder="Please re-enter password" class="w-full p-2 border rounded mb-2">

                        <p class="error text-red-500" x-text="cpasswordError"></p>

                        <button @click="submitForm(3)"
                            class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50"
                            :disabled="!isValid1">
                            Next Step
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="next == 3" class="w-full">
                <div class="p-6  w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Set Withdrawal Password</h3>
                            <h3 class="text-xl mb-1 text-white text-left">Set Withdrawal Password</h3>
                        </div>
                        <div class="flex">
                            <p><span x-text="next"></span>/4</p>
                        </div>
                    </main>
                    <div>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Withdrawal Password</h1>
                        <input type="password" x-model="wlpassword" @input="validateWLpassword""
                            placeholder="Please enter password" class="w-full p-2 border rounded mb-2">
                        <p class="error text-red-500" x-text="lcpasswordError"></p>

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Confirm Password</h1>
                        <input type="password" x-model="wcpassword" @input="validateCLpassword""
                            placeholder="Please re-enter password" class="w-full p-2 border rounded mb-2">

                        <p class="error text-red-500" x-text="wcpasswordError"></p>

                        <button @click="submitForm(4)"
                            class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50"
                            :disabled="!isValid2">
                            Next Step
                        </button>
                    </div>
                </div>
            </div>

            <div x-show="next == 4" class="w-full">
                <div class="p-6  w-full">
                    <main class="flex items-center justify-between">
                        <div class="flex-row">
                            <h1 class="text-5xl mb-2"><b>Register</b></h1>
                            <h3 class="text-xl mb-1 text-left">Other Options</h3>
                            <h3 class="text-xl mb-1 text-white text-left">Set Withdrawal Password</h3>
                        </div>
                        <div class="flex">
                            <p><span x-text="next"></span>/4</p>
                        </div>
                    </main>
                    <div>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Phone</h1>
                        <div class="flex items-center space-x-2 border rounded">
                            <button @click="showModal = true" class=" p-2 rounded text-black">
                                <span x-text="countryCode"></span>
                            </button>
                            <input x-model="phone" @input="validatephone"" type="phone"
                                placeholder="Please enter your WhatsApp" class="w-full p-2 border-none outline-none">

                        </div>
                        <p class="error text-red-500" x-text="phoneError"></p>
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Invitation Code</h1>
                        <input type="text" x-model="code" placeholder="Please enter the invitation code"
                            class="w-full p-2 border rounded mb-2">

                        {{-- <p class="error text-red-500" x-text="codeError"></p> --}}

                        <button @click="submitForm(5)"
                            class="w-full bg-black text-white p-2 rounded mt-3 disabled:opacity-50"
                            :disabled="!isValid3">
                            Register
                        </button>
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
        <div x-show="next==1" class="flex-row mt-20 text-center">
            <h1 class="text-sm">Don't have an account yet?</h1>
            <h3 class="text-sm mb-4"><b><a href="/">Login</a></b></h3>
        </div>

        <div class="fixed text-right bottom-20 right-5 flex flex-col items-center space-y-3">
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
    </div>
</div>
