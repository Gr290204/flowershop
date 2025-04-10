<?php

namespace App\Providers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-order', function (User $user, Order $order) {
        return $user->is_admin OR $order->order_price < 1000;

    });
        Gate::define('edit-order', function (User $user, Order $order) {
            return $user->is_admin OR $order->order_price < 1000;

        });

    }
}
