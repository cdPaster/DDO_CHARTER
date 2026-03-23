<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Charter extends Model
{
    protected $fillable = [
        'office_id',
        'users_id',
        'description',
        'version',
        'classification',
        'type',
        'why_may_read',
        'created_at',
        'updated_at',
    ];


    protected $dates = ['created_at', 'updated_at'];

    /**
     * Get the office that owns this charter
     */
    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }

    /**
     * Get the user associated with this charter
     */
    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'users_id');
    // }

    /**
     * Get all requirements for this charter
     */
    public function requirements(): HasMany
    {
        return $this->hasMany(Requirement::class);
    }

    /**
     * Get all details for this charter
     */
    public function details(): HasMany
    {
        return $this->hasMany(Detail::class);
    }
}