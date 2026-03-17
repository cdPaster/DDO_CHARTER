<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Requirement extends Model
{
    protected $fillable = [
        'description',
        'where_to_secure',
        'created_at',
        'updated_at',
        'charter_id',
        'is_other',
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the charter that owns this requirement
     */
    public function charter(): BelongsTo
    {
        return $this->belongsTo(Charter::class);
    }
}