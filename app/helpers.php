<?php

use App\Repositories\Contracts\CartRepositoryContract;

if (!function_exists('cart')) {
    function cart()
    {
        return app(CartRepositoryContract::class);
    }
}
