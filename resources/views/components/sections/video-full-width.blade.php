@props([
    'headline',
    'video_url'
])
<section class="relative py-12 md:py-16 lg:py-32 xl:py-40">
    <div class="absolute top-0 left-0 w-full h-4/6 metallic:bg-black dark:bg-black"></div>

    <div class="absolute bottom-0 left-0 w-full h-2/6 bg-brand-primary"></div>

    <div class="relative z-10 h-full flex flex-col">
        <div class="px-4">
            <x-headline :component="$headline"></x-headline>
        </div>

        <div class="flex-grow flex items-center justify-center">
            <div class="w-full max-w-[90rem] mx-auto px-3 md:px-4">
                <div class="relative w-full aspect-video max-w-lg sm:max-w-2xl md:max-w-5xl lg:max-w-none mx-auto">
                    <video id="firece-video" class="w-full h-full object-cover rounded-lg md:rounded-xl lg:rounded-2xl shadow-2xl" muted loop playsinline>
                        <source src="{{ asset('video/firece_video.mp4') }}" type="video/mp4">
                        <source src="{{ asset('video/firece_video.webm') }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                    <button
                        id="play-button"
                        class="absolute inset-0 flex items-center justify-center hover:scale-105 transition-transform duration-200"
                        onclick="playVideo()"
                    >
                        <svg class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 lg:w-32 lg:h-32 xl:w-40 xl:h-40 drop-shadow-lg" viewBox="0 0 147 148" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="73.4995" cy="73.9995" r="73.062" fill="#E2410A"/>
                            <path d="M99.1719 68.8024C103.172 71.1118 103.172 76.8853 99.1719 79.1947L65.1663 98.8278C61.1663 101.137 56.1663 98.2505 56.1663 93.6317L56.1663 54.3654C56.1663 49.7466 61.1663 46.8598 65.1663 49.1692L99.1719 68.8024Z" fill="#FDFDFD"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 h-8 md:h-12"></div>
    </div>
</section>
<script>



    function playVideo() {
        const video = document.getElementById('firece-video');
        const playButton = document.getElementById('play-button');

        if (video && playButton) {
            video.play();

            video.controls = true;

            playButton.style.display = 'none';

            const showPlayButton = () => {
                playButton.style.display = 'flex';
                video.controls = false;
            };

            video.addEventListener('pause', showPlayButton);
            video.addEventListener('ended', showPlayButton);
        }
    }
</script>
