<?php

namespace Remco\InnoStyles;

use Illuminate\Support\ServiceProvider;
use Remco\InnoStyles\Console\Commands\PublishCommand;

class InnoStylesServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Load views directly without publishing
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'inno-styles');

        // Automatically copy assets to public directory
        $this->publishAssets();
    }

    protected function publishAssets()
    {
        // Get the correct public path
        $targetCss = public_path('css/app.css');
        $targetJs = public_path('js/app.js');

        // Create the directories if they do not exist
        if (!file_exists($targetCss)) {
            mkdir(dirname($targetCss), 0755, true); // Create the parent directory
        }
        if (!file_exists($targetJs)) {
            mkdir(dirname($targetJs), 0755, true); // Create the parent directory
        }

        // Copy the package assets into the public directory
        copy(__DIR__ . '/../resources/css/app.css', $targetCss);
        copy(__DIR__ . '/../resources/js/app.js', $targetJs);

        $this->register();
    }

    public function register()
    {
        $this->commands([
            PublishCommand::class,
        ]);
    }
}
