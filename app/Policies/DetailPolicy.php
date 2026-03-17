<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\Detail;
use Illuminate\Auth\Access\HandlesAuthorization;

class DetailPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:Detail');
    }

    public function view(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('View:Detail');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:Detail');
    }

    public function update(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('Update:Detail');
    }

    public function delete(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('Delete:Detail');
    }

    public function restore(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('Restore:Detail');
    }

    public function forceDelete(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('ForceDelete:Detail');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:Detail');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:Detail');
    }

    public function replicate(AuthUser $authUser, Detail $detail): bool
    {
        return $authUser->can('Replicate:Detail');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:Detail');
    }

}