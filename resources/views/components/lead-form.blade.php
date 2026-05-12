@props ([
    'title' => 'Pronto para começar?',
    'description' => 'Preencha abaixo e a gente entra em contato em até 2 dias úteis',
    'selectLabel' => 'Vaga de interesse',
    'selectOptions' => [],
    'messageLabel' => 'Por que a Firece?',
    'submitLabel' => 'Enviar'
])

@php
    $inputClass = 'border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none';
    $fields = [
        ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
        ['name' => 'email', 'label' => 'E-mail', 'type' => 'email'],
        ['name' => 'phone', 'label' => 'Telefone', 'type' => 'tel'],
        ['name' => 'linkedin', 'label' => 'LinkedIn', 'type' => 'url'],
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
            @foreach ($fields as $field)
                <div class="flex flex-col gap-2">
                    <x-fr-text class="text-text-high!">{{ $field['label'] }}</x-fr-text>
                    <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" class="{{ $inputClass }}" />
                </div>
            @endforeach

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!">{{ $selectLabel }}</x-fr-text>
                <select name="role" class="{{ $inputClass }}">
                    <option value="" disabled selected></option>
                    @foreach ($selectOptions as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!">{{ $messageLabel }}</x-fr-text>
                <textarea
                    name="message"
                    placeholder="Digite sua mensagem"
                    class="{{ $inputClass }} placeholder:text-text-medium h-50 resize-none"
                ></textarea>
            </div>
        </form>

        <x-fr-button>{{ $submitLabel }}</x-fr-button>
    </div>
</section>
