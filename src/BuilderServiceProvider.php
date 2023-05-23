<?php

namespace FireAZ\Builder;

use FireAZ\Builder\Facades\Menu;
use Illuminate\Support\ServiceProvider;
use FireAZ\LaravelPackage\ServicePackage;
use FireAZ\LaravelPackage\WithServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class BuilderServiceProvider extends ServiceProvider
{
    use WithServiceProvider;

    public function configurePackage(ServicePackage $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('builder')
            ->hasConfigFile()
            ->hasViews()
            ->hasHelpers()
            ->hasAssets()
            ->hasTranslations()
            ->runsMigrations()
            ->RouteWeb()
            ->runsSeeds();
    }
    public function packageBooted()
    {
        if (Request::isMethod('get')) {
            // Only Get Request
            Route::matched(function ($route) {
                Menu::DoRegister();
            });
        }
    }
}
