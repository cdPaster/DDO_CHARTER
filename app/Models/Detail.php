<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    protected $fillable = [
        'service_id',
        'client_step',
        'agency_actions', // 👈 fixed: was agency_action
    ];

    protected $casts = [
        'agency_actions' => 'array', // 👈 required for repeater JSON
    ];

    public function charter(): BelongsTo
    {
        return $this->belongsTo(Charter::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
}