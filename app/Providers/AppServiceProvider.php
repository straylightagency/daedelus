<?php
namespace App\Providers;

use Daedelus\Theme\Pages;
use Daedelus\Theme\Templates;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
		Pages::path( resource_path('views/pages' ) );
		Templates::path( resource_path('views/templates' ) );
    }
}
