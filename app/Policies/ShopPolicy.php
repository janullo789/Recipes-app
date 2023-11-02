<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Shop;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Shop $shop)
    {
        // Update $user authorization to view $shop here.
        return true;
    }

    public function create(User $user, Shop $shop)
    {
        // Update $user authorization to create $shop here.
        return true;
    }

    public function update(User $user, Shop $shop)
    {
        // Update $user authorization to update $shop here.
        return true;
    }

    public function delete(User $user, Shop $shop)
    {
        // Update $user authorization to delete $shop here.
        return true;
    }
}
