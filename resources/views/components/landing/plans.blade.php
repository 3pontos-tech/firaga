@props([
    'heading' => 'Investimento Diversos Pacotes na medida',
    'subheading' => 'Escolha o plano ideal para o seu momento financeiro',
    'plansData' => collect([
    ])
])

<div class="bg-surface py-16">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-3 text-heading">{{ $heading }}</h2>
        <p class="text-body text-center mb-16 max-w-3xl mx-auto">{{ $subheading }}</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            @foreach($plansData as $index => $plan)
                <x-landing.plan-item :$plan></x-landing.plan-item>
            @endforeach
        </div>
    </div>
</div>
