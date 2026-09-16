<?php

namespace App\Policies;

use App\Models\ListItem;
use App\Models\User;

class ListItemPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin')
            || $user->hasPermissionTo('manage_lists');
    }

    public function update(User $user, ListItem $list): bool
    {
        return $user->id === $list->user_id
            || $user->hasRole('admin')
            || $user->hasPermissionTo('manage_lists');
    }

    public function delete(User $user, ListItem $list): bool
    {
        return $user->id === $list->user_id
            || $user->hasRole('admin')
            || $user->hasPermissionTo('manage_lists');
    }
}