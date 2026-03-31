<x-filament-panels::page>

@php
    $office   = $this->record;
    $services = $office->services()->with(['requirements', 'details'])->get();
@endphp

<style>
    /* ════════════════════════════════════════════════════════════════
       GOLD SCALE GOVERNMENT PORTAL THEME
       Sourced exactly from the provided gold token set.
       Light mode  = warm white surfaces + amber/bronze accents
       Dark mode   = deep bronze-black surfaces + bright gold accents
       ════════════════════════════════════════════════════════════════ */

    /* ── Gold scale (shared reference) ── */
    :root {
        --gold-50:  #fffbeb;
        --gold-100: #fef3c7;
        --gold-200: #fde68a;
        --gold-300: #fbbf24;
        --gold-400: #f59e0b;
        --gold-500: #d97706;
        --gold-600: #b45309;
        --gold-700: #92400e;
        --gold-800: #78350f;
        --gold-900: #451a03;
    }

    /* ══ LIGHT MODE (default) ══ */
    :root {
        /* surfaces */
        --od-bg-page:        #fffbf2;        /* surface-2 */
        --od-bg-card:        #ffffff;        /* surface */
        --od-bg-card-alt:    var(--gold-50);
        --od-bg-header:      var(--gold-600); /* b45309 — deep amber */
        --od-bg-header-dark: var(--gold-700); /* 92400e — rich bronze */
        --od-bg-inforow:     var(--gold-50);
        --od-bg-section-hd:  var(--gold-100);
        --od-bg-table-head:  var(--gold-100);
        --od-bg-table-row:   #ffffff;
        --od-bg-table-hover: var(--gold-50);
        --od-bg-tfoot:       var(--gold-100);
        --od-bg-empty:       var(--gold-50);

        /* borders */
        --od-border:         var(--gold-200); /* fde68a */
        --od-border-light:   var(--gold-100); /* fef3c7 */

        /* gold accents */
        --od-gold-bright:    var(--gold-400); /* f59e0b */
        --od-gold-mid:       var(--gold-500); /* d97706 */
        --od-gold-dim:       var(--gold-600); /* b45309 */
        --od-gold-text:      var(--gold-600);
        --od-gold-label:     var(--gold-600); /* b45309 */

        /* text */
        --od-text-primary:   #1c0a00;         /* text-primary */
        --od-text-secondary: var(--gold-800); /* 78350f */
        --od-text-muted:     #a16207;         /* text-muted */
        --od-text-value:     var(--gold-800); /* 78350f */

        /* fee (green — kept neutral, unaffected by gold scale) */
        --od-fee-color:      #15803d;
        --od-fee-bg:         #f0fdf4;
        --od-fee-border:     #bbf7d0;

        /* time — uses gold scale */
        --od-time-color:     var(--gold-600);
        --od-time-bg:        var(--gold-50);
        --od-time-border:    var(--gold-200);

        /* badges */
        --od-badge-bg:       var(--gold-50);
        --od-badge-text:     var(--gold-700);
        --od-badge-border:   var(--gold-200);

        /* "other" pill */
        --od-other-bg:       #fff7ed;
        --od-other-text:     var(--gold-600);
        --od-other-border:   var(--gold-300);

        /* row numbers & count pill */
        --od-num-color:      var(--gold-600);
        --od-count-bg:       var(--gold-50);
        --od-count-text:     var(--gold-700);
        --od-count-border:   var(--gold-200);

        --od-radius:         0.65rem;
        --od-radius-sm:      0.35rem;
        --od-shadow:         0 1px 4px rgba(180,83,9,.10), 0 1px 2px rgba(180,83,9,.06);
    }

    /* ══ DARK MODE ══ */
    .dark {
        /* surfaces — deep bronze-black, still warm */
        --od-bg-page:        #1a0e05;
        --od-bg-card:        #220f04;
        --od-bg-card-alt:    #1e0d03;
        --od-bg-header:      var(--gold-800); /* 78350f — dark bronze */
        --od-bg-header-dark: var(--gold-900); /* 451a03 — near-black bronze */
        --od-bg-inforow:     #1e0e04;
        --od-bg-section-hd:  #180b02;
        --od-bg-table-head:  #180b02;
        --od-bg-table-row:   #1e0e04;
        --od-bg-table-hover: #261205;
        --od-bg-tfoot:       #180b02;
        --od-bg-empty:       #1a0e05;

        /* borders */
        --od-border:         #3a1a06;
        --od-border-light:   #2e1404;

        /* gold accents — brighter in dark for contrast */
        --od-gold-bright:    var(--gold-300); /* fbbf24 */
        --od-gold-mid:       var(--gold-400); /* f59e0b */
        --od-gold-dim:       var(--gold-500); /* d97706 */
        --od-gold-text:      var(--gold-300);
        --od-gold-label:     var(--gold-500); /* d97706 */

        /* text */
        --od-text-primary:   var(--gold-100); /* fef3c7 */
        --od-text-secondary: var(--gold-300); /* fbbf24 */
        --od-text-muted:     var(--gold-500); /* d97706 */
        --od-text-value:     var(--gold-200); /* fde68a */

        /* fee */
        --od-fee-color:      #4ade80;
        --od-fee-bg:         #052e16;
        --od-fee-border:     #14532d;

        /* time */
        --od-time-color:     var(--gold-300);
        --od-time-bg:        #1e1000;
        --od-time-border:    #3a2200;

        /* badges */
        --od-badge-bg:       #1e1000;
        --od-badge-text:     var(--gold-300);
        --od-badge-border:   #3a2200;

        /* "other" pill */
        --od-other-bg:       #2a1200;
        --od-other-text:     var(--gold-400);
        --od-other-border:   #4a2800;

        /* row numbers & count pill */
        --od-num-color:      var(--gold-400);
        --od-count-bg:       #1e1000;
        --od-count-text:     var(--gold-300);
        --od-count-border:   #3a2200;

        --od-shadow:         0 2px 14px rgba(0,0,0,.6), 0 1px 4px rgba(0,0,0,.4);
    }

    /* ── Service block wrapper ── */
    .od-service-block {
        border: 1px solid var(--od-border);
        border-radius: var(--od-radius);
        overflow: hidden;
        background: var(--od-bg-card);
        margin-bottom: 1.75rem;
        box-shadow: var(--od-shadow);
    }

    /* ── Service header ── */
    .od-service-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.7rem 1.25rem;
        background: linear-gradient(90deg, var(--od-bg-header) 0%, var(--od-bg-header-dark) 100%);
        border-bottom: 1px solid rgba(0,0,0,.18);
    }
    .od-service-num {
        font-size: 0.6rem;
        font-weight: 800;
        color: rgba(255,255,255,.65);
        text-transform: uppercase;
        letter-spacing: .12em;
        padding: .18rem .55rem;
        border-radius: var(--od-radius-sm);
        background: rgba(0,0,0,.25);
        border: 1px solid rgba(255,255,255,.18);
        white-space: nowrap;
    }
    .od-service-name {
        font-size: .9375rem;
        font-weight: 700;
        color: #fff8e8;
        letter-spacing: .01em;
        text-shadow: 0 1px 3px rgba(0,0,0,.4);
    }

    /* ── Info row ── */
    .od-info-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr;
        gap: 0;
        border-bottom: 1px solid var(--od-border);
        background: var(--od-bg-inforow);
    }
    .od-info-cell {
        padding: .875rem 1.25rem;
        border-right: 1px solid var(--od-border-light);
        display: flex;
        flex-direction: column;
        gap: .3rem;
    }
    .od-info-cell:last-child { border-right: none; }
    .od-info-label {
        font-size: .6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: var(--od-gold-label);
    }
    .od-info-value {
        font-size: .84rem;
        font-weight: 500;
        color: var(--od-text-value);
        line-height: 1.5;
    }

    /* ── Service type badges ── */
    .stype-badge {
        display: inline-block;
        font-size: .68rem;
        font-weight: 700;
        padding: .18rem .6rem;
        border-radius: .3rem;
        background: var(--od-badge-bg);
        color: var(--od-badge-text);
        border: 1px solid var(--od-badge-border);
        margin-right: .3rem;
        margin-bottom: .2rem;
        letter-spacing: .04em;
    }

    /* ── Section heading ── */
    .od-section-head {
        display: flex;
        align-items: center;
        gap: .5rem;
        padding: .45rem 1.25rem;
        background: var(--od-bg-section-hd);
        border-bottom: 1px solid var(--od-border);
        border-top: 1px solid var(--od-border);
    }
    .od-section-head svg {
        color: var(--od-gold-dim);
        opacity: .7;
        flex-shrink: 0;
    }
    .od-section-title {
        font-size: .62rem;
        font-weight: 800;
        color: var(--od-gold-label);
        text-transform: uppercase;
        letter-spacing: .1em;
    }
    .od-section-count {
        font-size: .6rem;
        font-weight: 700;
        padding: .1rem .5rem;
        border-radius: 9999px;
        background: var(--od-count-bg);
        color: var(--od-count-text);
        border: 1px solid var(--od-count-border);
        margin-left: auto;
    }

    /* ── Requirements table ── */
    .req-table {
        width: 100%;
        border-collapse: collapse;
        font-size: .825rem;
        background: var(--od-bg-table-row);
    }
    .req-table thead tr {
        background: var(--od-bg-table-head);
        border-bottom: 1px solid var(--od-border);
    }
    .req-table th {
        padding: .5rem 1rem;
        text-align: left;
        font-size: .6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: var(--od-gold-label);
    }
    .req-table td {
        padding: .7rem 1rem;
        vertical-align: top;
        border-bottom: 1px solid var(--od-border-light);
        color: var(--od-text-value);
        font-size: .84rem;
    }
    .req-table tbody tr:last-child td { border-bottom: none; }
    .req-table tbody tr:hover td { background: var(--od-bg-table-hover); }

    .req-num {
        font-size: .78rem;
        font-weight: 700;
        color: var(--od-num-color);
    }
    .other-pill {
        display: inline-block;
        font-size: .6rem;
        font-weight: 600;
        padding: .1rem .45rem;
        border-radius: 9999px;
        background: var(--od-other-bg);
        color: var(--od-other-text);
        border: 1px solid var(--od-other-border);
        margin-left: .4rem;
        vertical-align: middle;
    }

    /* ── Steps table ── */
    .steps-wrap { overflow-x: auto; }
    .steps-table {
        width: 100%;
        border-collapse: collapse;
        font-size: .825rem;
        background: var(--od-bg-table-row);
    }
    .steps-table thead tr {
        background: var(--od-bg-table-head);
        border-bottom: 1px solid var(--od-border);
    }
    .steps-table th {
        padding: .5rem 1rem;
        text-align: left;
        font-size: .6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .12em;
        color: var(--od-gold-label);
        white-space: nowrap;
    }
    .steps-table th.col-fee,
    .steps-table th.col-time { text-align: right; }

    .steps-table td {
        padding: .7rem 1rem;
        vertical-align: top;
        border-bottom: 1px solid var(--od-border-light);
        color: var(--od-text-value);
        font-size: .84rem;
    }
    .steps-table tbody tr:last-child td { border-bottom: none; }
    .steps-table tbody tr:hover td { background: var(--od-bg-table-hover); }

    .step-num {
        font-size: .78rem;
        font-weight: 700;
        color: var(--od-num-color);
    }
    .td-fee, .td-time { text-align: right; }

    /* Fee value */
    .fee-val {
        font-size: .85rem;
        font-weight: 700;
        color: var(--od-fee-color);
        white-space: nowrap;
        font-variant-numeric: tabular-nums;
    }
    .fee-val.none {
        color: var(--od-text-muted);
        font-weight: 400;
    }

    /* Time value */
    .time-wrap {
        display: inline-flex;
        align-items: baseline;
        gap: .25rem;
        white-space: nowrap;
    }
    .time-val {
        font-size: .85rem;
        font-weight: 700;
        color: var(--od-time-color);
        font-variant-numeric: tabular-nums;
    }
    .time-val.none {
        color: var(--od-text-muted);
        font-weight: 400;
    }
    .time-unit {
        font-size: .7rem;
        font-weight: 600;
        color: var(--od-gold-dim);
        letter-spacing: .02em;
    }

    /* ── Total footer row ── */
    .od-total-tfoot {
        border-top: 2px solid var(--od-border);
        background: var(--od-bg-tfoot);
    }
    .od-total-label {
        font-size: .68rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: var(--od-gold-label);
        text-align: right;
        padding: .75rem 1rem;
    }
    .od-total-td {
        padding: .65rem 1rem;
        text-align: right;
    }
    .od-total-pill-fee {
        display: inline-block;
        font-size: .84rem;
        font-weight: 700;
        color: var(--od-fee-color);
        background: var(--od-fee-bg);
        border: 1.5px solid var(--od-fee-border);
        padding: .22rem .9rem;
        border-radius: .4rem;
        font-variant-numeric: tabular-nums;
        white-space: nowrap;
    }
    .od-total-pill-time {
        display: inline-flex;
        align-items: baseline;
        gap: .2rem;
        font-size: .84rem;
        font-weight: 700;
        color: var(--od-time-color);
        background: var(--od-time-bg);
        border: 1.5px solid var(--od-time-border);
        padding: .22rem .9rem;
        border-radius: .4rem;
        font-variant-numeric: tabular-nums;
        white-space: nowrap;
    }
    .od-total-pill-fee.empty,
    .od-total-pill-time.empty {
        color: var(--od-text-muted);
        background: transparent;
        border-color: var(--od-border-light);
        font-weight: 400;
    }

    /* ── Empty state ── */
    .od-empty-svc {
        padding: 2.5rem 1.25rem;
        text-align: center;
        background: var(--od-bg-empty);
    }
    .od-empty-svc p.title {
        font-size: .9rem;
        font-weight: 700;
        color: var(--od-gold-dim);
        margin-bottom: .35rem;
    }
    .od-empty-svc p.sub {
        font-size: .8rem;
        color: var(--od-text-muted);
    }
    .od-empty-svc svg {
        opacity: .25;
        color: var(--od-gold-dim);
        margin: 0 auto .75rem;
        display: block;
    }

    /* ── No services empty ── */
    .od-no-services {
        border: 2px dashed var(--od-border);
        border-radius: var(--od-radius);
        background: var(--od-bg-card);
        padding: 4rem 2rem;
        text-align: center;
    }
    .od-no-services .icon-wrap {
        background: var(--od-bg-section-hd);
        border-radius: 9999px;
        padding: 1rem;
        display: inline-flex;
        margin-bottom: 1rem;
        border: 1px solid var(--od-border);
    }
    .od-no-services svg { color: var(--od-gold-dim); opacity: .5; }
    .od-no-services p.title {
        font-size: .95rem;
        font-weight: 700;
        color: var(--od-gold-dim);
    }
    .od-no-services p.sub {
        font-size: .82rem;
        color: var(--od-text-muted);
        margin-top: .3rem;
    }

    .client-step-cell {
        font-weight: 700;
        color: var(--od-text-primary) !important;
        font-size: .84rem;
        line-height: 1.45;
    }
    /* ── Person responsible ── */
    .person-cell {
        color: var(--od-text-secondary);
        font-size: .8rem;
    }

    /* ── Light mode section-head icon tint ── */
    .od-section-head svg {
        color: var(--od-gold-dim);
        opacity: .8;
        flex-shrink: 0;
    }

    /* ── Responsive ── */
    @media (max-width: 768px) {
        .od-info-row { grid-template-columns: 1fr 1fr; }
        .od-info-cell:nth-child(2) { border-right: none; }
    }
    @media (max-width: 480px) {
        .od-info-row { grid-template-columns: 1fr; }
        .od-info-cell { border-right: none !important; border-bottom: 1px solid var(--od-border-light); }
    }
