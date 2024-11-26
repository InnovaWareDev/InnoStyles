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

        // Automatically copy assets to the public directory
        $this->publishAssets();
    }

    protected function publishAssets()
    {
        // Make sure to use the helper only after Laravel boot
        $targetCss = $this->getPublicPath('css/inno-styles');
        $targetJs = $this->getPublicPath('js/inno-styles');

        if (!file_exists($targetCss)) {
            mkdir($targetCss, 0755, true);
        }
        if (!file_exists($targetJs)) {
            mkdir($targetJs, 0755, true);
        }

        // Copy the resources to the public path
        copy(__DIR__ . '/../resources/css/style.css', $targetCss . '/style.css');
        copy(__DIR__ . '/../resources/js/script.js', $targetJs . '/script.js');
    }

    // Helper function to access public_path dynamically
    protected function getPublicPath($path)
    {
        // Use Laravel's app() helper to get public path
        if (function_exists('public_path')) {
            return public_path($path);
        }

        // Fallback for non-Laravel environments
        return app()->basePath('public/' . $path);
    }

    public function register()
    {
        $this->commands([
            PublishCommand::class,
        ]);
    }
}

