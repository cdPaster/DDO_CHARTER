<x-filament-panels::page>

    {{-- ============================================================
     GOLDEN PALETTE CSS VARIABLES + CUSTOM STYLES
     ============================================================ --}}
    <style>
        /* ── Palette ── */
        :root {
            --gold-50: #fffbeb;
            --gold-100: #fef3c7;
            --gold-200: #fde68a;
            --gold-300: #fbbf24;
            --gold-400: #f59e0b;
            --gold-500: #d97706;
            /* primary action gold */
            --gold-600: #b45309;
            /* deep amber */
            --gold-700: #92400e;
            /* rich bronze */
            --gold-800: #78350f;
            /* dark bronze */
            --gold-900: #451a03;
            /* near-black bronze */

            --surface: #ffffff;
            --surface-2: #fffbf2;
            /* warm off-white tint */
            --border: #fde68a;
            /* gold-200 */
            --border-strong: #f59e0b;
            /* gold-400 */
            --text-primary: #1c0a00;
            --text-secondary: #78350f;
            --text-muted: #a16207;
        }

        /* Dark mode overrides */
        .dark {
            --surface: #1c1008;
            --surface-2: #251508;
            --border: #78350f;
            --border-strong: #b45309;
            --text-primary: #fef3c7;
            --text-secondary: #fbbf24;
            --text-muted: #d97706;
        }

        /* ── Back button ── */
        .gold-back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            color: var(--gold-700);
            background: var(--gold-50);
            border: 1.5px solid var(--gold-300);
            box-shadow: 0 1px 3px rgba(180, 83, 9, .10);
            transition: background .15s, color .15s, box-shadow .15s, transform .1s;
            text-decoration: none;
            cursor: pointer;
            flex-shrink: 0;
        }

        .gold-back-btn:hover {
            background: var(--gold-100);
            color: var(--gold-800);
            box-shadow: 0 3px 8px rgba(180, 83, 9, .18);
            transform: translateY(-1px);
        }

        .dark .gold-back-btn {
            background: #2d1a06;
            color: var(--gold-300);
            border-color: var(--gold-700);
        }

        .dark .gold-back-btn:hover {
            background: #3d2208;
            color: var(--gold-200);
        }

        /* ── Banner/Header Card ── */
        .gold-banner {
            border-radius: 14px;
            overflow: hidden;
            border: 1.5px solid var(--gold-200);
            background: var(--surface);
            box-shadow:
                0 1px 3px rgba(180, 83, 9, .06),
                0 4px 16px rgba(180, 83, 9, .08);
        }

        .dark .gold-banner {
            border-color: var(--gold-800);
            background: var(--surface);
            box-shadow: 0 4px 24px rgba(0, 0, 0, .4);
        }

        .gold-banner-inner {
            display: flex;
            flex-direction: column;
            gap: 12px;
            padding: 16px 20px;
            background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 60%, #fde68a 100%);
        }

        .dark .gold-banner-inner {
            background: linear-gradient(135deg, #2d1a06 0%, #3d2208 60%, #4a2c0a 100%);
        }

        @media (min-width: 640px) {
            .gold-banner-inner {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
                padding: 18px 24px;
            }
        }

        .gold-banner-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .gold-banner-label {
            font-size: 0.6875rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
            color: var(--gold-700);
            margin: 0;
        }

        .dark .gold-banner-label {
            color: var(--gold-300);
        }

        .gold-banner-title {
            font-size: 1rem;
            font-weight: 800;
            color: var(--gold-800);
            margin: 2px 0 0 0;
            line-height: 1.3;
        }

        .dark .gold-banner-title {
            color: var(--gold-100);
        }

        .gold-banner-meta {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 8px;
            background: rgba(255, 251, 235, .6);
            border: 1px solid var(--gold-200);
        }

        .dark .gold-banner-meta {
            background: rgba(45, 26, 6, .6);
            border-color: var(--gold-800);
        }

        .gold-banner-meta-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--gold-700);
            letter-spacing: .02em;
        }

        .dark .gold-banner-meta-label {
            color: var(--gold-300);
        }

        .gold-banner-meta-value {
            font-size: 0.875rem;
            font-weight: 700;
            color: var(--gold-800);
        }

        .dark .gold-banner-meta-value {
            color: var(--gold-100);
        }

        .gold-banner-meta-icon {
            color: var(--gold-500);
            flex-shrink: 0;
        }

        /* ── Card shell ── */
        .gold-card {
            border-radius: 14px;
            overflow: hidden;
            border: 1.5px solid var(--gold-200);
            background: var(--surface);
            box-shadow:
                0 1px 3px rgba(180, 83, 9, .06),
                0 4px 16px rgba(180, 83, 9, .08);
        }

        .dark .gold-card {
            border-color: var(--gold-800);
            background: var(--surface);
            box-shadow: 0 4px 24px rgba(0, 0, 0, .4);
        }

        /* ── Empty state ── */
        .empty-state {
            padding: 48px 24px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
        }

        .empty-icon-wrap {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(180, 83, 9, .15);
        }

        .dark .empty-icon-wrap {
            background: linear-gradient(135deg, #2d1a06, #3d2208);
        }

        .empty-icon-wrap svg {
            color: var(--gold-500);
        }

        .empty-label {
            font-size: .875rem;
            color: var(--gold-700);
            font-weight: 500;
        }

        .dark .empty-label {
            color: var(--gold-400);
        }

        /* ── Filament table overrides ── */
        .filament-table {
            background: var(--surface);
        }

        .dark .filament-table {
            background: var(--surface);
        }

        /* Override Filament table header styling */
        .filament-tables>.overflow-x-auto>table>thead>tr>th {
            background: linear-gradient(90deg, #fef9ee 0%, #fef3c7 100%);
            border-bottom-color: var(--gold-200);
            color: var(--gold-700);
            font-weight: 700;
            font-size: .75rem;
            letter-spacing: .06em;
        }

        .dark .filament-tables>.overflow-x-auto>table>thead>tr>th {
            background: linear-gradient(90deg, #261506 0%, #2d1a06 100%);
            border-bottom-color: var(--gold-800);
            color: var(--gold-400);
        }

        /* Override Filament table body rows */
        .filament-tables>.overflow-x-auto>table>tbody>tr {
            border-bottom-color: #fef3c7;
            transition: background .12s;
        }

        .dark .filament-tables>.overflow-x-auto>table>tbody>tr {
            border-bottom-color: #2d1a06;
        }

        .filament-tables>.overflow-x-auto>table>tbody>tr:hover {
            background: #fffbf0;
        }

        .dark .filament-tables>.overflow-x-auto>table>tbody>tr:hover {
            background: #251508;
        }

        /* Override Filament table cells */
        .filament-tables>.overflow-x-auto>table>tbody>tr>td {
            color: var(--text-primary);
            border-bottom-color: #fef3c7;
        }

        .dark .filament-tables>.overflow-x-auto>table>tbody>tr>td {
            color: var(--text-primary);
            border-bottom-color: #2d1a06;
        }

        /* Service name cell */
        .service-name-link {
            color: var(--gold-700);
            font-weight: 700;
            text-decoration: none;
            transition: color .15s;
        }

        .service-name-link:hover {
            color: var(--gold-900);
            text-decoration: underline;
        }

        .dark .service-name-link {
            color: var(--gold-300);
        }

        .dark .service-name-link:hover {
            color: var(--gold-100);
        }

        /* Requirement count badge */
        .requirement-badge {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 24px;
            padding: 0 8px;
            border-radius: 99px;
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            color: var(--gold-700);
            font-size: .75rem;
            font-weight: 700;
            border: 1px solid var(--gold-200);
            box-shadow: 0 2px 4px rgba(180, 83, 9, .10);
        }

        .dark .requirement-badge {
            background: linear-gradient(135deg, #2d1a06, #3d2208);
            color: var(--gold-300);
            border-color: var(--gold-800);
        }

        /* Action buttons */
        .btn-action {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            padding: 0;
            background: var(--gold-50);
            border: 1.5px solid var(--gold-300);
            color: var(--gold-700);
            cursor: pointer;
            transition: all .15s;
            font-size: 0;
        }

        .btn-action:hover {
            background: var(--gold-100);
            color: var(--gold-800);
            box-shadow: 0 2px 6px rgba(180, 83, 9, .15);
        }

        .dark .btn-action {
            background: #2d1a06;
            color: var(--gold-300);
            border-color: var(--gold-700);
        }

        .dark .btn-action:hover {
            background: #3d2208;
            color: var(--gold-100);
        }

        /* Override Filament action button styles within the table */
        .filament-tables-sticky-header>thead>tr>th .filament-button {
            background: transparent;
            border: none;
        }
    </style>

    {{-- ── SERVICE BANNER ─────────────────────────────────────── --}}
    @if($this->service)
    <div class="mb-6">
        <div class="gold-banner">
            <div class="gold-banner-inner">

                {{-- Left: back link + service name --}}
                <div class="gold-banner-left">

                    <a href="{{ \App\Filament\Resources\Services\ServiceResource::getUrl('index', ['service_id' => $this->service->id]) }}"
                        class="gold-back-btn"
                        title="Return to Service">
                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                    <div>
                        <p class="gold-banner-label">Service</p>
                        <h2 class="gold-banner-title">
                            {{ $this->service->service_name }}
                        </h2>
                    </div>

                </div>

                {{-- Right: requirement count pill --}}
                <div class="gold-banner-meta">
                    <svg class="gold-banner-meta-icon h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    <span class="gold-banner-meta-label">Requirements:</span>
                    <span class="gold-banner-meta-value">
                        {{ $this->service->requirements()->count() }}
                    </span>
                </div>

            </div>
        </div>
    </div>
    @endif

    {{-- ── TABLE (header actions rendered inside by Filament) ─── --}}
    <div class="gold-card">
        {{ $this->table }}
    </div>

</x-filament-panels::page>