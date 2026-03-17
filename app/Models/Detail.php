<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    protected $fillable = [
        'client_step',
        'agency_action',
        'fees',
        'processing_time',
        'person_responsible',
        'created_at',
        'updated_at',
        'charter_id',
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the charter that owns this detail
     */
    public function charter(): BelongsTo
    {
        return $this->belongsTo(Charter::class);
    }
}