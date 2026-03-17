<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    protected $fillable = ['name', 'abbreviation'];

    /**
     * Get all users associated with this office
     */
    // public function users(): HasMany
    // {
    //     return $this->hasMany(User::class);
    // }

    /**
     * Get all charters associated with this office
     */
    public function charters(): HasMany
    {
        return $this->hasMany(Charter::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}