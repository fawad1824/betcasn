<style>
    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        z-index: -1;
    }
</style>

<div class="relative overflow-hidden rounded-lg mt-10">
    <div class="w-full "> <!-- Added padding instead of margin -->
        <div class="slider-container relative overflow-hidden">
            <!-- Slides -->
            <div class="slider flex "> <!-- Adjusted width to fit within margins -->
                <div class="slide w-full flex-shrink-0 h-[250px]">
                    <div class="relative h-[250px] flex items-center justify-between w-full p-6 bg-black rounded-lg">
                        <div class="text-white">
                            <img src="{{ asset('assets/images/betcasn.png') }}" alt="Logo" class="mb-4 ">
                            <h2 class="text-3xl font-bold ml-3">Master BET</h2>
                            <p class="text-3xl ml-3">Make Money in Real Time</p>
                        </div>
                        <img src="https://www.coincatch.com/img/rewards/rewards-banner.png" alt="Gift Box"
                            class="w-[500px] rounded-lg">
                    </div>
                </div>
                <div class="slide w-full flex-shrink-0 h-[250px] rounded-lg">
                    <div class="relative h-[250px] flex items-center justify-between w-full p-6 bg-black rounded-lg">
                        <div class="text-white">
                            <img src="{{ asset('assets/images/betcasn.png') }}" alt="Logo" class="mb-4 ">
                            <h2 class="text-3xl font-bold ml-3">Next Level</h2>
                            <p class="text-3xl ml-3">Win Big with Us</p>
                        </div>
                        <img src="https://www.coincatch.com/img/rewards/rewards-banner.png" alt="Gift Box"
                            class="w-[500px] rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <div class="dot w-3 h-3 bg-white rounded-full cursor-pointer" onclick="changeSlide(0)"></div>
                <div class="dot w-3 h-3 bg-gray-500 rounded-full cursor-pointer" onclick="changeSlide(1)"></div>
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
