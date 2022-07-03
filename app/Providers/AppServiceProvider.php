<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     //
    // }

    public function boot(): void
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                'Locations',
                'Blog',
                'Settings',
            ]);
        });
    }


}