</style>

<div class="space-y-6">
    @if($services->isEmpty())
        <div class="od-no-services">
            <div class="icon-wrap">
                <x-heroicon-o-briefcase class="h-10 w-10" />
            </div>
            <p class="title">No Services Registered</p>
            <p class="sub">Add services to this office to see them here.</p>
        </div>
    @else
        @foreach($services as $idx => $service)
            @php
                /* ── Totals ── */
                $totalFeeCents = 0;
                $hasFee        = false;
                $totalMins     = 0;
                $hasTime       = false;

                foreach (($service->details ?? collect()) as $detail) {
                    $actions = is_array($detail->agency_actions)
                        ? $detail->agency_actions
                        : json_decode($detail->agency_actions ?? '[]', true);

                    foreach (($actions ?: []) as $act) {
                        if (!is_array($act)) continue;

                        /* fee */
                        $rawFee     = trim($act['fee'] ?? '');
                        $numericFee = preg_replace('/[^\d.]/', '', $rawFee);
                        if (is_numeric($numericFee) && $numericFee > 0) {
                            $totalFeeCents += (float) $numericFee;
                            $hasFee = true;
                        }

                        /* time */
                        $rawTime = $act['processing_time'] ?? $act['time'] ?? null;
                        $unit    = strtolower($act['processing_time_unit'] ?? 'minutes');
                        if ($rawTime && is_numeric($rawTime)) {
                            $hasTime = true;
                            $mins = match($unit) {
                                'hours', 'hour', 'hrs', 'hr' => (float)$rawTime * 60,
                                'days', 'day'                => (float)$rawTime * 1440,
                                default                      => (float)$rawTime,
                            };
                            $totalMins += $mins;
                        } elseif ($rawTime) {
                            $hasTime = true;
                            preg_match('/(\d+)/', $rawTime, $m);
                            if (!empty($m[1])) $totalMins += (int)$m[1];
                        }
                    }
                }

                /* format total time */
                $totalTimeDisplay = null;
                if ($hasTime && $totalMins > 0) {
                    $td = (int) $totalMins;
                    $d  = floor($td / 1440); $td -= $d * 1440;
                    $h  = floor($td / 60);   $m   = $td % 60;
                    $parts = [];
                    if ($d > 0) $parts[] = $d . ($d === 1 ? ' day'  : ' days');
                    if ($h > 0) $parts[] = $h . ($h === 1 ? ' hr'   : ' hrs');
                    if ($m > 0) $parts[] = $m . ($m === 1 ? ' min'  : ' mins');
                    $totalTimeDisplay = implode(' ', $parts);
                }

                $totalFeeDisplay = $hasFee ? '₱' . number_format($totalFeeCents, 2) : null;
            @endphp

            <div class="od-service-block">

                {{-- ── Header ── --}}
                <div class="od-service-header">
                    <span class="od-service-num">Service {{ str_pad($idx + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="od-service-name">{{ $service->service_name }}</span>
                </div>

                {{-- ── Info row ── --}}
                <div class="od-info-row">
                    <div class="od-info-cell">
                        <span class="od-info-label">Description</span>
                        <span class="od-info-value">{{ $service->service_description ?: '—' }}</span>
                    </div>
                    <div class="od-info-cell">
                        <span class="od-info-label">Classification</span>
                        <span class="od-info-value">{{ $service->classification ?: '—' }}</span>
                    </div>
                    <div class="od-info-cell">
                        <span class="od-info-label">Type</span>
                        <div style="margin-top:.1rem;">
                            @if($service->service_type)
                                @foreach((array) $service->service_type as $type)
                                    <span class="stype-badge">{{ $type }}</span>
                                @endforeach
                            @else
                                <span class="od-info-value">—</span>
                            @endif
                        </div>
                    </div>
                    <div class="od-info-cell">
                        <span class="od-info-label">Who May Avail</span>
                        <span class="od-info-value">{{ $service->who_may_avail ?: '—' }}</span>
                    </div>
                </div>

                {{-- ── Requirements ── --}}
                @if($service->requirements->isNotEmpty())
                    <div class="od-section-head">
                        <x-heroicon-o-document-text class="h-4 w-4" />
                        <span class="od-section-title">Requirements</span>
                        <span class="od-section-count">{{ $service->requirements->count() }}</span>
                    </div>
                    <table class="req-table">
                        <thead>
                            <tr>
                                <th style="width:2.5rem;">#</th>
                                <th>Checklist of Requirements</th>
                                <th style="width:30%;">Where to Secure</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service->requirements as $ri => $req)
                                <tr>
                                    <td><span class="req-num">{{ $ri + 1 }}</span></td>
                                    <td>
                                        {{ $req->description }}
                                        @if($req->is_other)
                                            <span class="other-pill">Other</span>
                                        @endif
                                    </td>
                                    <td>{{ $req->where_to_secure ?: '—' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                {{-- ── Client Steps & Agency Actions ── --}}
                @if($service->details->isNotEmpty())
                    <div class="od-section-head">
                        <x-heroicon-o-clock class="h-4 w-4" />
                        <span class="od-section-title">Client Steps &amp; Agency Actions</span>
                    </div>

                    <div class="steps-wrap">
                        <table class="steps-table">
                            <thead>
                                <tr>
                                    <th style="width:2.5rem;">#</th>
                                    <th style="width:22%;">Client Step</th>
                                    <th>Agency Action</th>
                                    <th class="col-fee" style="width:10%;">Fee</th>
                                    <th class="col-time" style="width:14%;">Processing Time</th>
                                    <th style="width:16%;">Person Responsible</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($service->details as $si => $detail)
                                    @php
                                        $actions = is_array($detail->agency_actions)
                                            ? $detail->agency_actions
                                            : json_decode($detail->agency_actions ?? '[]', true);
                                        $actions = array_values($actions ?: []);
                                        $rowspan = max(count($actions), 1);
                                    @endphp

                                    @if(empty($actions))
                                        <tr>
                                            <td><span class="step-num">{{ $si + 1 }}</span></td>
                                            <td class="client-step-cell">{{ $detail->client_step }}</td>
                                            <td style="color:var(--od-text-muted);font-style:italic;font-size:.8rem;">—</td>
                                            <td class="td-fee"><span class="fee-val none">—</span></td>
                                            <td class="td-time"><span class="time-val none">—</span></td>
                                            <td class="person-cell">—</td>
                                        </tr>
                                    @else
                                        @foreach($actions as $ai => $act)
                                            @php
                                                $actData    = is_array($act) ? $act : [];
                                                $actionText = is_array($act)
                                                    ? ($act['action'] ?? $act['description'] ?? $act['text'] ?? json_encode($act))
                                                    : $act;

                                                /* fee */
                                                $rawFee    = trim($actData['fee'] ?? '');
                                                $numFee    = preg_replace('/[^\d.]/', '', $rawFee);
                                                $feeEmpty  = !is_numeric($numFee) || (float)$numFee <= 0;
                                                $feeFormatted = !$feeEmpty ? '₱' . number_format((float)$numFee, 2) : null;

                                                /* time */
                                                $rawTime   = $actData['processing_time'] ?? $actData['time'] ?? null;
                                                $timeUnit  = strtolower($actData['processing_time_unit'] ?? '');
                                                $timeEmpty = !$rawTime;

                                                /* unit label */
                                                $unitLabel = match($timeUnit) {
                                                    'hours','hour','hrs','hr'           => 'hrs',
                                                    'days','day'                        => 'days',
                                                    'months','month'                    => 'mos',
                                                    'minutes','minute','mins','min'     => 'mins',
                                                    default => $rawTime
                                                        ? (preg_match('/hour|hr/i',$rawTime)  ? 'hrs'
                                                          :(preg_match('/day/i',$rawTime)      ? 'days'
                                                          :(preg_match('/month/i',$rawTime)    ? 'mos'
                                                          : 'mins')))
                                                        : 'mins',
                                                };

                                                /* numeric part of time */
                                                $timeNum = is_numeric($rawTime)
                                                    ? $rawTime
                                                    : (preg_match('/(\d+(\.\d+)?)/', $rawTime ?? '', $tm) ? $tm[1] : $rawTime);

                                                /* person */
                                                $person = $actData['person_responsible'] ?? $actData['person'] ?? null;
                                            @endphp

                                            <tr>
                                                @if($ai === 0)
                                                    <td rowspan="{{ $rowspan }}" style="vertical-align:top;padding-top:.75rem;">
                                                        <span class="step-num">{{ $si + 1 }}</span>
                                                    </td>
                                                    <td rowspan="{{ $rowspan }}" class="client-step-cell" style="vertical-align:top;padding-top:.75rem;">
                                                        {{ $detail->client_step }}
                                                    </td>
                                                @endif

                                                <td>{{ ($si + 1) . '.' . ($ai + 1) . ' ' . $actionText }}</td>

                                                <td class="td-fee">
                                                    @if(!$feeEmpty)
                                                        <span class="fee-val">{{ $feeFormatted }}</span>
                                                    @else
                                                        <span class="fee-val none">—</span>
                                                    @endif
                                                </td>

                                                <td class="td-time">
                                                    @if(!$timeEmpty)
                                                        <span class="time-wrap">
                                                            <span class="time-val">{{ $timeNum }}</span>
                                                            <span class="time-unit">{{ $unitLabel }}</span>
                                                        </span>
                                                    @else
                                                        <span class="time-val none">—</span>
                                                    @endif
                                                </td>

                                                <td class="person-cell">{{ $person ?: '—' }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            </tbody>

                            {{-- Total footer --}}
                            <tfoot class="od-total-tfoot">
                                <tr>
                                    <td colspan="3" class="od-total-label">Total</td>
                                    <td class="od-total-td">
                                        @if($totalFeeDisplay)
                                            <span class="od-total-pill-fee">{{ $totalFeeDisplay }}</span>
                                        @else
                                            <span class="od-total-pill-fee empty">—</span>
                                        @endif
                                    </td>
                                    <td class="od-total-td">
                                        @if($totalTimeDisplay)
                                            <span class="od-total-pill-time">{{ $totalTimeDisplay }}</span>
                                        @else
                                            <span class="od-total-pill-time empty">—</span>
                                        @endif
                                    </td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                @endif

                {{-- Empty state --}}
                @if($service->requirements->isEmpty() && $service->details->isEmpty())
                    <div class="od-empty-svc">
                        <x-heroicon-o-document-text class="h-8 w-8" />
                        <p class="title">No requirements or steps added yet.</p>
                        <p class="sub">Add requirements and process steps for this service to see them here.</p>
                    </div>
                @endif

            </div>
        @endforeach
    @endif
</div>

</x-filament-panels::page>