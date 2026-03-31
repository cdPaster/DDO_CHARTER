<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    protected $fillable = [
        'name',
        'guard_name',
    ];

    protected static function booted()
    {
        static::creating(function ($role) {
            if (! $role->guard_name) {
                $role->guard_name = 'web';
            }
        });
    }
}