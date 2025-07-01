<section class="p-5 bg-base-100">
    <div class="flex justify-center items-center overflow-hidden uppercase text-center">
        <div class="whitespace-nowrap">

            <h2 class="text-8xl animate-marquee text-base-content font-bold md:text-8xl lg:text-10xl tracking-wide py-10 animate-marquee whitespace-nowrap flex">
                @foreach(range(1,7) as $i)
                    Viva essa experiência •
                @endforeach
            </h2>
            <style>
                @keyframes marquee {
                    from { transform: translateX(0); }
                    to { transform: translateX(-20%); }
                }

                .animate-marquee {
                    animation: marquee 10s linear infinite;
                }
            </style>

        </div>
    </div>
</section>
