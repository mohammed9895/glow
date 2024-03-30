<?php

namespace App\Providers;

use http\Client\Request;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Foundation\Vite;
use Illuminate\Support\HtmlString;
use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

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

        //Add custom tags (like `<meta>` & `<link>`)
        FilamentFabricator::pushMeta([
            new HtmlString('<link rel="manifest" href="/site.webmanifest" />'),
        ]);

        //Register scripts
        FilamentFabricator::registerScripts([
            'https://unpkg.com/browse/tippy.js@6.3.7/dist/tippy.esm.js', //external url
            'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
            mix('js/app.js'), //laravel-mix
            app(Vite::class)('resources/css/app.js'), //vite
            asset('js/app.js'), // asset from public folder
            asset('js/main.js'),
        ]);

        //Register styles
        FilamentFabricator::registerStyles([
            'https://unpkg.com/tippy.js@6/dist/tippy.css', //external url
            'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
            mix('css/app.css'), //laravel-mix
            app(Vite::class)('resources/css/app.css'), //vite
            asset('css/app.css'), // asset from public folder
        ]);

        FilamentFabricator::favicon(asset('favicon.ico'));
    }
}
