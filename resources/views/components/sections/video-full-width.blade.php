@props([
    'badge',
    'heading',
    'description',
    'video_url'
])
<section class="relative py-12 md:py-16 lg:py-32 xl:py-40">
    <div class="absolute top-0 left-0 w-full h-4/5 md:h-1/2 bg-white dark:bg-black"></div>

    <div class="absolute bottom-0 left-0 w-full h-1/5 md:h-1/2 bg-brand-primary"></div>

    <div class="relative z-10 h-full flex flex-col">
        <div class="flex-shrink-0 container max-w-7xl mx-auto px-1 md:px-2 mb-8 md:mb-12">
            <div class="text-center flex flex-col items-center gap-y-4">
                <x-layout.shared.chip class="px-4 py-2">
                    {{ $badge ?? 'Vídeo' }}
                </x-layout.shared.chip>
                <x-layout.shared.section-header :$heading :$description width="narrow" />
            </div>
        </div>

        <div class="flex-grow flex items-center justify-center">
            <div class="w-full max-w-7xl mx-auto px-3 md:px-4">
                <div class="relative w-full aspect-video max-w-lg sm:max-w-2xl md:max-w-5xl lg:max-w-none mx-auto">
                    <video id="firece-video" class="w-full h-full object-cover rounded-lg md:rounded-xl lg:rounded-2xl shadow-2xl" muted loop playsinline>
                        <source src="{{ asset('video/firece_video.webm') }}" type="video/webm">
                        <source src="{{ asset('video/firece_video.mp4') }}" type="video/mp4">
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
            playButton.style.display = 'none';
            const showPlayButton = () => {
                playButton.style.display = 'flex';
            };
            video.addEventListener('pause', showPlayButton);
            video.addEventListener('ended', showPlayButton);
        }
    }
</script>
