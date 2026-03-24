    <div>
        <x-filament-panels::page>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mb-6">
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Service Name</p>
                    <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $this->record->service_name }}</p>
                </div>
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Classification</p>
                    <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $this->record->classification ?? '—' }}</p>
                </div>
                <div class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm dark:border-white/10 dark:bg-gray-900">
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400 dark:text-gray-500">Who May Avail</p>
                    <p class="mt-1 font-semibold text-gray-800 dark:text-gray-100">{{ $this->record->who_may_avail ?? '—' }}</p>
                </div>
            </div>

            @php
            $steps = $this->getSteps();

            $totalFee = collect($steps)
            ->flatMap(fn($step) => $step['agency_actions'])
            ->sum(fn($action) => is_numeric($action['fee'] ?? null) ? (float) $action['fee'] : 0);

            $totalMinutes = collect($steps)
            ->flatMap(fn($step) => $step['agency_actions'])
            ->sum(function ($action) {
            $time = is_numeric($action['processing_time'] ?? null) ? (float) $action['processing_time'] : 0;
            $unit = $action['processing_time_unit'] ?? 'minutes';
            return match ($unit) {
            'hours' => $time * 60,
            'days' => $time * 60 * 8,
            default => $time,
            };
            });

            if ($totalMinutes >= 480) {
            $days = floor($totalMinutes / 480);
            $remaining = $totalMinutes % 480;
            $hours = floor($remaining / 60);
            $mins = $remaining % 60;
            $parts = ["{$days} day(s)"];
            if ($hours > 0) $parts[] = "{$hours} hr(s)";
            if ($mins > 0) $parts[] = "{$mins} min(s)";
            $totalTimeDisplay = implode(' ', $parts);
            } elseif ($totalMinutes >= 60) {
            $hours = floor($totalMinutes / 60);
            $mins = $totalMinutes % 60;
            $totalTimeDisplay = $mins > 0
            ? "{$hours} hr(s) {$mins} min(s)"
            : "{$hours} hr(s)";
            } elseif ($totalMinutes > 0) {
            $totalTimeDisplay = "{$totalMinutes} min(s)";
            } else {
            $totalTimeDisplay = null;
            }
            @endphp

            <div class="rounded-xl border border-gray-200 bg-white shadow-sm dark:border-white/10 dark:bg-gray-900">

                <div class="flex items-center justify-between border-b border-gray-200 px-4 py-3 dark:border-white/10">
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Client Steps & Agency Actions</span>
                    </div>

                    <x-filament::button
                        x-on:click="$wire.mountAction('addDetail')"
                        icon="heroicon-m-plus"
                        size="sm">
                        Add Details
                    </x-filament::button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full table-auto text-sm">
                        <thead class="bg-gray-50 dark:bg-white/5">
                            <tr>
                                <th class="w-10 px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">#</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Client Step</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Agency Action</th>
                                <th class="w-32 px-4 py-5 text-left text-base font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">
                                    Fee
                                </th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Processing Time</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Person Responsible</th>
                                <th class="px-4 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 dark:divide-white/5">
                            @forelse ($steps as $step)
                            @php $actionCount = count($step['agency_actions']); @endphp
                            @foreach ($step['agency_actions'] as $index => $agencyAction)
                            @php
                            $unit = $agencyAction['processing_time_unit'] ?? 'minutes';
                            $unitLabel = match ($unit) {
                            'hours' => 'hr(s)',
                            'days' => 'day(s)',
                            default => 'min(s)',
                            };
                            @endphp
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
                                    @if (!empty($agencyAction['fee']) && is_numeric($agencyAction['fee']))
                                    <span class="font-medium text-gray-700 dark:text-gray-300">₱{{ number_format((float) $agencyAction['fee'], 2) }}</span>
                                    @else
                                    <x-filament::badge color="gray">None</x-filament::badge>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    @if (!empty($agencyAction['processing_time']) && is_numeric($agencyAction['processing_time']))
                                    <span class="font-semibold text-primary-600 dark:text-primary-400">
                                        {{ $agencyAction['processing_time'] }}
                                    </span>
                                    <span class="text-xs text-gray-400 dark:text-gray-500">
                                        {{ $unitLabel }}
                                    </span>
                                    @else
                                    <span class="text-gray-400 dark:text-gray-500">—</span>
                                    @endif
                                </td>
                                <td class="px-4 py-3 text-gray-600 dark:text-gray-400">
                                    {{ $agencyAction['person_responsible'] ?? '—' }}
                                </td>
                                @if ($index === 0)
                                <td rowspan="{{ $actionCount }}" class="border-l border-gray-100 px-4 py-3 align-top dark:border-white/10">
                                    <x-filament::button
                                        x-on:click="$wire.mountAction('editDetail', {{ json_encode(['id' => $step['detail_id']]) }})"
                                        icon="heroicon-m-pencil-square"
                                        size="sm"
                                        color="gray"
                                        outlined>
                                        Edit
                                    </x-filament::button>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                            @empty
                            <tr>
                                <td colspan="7" class="px-4 py-8 dark:border-white/10">
                                    <div class="flex flex-col items-center justify-center gap-3 text-center">
                                        <svg class="h-10 w-10 text-gray-300 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <p class="text-sm text-gray-400 dark:text-gray-500">No details found for this service.</p>
                                        <x-filament::button
                                            x-on:click="$wire.mountAction('addDetail')"
                                            icon="heroicon-m-plus"
                                            size="sm">
                                            Add the first detail
                                        </x-filament::button>
                                    </div>
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
                                    @if ($totalFee > 0)
                                    <span class="font-bold text-gray-800 dark:text-gray-100">₱{{ number_format($totalFee, 2) }}</span>
                                    @else
                                    <x-filament::badge color="gray">None</x-filament::badge>
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    @if ($totalTimeDisplay)
                                    <span class="font-bold text-primary-600 dark:text-primary-400">{{ $totalTimeDisplay }}</span>
                                    @else
                                    <span class="text-gray-400 dark:text-gray-500">—</span>
                                    @endif
                                </td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <x-filament-actions::modals />

        </x-filament-panels::page>
    </div>