<style>
    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        z-index: -1;
    }
</style>

<div class="relative overflow-hidden rounded-lg mt-10">
    <div class="w-full">
        <div class="slider-container relative overflow-hidden">
            <!-- Slides -->
            <div class="slider flex">
                <div class="slide w-full flex-shrink-0 h-[250px]">
                    <div
                        class="relative h-full w-full flex flex-col sm:flex-row items-center justify-between bg-white rounded-xl shadow-2xl border border-gray-200 p-4 sm:p-6">

                        <!-- Left Section (Logo + Text) -->
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/logocrown.png') }}" alt="Logo"
                                class="w-[120px] mb-2 sm:mb-0" />

                            <div class="ml-6">
                                <h2 class="text-4xl sm:text-5xl font-bold text-black">Master BET</h2>
                                <p class="text-2xl sm:text-2xl text-gray-700">Make Money <br> in Real Time</p>
                            </div>
                        </div>

                        <!-- Right Section (Image aligned right) -->
                        <div class="mt-4 sm:mt-0">
                            <img src="{{ asset('assets/images/sliderImagesss.png') }}" alt="Gift Box"
                                class="w-[300px] sm:w-[500px]" />
                        </div>
                    </div>
                </div>
                <div class="slide w-full flex-shrink-0 h-[250px]">
                    <div
                        class="relative h-full w-full flex flex-col sm:flex-row items-center justify-between bg-white rounded-xl shadow-2xl border border-gray-200 p-4 sm:p-6">

                        <!-- Left Section (Logo + Text) -->
                        <div class="flex items-center">
                            <img src="{{ asset('assets/images/logocrown.png') }}" alt="Logo"
                                class="w-[120px] mb-2 sm:mb-0" />


                            <div class="ml-6">
                                <h2 class="text-4xl sm:text-5xl font-bold text-black">Master BET</h2>
                                <p class="text-2xl sm:text-2xl text-gray-700">Make Money <br> in Real Time</p>
                            </div>
                        </div>

                        <!-- Right Section (Image aligned right) -->
                        <div class="mt-4 sm:mt-0">
                            <img src="{{ asset('assets/images/sliderImagesss.png') }}" alt="Gift Box"
                                class="w-[300px] sm:w-[500px]" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <div class="dot w-4 h-4 bg-black rounded-full cursor-pointer flex-shrink-0" onclick="changeSlide(0)">
                </div>
                <div class="dot w-4 h-4 bg-gray-900 rounded-full cursor-pointer flex-shrink-0" onclick="changeSlide(1)">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const slides = document.querySelector(".slider");
    const dots = document.querySelectorAll(".dot");

    function changeSlide(index) {
        slides.style.transform = `translateX(-${index * 100}%)`;
        dots.forEach((dot, i) => {
            dot.classList.toggle("bg-white", i === index);
            dot.classList.toggle("bg-gray-500", i !== index);
        });
    }
</script>
