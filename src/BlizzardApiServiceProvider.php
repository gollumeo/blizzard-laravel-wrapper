<?php

namespace Gollumeo\BlizzardApiWrapper;

use Illuminate\Support\ServiceProvider;

class BlizzardApiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/blizzard-api.php' => config_path('blizzard-api.php'),
        ]);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blizzard-api.php', 'blizzard-api');
    }
}