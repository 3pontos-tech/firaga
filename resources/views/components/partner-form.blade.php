@props ([
    'title' => 'Vamos construir algo juntos?',
    'description' =>
        'Conte um pouco sobre você e sua proposta. Nossa equipe analisa cada oportunidade individualmente e retorna em até 2 dias úteis.',
    'messageLabel' => 'Como podemos construir juntos?',
    'submitLabel' => 'Enviar proposta'
])

@php
    $inputClass =
        'border-border-base focus:border-brand-primary w-full rounded-sm border p-4 focus:outline-none placeholder:text-text-medium';

    $fields = [
        [
            'name' => 'name',
            'label' => 'Nome',
            'type' => 'text',
            'placeholder' => 'Ex.: João da Silva',
        ],
        [
            'name' => 'email',
            'label' => 'E-mail',
            'type' => 'email',
            'placeholder' => 'Ex.: joao@email.com',
        ],
        [
            'name' => 'phone',
            'label' => 'Telefone',
            'type' => 'tel',
            'placeholder' => '(11) 99999-9999',
        ],
        [
            'name' => 'company',
            'label' => 'Empresa, Projeto ou Instituição',
            'type' => 'text',
            'placeholder' => 'Ex.: Fire|ce',
        ],
        [
            'name' => 'website',
            'label' => 'Site ou Rede Social',
            'type' => 'url',
            'placeholder' => 'https://www.seusite.com.br',
        ],
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

                    @if ($field['name'] === 'phone')
                        <input
                            type="tel"
                            name="{{ $field['name'] }}"
                            placeholder="{{ $field['placeholder'] }}"
                            class="{{ $inputClass }}"
                            x-on:input="
                                let v = $event.target.value.replace(/\D/g, '');
                                if (v.length > 11) v = v.slice(0, 11);

                                if (v.length > 10) {
                                    v = v.replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3');
                                } else if (v.length > 6) {
                                    v = v.replace(/^(\d{2})(\d{4})(\d+).*/, '($1) $2-$3');
                                } else if (v.length > 2) {
                                    v = v.replace(/^(\d{2})(\d+)/, '($1) $2');
                                }

                                $event.target.value = v;
                            "
                        />
                    @else
                        <input
                            type="{{ $field['type'] }}"
                            name="{{ $field['name'] }}"
                            placeholder="{{ $field['placeholder'] }}"
                            class="{{ $inputClass }}"
                        />
                    @endif
                </div>
            @endforeach

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!"> Tipo de proposta </x-fr-text>

                <select name="proposal_type" class="{{ $inputClass }}">
                    <option value="" disabled selected>Selecione o tipo de proposta</option>
                    <option value="parceria-comercial">Parceria comercial</option>
                    <option value="projeto-educacional">Projeto educacional conjunto</option>
                    <option value="joint-venture">Joint Venture estratégico</option>
                    <option value="outro">Outro</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <x-fr-text class="text-text-high!"> {{ $messageLabel }} </x-fr-text>

                <textarea
                    name="message"
                    placeholder="Conte um pouco sobre sua ideia, público, empresa ou objetivo da parceria."
                    class="{{ $inputClass }} h-50 resize-none"
                ></textarea>
            </div>

            <x-fr-button type="submit"> {{ $submitLabel }} </x-fr-button>
        </form>
    </div>
</section>
