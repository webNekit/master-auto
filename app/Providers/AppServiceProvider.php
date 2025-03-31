<?php

namespace App\Providers;

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
        $this->loadViewsFrom(base_path('resources/views/website/main'), 'main');
        $this->loadViewsFrom(base_path('resources/views/website/article'), 'article');
        $this->loadViewsFrom(base_path('resources/views/website/tutorial'), 'tutorial');
    }
}
