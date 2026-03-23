<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    protected $fillable = [     
        'service_id',
        'client_step',
        'agency_action',
        'fees',
        'processing_time',
        'person_responsible',
     
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the charter that owns this detail
     */
    public function charter(): BelongsTo
    {
        return $this->belongsTo(Charter::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
}