<?php

namespace Skydiver\BladeIconsRemix;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

final class BladeIconsRemixServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('remix', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'remix',
            ]);
        });
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-icons-remix'),
            ], 'blade-icons-remix');
        }
    }
}
