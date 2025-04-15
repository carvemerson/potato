<?php

namespace Carvemerson\Potato\Providers;

use Illuminate\Support\ServiceProvider;

class PotatoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/potato.php', 'potato'
        );

        $this->registerRoutes();
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../../config/potato.php' => config_path('potato.php'),
        ], 'potato-config');
    }

    public function registerRoutes(): void
    {
        require __DIR__.'/../../routes/potato.php';
    }
}
