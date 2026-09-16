<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ListItem;
use App\Policies\ListItemPolicy;

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
        //
    }

    protected $policies = [
    ListItem::class => ListItemPolicy::class,
];
}




