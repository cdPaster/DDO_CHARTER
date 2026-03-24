<x-filament::page>
    <div class="w-full overflow-x-auto">
        @foreach ($details->groupBy('service_id') as $serviceId => $records)

            @php
                $grouped = $records->groupBy('client_step');
                $stepCounter = 1;
            @endphp

            <div class="mb-8">

                <table class="w-full min-w-[1100px] text-sm border-collapse">
                    <thead>
                        <tr class="bg-gray-100 border">
                            <th class="p-2">#</th>
                            <th class="p-2">Client Step</th>
                            <th class="p-2">Agency Action</th>
                            <th class="p-2">Fee</th>
                            <th class="p-2">Processing Time</th>
                            <th class="p-2">Person Responsible</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($grouped as $clientStep => $items)
                            @php $rowCount = $items->count(); @endphp

                            @foreach ($items as $index => $item)
                                <tr class="border">

                                    @if ($index === 0)
                                        <td rowspan="{{ $rowCount }}" class="p-2 text-center">
                                            {{ $stepCounter }}
                                        </td>

                                        <td rowspan="{{ $rowCount }}" class="p-2">
                                            {{ $clientStep }}
                                        </td>
                                    @endif

                                    <td class="p-2">{{ $item->agency_action }}</td>

                                    <td class="p-2">
                                        {{ $item->fees ?? 'None' }}
                                    </td>

                                    <td class="p-2 text-blue-600">
                                        {{ $item->processing_time }}
                                    </td>

                                    <td class="p-2">
                                        {{ $item->person_responsible }}
                                    </td>

                                </tr>
                            @endforeach

                            @php $stepCounter++; @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>

        @endforeach
    </div>
</x-filament::page>