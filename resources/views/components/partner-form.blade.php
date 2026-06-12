@props ([
    'title' => 'Vamos construir algo juntos?',
    'description' =>
        'Conte um pouco sobre você e sua proposta. Nossa equipe analisa cada oportunidade individualmente e retorna em até 2 dias úteis.',
    'messageLabel' => 'Como podemos construir juntos?',
    'submitLabel' => 'Enviar proposta'
])

@php
    $inputClass = 'border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none';
    $fields = [
        ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
        ['name' => 'email', 'label' => 'E-mail', 'type' => 'email'],
        ['name' => 'phone', 'label' => 'Telefone', 'type' => 'tel'],
        ['name' => 'company', 'label' => 'Empresa, Projeto ou Instituição', 'type' => 'text'],
        ['name' => 'website', 'label' => 'Site ou Rede Social', 'type' => 'url'],
    ];
@endphp

<section {{ $attributes->class('section') }}>
    <div class="container flex flex-col gap-8">
        <x-fr-headline>
            <x-slot:title>
                {{ $title }}
            </x-slot:title>
            <x-slot:description>
                {{ $description }}
            </x-slot:description>
        </x-fr-headline>

        <form class="flex flex-col gap-6">
            @csrf
            @foreach ($fields as $field)
                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!"> {{ $field['label'] }} </x-fr-text>

                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="{{ $inputClass }}" />
                </div>
            @endforeach

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!"> Tipo de proposta </x-fr-text>

                <input
                    type="text"
                    name="proposal_type"
                    placeholder="Ex.: Parceria comercial, projeto educacional, conteúdo, tecnologia..."
                    class="{{ $inputClass }}"
                />
            </div>

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!"> {{ $messageLabel }} </x-fr-text>

                <textarea
                    name="message"
                    placeholder="Conte um pouco sobre sua ideia, público, empresa ou objetivo da parceria."
                    class="{{ $inputClass }} placeholder:text-text-medium h-50 resize-none"
                ></textarea>
            </div>
            <x-fr-button type="submit"> {{ $submitLabel }} </x-fr-button>
        </form>
    </div>
</section>
