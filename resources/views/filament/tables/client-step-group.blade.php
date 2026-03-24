@php
    use App\Models\Detail;

    $allDetails = Detail::where('service_id', $record->service_id)
        ->orderBy('id')
        ->get();

    if ($allDetails->isEmpty()) {
        $allDetails = collect([$record]);
    }

    $grouped = $allDetails->groupBy(fn($d) => $d->client_step ?? '');
    $stepCounter = 1;

    $totalFees = $allDetails
        ->filter(fn($d) => !blank($d->fees) && strtolower($d->fees) !== 'none')
        ->pluck('fees')
        ->unique()
        ->implode(', ');
@endphp

<div class="w-full">

    <div class="flex items-center gap-2 mb-3 px-1">
        <svg class="w-4 h-4 text-gray-500 shrink-0" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>
        <span class="font-semibold text-gray-700 text-sm">Client Steps & Agency Actions</span>
    </div>

    <table class="w-full text-sm border-collapse">
        <thead>
            <tr class="bg-gray-50 border-b border-gray-200">
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide w-10">#</th>
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide w-1/4">Client Step</th>
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide">Agency Action</th>
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide w-24">Fee</th>
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide w-36">Processing Time</th>
                <th class="py-2 px-3 text-left text-xs font-semibold text-gray-500 uppercase tracking-wide w-40">Person Responsible</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @foreach ($grouped as $clientStep => $items)
                @php $rowCount = $items->count(); @endphp

                @foreach ($items as $index => $item)
                    <tr class="hover:bg-gray-50 transition-colors duration-100">

                        @if ($index === 0)
                            <td class="py-3 px-3 align-top text-center" rowspan="{{ $rowCount }}">
                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-blue-50 text-blue-600 font-bold text-xs">
                                    {{ $stepCounter }}
                                </span>
                            </td>
                            <td class="py-3 px-3 align-top text-gray-700 text-sm leading-snug" rowspan="{{ $rowCount }}">
                                {{ $clientStep ?: '—' }}
                            </td>
                        @endif

                        <td class="py-3 px-3 align-top text-gray-600 text-sm leading-snug">
                            {{ $item->agency_action ?? '—' }}
                        </td>

                        <td class="py-3 px-3 align-top">
                            @if (blank($item->fees) || strtolower($item->fees) === 'none')
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-gray-100 text-gray-500 text-xs font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400 inline-block"></span>
                                    None
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                                    {{ $item->fees }}
                                </span>
                            @endif
                        </td>

                        <td class="py-3 px-3 align-top text-blue-600 font-semibold text-sm">
                            {{ $item->processing_time ?? '—' }}
                        </td>

                        <td class="py-3 px-3 align-top text-gray-600 text-sm">
                            {{ $item->person_responsible ?? '—' }}
                        </td>

                    </tr>
                @endforeach

                @php $stepCounter++; @endphp
            @endforeach
        </tbody>

        <tfoot>
            <tr class="bg-gray-50 border-t-2 border-gray-200">
                <td colspan="3" class="py-3 px-3 text-right text-sm font-semibold text-gray-600 uppercase tracking-wide">
                    Total
                </td>
                <td class="py-3 px-3">
                    @if (blank($totalFees))
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-gray-100 text-gray-500 text-xs font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-400 inline-block"></span>
                            None
                        </span>
                    @else
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 inline-block"></span>
                            {{ $totalFees }}
                        </span>
                    @endif
                </td>
                <td class="py-3 px-3 text-blue-600 font-bold text-sm">
                    {{ $record->service?->total_processing_time ?? '—' }}
                </td>
                <td class="py-3 px-3"></td>
            </tr>
        </tfoot>
    </table>
</div>