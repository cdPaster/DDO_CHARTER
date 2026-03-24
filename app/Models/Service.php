<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
protected $fillable = [
        'office_id',
        'service_name',
        'service_description',
        'service_type',
        'classification',
        'who_may_avail',
        'fees_required',
        'processing_time',
    ];

    /**
     * Get the office that owns this service
     */
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

public function details()
{
    return $this->hasMany(\App\Models\Detail::class);
}

    /**
     * Get the requirements for this service
     */
    public function requirements(): HasMany
    {
        return $this->hasMany(Requirement::class);
    }

    /**
     * Get the processing steps for this service
     */
    // public function steps(): HasMany
    // {
    //     return $this->hasMany(ServiceStep::class);
    // }
}