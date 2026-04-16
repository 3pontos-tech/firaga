<x-filament-panels::page>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($this->getProviderCards() as $card)
            <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        {{ $card['provider']->getLabel() }}
                    </h3>
                    <x-filament::badge :color="$card['connected'] ? 'success' : 'gray'">
                        {{ $card['connected'] ? 'Connected' : 'Not Connected' }}
                    </x-filament::badge>
                </div>

                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                    {{ $card['provider']->getType()->getLabel() }}
                </p>

                @if ($card['connected'] && $card['identity'])
                    @if ($card['total_resources'] > 0)
                        <div class="mb-4 rounded-lg bg-gray-50 p-3 dark:bg-gray-700/50">
                            <div class="space-y-1 text-sm">
                                <div class="flex items-center gap-2 text-gray-600 dark:text-gray-300">
                                    <span
                                        >{{ $card['total_resources'] }} {{ \Illuminate\Support\Str::plural('project', $card['total_resources']) }} synced</span
                                    >
                                </div>
                                <div class="flex items-center gap-2 text-green-600 dark:text-green-400">
                                    <span>{{ $card['mapped_resources'] }} mapped</span>
                                </div>
                                @if ($card['unmapped_resources'] > 0)
                                    <div class="flex items-center gap-2 text-amber-600 dark:text-amber-400">
                                        <span>{{ $card['unmapped_resources'] }} unmapped</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif
                    @if ($card['last_synced_at'])
                        <p class="mb-4 text-xs text-gray-400">
                            Last synced: {{ \Carbon\Carbon::parse($card['last_synced_at'])->format('M d, Y') }}
                        </p>
                    @endif
                    <div class="flex items-center gap-3">
                        <a
                            href="{{ \He4rt\Admin\Filament\Pages\ManageExternalIdentityPage::getUrl(['identity' => $card['identity']->id]) }}"
                            class="bg-primary-600 hover:bg-primary-700 inline-flex items-center gap-1 rounded-lg px-4 py-2 text-sm font-medium text-white"
                        >
                            Manage
                            <x-filament::icon icon="heroicon-m-arrow-right" class="h-4 w-4" />
                        </a>
                        {{
                            ($this->disconnectAction)([
                                'identity_id' => $card['identity']->id,
                            ])
                        }}
                    </div>
                @else
                    <a
                        href="{{ route('identity.oauth.connect', $card['provider']) }}"
                        class="bg-primary-600 hover:bg-primary-700 inline-flex items-center rounded-lg px-4 py-2 text-sm font-medium text-white"
                    >
                        Connect
                    </a>
                @endif
            </div>
        @endforeach
    </div>
</x-filament-panels::page>
