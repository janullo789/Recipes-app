<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Shop;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Shop $shop
     * @return bool
     */
    public function view(User $user, Shop $shop): bool
    {
        // Update $user authorization to view $shop here.
        return true;
    }

    /**
     * @param User $user
     * @param Shop $shop
     * @return bool
     */
    public function create(User $user, Shop $shop): bool
    {
        // Update $user authorization to create $shop here.
        return true;
    }

    /**
     * @param User $user
     * @param Shop $shop
     * @return bool
     */
    public function update(User $user, Shop $shop): bool
    {
        // Update $user authorization to update $shop here.
        return true;
    }

    /**
     * @param User $user
     * @param Shop $shop
     * @return bool
     */
    public function delete(User $user, Shop $shop): bool
    {
        // Update $user authorization to delete $shop here.
        return true;
    }
}
