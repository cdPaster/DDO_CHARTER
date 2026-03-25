<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Service;
use App\Models\Charter;

class Requirement extends Model
{
    protected $fillable = [
        'description',
        'where_to_secure',
        'created_at',
        'updated_at',
        'charter_id',
        'is_other',
        'service_id',
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the charter that owns this requirement
     */
    public function charter(): BelongsTo
    {
        return $this->belongsTo(Charter::class);
    }   

    /**
     * Get the service that owns this requirement
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
    
    
}
