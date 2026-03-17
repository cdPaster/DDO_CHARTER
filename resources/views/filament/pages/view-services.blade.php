{{-- Services Page - Using Service Model Data --}}
<x-filament-panels::page>
    {{-- Header Section --}}
    <div class="mb-8">
        <div class="bg-gradient-to-r from-slate-900 to-slate-800 rounded-lg p-8 text-white shadow-lg">
            <h1 class="text-4xl font-bold mb-2">
                {{ $office->name ?? 'Office Name' }}
            </h1>
            <p class="text-slate-300 text-lg">
                {{ $office->abbreviation ?? 'Office Description' }}
            </p>
        </div>
    </div>

    {{-- Available Services Section --}}
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-6 text-slate-900 border-b-2 border-cyan-500 pb-3">
            Available Services
        </h2>

        <div class="grid gap-8">
            @forelse($services as $service)
                <div class="bg-white border-l-4 border-cyan-500 rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                    
                    {{-- Service Header --}}
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">
                            {{ $service->service_name }}
                        </h3>
                        <p class="text-slate-600 mb-4">
                            {{ $service->service_description }}
                        </p>

                        {{-- Service Metadata Table --}}
                        <div class="overflow-x-auto mt-4">
                            <table class="w-full border border-slate-300 text-sm">
                                <thead class="bg-slate-100">
                                    <tr>
                                        <th class="border border-slate-300 px-4 py-2 text-left font-semibold">Classification</th>
                                        <th class="border border-slate-300 px-4 py-2 text-left font-semibold">Type of Transaction</th>
                                        <th class="border border-slate-300 px-4 py-2 text-left font-semibold">Who May Avail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-slate-50">
                                        <td class="border border-slate-300 px-4 py-2">{{ $service->classification ?? 'N/A' }}</td>
                                        <td class="border border-slate-300 px-4 py-2">{{ $service->service_type ?? 'N/A' }}</td>
                                        <td class="border border-slate-300 px-4 py-2">{{ $service->who_may_avail ?? 'N/A' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{-- Requirements and Where to Secure Section --}}
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        {{-- Requirements Column --}}
                        <div>
                            <h4 class="font-bold text-slate-900 mb-3">Requirements</h4>
                            <div class="border border-slate-300 rounded">
                                @forelse($service->requirements as $requirement)
                                    <div class="px-4 py-2 border-b border-slate-300 text-sm text-slate-700 last:border-b-0">
                                        {{ $requirement->description }}
                                    </div>
                                @empty
                                    <div class="px-4 py-2 bg-slate-50 text-sm text-slate-500">No requirements</div>
                                @endforelse
                            </div>
                        </div>

                        {{-- Where to Secure Column --}}
                        <div>
                            <h4 class="font-bold text-slate-900 mb-3">Where to Secure</h4>
                            <div class="border border-slate-300 rounded">
                                @forelse($service->requirements as $requirement)
                                    @if($requirement->where_to_secure)
                                        <div class="px-4 py-2 border-b border-slate-300 text-sm text-slate-700 last:border-b-0">
                                            {{ $requirement->where_to_secure }}
                                        </div>
                                    @endif
                                @empty
                                    <div class="px-4 py-2 bg-slate-50 text-sm text-slate-500">No locations specified</div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    {{-- Processing Steps Table --}}
                    <div class="mb-4">
                        <h4 class="font-bold text-slate-900 mb-3">Processing Steps</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full border border-slate-300 text-xs">
                                <thead class="bg-slate-900 text-white">
                                    <tr>
                                        <th class="border border-slate-300 px-3 py-2 text-left">CLIENT STEP</th>
                                        <th class="border border-slate-300 px-3 py-2 text-left">AGENCY ACTION</th>
                                        <th class="border border-slate-300 px-3 py-2 text-left">FEES TO BE PAID</th>
                                        <th class="border border-slate-300 px-3 py-2 text-left">PROCESSING TIME</th>
                                        <th class="border border-slate-300 px-3 py-2 text-left">PERSON RESPONSIBLE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($service->details as $detail)
                                        <tr class="{{ $loop->even ? 'bg-slate-50' : '' }} hover:bg-slate-100">
                                            <td class="border border-slate-300 px-3 py-2">{{ $detail->client_step ?? 'N/A' }}</td>
                                            <td class="border border-slate-300 px-3 py-2">{{ $detail->agency_action ?? 'N/A' }}</td>
                                            <td class="border border-slate-300 px-3 py-2">{{ $detail->fees ?? 'None' }}</td>
                                            <td class="border border-slate-300 px-3 py-2">{{ $detail->processing_time ?? 'N/A' }}</td>
                                            <td class="border border-slate-300 px-3 py-2">{{ $detail->person_responsible ?? 'N/A' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="border border-slate-300 px-3 py-2 text-center text-slate-500 bg-slate-50">No processing steps defined</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            @empty
                <div class="bg-slate-50 rounded-lg p-8 text-center">
                    <p class="text-slate-600">No Services available at this time.</p>
                </div>
            @endforelse
        </div>
    </div>
</x-filament-panels::page>

<style>
    /* Custom styling for better visual hierarchy */
    table thead th {
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    table tbody tr:first-child td {
        border-top: 2px solid #e2e8f0;
    }
</style>