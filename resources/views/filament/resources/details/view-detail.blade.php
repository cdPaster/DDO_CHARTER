    <div>
    <x-filament-panels::page>

        {{-- Service Info Cards --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Service Name</p>
                <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $record->service->service_name ?? '—' }}</p>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Client Step</p>
                <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $record->client_step ?? '—' }}</p>
            </div>
            <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Fees</p>
                <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $record->fees ?? 'None' }}</p>
            </div>
        </div>

        {{-- Agency Actions Table --}}
        <div class="rounded-xl border border-gray-200 bg-white shadow-sm dark:border-white/10 dark:bg-gray-900">
            <div class="flex items-center gap-2 border-b border-gray-200 px-4 py-3 dark:border-white/10">
                <svg class="h-4 w-4 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Client Steps & Agency Actions</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full table-auto text-sm">
                    <thead class="bg-gray-50 dark:bg-white/5">
                        <tr>
                            <th class="w-10 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">#</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Client Step</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Agency Action</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Fee</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Processing Time</th>
                            <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Person Responsible</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 dark:divide-white/5">
                        @forelse ($steps as $step)
                            @php $actionCount = count($step['agency_actions']); @endphp
                            @foreach ($step['agency_actions'] as $index => $agencyAction)
                                <tr class="hover:bg-gray-50 dark:hover:bg-white/5 transition-colors">
                                    @if ($index === 0)
                                        <td rowspan="{{ $actionCount }}"
                                            class="border-r border-gray-100 px-4 py-3 align-top font-bold text-primary-600 dark:border-white/10 dark:text-primary-400">
                                            {{ $step['step_number'] }}
                                        </td>
                                        <td rowspan="{{ $actionCount }}"
                                            class="max-w-xs border-r border-gray-100 px-4 py-3 align-top text-gray-700 dark:border-white/10 dark:text-gray-300">
                                            {{ $step['client_step'] }}
                                        </td>
                                    @endif
                                    <td class="px-4 py-3 text-gray-600 dark:text-gray-400">{{ $agencyAction['action'] }}</td>
                                    <td class="px-4 py-3">
                                        @if (!empty($agencyAction['fee']) && strtolower($agencyAction['fee']) !== 'none')
                                            <span class="text-gray-700 dark:text-gray-300">{{ $agencyAction['fee'] }}</span>
                                        @else
                                            <x-filament::badge color="gray" size="sm">None</x-filament::badge>
                                        @endif
                                    </td>
                                    <td class="px-4 py-3 font-semibold text-primary-600 dark:text-primary-400">
                                        {{ $agencyAction['processing_time'] ?? '—' }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-600 dark:text-gray-400">
                                        {{ $agencyAction['person_responsible'] ?? '—' }}
                                    </td>
                                </tr>
                            @endforeach
                        @empty
                            <tr>
                                <td colspan="6" class="px-4 py-8 text-center text-gray-400 dark:text-gray-500">
                                    No agency actions found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot class="border-t-2 border-gray-200 bg-gray-50 dark:border-white/10 dark:bg-white/5">
                        <tr>
                            <td colspan="3" class="px-4 py-3 text-right text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                Total
                            </td>
                            <td class="px-4 py-3">
                                <x-filament::badge color="gray" size="sm">None</x-filament::badge>
                            </td>
                            <td class="px-4 py-3 font-bold text-primary-600 dark:text-primary-400">—</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

    </x-filament-panels::page>
</div>