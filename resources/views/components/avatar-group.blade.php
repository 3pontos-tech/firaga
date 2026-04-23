@props ([
    'avatars' => [
        ['src' => 'https://i.pravatar.cc/80?img=12', 'alt' => 'User 1'],
        ['src' => 'https://i.pravatar.cc/80?img=32', 'alt' => 'User 2'],
        ['src' => 'https://i.pravatar.cc/80?img=47', 'alt' => 'User 3'],
        ['src' => 'https://i.pravatar.cc/80?img=5', 'alt' => 'User 4'],
        ['src' => 'https://i.pravatar.cc/80?img=68', 'alt' => 'User 5'],
        ['src' => 'https://i.pravatar.cc/80?img=25', 'alt' => 'User 6']
    ]
])

<div {{ $attributes->class(['flex items-center']) }}>
    @foreach ($avatars as $avatar)
        <img
            src="{{ $avatar['src'] }}"
            alt="{{ $avatar['alt'] ?? '' }}"
            class="border-border-base size-8 rounded-full border-2 object-cover {{ ! $loop->first ? '-ml-2' : '' }}"
        />
    @endforeach
</div>
