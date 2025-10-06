@props([
    'headline',
    'plans' => collect(),
])
<section class="py-12 sm:py-16 md:py-20 lg:py-24 bg-elevation-02dp">
    <div class="mx-auto flex flex-col items-center container px-4 sm:px-6 lg:px-8">
        <div class="mb-8 sm:mb-12 md:mb-14 lg:mb-16 w-full max-w-4xl">
            <x-headline :component="$headline"/>
        </div>
        <div class="w-full ">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 sm:gap-8 md:gap-10 lg:gap-12">
                @foreach ($plans as $plan)
                    <x-cards.plan-card
                        :bestPlan="$plan['best_plan'] ?? false"
                        :name="$plan['name']"
                        :description="$plan['description']"
                        :note="$plan['note'] ?? null"
                        :benefits="$plan['benefits']"
                        :cta_label="$plan['cta_label']"
                        :cta_url="$plan['cta_url']"
                    />
                @endforeach
            </div>
        </div>
    </div>
</section>
