<x-filament-panels::page>

    {{-- ── SERVICE BANNER ─────────────────────────────────────── --}}
    @if($this->service)
        <div class="mb-2 flex flex-col gap-3 rounded-xl border border-gray-200
                    bg-white px-5 py-4 dark:border-gray-700 dark:bg-gray-900
                    sm:flex-row sm:items-center sm:justify-between">

            {{-- Left: back link + service name --}}
            <div class="flex items-center gap-3">

                <a href="{{ \App\Filament\Resources\Services\ServiceResource::getUrl('index') }}"
                   class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg
                          border border-gray-200 bg-gray-50 text-gray-400
                          transition hover:border-primary-300 hover:bg-primary-50
                          hover:text-primary-600 dark:border-gray-700 dark:bg-gray-800
                          dark:hover:text-primary-400">
                    <x-heroicon-o-arrow-left class="h-4 w-4"/>
                </a>

                <div>
                    <p class="text-[10px] font-semibold uppercase tracking-widest
                              text-gray-400 dark:text-gray-500">
                        Service
                    </p>
                    <h2 class="text-base font-bold text-gray-900 dark:text-white leading-tight">
                        {{ $this->service->service_name }}
                    </h2>
                </div>


            </div>

            {{-- Right: count pill --}}
            <div class="flex shrink-0 items-center gap-1.5 rounded-lg border border-gray-100
                        bg-gray-50 px-3 py-2 dark:border-gray-700 dark:bg-gray-800">
                <x-heroicon-o-clipboard-document-list
                    class="h-4 w-4 text-primary-500"/>
                <span class="text-sm font-bold text-gray-700 dark:text-gray-200">
                    {{ $this->service->requirements()->count() }}
                </span>
                <span class="text-xs text-gray-400">
                    {{ Str::plural('requirement', $this->service->requirements()->count()) }}
                </span>
            </div>

        </div>
    @endif

    {{-- ── TABLE (header actions rendered inside by Filament) ─── --}}
    {{ $this->table }}

</x-filament-panels::page>