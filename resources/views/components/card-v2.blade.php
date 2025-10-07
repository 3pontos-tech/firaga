@php use App\Filament\Components\DTOs\CardComponent; @endphp
@props([
    'as' => 'div',
    'href' => null,
    'interactive' => null, // bool|null|'brand'|'default' (legacy)
    'emphasis' => null,    // null|'default'|'primary' (aplica quando interactive)
    'align' => 'left',     // 'left'|'center'
    'disabled' => false,
    'density' => 'normal', // 'normal'|'compact'
    'elevation' => 1,      // 0|1|2
    'borderStrength' => 2, // 1|2 (mantido para evolução)
    'target' => null,
    'rel' => null,
    'card' => null, // DTO obrigatório: App\Filament\Components\DTOs\CardComponent
    'textBox' => 'flex-col'
])

@php
    // DTO obrigatório
//    if (!$card instanceof CardComponent) {
//        throw new \Exception('O componente CardV2 requer um DTO CardComponent válido.');
//    }

    $isInteractive =  $interactive && !$disabled;
    $tag = $href ? 'a' : $as;

    // Surface (elevação + borda + radius)
    $elevationClass = match((int) $elevation) {
        0 => 'bg-elevation-00dp',
        2 => 'bg-elevation-02dp',
        default => 'bg-elevation-01dp',
    };

    // Mantemos a borda atual do v1 (strength reservado para futuro)
    $borderClass = 'border border-outline-dark';

    $padding = 'p-6';
    if ($density === 'compact') {
        $padding = 'p-4';
    }

    // Interatividade mínima (apenas base para herdar via group-hover)
    $interactiveBase = '';
    if ($isInteractive) {
        $style = $normalizedEmphasis ?? 'default';
        $interactiveBase = 'hover:border-brand-primary transition hover:bg-brand-primary hover:text-text-high focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-brand-primary ring-offset-zinc-900';
    }

    $disabledClasses = $disabled ? ' pointer-events-none cursor-not-allowed opacity-60' : '';

    // Alinhamento de texto mínimo
    $alignText = $align === 'center' ? ' text-center' : ' text-left';

    $classes = trim(implode(' ', [
        $elevationClass,
        $borderClass,
        'rounded-xl transition',
        $padding,
        'flex flex-col gap-y-3', // stack básica
        $interactiveBase,
        $disabledClasses,
    ]));

    // Link / Atributos extras
    $linkAttrs = [];
    if ($href) {
        $linkAttrs['href'] = $href;
        if ($target) {
            $linkAttrs['target'] = $target;
            if ($target === '_blank' && !$rel) {
                $linkAttrs['rel'] = 'noopener noreferrer';
            }
        }
        if ($rel) {
            $linkAttrs['rel'] = $rel;
        }
    }
    if ($disabled) {
        $linkAttrs['aria-disabled'] = 'true';
        $linkAttrs['tabindex'] = '-1';
    }
@endphp

<div class="{{ $isInteractive ? 'group/card' : '' }}">
    <{{ $tag }} {{ $attributes->merge(['class' => $classes])->merge($linkAttrs) }}>
    {{-- Icon --}}
    @isset($icon)
        <div {{ $icon->attributes }}>
            {{ $icon }}
        </div>
    @else
        @if(!empty($card->icon))
            <div class="h-8 w-8 text-icon-high rounded-md grid place-items-center shrink-0">
                <x-filament::icon :icon="$card->icon" class="w-6 h-6"/>
            </div>
        @endif
    @endif

    <div class="flex {{ $textBox }}">
        {{-- Title --}}
        @isset($title)
            <h3 {{ $title->attributes->class('text-lg font-semibold tracking-tight text-text-high') }}>
                {{ $title }}
            </h3>
        @else
            @if(!empty($card->title))
                <h3 class="text-lg font-semibold tracking-tight  {{ $alignText }}">{{ $card->title }}</h3>
            @endif
        @endisset

        {{-- Subtitle / Description --}}
        @isset($description)
            <p {{ $description->attributes->class('text-sm text-text-medium group-hover/card:text-text-light') }}>
                {{ $description }}
            </p>
        @else
            @if(!empty($card->description))
                <p class="text-sm text-text-medium{{ $alignText }}">{{ $card->description }}</p>
            @endif
        @endisset

    </div>

    {{-- Ações (opcional) --}}
    @isset($actions)
        <div {{ $actions->attributes->class('mt-2') }}>
            {{ $actions }}
        </div>
    @endisset

    {{-- Rodapé (opcional) --}}
    @isset($footer)
        <div {{ $footer->attributes->class('mt-4 pt-4 border-t border-zinc-800/80') }}>
            {{ $footer }}
        </div>
    @endisset
</{{ $tag }}>
</div>
