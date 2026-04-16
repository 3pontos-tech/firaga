@php use He4rt\Admin\Filament\Pages\ExternalIdentitiesPage; @endphp
<x-filament-panels::page>
    <div class="mb-4">
        <a
            href="{{ ExternalIdentitiesPage::getUrl() }}"
            class="inline-flex items-center gap-1 text-sm text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
        >
            <x-filament::icon icon="heroicon-m-arrow-left" class="h-4 w-4" />
            Back to Integrations
        </a>
    </div>

    {{-- Connection Section --}}
    <x-filament::section>
        <x-slot name="heading">
            Connection
        </x-slot>

        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <x-filament::badge :color="$this->identity->isConnected() ? 'success' : 'danger'">
                    {{
                        $this->identity->isConnected()
                            ? 'Connected'
                            : 'Disconnected'
                    }}
                </x-filament::badge>
            </div>

            <div class="grid grid-cols-1 gap-4 text-sm text-gray-600 sm:grid-cols-2 dark:text-gray-300">
                @if ($this->identity->external_account_id)
                    <div>
                        <span class="font-medium text-gray-700 dark:text-gray-200">Account:</span>
                        #{{ $this->identity->external_account_id }}
                    </div>
                @endif

                <div>
                    <span class="font-medium text-gray-700 dark:text-gray-200">Connected:</span>
                    {{ $this->identity->connected_at->format('M d, Y') }}
                </div>

                @if ($this->identity->connectedByUser)
                    <div>
                        <span class="font-medium text-gray-700 dark:text-gray-200">By:</span>
                        {{ $this->identity->connectedByUser->name }}
                    </div>
                @endif
            </div>

            <div class="flex items-center gap-3 pt-2">{{ $this->disconnectAction }}</div>
        </div>
    </x-filament::section>

    {{-- Projects Section --}}
    @if ($this->identity->external_account_id)
        <x-filament::section>
            <x-slot name="heading">
                Projects
            </x-slot>

            <div class="space-y-4">
                <div class="flex flex-wrap items-center gap-3">{{ $this->syncProjectsAction }}</div>

                <div class="flex flex-wrap gap-4 text-xs text-gray-400">
                    @if ($this->identity->metadata['last_projects_sync_at'] ?? null)
                        <span>
                            Projects synced: {{
                                \Carbon\Carbon::parse($this->identity->metadata['last_projects_sync_at'])->format(
                                    'M d, Y H:i',
                                )
                            }}
                        </span>
                    @endif
                </div>

                @php
                    $resources = $this->getProjectMappings();
                @endphp

                @if ($resources->isNotEmpty())
                    <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th class="px-4 py-3 text-left font-medium text-gray-700 dark:text-gray-300">
                                        External Project
                                    </th>
                                    <th class="px-4 py-3 text-left font-medium text-gray-700 dark:text-gray-300">
                                        Status
                                    </th>
                                    <th class="px-4 py-3 text-left font-medium text-gray-700 dark:text-gray-300">
                                        Local Project
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($resources as $resource)
                                    <tr>
                                        <td class="px-4 py-3">
                                            <div>
                                                <p class="font-medium text-gray-900 dark:text-white">
                                                    {{
                                                        $resource->external_resource_data['name'] ??
                                                            "Project #{$resource->external_resource_id}"
                                                    }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            @if ($resource->resourceable)
                                                <x-filament::badge color="success">Mapped</x-filament::badge>
                                            @else
                                                <x-filament::badge color="warning">Unmapped</x-filament::badge>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-gray-600 dark:text-gray-300">
                                            {{ $resource->resourceable?->name ?? '—' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-sm text-gray-500 dark:text-gray-400">No projects synced yet. Click "Sync Projects" to fetch projects.</p>
                @endif
            </div>
        </x-filament::section>
    @endif
</x-filament-panels::page>
