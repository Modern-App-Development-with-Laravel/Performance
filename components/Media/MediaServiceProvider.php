<?php

namespace Italofantone\Media;

use Illuminate\Support\ServiceProvider;
use Italofantone\Media\Commands\GenerateThumbnailsCommand;

class MediaServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateThumbnailsCommand::class,
            ]);
        }
    }
}