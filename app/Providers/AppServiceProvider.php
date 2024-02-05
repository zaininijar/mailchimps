<?php

namespace App\Providers;

use App\View\Components\AppLayout;
use App\View\Components\Footer;
use App\View\Components\Header;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('app-layout', AppLayout::class);
        Blade::component('header', Header::class);
        Blade::component('footer', Footer::class);
    }
}
