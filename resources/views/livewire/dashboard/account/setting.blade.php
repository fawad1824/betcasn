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
                {{-- <img style="width: 25px;" src="{{asset('assets/images/icon_history.webp')}}" alt=""> --}}
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
            <div wire:click="changeImage" class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Avatar</span>
                <button class="flex items-center space-x-2">
                    <img src="{{ $image }}" alt="Avatar" class="w-10 h-10 rounded-full">
                    <img class="w-6 transform scale-x-[-1]" src="{{ asset('assets/images/backicon.png') }}"
                        alt="">
                </button>
            </div>

            <!-- Name -->
            <div wire:click="changeName" class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Name</span>
                @empty($name)
                    <button class="text-gray-500 cursor-pointer">Unknown</button>
                @else
                    <button class="text-black font-semibold">{{ $name }}</button>
                @endempty

                {{-- <span wire:click="changeName" class="text-gray-500">{{ Auth::user()->name ?? 'Unknown' }}</span> --}}

            </div>

            <!-- Gender -->
            <div wire:click="changeGender" class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Gender</span>
                @empty($gender)
                    <button class="text-gray-500 cursor-pointer">Unknown</button>
                @else
                    <button class="text-black font-semibold">{{ $gender }}</button>
                @endempty
            </div>

            <!-- Email -->
            <div class="flex items-center justify-between px-4 py-4">
                <span class="text-gray-700">Email</span>
                <span class="text-gray-500">{{ $email }}</span>
            </div>

            <!-- Phone Number -->
            <div class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Phone Number</span>
                @empty(isset($phone))
                    <span class="text-gray-500">{{ $phone }}</span>
                @else
                    <span class="text-gray-500">{{ $phone }}</span>
                @endempty
            </div>

            <!-- Withdrawal Address -->
            <div wire:click="changeWihdrawlModel" class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Withdrawal Address</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Login Password -->
            <div wire:click="changeLoginlModel" class="flex items-center justify-between px-4 py-4 cursor-pointer">
                <span class="text-gray-700">Change Login Password</span>
                <span class="text-gray-400">&rsaquo;</span>
            </div>

            <!-- Change Withdrawal Password -->
            <div wire:click="changeWithdrawlAccountModel"
                class="flex items-center justify-between px-4 py-4 cursor-pointer">
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


        @if ($imageModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50" x-cloak>
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="closeImageModel"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Select Avatar</h2>

                    <!-- Avatar Grid -->
                    <div class="grid grid-cols-4 gap-6 justify-items-center mb-8">
                        @foreach ($avatars as $avatar)
                            <div class="relative cursor-pointer" wire:click="selectAvatar('{{ $avatar }}')">
                                <img src="{{ asset($avatar) }}"
                                    class="w-20 h-20 rounded-full border-4 transition-all
                                 {{ $selectedAvatar === $avatar ? 'border-black' : 'border-gray-300 hover:border-black' }}" />

                                @if ($selectedAvatar === $avatar)
                                    <div class="absolute bottom-1 right-1 bg-black text-white rounded-full p-1 text-xs">
                                        ✔
                                    </div>
                                @endif
                            </div>
                        @endforeach

                    </div>

                    <!-- Save Button -->
                    <button wire:click="saveAvatar"
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif

        @if ($NameModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50">
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="closeNameModel"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Change Name
                    </h2>

                    <!-- Avatar Grid -->
                    <div class="w-full justify-items-center mb-8">
                        <input type="text" id="first_name" wire:model="name"
                            class="bg-gray-50 w-full border border-gray-300 text-gray-900 text-sm rounded-lg "
                            placeholder="Enter Your Name" required />
                    </div>

                    <!-- Save Button -->
                    <button wire:click="saveName"
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif

        @if ($genderModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50">
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="closeGenderModel"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Change Gender
                    </h2>

                    <!-- Avatar Grid -->
                    <div class="w-full justify-items-center mb-8">
                        <select name="gender" id="gender" wire:model="gender"
                            class="block py-2 px-4 w-full text-sm text-gray-900 bg-white border-0 border-b-2 border-gray-300 appearance-none dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option value="" selected>Select gender</option>
                            <option value="male" selected>Male</option>
                            <option value="female" selected>Female</option>
                            <option value="unknown" selected>Unknown</option>
                        </select>
                    </div>

                    <!-- Save Button -->
                    <button wire:click="saveGender"
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif

        @if ($WihdrawlModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50">
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="changeWihdrawlModelClose"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Add Withdrawal Address</h2>

                    <!-- Avatar Grid -->
                    <div class="w-full mb-10">

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span>Network</h1>

                        <div class="flex items-center space-x-2 border rounded">
                            <input type="text" readonly wire:model="network" name="network"
                                class="w-full p-2 border-none outline-none" placeholder="Enter network">

                            <button class="flex p-2 rounded text-black w-25 text-right">
                                | <img style="width: 27px; padding: 4px;"
                                    src="{{ asset('assets/images/tether-usdt-logo.png') }}" alt=""
                                    srcset=""> USDT
                            </button>
                        </div>
                        @error('network')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror


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


                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Withdrawal Address
                        </h1>
                        <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2"
                            placeholder="Please Enter USDT Wallet Address">

                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Remark </h1>
                        <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2"
                            placeholder="Please Enter Note">

                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <!-- Save Button -->
                    <button wire:click="saveName"
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif

        @if ($loginModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50">
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="changeLoginlModelClose"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Change Login Password</h2>

                    <!-- Avatar Grid -->
                    <div class="w-full mb-10">
                        <!-- New Password -->
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> New Password </h1>
                        <div class="relative">
                            <input type="{{ $showNewPassword ? 'text' : 'password' }}" wire:model="new_password"
                                class="w-full p-2 border rounded mb-2 pr-20" placeholder="New Password">
                            <button type="button" wire:click="toggleNewPasswordVisibility"
                                class="absolute right-3 top-2 text-sm text-gray-500">
                                {{ $showNewPassword ? 'Hide' : 'Show' }}
                            </button>
                        </div>
                        @error('new_password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <!-- Confirm Password -->
                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Confirm Password </h1>
                        <div class="relative">
                            <input type="{{ $showConfirmPassword ? 'text' : 'password' }}"
                                wire:model="confirm_password" class="w-full p-2 border rounded mb-2 pr-20"
                                placeholder="Confirm Password">
                            <button type="button" wire:click="toggleConfirmPasswordVisibility"
                                class="absolute right-3 top-2 text-sm text-gray-500">
                                {{ $showConfirmPassword ? 'Hide' : 'Show' }}
                            </button>
                        </div>
                        @error('confirm_password')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                    <!-- Save Button -->
                    <button wire:click="saveName"
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif

        @if ($WihdrawAccountlModel == true)
            <div class="fixed inset-0 bg-black bg-opacity-50 flex items-end z-50">
                <div class="bg-white w-full p-4 rounded-t-lg relative">
                    <!-- Close Button -->
                    <button wire:click="changeWithdrawlAccountModelClose"
                        class="absolute top-4 right-4 text-xl font-bold text-gray-500 hover:text-black">
                        &times;
                    </button>

                    <!-- Title -->
                    <h2 class="text-lg font-bold mb-4">Add Withdrawal Address</h2>

                    <!-- Avatar Grid -->
                    <div class="w-full mb-10">


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


                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Enter new withdrawal password
                        </h1>
                        <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2">

                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <h1 class="text-sm mb-2"><span class="text-red-700">*</span> Confirm Password
                        </h1>
                        <input type="email" wire:model="email" class="w-full p-2 border rounded mb-2">

                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <!-- Save Button -->
                    <button
                        class="w-full bg-black text-white py-3 rounded-full text-center font-semibold hover:opacity-90">
                        Save
                    </button>
                </div>
            </div>
        @endif
    </div>


</div>
