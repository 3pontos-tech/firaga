@props([
    'heroWithImageData' => [],
    'urlImage' => ''
])


<!-- Hero Section with Image -->
<section class="relative min-h-screen md:min-h-[75vh] flex items-center  bg-linear-to-br from-surface via-surface/80 to-surface text-heading overflow-hidden py-28">

    <div class="relative container mx-auto px-6 lg:flex lg:items-center lg:justify-between z-10">

        <!-- LEFT: box with heading, subheading and description -->
        <div class="w-full w-max-full">
            <div>
                <span>TOP HEADING</span>
            </div>
            <h1 class="font-primary text-2xl sm:text-3xl md:text-4xl lg:text-4xl font-semibold leading-tight mb-4 sm:mb-6 drop-shadow-lg tracking-tight text-heading text-center sm:text-left">
                {{ str($heroWithImageData['heading']) }}
            </h1>
            <span class="max-w-full sm:max-w-lg text-base sm:text-md text-primary-content dark:text-primary-content mb-6 sm:mb-8 text-center sm:text-left animate-fade-in delay-200" >
                {{ str($heroWithImageData['subheading'])  }}
            </span>
            <p class="max-w-full sm:max-w-lg text-base sm:text-md text-primary-content dark:text-primary-content mb-6 sm:mb-8 text-center sm:text-left animate-fade-in delay-200">
                {{ str($heroWithImageData['description']) }}
            </p>
        </div>


        <!-- RIGHT: Image -->
        <div class="lg:w-1/2 flex justify-center items-center mb-8 lg:mb-0">
            <div class="relative w-full max-w-md h-auto rounded-lg shadow-2xl backdrop-blur-xl animate-fade-in delay-300 transition-all duration-300">
                <img src="{{ $urlImage }}" alt="Hero Image" class="w-full h-auto rounded-lg">
            </div>
        </div>

    </div>

</section>
