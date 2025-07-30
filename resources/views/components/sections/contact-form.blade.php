@props([
    'heading' => 'Envie uma mensagem',
    'description' => 'Não esqueça de mandar seu material para gente, estamos super animados em descobrir mais sobre você ou sobre seu negócio.'
])
<section id="contact" class="p-10">
    <div class="container mx-auto">
        <div class="text-center flex flex-col gap-y-4 mb-4">
            <h1 class="text-5xl font-bold text-text-high mb-2">{{ $heading }}</h1>
            <p class="text-text-medium text-lg max-w-3xl mx-auto">{{ $description }}</p>
        </div>
        <livewire:contact-form />
    </div>
</section>
