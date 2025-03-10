<div class="w-[100%] h-screen">
    <div class="header bg-white">
        @include('livewire.dashboard.header-component')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <div x-data="{ activeTab: 'share', showModal: false }">
        <div x-show="next==1" class="flex bg-[#eeeeee] text-white rounded-full p-1 pl-1 pr-1">
            <button @click="activeTab = 'share'"
                :class="activeTab === 'share' ? 'bg-white text-black shadow' : 'text-black'"
                class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                Share
            </button>
            <button @click="activeTab = 'team'"
                :class="activeTab === 'team' ? 'bg-white text-black shadow' : 'text-black'"
                class="flex-1 px-4 py-2 rounded-full font-semibold transition" style="width: 123px;">
                Team Statistics
            </button>
        </div>

        <div x-show="activeTab === 'email'" class="p-6  w-full">
        </div>
        <div x-show="activeTab === 'team'" class="p-6  w-full">
        </div>
    </div>

    {{-- <div class="mx-auto w-[90%] flex-row items-center justify-center">

        <div class="w-[90%] pt-20 mb-10">
            <h1 class="text-4xl font-bold mb-5">
                Share with your friends to <br> get
                <span class="text-green-600">Commission</span>
            </h1>
            <span class="text-2xl">Share with your friends to get.</span>
            <span class="text-2xl text-blue-500 cursor-pointer underline">View Rules</span>
        </div>

        <div class="relative h-[600px] flex items-center justify-center">
            <!-- Background Image -->
            <img src="https://www.betcasn.com/images/finance/qrcode_bg.png" alt="Background Image"
                class="absolute w-[700px] h-full rounded-lg">

            <!-- QR Code -->
            <div id="qrcode" class="bg-white/80 rounded-lg z-10 mt-10"></div>
        </div>

        <div class="w-[90%] pt-20 mb-10">
            <h1 class="text-4xl font-bold mb-5">
                Invite through link
            </h1>

            <div class="border-2 p-5  border-gray-100 rounded-lg">
                <div class="flex items-center justify-between">
                    <span style="width: 107px;">Link</span> <input type="text"
                        class="w-[60%] h-12  rounded-lg px-5"
                        value="https://www.betcasn.com/register?inviteCode=10134566" readonly>
                    <button class="bg-blue-500 text-white px-5 py-2 rounded-lg">Copy</button>
                </div>
                <div class="flex items-center justify-between mt-5 mb-5">
                    <span>Invitation Code</span> <input type="text" class="w-[60%] h-12  rounded-lg px-5"
                        value="10134566" readonly>
                    <button class="bg-blue-500 text-white px-5 py-2 rounded-lg">Copy</button>
                </div>
            </div>

        </div>

        @include('livewire.dashboard.float-icon-component')
        @include('livewire.dashboard.right-float-icon-component')

        <script>
            new QRCode(document.getElementById("qrcode"), {
                text: "https://yourwebsite.com",
                width: 200,
                height: 200,
                correctLevel: QRCode.CorrectLevel.H
            });
        </script>
    </div> --}}

</div>
